{{-- options: ['value' => 'Label', ...] --}}
@props(['name', 'label', 'options' => [], 'value' => null, 'required' => false, 'placeholder' => null, 'hint' => null])

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}" {{ $attributes->class(['form-select', 'is-invalid' => $errors->has($name)]) }}>
        @if ($placeholder !== null)<option value="">{{ $placeholder }}</option>@endif
        @foreach ($options as $key => $text)
            <option value="{{ $key }}" @selected((string) old($name, $value) === (string) $key)>{{ $text }}</option>
        @endforeach
    </select>
    @error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
