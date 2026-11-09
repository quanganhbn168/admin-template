{{-- Put inside a card (needs a positioned parent). position: top | start | bottom, or false for the plain corner flag (null would fall back to the default). --}}
@props(['color' => 'red', 'position' => 'top'])

<div {{ $attributes->class(array_filter(['ribbon', $position ? "ribbon-{$position}" : null, "bg-{$color}"])) }}>{{ $slot }}</div>
