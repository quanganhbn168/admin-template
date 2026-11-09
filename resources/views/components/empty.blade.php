@props(['icon' => 'ti-mood-empty', 'title' => null, 'text' => null])

<div class="empty">
    <div class="empty-icon"><i class="ti {{ $icon }} fs-1"></i></div>
    <p class="empty-title">{{ $title ?? __('No data yet') }}</p>
    @if ($text)<p class="empty-subtitle text-secondary">{{ $text }}</p>@endif
    @if (! $slot->isEmpty())<div class="empty-action">{{ $slot }}</div>@endif
</div>
