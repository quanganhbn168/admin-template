{{-- World map coloured by value (Tabler vector map).
     values: ['VN' => 7, 'US' => 5, ...] ISO country code => number. Higher = darker. --}}
@props(['values' => [], 'label' => null])

<div {{ $attributes->class(['vector-map']) }} data-vector-map data-bs-map="world" data-bs-label="{{ $label ?? __('World map') }}" data-bs-values='@json($values, JSON_HEX_APOS | JSON_HEX_AMP)'></div>
