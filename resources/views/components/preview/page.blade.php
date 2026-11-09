{{-- Standard Tabler page: sidebar + navbar + page-wrapper + footer around the slot. --}}
@props(['title' => '', 'htmlAttrs' => '', 'bodyAttrs' => '', 'rtl' => false, 'head' => null, 'scripts' => null])

<x-preview.layout :title="$title" :html-attrs="$htmlAttrs" :body-attrs="$bodyAttrs" :rtl="$rtl">
    <x-slot:head>{{ $head }}</x-slot:head>
    <x-slot:scripts>{{ $scripts }}</x-slot:scripts>

    <x-preview.chrome />
    {{ $slot }}
    </main>
    <x-preview.footer />
    </div>
    </div>
</x-preview.layout>
