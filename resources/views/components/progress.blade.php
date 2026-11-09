@props(['value' => 0, 'color' => 'primary', 'size' => null, 'label' => null])

<div {{ $attributes->class(['progress', $size ? "progress-{$size}" : null]) }}>
    <div class="progress-bar bg-{{ $color }}" style="width: {{ $value }}%" role="progressbar"
         aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="100" aria-label="{{ $label ?? $value.'%' }}">
        <span class="visually-hidden">{{ $value }}%</span>
    </div>
</div>
