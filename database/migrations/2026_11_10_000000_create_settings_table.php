<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Table used by spatie/laravel-settings (see app/Settings and database/settings).
 * Earlier versions of this template had a simple key/value `settings` table; drop it if it is still there.
 */
return new class extends Migration
{
    public function up(): void
    {
        $table = config('settings.repositories.database.table') ?? 'settings';

        if (Schema::hasTable($table) && Schema::hasColumn($table, 'key')) {
            Schema::drop($table);
        }

        if (Schema::hasTable($table)) {
            return;
        }

        Schema::create($table, function (Blueprint $table): void {
            $table->id();

            $table->string('group');
            $table->string('name');
            $table->boolean('locked')->default(false);
            $table->json('payload');

            $table->timestamps();

            $table->unique(['group', 'name']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('settings.repositories.database.table') ?? 'settings');
    }
};
