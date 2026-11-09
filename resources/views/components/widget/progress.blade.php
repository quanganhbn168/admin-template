{{-- Progress widget, e.g. conversion rate. percent: 0-100. --}}
@props(['label', 'value', 'percent', 'caption' => null, 'trend' => null, 'color' => 'primary'])

<div {{ $attributes->class(['card']) }}>
    <div class="card-body">
        <div class="subheader">{{ $label }}</div>
        <div class="h1 mb-3">{{ $value }}</div>
        <div class="d-flex mb-2">
            <div>{{ $caption }}</div>
            @if ($trend !== null)<div class="ms-auto"><x-trend :value="$trend" /></div>@endif
        </div>
        <x-progress :value="$percent" :color="$color" size="sm" />
    </div>
</div>
