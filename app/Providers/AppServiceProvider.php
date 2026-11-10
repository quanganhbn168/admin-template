<?php

namespace App\Providers;

use App\Models\User;
use App\Settings\GeneralSettings;
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

    /** Settings saved in Admin > Settings override the values from config/app.php (null = keep the config value). */
    private function applySettings(): void
    {
        try {
            $general = app(GeneralSettings::class);
            $name = $general->app_name;
            $zone = $general->timezone;
        } catch (\Throwable) {
            // The settings table does not exist yet (e.g. while running the first migration).
            return;
        }

        if (filled($name)) {
            config(['app.name' => $name]);
        }

        if (filled($zone) && in_array($zone, timezone_identifiers_list(), true)) {
            config(['app.timezone' => $zone]);
            date_default_timezone_set($zone);
        }
    }
}
