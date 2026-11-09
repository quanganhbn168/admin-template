@props(['id', 'title', 'size' => null, 'footer' => null])

<div class="modal modal-blur fade" id="{{ $id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered {{ $size ? "modal-{$size}" : '' }}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('Close') }}"></button>
            </div>
            <div class="modal-body">{{ $slot }}</div>
            @if ($footer)<div class="modal-footer">{{ $footer }}</div>@endif
        </div>
    </div>
</div>
