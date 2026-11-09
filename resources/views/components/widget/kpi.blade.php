{{-- Tinted KPI card: label + value, round icon, optional progress bar. color: a Tabler colour / gradient name. --}}
@props(['label', 'value', 'icon', 'color' => 'success', 'percent' => null])

<x-card :gradient="$color" direction="start" {{ $attributes }}>
    <div class="card-body">
        <div class="row g-3">
            <div class="col">
                <h2 class="subheader mb-1">{{ $label }}</h2>
                <div class="h3 m-0">{{ $value }}</div>
            </div>
            <div class="col-auto"><span class="avatar bg-{{ $color }}-lt"><i class="ti {{ $icon }} fs-2"></i></span></div>
            @if ($percent !== null)<div class="col-12"><x-progress :value="$percent" :color="$color" size="sm" /></div>@endif
        </div>
    </div>
</x-card>
