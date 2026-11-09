{{-- Pages that bring their own structure (sign in, errors, marketing, layout demos). --}}
@props(['title' => '', 'htmlAttrs' => '', 'bodyAttrs' => '', 'rtl' => false, 'head' => null, 'scripts' => null])

<x-preview.layout :title="$title" :html-attrs="$htmlAttrs" :body-attrs="$bodyAttrs" :rtl="$rtl">
    <x-slot:head>{{ $head }}</x-slot:head>
    <x-slot:scripts>{{ $scripts }}</x-slot:scripts>

    {{ $slot }}
</x-preview.layout>
