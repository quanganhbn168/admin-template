<x-layouts.app :title="__('Settings')">
    <form action="{{ route('admin.settings.update') }}" method="post" novalidate>
        @csrf
        @method('put')
        <x-card :title="__('General')">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <x-form.input name="app_name" :label="__('Application name')" :value="$values['app_name']" required
                            :hint="__('Shown in the title bar, the menu and emails.')" />
                    </div>
                    <div class="col-md-6">
                        <x-form.input name="contact_email" type="email" :label="__('Contact email')" icon="ti-mail" :value="$values['contact_email']" />
                    </div>
                    <div class="col-md-6">
                        <x-form.select name="timezone" :label="__('Timezone')" :options="$timezones" :value="$values['timezone']" search required />
                    </div>
                    <div class="col-12">
                        <x-form.editor name="footer_note" :label="__('Footer note')" :value="$values['footer_note']" :height="200"
                            :hint="__('Shown above the copyright line on every page.')" />
                    </div>
                </div>
            </div>
            <x-slot:footer>
                <div class="text-end"><x-button type="submit">{{ __('Save') }}</x-button></div>
            </x-slot:footer>
        </x-card>
    </form>
</x-layouts.app>
