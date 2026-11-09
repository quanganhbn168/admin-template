{{-- Pill-style choices (Tabler form-selectgroup). type: checkbox | radio. values: selected keys. --}}
@props(['name', 'label', 'options' => [], 'values' => [], 'type' => 'checkbox'])
@php $selected = collect(old($name, $values))->map(fn ($v) => (string) $v)->all(); @endphp

<div class="mb-3">
    <div class="form-label">{{ $label }}</div>
    <div class="form-selectgroup">
        @foreach ($options as $key => $text)
            <label class="form-selectgroup-item">
                <input type="{{ $type }}" name="{{ $name }}{{ $type === 'checkbox' ? '[]' : '' }}" value="{{ $key }}" class="form-selectgroup-input" @checked(in_array((string) $key, $selected, true))>
                <span class="form-selectgroup-label">{{ $text }}</span>
            </label>
        @endforeach
    </div>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
</div>
