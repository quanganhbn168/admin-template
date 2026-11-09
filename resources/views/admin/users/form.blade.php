<x-layouts.app :title="$user->exists ? __('Edit user') : __('New user')">
    <form action="{{ $user->exists ? route('admin.users.update', $user) : route('admin.users.store') }}" method="post" novalidate autocomplete="off">
        @csrf
        @if ($user->exists) @method('put') @endif

        <x-card>
            <div class="card-body">
                <x-form.input name="name" :label="__('Name')" :value="$user->name" required />
                <x-form.input name="email" type="email" :label="__('Email')" :value="$user->email" required />
                <div class="row">
                    <div class="col-md-6">
                        <x-form.password :label="__('Password')" autocomplete="new-password" :required="! $user->exists"
                            :hint="$user->exists ? __('Leave blank to keep the current password.') : null" />
                    </div>
                    <div class="col-md-6">
                        <x-form.password name="password_confirmation" :label="__('Confirm password')" autocomplete="new-password" />
                    </div>
                </div>
            </div>
            <x-slot:footer>
                <div class="text-end">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-link">{{ __('Cancel') }}</a>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </x-slot:footer>
        </x-card>
    </form>
</x-layouts.app>
