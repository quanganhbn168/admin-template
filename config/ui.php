<?php

/*
 | Look & feel of the admin. Every value can be overridden in .env, so each project cloned from
 | this template can pick its own layout and colours without touching the views.
 | (These map to Tabler's data-bs-* attributes on <html>.)
 */
return [

    // Menu structure: vertical (sidebar) | horizontal (top bar + menu row) | condensed (single top bar)
    'layout' => env('UI_LAYOUT', 'vertical'),

    // Page width: default | boxed | fluid
    'width' => env('UI_WIDTH', 'default'),

    // Sidebar (vertical layout only): default | folded (icons only) | folded-hover (icons, expands on hover)
    'sidebar' => env('UI_SIDEBAR', 'default'),

    // Sidebar look (vertical layout only): default | end (right side) | transparent
    'sidebar_style' => env('UI_SIDEBAR_STYLE', 'default'),

    // Keep the top navbar fixed while scrolling (horizontal layouts)
    'navbar_sticky' => env('UI_NAVBAR_STICKY', false),

    // Navbar look: default | floating
    'navbar_style' => env('UI_NAVBAR_STYLE', 'default'),

    // Colour theme
    'theme' => [
        // blue azure indigo purple pink red orange yellow lime green teal cyan inverted
        'primary' => env('UI_PRIMARY', 'blue'),
        // neutral slate gray zinc stone mist
        'base' => env('UI_BASE', 'neutral'),
        // sans-serif serif monospace comic
        'font' => env('UI_FONT', 'sans-serif'),
        // 0 0.5 1 1.5 2
        'radius' => env('UI_RADIUS', '1'),
    ],

];
