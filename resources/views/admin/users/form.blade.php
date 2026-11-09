@extends('layouts.app')

@section('title', $user->exists ? 'Edit user' : 'New user')

@section('content')
<form class="card" action="{{ $user->exists ? route('admin.users.update', $user) : route('admin.users.store') }}" method="post" novalidate autocomplete="off">
    @csrf
    @if ($user->exists) @method('put') @endif
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label required" for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invalid @enderror">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label required" for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label {{ $user->exists ? '' : 'required' }}" for="password">Password</label>
                <x-password-input name="password" placeholder="Password" autocomplete="new-password" />
                @if ($user->exists)<div class="form-hint">Leave blank to keep the current password.</div>@endif
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="password_confirmation">Confirm password</label>
                <x-password-input name="password_confirmation" placeholder="Confirm password" autocomplete="new-password" />
            </div>
        </div>
    </div>
    <div class="card-footer text-end">
        <a href="{{ route('admin.users.index') }}" class="btn btn-link">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
