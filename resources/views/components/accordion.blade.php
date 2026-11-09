{{-- <x-accordion> <x-accordion.item title="..." open> ... </x-accordion.item> </x-accordion> --}}
<div {{ $attributes->class(['accordion']) }}>{{ $slot }}</div>
