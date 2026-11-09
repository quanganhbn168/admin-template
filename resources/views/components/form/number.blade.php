{{-- Number stepper with + / - buttons (Tabler number-input). --}}
@props(['name', 'label', 'value' => 1, 'min' => null, 'max' => null, 'step' => 1, 'required' => false, 'hint' => null])

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    <input id="{{ $name }}" type="text" name="{{ $name }}" value="{{ old($name, $value) }}" data-bs-toggle="number-input" step="{{ $step }}"
        @if ($min !== null) min="{{ $min }}" @endif @if ($max !== null) max="{{ $max }}" @endif
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
