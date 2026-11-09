@php
    $menu = [
        ['label' => __('Dashboard'), 'icon' => 'ti-home', 'route' => 'admin.dashboard', 'match' => 'admin.dashboard'],
        ['label' => __('Users'), 'icon' => 'ti-users', 'route' => 'admin.users.index', 'match' => 'admin.users.*', 'can' => 'manage-users'],
        ['label' => __('Settings'), 'icon' => 'ti-settings', 'route' => 'admin.settings', 'match' => 'admin.settings'],
        ['label' => __('Components'), 'icon' => 'ti-components', 'route' => 'admin.components', 'match' => 'admin.components', 'visible' => app()->isLocal()],
        ['label' => 'Tabler preview', 'icon' => 'ti-eye', 'route' => 'preview', 'match' => 'preview', 'visible' => app()->isLocal()],
    ];
@endphp
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('admin.dashboard') }}">{{ config('app.name') }}</a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                @foreach ($menu as $item)
                    @if (($item['visible'] ?? true) && (! isset($item['can']) || (auth()->check() && auth()->user()->can($item['can']))))
                        <x-nav-item :label="$item['label']" :icon="$item['icon']" :href="route($item['route'])" :active="request()->routeIs($item['match'])" />
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</aside>
