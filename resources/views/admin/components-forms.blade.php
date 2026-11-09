<x-layouts.app :title="__('Form elements')">
    <x-slot:actions>
        <x-breadcrumb :items="[__('Components') => route('admin.components'), __('Form elements') => null]" />
    </x-slot:actions>

    <form class="row row-cards" onsubmit="return false" novalidate>
        <div class="col-lg-4">
            <x-card :title="__('Text inputs')">
                <div class="card-body">
                    <x-form.input name="f_name" :label="__('Name')" required :hint="__('As shown on documents.')" />
                    <x-form.input name="f_email" type="email" :label="__('Email address')" icon="ti-mail" placeholder="your@email.com" />
                    <x-form.input name="f_price" :label="__('Price')" prefix="₫" suffix="VND" placeholder="0" />
                    <x-form.input name="f_phone" :label="__('Phone')" icon="ti-phone" mask="0000 000 000" placeholder="0000 000 000" />
                    <x-form.password name="f_password" :placeholder="__('Password')" />
                    <x-form.textarea name="f_note" :label="__('Note')" :rows="3" />
                </div>
            </x-card>
        </div>

        <div class="col-lg-4">
            <x-card :title="__('Choices')">
                <div class="card-body">
                    <x-form.select name="f_role" :label="__('Role')" :options="['admin' => __('Admin'), 'editor' => 'Editor', 'viewer' => 'Viewer']" :placeholder="__('Select...')" />
                    <x-form.select name="f_tags" :label="__('Tags (searchable)')" search multiple
                        :options="['php' => 'PHP', 'laravel' => 'Laravel', 'tabler' => 'Tabler', 'vite' => 'Vite', 'pnpm' => 'pnpm']" :value="['laravel', 'tabler']" />
                    <x-form.radios name="f_plan" :label="__('Plan')" inline :options="['free' => 'Free', 'pro' => 'Pro', 'team' => 'Team']" value="pro" />
                    <x-form.selectgroup name="f_langs" :label="__('Languages')" :options="['vi' => 'Tiếng Việt', 'en' => 'English', 'ja' => '日本語']" :values="['vi']" />
                    <x-form.checkbox name="f_terms" :label="__('I agree to the terms')" />
                    <x-form.checkbox name="f_notify" :label="__('Email notifications')" switch checked />
                </div>
            </x-card>
        </div>

        <div class="col-lg-4">
            <x-card :title="__('Dates, numbers and files')">
                <div class="card-body">
                    <x-form.date name="f_date" :label="__('Date')" value="{{ now()->format('Y-m-d') }}" />
                    <x-form.date name="f_range" :label="__('Date range')" mode="multiple-ranged" />
                    <x-form.number name="f_qty" :label="__('Quantity')" :value="1" :min="1" :max="99" />
                    <x-form.slider name="f_volume" :label="__('Volume')" :value="40" />
                    <x-form.otp name="f_code" :label="__('One-time code')" :length="6" />
                    <x-form.file name="f_file" :label="__('Upload file')" :hint="__('PNG or JPG, up to 2 MB.')" />
                </div>
                <x-slot:footer>
                    <div class="text-end"><x-button type="submit">{{ __('Save') }}</x-button></div>
                </x-slot:footer>
            </x-card>
        </div>
    </form>
</x-layouts.app>
