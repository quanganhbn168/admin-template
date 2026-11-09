@php
    $menu = [
        ['label' => 'Dashboard', 'icon' => 'ti-home', 'route' => 'admin.dashboard', 'match' => 'admin.dashboard'],
        ['label' => 'Users', 'icon' => 'ti-users', 'route' => 'admin.users.index', 'match' => 'admin.users.*', 'can' => 'manage-users'],
        ['label' => 'Settings', 'icon' => 'ti-settings', 'route' => 'admin.settings', 'match' => 'admin.settings'],
    ];
@endphp
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('admin.dashboard') }}">{{ config('app.name') }}</a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                @foreach ($menu as $item)
                    @if (! isset($item['can']) || auth()->user()->can($item['can']))
                        <li class="nav-item {{ request()->routeIs($item['match']) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route($item['route']) }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="ti {{ $item['icon'] }} fs-2"></i></span>
                                <span class="nav-link-title">{{ $item['label'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</aside>
