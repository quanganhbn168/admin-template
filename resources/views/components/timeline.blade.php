{{-- items: [['title' => '', 'time' => '', 'text' => ''], ...] --}}
@props(['items' => []])

<ul {{ $attributes->class(['timeline']) }}>
    @foreach ($items as $item)
        <li class="timeline-event">
            <div class="timeline-event-icon"></div>
            <div class="card timeline-event-card">
                <div class="card-body">
                    @isset($item['time'])<div class="text-secondary float-end">{{ $item['time'] }}</div>@endisset
                    <h4>{{ $item['title'] }}</h4>
                    @isset($item['text'])<p class="text-secondary mb-0">{{ $item['text'] }}</p>@endisset
                </div>
            </div>
        </li>
    @endforeach
</ul>
