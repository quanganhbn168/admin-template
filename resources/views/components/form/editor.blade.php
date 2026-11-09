{{-- Rich text editor (HugeRTE) in the app language, with image upload to /admin/uploads.
     The HTML is saved into the textarea when the form is submitted. ALWAYS clean it on the server before
     storing or showing it: App\Support\Html::clean($request->input('...')). --}}
@props(['name', 'label', 'value' => null, 'height' => 300, 'required' => false, 'hint' => null, 'upload' => true])

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    <x-lib name="editor" />
    <textarea id="{{ $name }}" name="{{ $name }}" data-editor data-height="{{ $height }}" data-language="{{ app()->getLocale() }}"
        @if ($upload) data-upload-url="{{ route('admin.uploads.store') }}" @endif {{ $attributes }}>{{ old($name, $value) }}</textarea>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
