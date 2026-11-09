<x-layouts.guest :title="__('Forgot password')">
    <form class="card card-md" action="{{ route('password.email') }}" method="post" novalidate>
        @csrf
        <div class="card-body">
            <h1 class="card-title text-center mb-4">{{ __('Forgot password') }}</h1>
            <p class="text-secondary mb-4">{{ __('Enter your email address and we will send you a link to reset your password.') }}</p>
            <x-form.input name="email" type="email" :label="__('Email address')" placeholder="your@email.com" autofocus autocomplete="email" />
            <div class="form-footer">
                <x-button type="submit" icon="ti-mail" class="w-100">{{ __('Send reset link') }}</x-button>
            </div>
        </div>
    </form>
    <div class="text-center text-secondary mt-3">
        {{ __('Remembered it?') }} <a href="{{ route('login') }}">{{ __('Back to sign in') }}</a>
    </div>
</x-layouts.guest>
