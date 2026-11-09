{{-- "Development activity" style row: small ring with a percentage, headline + note, and a trend chart below (slot). --}}
@props(['title', 'percent' => 0, 'headline', 'note' => null, 'trend' => null])

<div {{ $attributes->class(['card']) }}>
    <div class="card-body">
        <h3 class="card-title">{{ $title }}</h3>
        <div class="d-flex align-items-center mt-3">
            <div class="me-3" style="width: 56px">
                <x-chart type="radialBar" :height="72" :series="[$percent]" :categories="[$title]" :colors="['var(--tblr-primary)']" :label="$headline"
                    :options="['plotOptions' => ['radialBar' => ['hollow' => ['size' => '56%'], 'track' => ['strokeWidth' => '100%'], 'dataLabels' => ['value' => ['fontSize' => '11px', 'offsetY' => 4, 'fontWeight' => 600]]]]]" />
            </div>
            <div>
                <div>{{ $headline }}</div>
                @if ($note)
                    <div class="text-secondary">
                        @if ($trend !== null)<x-trend :value="$trend" class="me-1" />@endif{{ $note }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{ $slot }}
</div>
