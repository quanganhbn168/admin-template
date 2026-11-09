{{-- Date picker (Tabler Datepicker). value: Y-m-d. mode: single | multiple | multiple-ranged (a range). --}}
@props(['name', 'label', 'value' => null, 'required' => false, 'hint' => null, 'placeholder' => null, 'mode' => 'single', 'min' => null, 'max' => null])

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    <x-lib name="calendar" />
    <div class="input-icon">
        <input type="text" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" autocomplete="off"
            placeholder="{{ $placeholder ?? __('Select a date') }}"
            data-bs-toggle="datepicker" data-bs-selection-mode="{{ $mode }}"
            @if ($min) data-bs-date-min="{{ $min }}" @endif @if ($max) data-bs-date-max="{{ $max }}" @endif
            {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>
        <span class="input-icon-addon"><i class="ti ti-calendar"></i></span>
    </div>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
