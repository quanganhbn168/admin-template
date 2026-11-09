@props(['title' => __('Dashboard'), 'actions' => null])
@php
    $layout = config('ui.layout', 'vertical');
    // Tabler 1.7 picks the layout from attributes on <html> (default = horizontal).
    $htmlLayout = ['navbar-position' => $layout === 'vertical' ? 'vertical' : null, 'layout' => $layout === 'condensed' ? 'condensed' : null, 'navbar-theme' => config('ui.navbar_theme') === 'dark' ? 'dark' : null];
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @foreach (array_filter($htmlLayout) as $key => $value) data-bs-{{ $key }}="{{ $value }}" @endforeach>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <script src="/tabler/js/tabler-theme.min.js"></script>
    {{-- Keep the layout from config/ui.php even if a layout was saved in the browser (e.g. from /preview). --}}
    <script>
        for (const [key, value] of Object.entries(@json($htmlLayout))) {
            value ? document.documentElement.setAttribute('data-bs-' + key, value) : document.documentElement.removeAttribute('data-bs-' + key);
        }
    </script>
    <div class="page">
        @if ($layout === 'vertical')
            <x-layouts.sidebar />
            <x-layouts.header />
        @else
            <x-layouts.navbar :condensed="$layout === 'condensed'" />
        @endif
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
