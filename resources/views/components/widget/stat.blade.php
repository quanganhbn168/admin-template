{{-- KPI widget: label, big number, trend, note. The slot (a chart) sits flush under the body.
     periods: optional list of labels for the "last 7 days" dropdown in the corner. --}}
@props(['label', 'value', 'trend' => null, 'note' => null, 'periods' => null])

<div {{ $attributes->class(['card']) }}>
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div class="subheader">{{ $label }}</div>
            @if ($periods)
                <div class="ms-auto lh-1">
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle text-secondary border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $periods[0] }}</button>
                        <div class="dropdown-menu dropdown-menu-end">
                            @foreach ($periods as $period)
                                <button type="button" class="dropdown-item {{ $loop->first ? 'active' : '' }}">{{ $period }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="d-flex align-items-baseline">
            <div class="h1 mb-0 me-2">{{ $value }}</div>
            @if ($trend !== null)<div class="me-auto"><x-trend :value="$trend" /></div>@endif
        </div>
        @if ($note)<div class="text-secondary mt-2">{{ $note }}</div>@endif
    </div>
    {{ $slot }}
</div>
