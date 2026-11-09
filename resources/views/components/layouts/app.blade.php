@props(['title' => __('Dashboard'), 'actions' => null])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <div class="page">
        <x-layouts.sidebar />
        <x-layouts.header />
        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">{{ $title }}</h2>
                        </div>
                        @if ($actions)
                            <div class="col-auto ms-auto d-print-none">{{ $actions }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <x-flash />
                    {{ $slot }}
                </div>
            </div>
            <x-layouts.footer />
        </div>
    </div>
    @stack('scripts')
</body>
</html>
