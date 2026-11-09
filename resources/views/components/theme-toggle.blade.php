{{-- Light / dark switch handled by Tabler's tabler-theme.js (stored in the browser). --}}
<div class="nav-item d-none d-md-flex me-3">
    <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="{{ __('Dark mode') }}" aria-label="{{ __('Dark mode') }}" data-bs-toggle="tooltip" data-bs-placement="bottom">
        <i class="ti ti-moon fs-2"></i>
    </a>
    <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="{{ __('Light mode') }}" aria-label="{{ __('Light mode') }}" data-bs-toggle="tooltip" data-bs-placement="bottom">
        <i class="ti ti-sun fs-2"></i>
    </a>
</div>
