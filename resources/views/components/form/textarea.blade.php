@props(['name', 'label', 'value' => null, 'rows' => 4, 'required' => false, 'hint' => null])

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}" {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>{{ old($name, $value) }}</textarea>
    @error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
