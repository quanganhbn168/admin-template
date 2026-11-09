{{-- Horizontal layouts. condensed = brand, menu and user on one bar; otherwise the menu gets its own row. --}}
@props(['condensed' => false])

<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand navbar-brand-autodark pe-0 pe-md-3">
            <a href="{{ route('admin.dashboard') }}" class="fs-2 fw-bold text-decoration-none">{{ config('app.name') }}</a>
        </div>
        <div class="navbar-nav flex-row order-md-last">
            <x-theme-toggle />
            <x-layouts.user-menu />
        </div>
        @if ($condensed)
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav ms-md-4"><x-layouts.menu /></ul>
            </div>
        @endif
    </div>
</header>
@unless ($condensed)
    <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar">
                <div class="container-xl">
                    <ul class="navbar-nav"><x-layouts.menu /></ul>
                </div>
            </div>
        </div>
    </header>
@endunless
