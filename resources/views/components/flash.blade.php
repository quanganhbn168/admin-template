@foreach (['success' => 'success', 'error' => 'danger'] as $key => $type)
    @if (session($key))
        <div class="alert alert-{{ $type }} alert-dismissible" role="alert">
            {{ session($key) }}
            <a class="btn-close" data-bs-dismiss="alert" aria-label="{{ __('Close') }}"></a>
        </div>
    @endif
@endforeach

{{-- ->with('celebrate', true) pours confetti once the page has loaded (see resources/js/app.js). --}}
@if (session('celebrate'))
    <span data-confetti-auto class="position-fixed top-0 start-50" aria-hidden="true"></span>
@endif
