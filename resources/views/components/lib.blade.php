{{-- Loads a third-party library the Tabler components rely on, once per page, before app.js runs.
     name: calendar | mask | select | slider | fullcalendar | editor | dropzone  (files are copied to public/tabler by `pnpm assets`) --}}
@props(['name'])
@php
    $libs = [
        'calendar' => ['js' => '/tabler/libs/vanilla-calendar-pro/index.js'],
        'mask' => ['js' => '/tabler/libs/imask/dist/imask.min.js'],
        'select' => ['js' => '/tabler/libs/tom-select/dist/js/tom-select.base.min.js', 'css' => '/tabler/libs/tom-select/dist/css/tom-select.bootstrap5.min.css'],
        'slider' => ['js' => '/tabler/libs/nouislider/dist/nouislider.min.js', 'css' => '/tabler/libs/nouislider/dist/nouislider.min.css'],
        'fullcalendar' => ['js' => '/tabler/libs/fullcalendar/index.global.min.js'],
        'editor' => ['js' => '/tabler/libs/hugerte/hugerte.min.js'],
        'dropzone' => ['js' => '/tabler/libs/dropzone/dist/dropzone-min.js', 'css' => '/tabler/libs/dropzone/dist/dropzone.css'],
    ];
    $lib = $libs[$name];
@endphp
@pushOnce('head-scripts', 'lib-' . $name)
    @isset($lib['css'])<link rel="stylesheet" href="{{ $lib['css'] }}">@endisset
    <script src="{{ $lib['js'] }}" defer></script>
@endPushOnce
