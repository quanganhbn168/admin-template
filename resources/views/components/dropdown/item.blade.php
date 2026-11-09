@props(['href' => '#', 'icon' => null, 'danger' => false])

<a href="{{ $href }}" {{ $attributes->class(['dropdown-item', 'text-danger' => $danger]) }}>
    @if ($icon)<i class="ti {{ $icon }} me-2"></i>@endif{{ $slot }}
</a>
