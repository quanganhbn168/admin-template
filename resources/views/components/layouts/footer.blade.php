<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="text-center text-secondary">
            {{-- Admin > Settings > footer note: rich text, cleaned when saved and again here (defence in depth). --}}
            @if (filled($note = App\Support\Html::clean(App\Models\Setting::get('footer_note'))))
                <div class="mb-2">{!! $note !!}</div>
            @endif
            &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('Powered by Tabler.') }}
        </div>
    </div>
</footer>
