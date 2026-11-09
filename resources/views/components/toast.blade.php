{{-- Shown automatically on page load (see resources/js/app.js). --}}
@props(['title' => null, 'delay' => 5000])

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-auto-show data-bs-delay="{{ $delay }}">
        <div class="toast-header">
            @if ($title)<strong class="me-auto">{{ $title }}</strong>@endif
            <button type="button" class="ms-auto btn-close" data-bs-dismiss="toast" aria-label="{{ __('Close') }}"></button>
        </div>
        <div class="toast-body">{{ $slot }}</div>
    </div>
</div>
