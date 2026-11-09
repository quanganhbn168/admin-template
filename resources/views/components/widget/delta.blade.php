{{-- Compact result row: coloured arrow square, amount + caption, and the change on the right (green up / red down). --}}
@props(['amount', 'caption', 'delta'])
@php $up = $delta >= 0; $color = $up ? 'green' : 'red'; @endphp

<x-card :gradient="$color" direction="end" class="card-sm" {{ $attributes }}>
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-auto"><span class="bg-{{ $color }} text-white avatar avatar-square"><i class="ti {{ $up ? 'ti-arrow-up' : 'ti-arrow-down' }} fs-2"></i></span></div>
            <div class="col">
                <div class="d-flex">
                    <div class="fw-medium">{{ $amount }}</div>
                    <div class="ms-auto text-{{ $color }}">{{ $up ? '+' : '' }}{{ $delta }}%</div>
                </div>
                <div class="text-secondary">{{ $caption }}</div>
            </div>
        </div>
    </div>
</x-card>
