@props(['title' => __('Dashboard'), 'actions' => null])
@php
    $layout = App\Support\Ui::layout();
    // Tabler 1.7 reads the layout from attributes on <html>; null = default value.
    $htmlLayout = App\Support\Ui::attributes();
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @foreach (array_filter($htmlLayout) as $key => $value) data-bs-{{ $key }}="{{ $value }}" @endforeach>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    {{-- Libraries requested by components (<x-lib>) must load before app.js. --}}
    @stack('head-scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <script src="/tabler/js/tabler-theme.min.js"></script>
    {{-- Keep the layout from config/ui.php even if another one was saved in the browser (e.g. from /preview). --}}
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
