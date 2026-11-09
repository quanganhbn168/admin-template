{{-- Set `switch` for a toggle switch instead of a checkbox. --}}
@props(['name', 'label', 'checked' => false, 'value' => '1', 'switch' => false])

<div class="mb-3">
    <label class="form-check {{ $switch ? 'form-switch' : '' }}">
        <input type="checkbox" name="{{ $name }}" value="{{ $value }}" @checked(old($name, $checked)) {{ $attributes->class(['form-check-input']) }}>
        <span class="form-check-label">{{ $label }}</span>
    </label>
</div>
