{{-- items: ['Label' => url|null, ...]; the last item is the current page. --}}
@props(['items' => []])

<ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
    @foreach ($items as $label => $url)
        @if ($url && ! $loop->last)
            <li class="breadcrumb-item"><a href="{{ $url }}">{{ $label }}</a></li>
        @else
            <li class="breadcrumb-item active" aria-current="page">{{ $label }}</li>
        @endif
    @endforeach
</ol>
