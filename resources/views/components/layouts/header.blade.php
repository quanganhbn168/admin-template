<header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <div class="navbar-nav flex-row order-md-last ms-auto">
            @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown" aria-label="{{ __('Open user menu') }}">
                        <x-avatar :name="auth()->user()->name" size="sm" />
                        <div class="d-none d-xl-block ps-2">
                            <div>{{ auth()->user()->name }}</div>
                            <div class="mt-1 small text-secondary">{{ auth()->user()->email }}</div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="{{ route('admin.settings') }}" class="dropdown-item">{{ __('Settings') }}</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">{{ __('Logout') }}</button>
                        </form>
                    </div>
                </div>
            @else
                <x-button :href="route('login')" size="sm">{{ __('Login') }}</x-button>
            @endauth
        </div>
    </div>
</header>
