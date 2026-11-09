{{-- images: list of image URLs. --}}
@props(['images' => []])
@php $id = 'carousel-' . uniqid(); @endphp

<div id="{{ $id }}" {{ $attributes->class(['carousel', 'slide']) }} data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($images as $i => $src)
            <button type="button" data-bs-target="#{{ $id }}" data-bs-slide-to="{{ $i }}" class="{{ $loop->first ? 'active' : '' }}" aria-label="Slide {{ $i + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($images as $src)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}"><img class="d-block w-100" alt="" src="{{ $src }}"></div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id }}" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></button>
    <button class="carousel-control-next" type="button" data-bs-target="#{{ $id }}" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></button>
</div>
