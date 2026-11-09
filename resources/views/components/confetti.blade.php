{{-- Button that pours confetti (Tabler Confetti). colors: comma separated CSS colours, default = Tabler palette.
     To celebrate after a request, redirect with ->with('celebrate', true) (see <x-flash>). --}}
@props(['count' => null, 'duration' => null, 'speed' => null, 'colors' => null, 'variant' => 'secondary'])

<button type="button" data-bs-toggle="confetti"
    @if ($count) data-bs-count="{{ $count }}" @endif
    @if ($duration) data-bs-duration="{{ $duration }}" @endif
    @if ($speed) data-bs-speed="{{ $speed }}" @endif
    @if ($colors) data-bs-colors="{{ $colors }}" @endif
    {{ $attributes->class(['btn', "btn-{$variant}"]) }}>
    <i class="ti ti-confetti me-1"></i>{{ $slot->isEmpty() ? __('Celebrate') : $slot }}
</button>
