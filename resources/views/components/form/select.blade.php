{{-- options: ['value' => 'Label', ...]. search: searchable dropdown (TomSelect). multiple: allow several values. --}}
@props(['name', 'label', 'options' => [], 'value' => null, 'required' => false, 'placeholder' => null, 'hint' => null, 'search' => false, 'multiple' => false])
@php
    $selected = collect(old($name, $value))->map(fn ($v) => (string) $v)->all();
@endphp

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    @if ($search)<x-lib name="select" />@endif
    <select id="{{ $name }}" name="{{ $name }}{{ $multiple ? '[]' : '' }}" @if ($multiple) multiple @endif @if ($search) data-tom-select @endif
        {{ $attributes->class(['form-select', 'is-invalid' => $errors->has($name)]) }}>
        @if ($placeholder !== null && ! $multiple)<option value="">{{ $placeholder }}</option>@endif
        @foreach ($options as $key => $text)
            <option value="{{ $key }}" @selected(in_array((string) $key, $selected, true))>{{ $text }}</option>
        @endforeach
    </select>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
