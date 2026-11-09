{{-- Celebration / announcement card: big emoji or icon, title, text (slot, trusted HTML allowed), call-to-action button. --}}
@props(['title', 'emoji' => null, 'gradient' => 'rainbow', 'button' => null, 'href' => '#', 'buttonIcon' => 'ti-gift'])

<x-card :gradient="$gradient" {{ $attributes }}>
    <div class="card-body text-center p-5">
        @if ($emoji)<div class="display-5 lh-1 mb-2">{{ $emoji }}</div>@endif
        <h2 class="h1">{{ $title }}</h2>
        <div class="text-secondary">{{ $slot }}</div>
        @if ($button)<div class="mt-5"><x-button :href="$href" :icon="$buttonIcon">{{ $button }}</x-button></div>@endif
    </div>
</x-card>
