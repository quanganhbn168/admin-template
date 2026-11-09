<?php

namespace App\Support;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * Server-side search / sort / pagination for admin lists, driven by the query string
 * (?search=&sort=&dir=&per_page=&page=). Only whitelisted columns can be searched or sorted.
 *
 *   $table = DataTable::make(User::query())
 *       ->search(['name', 'email'])
 *       ->sortable(['name', 'email', 'created_at'], default: 'name');
 *   return view('admin.users.index', ['users' => $table->paginate(), 'table' => $table->state()]);
 */
class DataTable
{
    public const PER_PAGE_OPTIONS = [10, 15, 25, 50, 100];

    private array $searchable = [];

    private array $sortable = [];

    private string $defaultSort = 'id';

    private string $defaultDir = 'asc';

    public function __construct(private Builder $query, private Request $request) {}

    public static function make(Builder $query, ?Request $request = null): static
    {
        return new static($query, $request ?? request());
    }

    /** @param list<string> $columns */
    public function search(array $columns): static
    {
        $this->searchable = $columns;

        return $this;
    }

    /** @param list<string> $columns */
    public function sortable(array $columns, string $default = 'id', string $dir = 'asc'): static
    {
        $this->sortable = $columns;
        $this->defaultSort = $default;
        $this->defaultDir = $dir === 'desc' ? 'desc' : 'asc';

        return $this;
    }

    public function term(): string
    {
        return trim((string) $this->request->query('search', ''));
    }

    public function sort(): string
    {
        $sort = (string) $this->request->query('sort', $this->defaultSort);

        return in_array($sort, $this->sortable, true) ? $sort : $this->defaultSort;
    }

    public function dir(): string
    {
        if (! $this->request->query->has('sort') || ! in_array((string) $this->request->query('sort'), $this->sortable, true)) {
            return $this->defaultDir;
        }

        return $this->request->query('dir') === 'desc' ? 'desc' : 'asc';
    }

    public function perPage(int $default = 15): int
    {
        $perPage = (int) $this->request->query('per_page', $default);

        return in_array($perPage, self::PER_PAGE_OPTIONS, true) ? $perPage : $default;
    }

    public function paginate(int $default = 15): LengthAwarePaginator
    {
        if ($this->term() !== '' && $this->searchable) {
            $like = '%' . addcslashes($this->term(), '%_\\') . '%';

            $this->query->where(function (Builder $query) use ($like) {
                foreach ($this->searchable as $column) {
                    $query->orWhere($column, 'like', $like);
                }
            });
        }

        return $this->query
            ->orderBy($this->sort(), $this->dir())
            ->orderBy($this->query->getModel()->getQualifiedKeyName())
            ->paginate($this->perPage($default))
            ->withQueryString();
    }

    /** @return array{search: string, sort: string, dir: string, perPage: int} */
    public function state(int $default = 15): array
    {
        return ['search' => $this->term(), 'sort' => $this->sort(), 'dir' => $this->dir(), 'perPage' => $this->perPage($default)];
    }
}
