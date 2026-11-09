{{-- One-time code input split into boxes (Tabler OTP). type: numeric | alphanumeric | alphabetic --}}
@props(['name' => 'code', 'label' => null, 'length' => 6, 'type' => 'numeric', 'mask' => false])

<div class="mb-3">
    @if ($label)<label class="form-label" for="{{ $name }}">{{ $label }}</label>@endif
    <div class="otp" data-bs-toggle="otp" data-bs-length="{{ $length }}" data-bs-type="{{ $type }}" @if ($mask) data-bs-mask="true" @endif>
        <input type="text" id="{{ $name }}" name="{{ $name }}" maxlength="{{ $length }}">
    </div>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
</div>
