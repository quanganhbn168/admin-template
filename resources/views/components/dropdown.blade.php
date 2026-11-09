{{-- <x-dropdown label="Actions"> <x-dropdown.item href="...">Edit</x-dropdown.item> <x-dropdown.divider /> </x-dropdown> --}}
@props(['label', 'icon' => null, 'variant' => 'secondary', 'outline' => false, 'align' => 'start'])

<div class="dropdown d-inline-block">
    <button type="button" class="btn {{ $outline ? "btn-outline-{$variant}" : "btn-{$variant}" }} dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        @if ($icon)<i class="ti {{ $icon }} me-1"></i>@endif{{ $label }}
    </button>
    <div class="dropdown-menu dropdown-menu-{{ $align }}">{{ $slot }}</div>
</div>
