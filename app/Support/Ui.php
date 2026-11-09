<?php

namespace App\Support;

/**
 * Turns config/ui.php into the attributes Tabler expects on <html>.
 * A null value means "default": the attribute is left out (and removed if the browser remembered another one).
 */
class Ui
{
    public static function layout(): string
    {
        return in_array($layout = config('ui.layout'), ['vertical', 'horizontal', 'condensed'], true) ? $layout : 'vertical';
    }

    /** @return array<string, ?string> */
    public static function attributes(): array
    {
        $vertical = self::layout() === 'vertical';
        $theme = config('ui.theme');

        return [
            // The admin is light only; ignore the visitor's OS dark mode.
            'theme' => 'light',
            'navbar-position' => $vertical ? 'vertical' : null,
            'layout' => self::pick(config('ui.width'), ['boxed', 'fluid']),
            'sidebar' => $vertical ? self::pick(config('ui.sidebar'), ['folded', 'folded-hover']) : null,
            'navbar' => filter_var(config('ui.navbar_sticky'), FILTER_VALIDATE_BOOLEAN) ? 'sticky' : null,
            'navbar-style' => self::pick(config('ui.navbar_style'), ['floating']),
            'theme-primary' => self::differs($theme['primary'], 'blue'),
            'theme-base' => self::differs($theme['base'], 'neutral'),
            'theme-font' => self::differs($theme['font'], 'sans-serif'),
            'theme-radius' => self::differs((string) $theme['radius'], '1'),
        ];
    }

    /** Extra classes for the vertical sidebar (<aside>). */
    public static function sidebarClasses(): string
    {
        return match (config('ui.sidebar_style')) {
            'end' => 'navbar-end',
            'transparent' => 'navbar-transparent',
            default => '',
        };
    }

    private static function pick(?string $value, array $allowed): ?string
    {
        return in_array($value, $allowed, true) ? $value : null;
    }

    private static function differs(?string $value, string $default): ?string
    {
        return preg_match('/^[a-z0-9.-]{1,32}$/', (string) $value) && $value !== $default ? $value : null;
    }
}
