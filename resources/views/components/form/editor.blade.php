{{-- Rich text editor (HugeRTE). The HTML is saved into the textarea when the form is submitted;
     sanitise it on the server before showing it to other users. --}}
@props(['name', 'label', 'value' => null, 'height' => 300, 'required' => false, 'hint' => null])

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    <x-lib name="editor" />
    <textarea id="{{ $name }}" name="{{ $name }}" data-editor data-height="{{ $height }}" {{ $attributes }}>{{ old($name, $value) }}</textarea>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
