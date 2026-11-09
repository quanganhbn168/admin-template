<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // Only the super admin can create and manage accounts, and change application settings.
        Gate::define('manage-users', fn (User $user) => $user->is_super_admin);
        Gate::define('manage-settings', fn (User $user) => $user->is_super_admin);

        $this->applySettings();
    }

    /** Settings saved in Admin > Settings override the values from config/app.php. */
    private function applySettings(): void
    {
        if (filled($name = Setting::get('app_name'))) {
            config(['app.name' => $name]);
        }

        if (filled($zone = Setting::get('timezone')) && in_array($zone, timezone_identifiers_list(), true)) {
            config(['app.timezone' => $zone]);
            date_default_timezone_set($zone);
        }
    }
}
