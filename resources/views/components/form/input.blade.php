{{-- Text-like input. icon: Tabler icon shown inside the field; prefix / suffix: text blocks around it;
     mask: IMask pattern such as "(000) 000-0000" or "00/00/0000". --}}
@props(['name', 'label', 'type' => 'text', 'value' => null, 'required' => false, 'hint' => null, 'icon' => null, 'prefix' => null, 'suffix' => null, 'mask' => null])
@php
    $attrs = $attributes->class(['form-control', 'is-invalid' => $errors->has($name)])
        ->merge(['id' => $name, 'type' => $type, 'name' => $name, 'value' => old($name, $value)]);

    if ($mask) {
        $attrs = $attrs->merge(['data-mask' => $mask, 'data-mask-visible' => 'true', 'autocomplete' => 'off']);
    }

    $field = new Illuminate\Support\HtmlString('<input ' . $attrs . '>');
@endphp

<div class="mb-3">
    <label class="form-label {{ $required ? 'required' : '' }}" for="{{ $name }}">{{ $label }}</label>
    @if ($mask)<x-lib name="mask" />@endif

    @if ($prefix || $suffix)
        <div class="input-group">
            @if ($prefix)<span class="input-group-text">{{ $prefix }}</span>@endif
            {{ $field }}
            @if ($suffix)<span class="input-group-text">{{ $suffix }}</span>@endif
        </div>
    @elseif ($icon)
        <div class="input-icon">
            <span class="input-icon-addon"><i class="ti {{ $icon }}"></i></span>
            {{ $field }}
        </div>
    @else
        {{ $field }}
    @endif

    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
