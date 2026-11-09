<?php

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
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::view('/settings', 'admin.page', ['title' => 'Settings'])->name('settings');

    // UI catalog for developers: only available in the local environment.
    Route::get('/components', function () {
        abort_unless(app()->isLocal(), 404);

        return view('admin.components');
    })->name('components');

    Route::resource('users', UserController::class)->except('show')->middleware('can:manage-users');
});
