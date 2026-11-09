{{-- <x-tabs :items="['home' => 'Home', 'info' => 'Info']" active="home">
       <x-tabs.pane id="home" active> ... </x-tabs.pane>
       <x-tabs.pane id="info"> ... </x-tabs.pane>
     </x-tabs>
     Pane ids must be unique on the page; `active` on the pane must match the `active` tab. --}}
@props(['items' => [], 'active' => null])
@php $active ??= array_key_first($items); @endphp

<div {{ $attributes->class(['card']) }}>
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" role="tablist">
            @foreach ($items as $key => $label)
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link {{ $key === $active ? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#tab-{{ $key }}" role="tab">{{ $label }}</button>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">{{ $slot }}</div>
    </div>
</div>
