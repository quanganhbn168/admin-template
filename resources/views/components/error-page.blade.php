{{-- Standalone error page (no session, no menu), Tabler "empty" style. Slot = optional illustration. --}}
@props(['code', 'title', 'text' => null])
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>{{ $code }} - {{ $title }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="border-top-wide border-primary d-flex flex-column">
    <main class="page page-center" id="content">
        <div class="container-tight py-4">
            <div class="empty">
                @if (! $slot->isEmpty())
                    <div class="empty-img">{{ $slot }}</div>
                @else
                    <div class="empty-header">{{ $code }}</div>
                @endif
                <h1 class="empty-title">{{ $title }}</h1>
                @if ($text)<p class="empty-subtitle text-secondary">{{ $text }}</p>@endif
                <div class="empty-action">
                    <x-button :href="url('/')" icon="ti-arrow-left">{{ __('Take me home') }}</x-button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
