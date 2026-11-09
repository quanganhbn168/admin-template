@props(['title', 'open' => false])
@php $id = 'acc-' . uniqid(); @endphp

<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button {{ $open ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}" aria-expanded="{{ $open ? 'true' : 'false' }}">{{ $title }}</button>
    </h2>
    <div id="{{ $id }}" class="accordion-collapse collapse {{ $open ? 'show' : '' }}">
        <div class="accordion-body pt-0">{{ $slot }}</div>
    </div>
</div>
