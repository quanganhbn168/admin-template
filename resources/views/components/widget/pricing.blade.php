{{-- Pricing plan card.
     features: [['text' => '<strong>100+</strong> Video tuts', 'included' => true], ...]  (text may contain trusted HTML) --}}
@props(['plan', 'price', 'period' => null, 'features' => [], 'note' => null, 'button' => null, 'href' => '#', 'ribbon' => null, 'color' => 'pink', 'gradient' => 'love'])

<x-card :gradient="$gradient" {{ $attributes }}>
    @if ($ribbon)<x-ribbon :color="$color" :position="false">{{ $ribbon }}</x-ribbon>@endif
    <div class="card-body">
        <div class="subheader text-{{ $color }}">{{ $plan }}</div>
        <div class="d-flex align-items-baseline mt-5">
            <div class="display-5">{{ $price }}</div>
            @if ($period)<div class="fs-1 text-secondary">/ {{ $period }}</div>@endif
        </div>
        <ul class="list-icon mt-6">
            @foreach ($features as $feature)
                <li class="{{ ($feature['included'] ?? true) ? '' : 'text-secondary' }}">
                    <i class="ti {{ ($feature['included'] ?? true) ? 'ti-check' : 'ti-x' }}"></i>
                    <span>{!! $feature['text'] !!}</span>
                </li>
            @endforeach
        </ul>
        @if ($note)<p class="mt-4 text-muted">{{ $note }}</p>@endif
        @if ($button)<div class="mt-6"><x-button :href="$href" :variant="$color" class="w-100">{{ $button }}</x-button></div>@endif
    </div>
</x-card>
