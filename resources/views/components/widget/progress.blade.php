{{-- Progress widget, e.g. conversion rate. percent: 0-100. periods: optional dropdown labels. --}}
@props(['label', 'value', 'percent', 'caption' => null, 'trend' => null, 'color' => 'primary', 'periods' => null])

<div {{ $attributes->class(['card']) }}>
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div class="subheader">{{ $label }}</div>
            @if ($periods)<div class="ms-auto lh-1"><x-widget.periods :periods="$periods" /></div>@endif
        </div>
        <div class="h1 mb-3">{{ $value }}</div>
        <div class="d-flex mb-2">
            <div>{{ $caption }}</div>
            @if ($trend !== null)<div class="ms-auto"><x-trend :value="$trend" /></div>@endif
        </div>
        <x-progress :value="$percent" :color="$color" size="sm" />
    </div>
</div>
