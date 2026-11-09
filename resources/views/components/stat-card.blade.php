@props(['label', 'value', 'icon', 'color' => 'primary'])

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <span class="bg-{{ $color }} text-white avatar me-3"><i class="ti {{ $icon }} fs-2"></i></span>
            <div>
                <div class="fw-bold">{{ $value }}</div>
                <div class="text-secondary">{{ $label }}</div>
            </div>
        </div>
    </div>
</div>
