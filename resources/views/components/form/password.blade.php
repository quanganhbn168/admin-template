{{-- Password field with show/hide button. Optional `aside` slot: text on the right of the label (e.g. "Forgot password?"). --}}
@props(['name' => 'password', 'label' => __('Password'), 'required' => false, 'hint' => null, 'autocomplete' => 'current-password', 'aside' => null])

<div class="mb-3">
    <div class="d-flex">
        <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
        @if ($aside)<span class="form-label-description ms-auto">{{ $aside }}</span>@endif
    </div>
    <div class="input-group input-group-flat">
        <input id="{{ $name }}" type="password" name="{{ $name }}" autocomplete="{{ $autocomplete }}"
            {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>
        <span class="input-group-text">
            <a href="#" class="link-secondary" data-toggle-password
               data-show-label="{{ __('Show password') }}" data-hide-label="{{ __('Hide password') }}"
               title="{{ __('Show password') }}" aria-label="{{ __('Show password') }}">
                <i class="ti ti-eye fs-2"></i>
            </a>
        </span>
    </div>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
