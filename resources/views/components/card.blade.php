@props(['title' => null, 'footer' => null])

<div {{ $attributes->class(['card']) }}>
    @if ($title)
        <div class="card-header"><h3 class="card-title">{{ $title }}</h3></div>
    @endif
    {{ $slot }}
    @if ($footer)
        <div class="card-footer">{{ $footer }}</div>
    @endif
</div>
