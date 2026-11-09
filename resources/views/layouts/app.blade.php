<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>@yield('title', 'Dashboard') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <div class="page">
        @include('partials.sidebar')
        @include('partials.header')
        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">@yield('title', 'Dashboard')</h2>
                        </div>
                        <div class="col-auto ms-auto d-print-none">@yield('actions')</div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    @foreach (['success', 'error'] as $type)
                        @if (session($type))
                            <div class="alert alert-{{ $type === 'error' ? 'danger' : 'success' }} alert-dismissible" role="alert">
                                {{ session($type) }}
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                        @endif
                    @endforeach
                    @yield('content')
                </div>
            </div>
            @include('partials.footer')
        </div>
    </div>
    @stack('scripts')
</body>
</html>
