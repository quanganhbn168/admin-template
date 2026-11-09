@props(['name' => 'password', 'placeholder' => 'Password', 'autocomplete' => 'current-password'])

<div class="input-group input-group-flat">
    <input id="{{ $attributes->get('id', $name) }}" type="password" name="{{ $name }}" placeholder="{{ $placeholder }}" autocomplete="{{ $autocomplete }}"
        {{ $attributes->except('id')->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>
    <span class="input-group-text">
        <a href="#" class="link-secondary" data-toggle-password title="Show password" aria-label="Show password">
            <i class="ti ti-eye fs-2"></i>
        </a>
    </span>
</div>
@error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
