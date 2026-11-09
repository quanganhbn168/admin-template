@props(['text', 'placement' => 'top'])

<span data-bs-toggle="tooltip" data-bs-placement="{{ $placement }}" title="{{ $text }}" {{ $attributes }}>{{ $slot }}</span>
