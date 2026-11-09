@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="card card-md">
    <div class="card-body">
        <h1 class="h2 text-center mb-4">Login to your account</h1>
        <form action="{{ route('login.store') }}" method="post" novalidate>
            @csrf
            <div class="mb-3">
                <label class="form-label" for="email">Email address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="your@email.com" autofocus autocomplete="username">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-2">
                <label class="form-label" for="password">Password</label>
                <x-password-input name="password" placeholder="Your password" />
            </div>
            <div class="mb-2">
                <label class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input">
                    <span class="form-check-label">Remember me on this device</span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
        </form>
    </div>
</div>
@endsection
