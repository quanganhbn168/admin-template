{{-- items: list of labels; current: 1-based index of the active step. --}}
@props(['items' => [], 'current' => 1, 'color' => 'blue'])

<ul {{ $attributes->class(['steps', "steps-{$color}", 'steps-counter']) }}>
    @foreach ($items as $label)
        <li class="step-item {{ $loop->iteration === $current ? 'active' : '' }}">{{ $label }}</li>
    @endforeach
</ul>
