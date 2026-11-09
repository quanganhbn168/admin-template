@auth
    <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown" aria-label="{{ __('Open user menu') }}">
            <x-avatar :name="auth()->user()->name" size="sm" />
            <div class="d-none d-xl-block ps-2">
                <div>{{ auth()->user()->name }}</div>
                <div class="mt-1 small text-secondary">{{ auth()->user()->is_super_admin ? __('Super admin') : __('Admin') }}</div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <span class="dropdown-item-text text-secondary small">{{ auth()->user()->email }}</span>
            <div class="dropdown-divider"></div>
            <a href="{{ route('admin.profile') }}" class="dropdown-item">{{ __('Profile') }}</a>
            @can('manage-settings')
                <a href="{{ route('admin.settings') }}" class="dropdown-item">{{ __('Settings') }}</a>
            @endcan
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">{{ __('Logout') }}</button>
            </form>
        </div>
    </div>
@else
    <x-button :href="route('login')" size="sm">{{ __('Login') }}</x-button>
@endauth
