<x-layouts.app :title="__('Components')">
    <x-slot:actions>
        <x-breadcrumb :items="[__('Dashboard') => route('admin.dashboard'), __('Components') => null]" />
    </x-slot:actions>

    @php
        $sections = [
            'x-button' => '<x-button icon="ti-plus">Thêm</x-button>   (variant, outline, size, href, type)',
            'x-badge' => '<x-badge color="green">Hoạt động</x-badge>',
            'x-alert' => '<x-alert type="warning" title="Chú ý" dismissible>Nội dung</x-alert>',
            'x-avatar' => '<x-avatar name="Nguyen" size="md" color="blue" />',
            'x-card' => '<x-card :title="..."> ...  <x-slot:footer>...</x-slot:footer> </x-card>',
            'x-table' => '<x-table><x-slot:head><th>..</th></x-slot:head> <tr>..</tr> </x-table>',
            'x-empty' => '<x-empty title="..." text="..."> nút hành động </x-empty>',
            'x-modal' => '<x-modal id="m1" title="..."> ... <x-slot:footer>..</x-slot:footer> </x-modal>   (mở bằng data-bs-toggle="modal" data-bs-target="#m1")',
            'x-delete-button' => '<x-delete-button :action="route(...)" />',
            'x-tabs / x-tabs.pane' => '<x-tabs :items="[\'a\' => \'A\']" active="a"> <x-tabs.pane id="a" active>..</x-tabs.pane> </x-tabs>',
            'x-accordion' => '<x-accordion> <x-accordion.item title="..." open>..</x-accordion.item> </x-accordion>',
            'x-dropdown' => '<x-dropdown label="..."> <x-dropdown.item href icon danger>..</x-dropdown.item> <x-dropdown.divider /> </x-dropdown>',
            'x-offcanvas' => '<x-offcanvas id="p1" title="..." placement="end">..</x-offcanvas>   (mở: data-bs-toggle="offcanvas")',
            'x-progress / x-steps / x-placeholder' => '<x-progress :value="65" />, <x-steps :items="[..]" :current="2" />, <x-placeholder :lines="3" />',
            'x-tooltip / x-toast / x-ribbon' => '<x-tooltip text="..">..</x-tooltip>, <x-toast title="..">..</x-toast> (tự hiện), <x-ribbon>New</x-ribbon>',
            'x-carousel / x-timeline' => '<x-carousel :images="[urls]" />, <x-timeline :items="[[title,time,text]]" />',
            'x-social-button' => '<x-social-button provider="github" />   (facebook, github, google, instagram, linkedin, pinterest, twitter, x, youtube)',
            'Pagination' => '{{ $paginator->links() }}  (đã có kiểu Bootstrap/Tabler sẵn)',
            'x-form.*' => 'input, password, select, textarea, checkbox (switch)',
            'x-stat-card / x-nav-item / x-flash / x-role-badge / x-breadcrumb' => 'xem file trong resources/views/components',
        ];
    @endphp

    <div class="row row-cards">
        <div class="col-md-6">
            <x-card :title="__('Buttons & badges')">
                <div class="card-body">
                    <div class="mb-3 d-flex flex-wrap gap-2">
                        <x-button>Primary</x-button>
                        <x-button variant="secondary">Secondary</x-button>
                        <x-button variant="success" icon="ti-check">Success</x-button>
                        <x-button variant="danger" outline>Danger</x-button>
                        <x-button variant="warning" size="sm">Small</x-button>
                        <x-button href="#" variant="link">Link</x-button>
                    </div>
                    <div class="d-flex flex-wrap gap-2 align-items-center">
                        <x-badge>Blue</x-badge>
                        <x-badge color="green">Green</x-badge>
                        <x-badge color="red" :soft="false">Red</x-badge>
                        <x-avatar name="Nguyen" />
                        <x-avatar name="Tran" color="orange" size="lg" />
                    </div>
                </div>
            </x-card>
        </div>

        <div class="col-md-6">
            <x-card :title="__('Alerts & modal')">
                <div class="card-body">
                    <x-alert type="success" dismissible>Thao tác thành công.</x-alert>
                    <x-alert type="warning" :title="__('Notice')">Nội dung cảnh báo.</x-alert>
                    <x-button data-bs-toggle="modal" data-bs-target="#demo-modal">{{ __('Open modal') }}</x-button>
                    <x-delete-button action="#" />
                </div>
            </x-card>
        </div>

        <div class="col-md-6">
            <x-card :title="__('Form')">
                <div class="card-body">
                    <x-form.input name="demo_text" :label="__('Name')" required />
                    <x-form.select name="demo_select" :label="__('Role')" :options="['a' => 'Option A', 'b' => 'Option B']" :placeholder="__('Select...')" />
                    <x-form.password name="demo_password" />
                    <x-form.textarea name="demo_note" :label="__('Note')" />
                    <x-form.checkbox name="demo_check" :label="__('Checkbox')" />
                    <x-form.checkbox name="demo_switch" :label="__('Switch')" switch checked />
                </div>
            </x-card>
        </div>

        <div class="col-md-6">
            <x-card :title="__('Table & empty state')">
                <x-table>
                    <x-slot:head><th>{{ __('Name') }}</th><th>{{ __('Role') }}</th></x-slot:head>
                    <tr><td>Nguyễn Văn A</td><td><x-badge color="green">Active</x-badge></td></tr>
                    <tr><td>Trần Thị B</td><td><x-badge color="orange">Pending</x-badge></td></tr>
                </x-table>
                <div class="card-body border-top">
                    <x-empty :text="__('Nothing to show here.')" />
                </div>
            </x-card>
        </div>

        <div class="col-md-6">
            <x-tabs :items="['t1' => 'Tab 1', 't2' => 'Tab 2']" active="t1">
                <x-tabs.pane id="t1" active>{{ __('Tab content') }} 1</x-tabs.pane>
                <x-tabs.pane id="t2">{{ __('Tab content') }} 2</x-tabs.pane>
            </x-tabs>
        </div>

        <div class="col-md-6">
            <x-accordion>
                <x-accordion.item title="Accordion 1" open>{{ __('Modal content goes here.') }}</x-accordion.item>
                <x-accordion.item title="Accordion 2">{{ __('Nothing to show here.') }}</x-accordion.item>
            </x-accordion>
        </div>

        <div class="col-md-6">
            <x-card :title="__('Interface')">
                <div class="card-body">
                    <div class="mb-3 d-flex flex-wrap gap-2 align-items-center">
                        <x-dropdown :label="__('Actions')" icon="ti-dots">
                            <x-dropdown.item href="#" icon="ti-pencil">{{ __('Edit') }}</x-dropdown.item>
                            <x-dropdown.divider />
                            <x-dropdown.item href="#" icon="ti-trash" danger>{{ __('Delete') }}</x-dropdown.item>
                        </x-dropdown>
                        <x-button variant="secondary" data-bs-toggle="offcanvas" data-bs-target="#demo-offcanvas">{{ __('Open panel') }}</x-button>
                        <x-tooltip :text="__('Tooltip text')"><x-badge color="purple">Tooltip</x-badge></x-tooltip>
                    </div>
                    <x-progress :value="65" class="mb-3" />
                    <x-steps :items="['Info', 'Address', 'Done']" :current="2" class="mb-3" />
                    <x-placeholder :lines="3" />
                </div>
            </x-card>
        </div>

        <div class="col-md-6">
            <x-card :title="__('Social & timeline')" class="position-relative">
                <x-ribbon>New</x-ribbon>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        @foreach (['facebook', 'github', 'google', 'x', 'linkedin'] as $provider)
                            <x-social-button :provider="$provider" />
                        @endforeach
                    </div>
                    <x-timeline :items="[
                        ['title' => 'Tạo tài khoản', 'time' => '09:00', 'text' => 'Super admin tạo tài khoản.'],
                        ['title' => 'Đăng nhập lần đầu', 'time' => '09:05'],
                    ]" />
                </div>
            </x-card>
        </div>

        <div class="col-12">
            <x-card :title="__('Usage')">
                <x-table>
                    <x-slot:head><th>Component</th><th>{{ __('Usage') }}</th></x-slot:head>
                    @foreach ($sections as $name => $usage)
                        <tr><td class="text-nowrap"><code>{{ $name }}</code></td><td class="text-secondary"><code class="text-wrap">{{ $usage }}</code></td></tr>
                    @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

    <x-offcanvas id="demo-offcanvas" :title="__('Panel')">{{ __('Modal content goes here.') }}</x-offcanvas>
    <x-toast :title="config('app.name')">{{ __('Component catalog loaded.') }}</x-toast>

    <x-modal id="demo-modal" :title="__('Modal')">
        {{ __('Modal content goes here.') }}
        <x-slot:footer>
            <x-button variant="link" data-bs-dismiss="modal">{{ __('Cancel') }}</x-button>
            <x-button data-bs-dismiss="modal">{{ __('Save') }}</x-button>
        </x-slot:footer>
    </x-modal>
</x-layouts.app>
