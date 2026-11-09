{{-- Loading skeleton: <x-placeholder :lines="3" /> --}}
@props(['lines' => 3])

<div {{ $attributes->class(['placeholder-glow']) }} aria-hidden="true">
    @for ($i = 0; $i < $lines; $i++)
        <span class="placeholder col-{{ $i === $lines - 1 ? 6 : 12 }} d-block mb-2"></span>
    @endfor
</div>
