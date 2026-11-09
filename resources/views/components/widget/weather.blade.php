{{-- City + conditions + temperature on a tinted card. gradient: ocean | snow | sun | ... --}}
@props(['city', 'summary', 'temp', 'icon' => 'ti-cloud', 'gradient' => 'ocean'])

<x-card :gradient="$gradient" direction="end" {{ $attributes }}>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="d-flex align-items-center mb-2">
                    <h2 class="card-title mb-0 me-2">{{ $city }}</h2><i class="ti {{ $icon }} fs-3 text-secondary"></i>
                </div>
                <div class="text-secondary">{{ $summary }}</div>
            </div>
            <div class="col-auto"><div class="display-5 lh-1 fw-lighter">{{ $temp }}&deg;</div></div>
        </div>
    </div>
</x-card>
