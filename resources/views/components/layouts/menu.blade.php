{{-- <li> items for the main navigation (from config/menu.php). Wrap in <ul class="navbar-nav">. --}}
@foreach (App\Support\Menu::items() as $item)
    @if ($item['children'])
        <li class="nav-item dropdown {{ $item['active'] ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle {{ $item['active'] ? 'show' : '' }}" href="#menu-{{ $loop->index }}" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="{{ $item['active'] ? 'true' : 'false' }}">
                @if ($item['icon'])<span class="nav-link-icon d-md-none d-lg-inline-block"><i class="ti {{ $item['icon'] }} fs-2"></i></span>@endif
                <span class="nav-link-title">{{ $item['label'] }}</span>
            </a>
            <div class="dropdown-menu {{ $item['active'] ? 'show' : '' }}">
                @foreach ($item['children'] as $child)
                    <a class="dropdown-item {{ $child['active'] ? 'active' : '' }}" href="{{ $child['href'] }}">{{ $child['label'] }}</a>
                @endforeach
            </div>
        </li>
    @else
        <x-nav-item :label="$item['label']" :icon="$item['icon']" :href="$item['href']" :active="$item['active']" />
    @endif
@endforeach
