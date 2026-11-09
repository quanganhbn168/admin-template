{{-- Skeleton of every page in the Tabler preview gallery (local only). --}}
@props(['title' => '', 'htmlAttrs' => '', 'bodyAttrs' => '', 'rtl' => false, 'head' => null, 'scripts' => null])
<!doctype html>
<html {!! $htmlAttrs !!}>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>{{ $title }} - {{ config('app.name') }} (Tabler preview)</title>
    @vite(['resources/css/preview.css'])
    @if ($rtl)<link href="/tabler/css/tabler.rtl.min.css" rel="stylesheet">@endif
    {{ $head }}
</head>
<body {!! $bodyAttrs !!}>
    <a href="#content" class="visually-hidden-focusable skip-link">Skip to main content</a>
    <script src="/tabler/js/tabler-theme.min.js"></script>

    {{ $slot }}

    <x-preview.settings />

    <script src="/tabler/js/tabler.min.js" defer></script>
    <x-preview.scripts />
    {{ $scripts }}
</body>
</html>
