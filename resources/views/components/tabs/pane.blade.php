@props(['id', 'active' => false])

<div id="tab-{{ $id }}" {{ $attributes->class(['tab-pane', 'fade', 'active show' => $active]) }} role="tabpanel">{{ $slot }}</div>
