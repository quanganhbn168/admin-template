<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

/**
 * Application-wide settings edited in Admin > Settings (spatie/laravel-settings).
 *
 * null means "use the value from .env / config" (app_name, timezone), so changing APP_NAME in .env
 * still works until someone saves the setting explicitly.
 *
 * Add another group the same way: a class in app/Settings, a `group()`, and a settings migration in
 * database/settings (see 2026_11_10_000001_create_general_settings.php).
 */
class GeneralSettings extends Settings
{
    public ?string $app_name;

    public ?string $contact_email;

    public ?string $timezone;

    /** Rich text (HTML). Always run through App\Support\Html::clean() before saving and printing. */
    public ?string $footer_note;

    public static function group(): string
    {
        return 'general';
    }

    /** The footer note for the layout; empty when the settings table is not available (not migrated yet). */
    public static function footer(): string
    {
        try {
            return (string) app(static::class)->footer_note;
        } catch (\Throwable) {
            return '';
        }
    }
}
