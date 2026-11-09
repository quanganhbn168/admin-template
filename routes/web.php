<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin');

// No public registration: accounts are created by the super admin (Admin > Users).
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store')->middleware('throttle:10,1');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email')->middleware('throttle:5,1');
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'store'])->name('password.update');
});

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');

    Route::post('/uploads', [UploadController::class, 'store'])->name('uploads.store')->middleware('throttle:60,1');

    Route::middleware('can:manage-settings')->group(function () {
        Route::get('/settings', [SettingController::class, 'edit'])->name('settings');
        Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
    });

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

// Card patterns (notice, pricing, KPI, promo, weather, profile) on tinted gradient cards.
Route::get('/admin/components/cards', function () {
    abort_unless(app()->isLocal(), 404);

    return view('admin.components-cards');
})->name('admin.components.cards');

// Calendar, rich text editor and uploader demo (same rules as the other catalogs).
Route::get('/admin/components/advanced', function () {
    abort_unless(app()->isLocal(), 404);

    return view('admin.components-advanced');
})->name('admin.components.advanced');

// UI catalog for developers: no login needed, but only in the local environment.
Route::get('/admin/components', function () {
    abort_unless(app()->isLocal(), 404);

    return view('admin.components');
})->name('admin.components');
