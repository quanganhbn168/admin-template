{{-- Confirmation / success / warning card: optional big icon, title, text, and buttons (slot). --}}
@props(['title', 'text' => null, 'gradient' => 'danger', 'icon' => null, 'iconColor' => null])

<x-card :gradient="$gradient" {{ $attributes }}>
    <div class="card-body p-5 text-center">
        @if ($icon)
            <div class="mb-3 text-{{ $iconColor ?? $gradient }}"><i class="ti {{ $icon }}" style="font-size: 3rem"></i></div>
        @endif
        <h2 class="card-title">{{ $title }}</h2>
        @if ($text)<p class="text-secondary">{{ $text }}</p>@endif
        @if (! $slot->isEmpty())<div class="btn-list btn-list-center mt-5">{{ $slot }}</div>@endif
    </div>
</x-card>
