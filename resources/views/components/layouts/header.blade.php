{{-- Top bar used by the vertical layout (user menu + theme switch). --}}
<header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <div class="navbar-nav flex-row order-md-last ms-auto">
            <x-theme-toggle />
            <x-layouts.user-menu />
        </div>
    </div>
</header>
