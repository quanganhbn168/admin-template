{{-- Range slider (noUiSlider). The chosen value is submitted through a hidden input named $name. --}}
@props(['name', 'label', 'value' => 50, 'min' => 0, 'max' => 100, 'step' => 1])

<div class="mb-3">
    <div class="d-flex justify-content-between">
        <label class="form-label" for="{{ $name }}-slider">{{ $label }}</label>
        <span class="text-secondary" data-slider-output="{{ $name }}">{{ old($name, $value) }}</span>
    </div>
    <x-lib name="slider" />
    <div id="{{ $name }}-slider" class="my-2" data-slider data-min="{{ $min }}" data-max="{{ $max }}" data-step="{{ $step }}" data-start="{{ old($name, $value) }}" data-target="{{ $name }}"></div>
    <input type="hidden" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
</div>
