{{-- Sortable column header. Click toggles asc/desc through the query string (works with DataTable). --}}
@props(['column', 'state'])
@php
    $active = $state['sort'] === $column;
    $next = $active && $state['dir'] === 'asc' ? 'desc' : 'asc';
    $icon = $active ? ($state['dir'] === 'asc' ? 'ti-chevron-up' : 'ti-chevron-down') : 'ti-selector';
@endphp

<th {{ $attributes }} @if ($active) aria-sort="{{ $state['dir'] === 'asc' ? 'ascending' : 'descending' }}" @endif>
    <a href="{{ request()->fullUrlWithQuery(['sort' => $column, 'dir' => $next, 'page' => null]) }}" class="text-reset text-decoration-none d-inline-flex align-items-center {{ $active ? 'fw-bold' : '' }}">
        {{ $slot }}<i class="ti {{ $icon }} ms-1 {{ $active ? '' : 'text-secondary' }}"></i>
    </a>
</th>
