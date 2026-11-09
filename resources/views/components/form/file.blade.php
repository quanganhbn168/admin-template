{{-- File upload. Remember enctype="multipart/form-data" on the <form>. --}}
@props(['name', 'label', 'required' => false, 'hint' => null, 'multiple' => false, 'accept' => null])

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    <input id="{{ $name }}" type="file" name="{{ $name }}{{ $multiple ? '[]' : '' }}" @if ($multiple) multiple @endif @if ($accept) accept="{{ $accept }}" @endif
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
