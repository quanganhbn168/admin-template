{{-- Radio group. options: ['value' => 'Label', ...]. inline: put the options on one line. --}}
@props(['name', 'label', 'options' => [], 'value' => null, 'inline' => false, 'hint' => null])

<div class="mb-3">
    <div class="form-label">{{ $label }}</div>
    <div>
        @foreach ($options as $key => $text)
            <label class="form-check {{ $inline ? 'form-check-inline' : '' }}">
                <input class="form-check-input" type="radio" name="{{ $name }}" value="{{ $key }}" @checked((string) old($name, $value) === (string) $key)>
                <span class="form-check-label">{{ $text }}</span>
            </label>
        @endforeach
    </div>
    @error($name)<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
    @if ($hint)<div class="form-hint">{{ $hint }}</div>@endif
</div>
