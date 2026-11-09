{{-- Vertical layout: sidebar (look from config/ui.php). --}}
<aside class="navbar navbar-vertical navbar-expand-lg {{ App\Support\Ui::sidebarClasses() }}">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('admin.dashboard') }}"><span class="brand-full">{{ config('app.name') }}</span><span class="brand-short">{{ mb_substr(config('app.name'), 0, 1) }}</span></a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <x-layouts.menu />
            </ul>
        </div>
    </div>
</aside>
