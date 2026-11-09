<?php

/*
 | Navigation shared by every layout (vertical sidebar, horizontal, condensed).
 | label: English key, translated through lang/*.json
 | route + match: route name, and route pattern that marks the item active
 | can: gate that must pass, local: only visible when APP_ENV=local
 | children: makes the item a dropdown
 */
return [
    ['label' => 'Dashboard', 'icon' => 'ti-home', 'route' => 'admin.dashboard'],
    ['label' => 'Users', 'icon' => 'ti-users', 'route' => 'admin.users.index', 'match' => 'admin.users.*', 'can' => 'manage-users'],
    ['label' => 'Settings', 'icon' => 'ti-settings', 'route' => 'admin.settings'],
    [
        'label' => 'Developer',
        'icon' => 'ti-code',
        'local' => true,
        'children' => [
            ['label' => 'Components', 'route' => 'admin.components'],
            ['label' => 'Tabler preview', 'route' => 'preview'],
        ],
    ],
];
