<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * Key/value application settings, edited from Admin > Settings.
 * Read them with Setting::get('app_name'); the whole table is cached until a value is saved.
 */
#[Fillable(['key', 'value'])]
class Setting extends Model
{
    public $incrementing = false;

    protected $primaryKey = 'key';

    protected $keyType = 'string';

    /** @return array<string, ?string> */
    public static function values(): array
    {
        try {
            return Cache::rememberForever('settings', fn () => static::query()->pluck('value', 'key')->all());
        } catch (\Throwable) {
            // Table or cache not available yet (e.g. while running migrations).
            return [];
        }
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        $value = static::values()[$key] ?? null;

        return filled($value) ? $value : $default;
    }

    /** @param array<string, ?string> $pairs */
    public static function put(array $pairs): void
    {
        foreach ($pairs as $key => $value) {
            static::query()->updateOrCreate(['key' => $key], ['value' => $value]);
        }

        Cache::forget('settings');
    }
}
