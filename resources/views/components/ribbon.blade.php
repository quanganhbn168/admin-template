{{-- Put inside a card (needs a positioned parent). position: top | start | bottom --}}
@props(['color' => 'red', 'position' => 'top'])

<div {{ $attributes->class(['ribbon', "ribbon-{$position}", "bg-{$color}"]) }}>{{ $slot }}</div>
