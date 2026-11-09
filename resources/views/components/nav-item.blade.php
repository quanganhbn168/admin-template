@props(['label', 'icon', 'href', 'active' => false])

<li class="nav-item {{ $active ? 'active' : '' }}">
    <a class="nav-link" href="{{ $href }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="ti {{ $icon }} fs-2"></i></span>
        <span class="nav-link-title">{{ $label }}</span>
    </a>
</li>
