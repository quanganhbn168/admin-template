@props(['color' => 'blue', 'soft' => true])

<span {{ $attributes->class(['badge', $soft ? "bg-{$color}-lt" : "bg-{$color}"]) }}>{{ $slot }}</span>
