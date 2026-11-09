<x-layouts.guest :title="__('Login')">
    <div class="card card-md">
        <div class="card-body">
            <h1 class="h2 text-center mb-4">{{ __('Login to your account') }}</h1>
            <form action="{{ route('login.store') }}" method="post" novalidate>
                @csrf
                <x-form.input name="email" type="email" :label="__('Email address')" placeholder="your@email.com" autofocus autocomplete="username" />
                <x-form.password :placeholder="__('Your password')" />
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input">
                        <span class="form-check-label">{{ __('Remember me on this device') }}</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Sign in') }}</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.guest>
