{{-- Card with optional title / footer.
     gradient: true (default tint) or a Tabler gradient name, see GRADIENTS below. direction: start | end | bottom. animated: slowly moving gradient. --}}
@props(['title' => null, 'footer' => null, 'gradient' => false, 'direction' => null, 'animated' => false])
@php
    $names = ['azure', 'black', 'blue', 'cyan', 'danger', 'dark', 'disco', 'gold', 'gray', 'gray-dark', 'green', 'indigo', 'info', 'light', 'lime', 'love',
        'mellow', 'muted', 'ocean', 'orange', 'pink', 'primary', 'psychedelic', 'purple', 'rainbow', 'red', 'secondary', 'snow', 'success', 'sun', 'teal',
        'warning', 'white', 'yellow'];

    $classes = ['card'];
    if ($gradient) {
        $classes[] = 'card-gradient';
        if (is_string($gradient) && in_array($gradient, $names, true)) $classes[] = "card-gradient-{$gradient}";
        if (in_array($direction, ['start', 'end', 'bottom'], true)) $classes[] = "card-gradient-{$direction}";
        if ($animated) $classes[] = 'card-gradient-animated';
    }
@endphp

<div {{ $attributes->class($classes) }}>
    @if ($title)
        <div class="card-header"><h3 class="card-title">{{ $title }}</h3></div>
    @endif
    {{ $slot }}
    @if ($footer)
        <div class="card-footer">{{ $footer }}</div>
    @endif
</div>
