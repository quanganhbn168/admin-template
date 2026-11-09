<?php

namespace App\Support;

class Menu
{
    /**
     * Menu items visible to the current user, ready to render.
     *
     * @return list<array{label: string, icon: ?string, href: string, active: bool, children: list<array>}>
     */
    public static function items(): array
    {
        return collect(config('menu'))
            ->map(fn (array $item) => self::resolve($item))
            ->filter()
            ->values()
            ->all();
    }

    private static function resolve(array $item): ?array
    {
        if (($item['local'] ?? false) && ! app()->isLocal()) {
            return null;
        }

        if (isset($item['can']) && ! auth()->user()?->can($item['can'])) {
            return null;
        }

        $children = collect($item['children'] ?? [])
            ->map(fn (array $child) => self::resolve($child))
            ->filter()
            ->values()
            ->all();

        if (isset($item['children']) && $children === []) {
            return null;
        }

        return [
            'label' => __($item['label']),
            'icon' => $item['icon'] ?? null,
            'href' => $children ? '#' : route($item['route']),
            'active' => $children
                ? collect($children)->contains('active', true)
                : request()->routeIs($item['match'] ?? $item['route']),
            'children' => $children,
        ];
    }
}
