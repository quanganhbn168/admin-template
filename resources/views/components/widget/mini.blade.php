{{-- Compact card: square colored icon + two lines of text. --}}
@props(['icon', 'title', 'text' => null, 'color' => 'primary'])

<div {{ $attributes->class(['card', 'card-sm']) }}>
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="bg-{{ $color }} text-white avatar avatar-square"><i class="ti {{ $icon }} fs-2"></i></span>
            </div>
            <div class="col">
                <div class="fw-medium">{{ $title }}</div>
                @if ($text)<div class="text-secondary">{{ $text }}</div>@endif
            </div>
        </div>
    </div>
</div>
