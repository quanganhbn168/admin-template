{{-- Segmented progress with a legend, e.g. storage usage.
     segments: [['label' => 'Regular', 'value' => 44, 'color' => 'primary', 'text' => '3520MB'], ...] (value = % of the bar)
     Add a final segment with 'color' => 'muted' (no bar) for free space if you want it in the legend. --}}
@props(['segments' => []])

<div {{ $attributes }}>
    <div class="progress progress-separated mb-3">
        @foreach ($segments as $segment)
            @continue(($segment['color'] ?? '') === 'muted')
            <div class="progress-bar bg-{{ $segment['color'] ?? 'primary' }}" role="progressbar" style="width: {{ $segment['value'] }}%" aria-label="{{ $segment['label'] }}"></div>
        @endforeach
    </div>
    <div class="legend-list">
        @foreach ($segments as $segment)
            <span class="legend legend-{{ $segment['color'] ?? 'primary' }}">
                <span class="legend-dot"></span>{{ $segment['label'] }}@isset($segment['text'])<span class="legend-value"> {{ $segment['text'] }} </span>@endisset
            </span>
        @endforeach
    </div>
</div>
