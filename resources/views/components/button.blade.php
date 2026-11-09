@props(['variant' => 'primary', 'href' => null, 'icon' => null, 'size' => null, 'type' => 'button', 'outline' => false])
@php
    $class = array_filter(['btn', $outline ? "btn-outline-{$variant}" : "btn-{$variant}", $size ? "btn-{$size}" : null]);
@endphp
@if ($href)
    <a href="{{ $href }}" {{ $attributes->class($class) }}>@if ($icon)<i class="ti {{ $icon }} me-1"></i>@endif{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->class($class) }}>@if ($icon)<i class="ti {{ $icon }} me-1"></i>@endif{{ $slot }}</button>
@endif
