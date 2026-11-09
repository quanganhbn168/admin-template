{{-- Search box + page size for a DataTable list. state: DataTable::state(). Extra buttons go in the slot. --}}
@props(['state', 'placeholder' => null])

<form method="get" class="d-flex flex-wrap align-items-center gap-2 p-3 border-bottom" role="search">
    {{-- keep the current sort while searching --}}
    <input type="hidden" name="sort" value="{{ $state['sort'] }}">
    <input type="hidden" name="dir" value="{{ $state['dir'] }}">

    <div class="d-flex align-items-center text-secondary">
        {{ __('Show') }}
        <select name="per_page" class="form-select form-select-sm mx-2 w-auto" onchange="this.form.submit()" aria-label="{{ __('Rows per page') }}">
            @foreach (App\Support\DataTable::PER_PAGE_OPTIONS as $option)
                <option value="{{ $option }}" @selected($state['perPage'] === $option)>{{ $option }}</option>
            @endforeach
        </select>
        {{ __('rows') }}
    </div>

    <div class="ms-auto d-flex align-items-center gap-2">
        {{ $slot }}
        <div class="input-icon">
            <span class="input-icon-addon"><i class="ti ti-search"></i></span>
            <input type="search" name="search" value="{{ $state['search'] }}" class="form-control form-control-sm" placeholder="{{ $placeholder ?? __('Search...') }}" aria-label="{{ __('Search') }}">
        </div>
        @if ($state['search'] !== '')
            <a href="{{ request()->fullUrlWithQuery(['search' => null, 'page' => null]) }}" class="btn btn-sm btn-ghost-secondary" title="{{ __('Clear search') }}"><i class="ti ti-x"></i></a>
        @endif
    </div>
</form>
