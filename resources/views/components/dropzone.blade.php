{{-- Drag & drop uploader (Dropzone). Uploads each file to `url` (default: Admin uploads endpoint).
     It is its own <form>, so do not place it inside another form.
     Listen for the `dropzone:uploaded` event on the element to get {name, url, size} of every stored file. --}}
@props(['url' => null, 'maxSize' => 5, 'accepted' => null, 'title' => null, 'text' => null])
@php
    $dict = [
        'dictFileTooBig' => __('File is too big (:filesize MB). Max: :max MB.', ['filesize' => '{{filesize}}', 'max' => '{{maxFilesize}}']),
        'dictInvalidFileType' => __('This file type is not allowed.'),
        'dictResponseError' => __('Upload failed (code :code).', ['code' => '{{statusCode}}']),
        'dictCancelUpload' => __('Cancel'),
        'dictRemoveFile' => __('Remove'),
        'dictMaxFilesExceeded' => __('Too many files.'),
    ];
@endphp

<x-lib name="dropzone" />
<form {{ $attributes->class(['dropzone']) }} action="{{ $url ?? route('admin.uploads.store') }}" method="post" enctype="multipart/form-data" autocomplete="off" novalidate
    data-dropzone data-url="{{ $url ?? route('admin.uploads.store') }}" data-max-size="{{ $maxSize }}" @if ($accepted) data-accepted="{{ $accepted }}" @endif
    data-dict='@json($dict, JSON_HEX_APOS | JSON_HEX_AMP)'>
    <div class="fallback"><input name="file" type="file" aria-label="{{ __('Upload file') }}"></div>
    <div class="dz-message">
        <h3 class="dropzone-msg-title">{{ $title ?? __('Drop files here or click to upload') }}</h3>
        <span class="dropzone-msg-desc">{{ $text ?? __('Up to :size MB per file.', ['size' => $maxSize]) }}</span>
    </div>
</form>
