<?php

use Illuminate\Support\Facades\Route;

/*
 | Tabler preview gallery: 144 demo pages converted to Blade (resources/views/preview), local only.
 | Run `pnpm assets:preview` once to download the demo images.
 | Not needed in real projects: `php artisan template:strip-preview` removes it (this file included).
 */
Route::get('/preview/{page?}', function (string $page = 'index') {
    abort_unless(app()->isLocal(), 404);

    $view = 'preview.pages.' . str_replace('/', '.', $page);
    abort_unless(view()->exists($view), 404);

    return view($view);
})->where('page', '[A-Za-z0-9\-\/]+')->name('preview');
