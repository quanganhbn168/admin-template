<x-layouts.app :title="__('Profile')">
    <div class="row row-cards">
        <div class="col-lg-6">
            <form action="{{ route('admin.profile.update') }}" method="post" novalidate>
                @csrf
                @method('put')
                <x-card :title="__('Account')">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <x-avatar :name="$user->name" size="lg" class="me-3" />
                            <div>
                                <div class="fw-bold">{{ $user->name }}</div>
                                <x-role-badge :user="$user" />
                            </div>
                        </div>
                        <x-form.input name="name" :label="__('Name')" :value="$user->name" required />
                        <x-form.input name="email" type="email" :label="__('Email')" :value="$user->email" required />
                    </div>
                    <x-slot:footer>
                        <div class="text-end"><x-button type="submit">{{ __('Save') }}</x-button></div>
                    </x-slot:footer>
                </x-card>
            </form>
        </div>

        <div class="col-lg-6">
            <form action="{{ route('admin.profile.password') }}" method="post" novalidate autocomplete="off">
                @csrf
                @method('put')
                <x-card :title="__('Change password')">
                    <div class="card-body">
                        <x-form.password name="current_password" :label="__('Current password')" autocomplete="current-password" required />
                        <x-form.password name="password" :label="__('New password')" autocomplete="new-password" required />
                        <x-form.password name="password_confirmation" :label="__('Confirm password')" autocomplete="new-password" />
                    </div>
                    <x-slot:footer>
                        <div class="text-end"><x-button type="submit">{{ __('Change password') }}</x-button></div>
                    </x-slot:footer>
                </x-card>
            </form>
        </div>
    </div>
</x-layouts.app>
