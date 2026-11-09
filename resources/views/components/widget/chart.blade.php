{{-- Card with a title row (optional subtitle / actions) and a chart in the body. --}}
@props(['title', 'subtitle' => null, 'actions' => null])

<div {{ $attributes->class(['card']) }}>
    <div class="card-body">
        <div class="d-flex align-items-start">
            <div>
                <h3 class="card-title mb-1">{{ $title }}</h3>
                @if ($subtitle)<div class="text-secondary">{{ $subtitle }}</div>@endif
            </div>
            @if ($actions)<div class="ms-auto">{{ $actions }}</div>@endif
        </div>
        <div class="mt-3">{{ $slot }}</div>
    </div>
</div>
