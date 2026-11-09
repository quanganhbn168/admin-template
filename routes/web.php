<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin');

// No public registration: accounts are created by the super admin (Admin > Users).
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::view('/settings', 'admin.page', ['title' => 'Settings'])->name('settings');

    Route::resource('users', UserController::class)->except('show')->middleware('can:manage-users');
});

// Full Tabler preview gallery (146 demo pages), local only. Run `pnpm assets:preview` once for demo images.
Route::get('/preview/{page?}', function (string $page = 'index') {
    abort_unless(app()->isLocal(), 404);

    $view = 'preview.pages.' . str_replace('/', '.', $page);
    abort_unless(view()->exists($view), 404);

    return view($view);
})->where('page', '[A-Za-z0-9\-\/]+')->name('preview');

// Form elements catalog (same rules as the component catalog below).
Route::get('/admin/components/forms', function () {
    abort_unless(app()->isLocal(), 404);

    return view('admin.components-forms');
})->name('admin.components.forms');

// UI catalog for developers: no login needed, but only in the local environment.
Route::get('/admin/components', function () {
    abort_unless(app()->isLocal(), 404);

    return view('admin.components');
})->name('admin.components');
