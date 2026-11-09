<x-layouts.app :title="__('Advanced components')">
    <x-slot:actions>
        <x-breadcrumb :items="[__('Components') => route('admin.components'), __('Advanced components') => null]" />
    </x-slot:actions>

    @php
        $month = now()->startOfMonth();
        $events = [
            ['title' => __('Team meeting'), 'start' => $month->copy()->addDays(3)->setTime(9, 0)->toIso8601String(), 'end' => $month->copy()->addDays(3)->setTime(10, 30)->toIso8601String(), 'color' => 'var(--tblr-primary)'],
            ['title' => __('Product launch'), 'start' => $month->copy()->addDays(9)->toDateString(), 'end' => $month->copy()->addDays(12)->toDateString(), 'allDay' => true, 'color' => 'var(--tblr-green)'],
            ['title' => __('Invoice due'), 'start' => $month->copy()->addDays(17)->toDateString(), 'allDay' => true, 'color' => 'var(--tblr-red)'],
            ['title' => __('Review session'), 'start' => $month->copy()->addDays(21)->setTime(14, 0)->toIso8601String(), 'color' => 'var(--tblr-orange)'],
        ];
    @endphp

    <div class="row row-cards">
        <div class="col-12">
            <x-card :title="__('Calendar')">
                <div class="card-body"><x-calendar :events="$events" /></div>
            </x-card>
        </div>

        <div class="col-lg-7">
            <form onsubmit="return false">
                <x-card :title="__('Rich text editor')">
                    <div class="card-body">
                        <x-form.editor name="content" :label="__('Content')" :height="280" value="<p>Xin chào <strong>Tabler</strong>!</p>" />
                    </div>
                </x-card>
            </form>
        </div>

        <div class="col-lg-5">
            <x-card :title="__('File upload')">
                <div class="card-body">
                    <x-dropzone accepted="image/*,.pdf,.zip" />
                    <div class="form-hint mt-2">{{ __('Files are stored in storage/app/public/uploads.') }}</div>
                </div>
            </x-card>
        </div>
    </div>
</x-layouts.app>
