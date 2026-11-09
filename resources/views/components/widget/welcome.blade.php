{{-- "Welcome back" card with gradient, two small KPIs and an illustration (slot).
     kpis: [['label' => '', 'value' => '', 'trend' => 7, 'percent' => 75, 'color' => 'success'], ...] --}}
@props(['title', 'text' => null, 'kpis' => []])

<div {{ $attributes->class(['card', 'card-gradient']) }}>
    <div class="card-body">
        <div class="row gy-3">
            <div class="col-12 col-sm-6 d-flex flex-column">
                <h2 class="h2">{{ $title }}</h2>
                @if ($text)<p class="text-secondary">{{ $text }}</p>@endif

                <div class="row g-5 mt-auto">
                    @foreach ($kpis as $kpi)
                        <div class="col-auto">
                            <div class="subheader">{{ $kpi['label'] }}</div>
                            <div class="d-flex align-items-baseline">
                                <div class="h3 me-2">{{ $kpi['value'] }}</div>
                                @isset($kpi['trend'])<div class="me-auto"><x-trend :value="$kpi['trend']" /></div>@endisset
                            </div>
                            @isset($kpi['percent'])<x-progress :value="$kpi['percent']" :color="$kpi['color'] ?? 'success'" size="sm" />@endisset
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-center">{{ $slot }}</div>
        </div>
    </div>
</div>
