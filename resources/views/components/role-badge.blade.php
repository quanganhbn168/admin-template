@props(['user'])

@if ($user->is_super_admin)
    <span class="badge bg-red-lt">{{ __('Super admin') }}</span>
@else
    <span class="badge bg-blue-lt">{{ __('Admin') }}</span>
@endif
