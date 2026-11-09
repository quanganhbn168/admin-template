@foreach (['success' => 'success', 'error' => 'danger'] as $key => $type)
    @if (session($key))
        <div class="alert alert-{{ $type }} alert-dismissible" role="alert">
            {{ session($key) }}
            <a class="btn-close" data-bs-dismiss="alert" aria-label="{{ __('Close') }}"></a>
        </div>
    @endif
@endforeach
