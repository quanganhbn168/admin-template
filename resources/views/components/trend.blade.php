{{-- Change indicator: green up arrow, red down arrow, muted dash when zero. --}}
@props(['value' => 0, 'suffix' => '%'])
@php
    $color = $value > 0 ? 'green' : ($value < 0 ? 'red' : 'muted');
    $icon = $value > 0 ? 'ti-arrow-up' : ($value < 0 ? 'ti-arrow-down' : 'ti-minus');
    $sr = $value > 0 ? __('Increased by') : ($value < 0 ? __('Decreased by') : __('No change'));
@endphp

<span {{ $attributes->class(['d-inline-flex', 'align-items-center', 'lh-1', "text-{$color}"]) }}>
    <span class="visually-hidden">{{ $sr }} </span>{{ $value }}{{ $suffix }}<i class="ti {{ $icon }} ms-1"></i>
</span>
