<?php

namespace Tests\Feature;

use App\Models\User;
use App\Support\DataTable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DataTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): User
    {
        $user = User::factory()->create(['name' => 'Zed Admin', 'email' => 'zed@example.com']);
        $user->is_super_admin = true;
        $user->save();

        return $user;
    }

    private function table(array $query): DataTable
    {
        return DataTable::make(User::query(), \Illuminate\Http\Request::create('/', 'GET', $query))
            ->search(['name', 'email'])
            ->sortable(['name', 'email'], default: 'name');
    }

    // --- DataTable ---------------------------------------------------------------

    public function test_search_filters_by_the_whitelisted_columns(): void
    {
        User::factory()->create(['name' => 'Alice Nguyen', 'email' => 'alice@example.com']);
        User::factory()->create(['name' => 'Bob Tran', 'email' => 'bob@other.test']);

        $this->assertSame(['Alice Nguyen'], $this->table(['search' => 'alice'])->paginate()->pluck('name')->all());
        $this->assertSame(['Bob Tran'], $this->table(['search' => 'other.test'])->paginate()->pluck('name')->all());
    }

    public function test_search_treats_percent_and_underscore_literally(): void
    {
        User::factory()->create(['name' => 'Plain Name']);

        $this->assertCount(0, $this->table(['search' => '%'])->paginate());
        $this->assertCount(0, $this->table(['search' => '_'])->paginate());
    }

    public function test_sorting_asc_desc_and_unknown_columns(): void
    {
        User::factory()->create(['name' => 'Anna']);
        User::factory()->create(['name' => 'Zoe']);

        $this->assertSame('Anna', $this->table(['sort' => 'name', 'dir' => 'asc'])->paginate()->first()->name);
        $this->assertSame('Zoe', $this->table(['sort' => 'name', 'dir' => 'desc'])->paginate()->first()->name);

        // not whitelisted (password, or an injection attempt) falls back to the default
        $table = $this->table(['sort' => 'password; DROP TABLE users', 'dir' => 'desc']);
        $this->assertSame('name', $table->sort());
        $this->assertSame('asc', $table->dir());
        $this->assertGreaterThan(0, $table->paginate()->total());
    }

    public function test_page_size_must_be_one_of_the_allowed_options(): void
    {
        $this->assertSame(25, $this->table(['per_page' => 25])->perPage());
        $this->assertSame(15, $this->table(['per_page' => 999999])->perPage());
        $this->assertSame(15, $this->table(['per_page' => 'abc'])->perPage());
    }

    // --- users list --------------------------------------------------------------

    public function test_users_list_searches_sorts_and_keeps_the_query_in_page_links(): void
    {
        $this->actingAs($this->admin());
        User::factory()->count(30)->create(['name' => 'Member Person']);
        User::factory()->create(['name' => 'Outsider Human']);

        $html = $this->get('/admin/users?search=member&sort=email&dir=desc&per_page=10')->assertOk()
            ->assertSee('aria-sort="descending"', false)
            ->assertSee('Member Person')
            ->assertDontSee('Outsider Human')
            ->assertSee('Hiển thị 1 đến 10 trong 30 mục')
            ->assertDontSee('kết quả') // Laravel's own "Showing x to y of z results" text must not be doubled up
            ->getContent();

        $this->assertStringContainsString('search=member', $html);
        $this->assertStringContainsString('page=2', $html);
    }

    public function test_users_list_empty_state_names_the_search_term(): void
    {
        $this->actingAs($this->admin());

        $this->get('/admin/users?search=zzzz-nothing')->assertOk()->assertSee('zzzz-nothing');
    }

    // --- uploads -----------------------------------------------------------------

    public function test_uploads_require_login(): void
    {
        $this->postJson('/admin/uploads', ['file' => UploadedFile::fake()->image('a.png')])->assertUnauthorized();
    }

    public function test_an_image_can_be_uploaded(): void
    {
        Storage::fake('public');
        $this->actingAs(User::factory()->create());

        $response = $this->postJson('/admin/uploads', ['file' => UploadedFile::fake()->image('photo.png')])
            ->assertCreated()
            ->assertJsonStructure(['name', 'path', 'url', 'size']);

        Storage::disk('public')->assertExists($response->json('path'));
        $this->assertSame('photo.png', $response->json('name'));
    }

    public function test_dangerous_and_oversized_uploads_are_rejected(): void
    {
        Storage::fake('public');
        $this->actingAs(User::factory()->create());

        $this->postJson('/admin/uploads', ['file' => UploadedFile::fake()->create('shell.php', 1)])->assertUnprocessable()->assertJsonValidationErrors('file');
        $this->postJson('/admin/uploads', ['file' => UploadedFile::fake()->create('big.pdf', 6000, 'application/pdf')])->assertUnprocessable();
        $this->assertSame([], Storage::disk('public')->allFiles());
    }

    // --- catalog -----------------------------------------------------------------

    public function test_advanced_catalog_loads_its_libraries(): void
    {
        $this->get('/admin/components/advanced')->assertNotFound();

        $this->app->detectEnvironment(fn () => 'local');

        $html = $this->get('/admin/components/advanced')->assertOk()
            ->assertSee('data-calendar', false)
            ->assertSee('data-editor', false)
            ->assertSee('data-dropzone', false)
            ->assertSee('csrf-token', false)
            ->getContent();

        foreach (['fullcalendar', 'hugerte', 'dropzone'] as $lib) {
            $this->assertStringContainsString("/tabler/libs/{$lib}/", $html, "{$lib} must be loaded");
        }
    }
}
