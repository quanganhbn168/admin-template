<x-layouts.guest :title="__('Reset password')">
    <form class="card card-md" action="{{ route('password.update') }}" method="post" novalidate>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="card-body">
            <h1 class="card-title text-center mb-4">{{ __('Reset password') }}</h1>
            <x-form.input name="email" type="email" :label="__('Email address')" :value="$email" autocomplete="email" />
            <x-form.password name="password" :label="__('New password')" autocomplete="new-password" autofocus />
            <x-form.password name="password_confirmation" :label="__('Confirm password')" autocomplete="new-password" />
            <div class="form-footer">
                <x-button type="submit" class="w-100">{{ __('Reset password') }}</x-button>
            </div>
        </div>
    </form>
</x-layouts.guest>
