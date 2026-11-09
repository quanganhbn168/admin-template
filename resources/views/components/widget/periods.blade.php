{{-- Small "Last 7 days" dropdown for the corner of a widget. periods: list of labels, the first one is active. --}}
@props(['periods' => []])

<div class="dropdown">
    <button type="button" class="dropdown-toggle text-secondary border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $periods[0] ?? '' }}</button>
    <div class="dropdown-menu dropdown-menu-end">
        @foreach ($periods as $period)
            <button type="button" class="dropdown-item {{ $loop->first ? 'active' : '' }}">{{ $period }}</button>
        @endforeach
    </div>
</div>
