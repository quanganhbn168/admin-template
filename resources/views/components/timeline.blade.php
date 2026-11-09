{{-- Tabler timeline.
     items: [['title' => '', 'text' => '', 'time' => '', 'icon' => 'ti-check', 'color' => 'facebook'], ...]
     color: a Tabler brand name (x, facebook, github...) or any Tabler color (blue, green...). Omit for the default grey icon. --}}
@props(['items' => []])
@php
    $brands = ['facebook', 'twitter', 'x', 'github', 'google', 'youtube', 'vimeo', 'dribbble', 'linkedin', 'instagram', 'pinterest', 'vk', 'rss', 'flickr', 'bitbucket', 'tabler'];
@endphp

<ul {{ $attributes->class(['timeline']) }}>
    @foreach ($items as $item)
        @php
            $color = $item['color'] ?? null;
            $iconClass = $color ? (in_array($color, $brands) ? "bg-{$color} text-{$color}-fg" : "bg-{$color} text-white") : '';
        @endphp
        <li class="timeline-event">
            <div class="timeline-event-icon {{ $iconClass }}"><i class="ti {{ $item['icon'] ?? 'ti-point' }} fs-2"></i></div>
            <div class="card timeline-event-card">
                <div class="card-body">
                    @isset($item['time'])<div class="text-secondary float-end">{{ $item['time'] }}</div>@endisset
                    <h3 class="h4">{{ $item['title'] }}</h3>
                    @isset($item['text'])<p class="text-secondary mb-0">{{ $item['text'] }}</p>@endisset
                </div>
            </div>
        </li>
    @endforeach
</ul>
