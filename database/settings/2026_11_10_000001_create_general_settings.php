<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.app_name', null);
        $this->migrator->add('general.contact_email', null);
        $this->migrator->add('general.timezone', null);
        $this->migrator->add('general.footer_note', null);
    }
};
