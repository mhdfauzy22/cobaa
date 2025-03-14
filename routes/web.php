<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataAdminController;
use App\Http\Controllers\Admin\DataUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserToko\UserTokoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // can only be accessed by the masteradmin role
    Route::middleware(['role:masteradmin'])->group(function () {
        // Data User
        Route::get('/users', [DataUserController::class, 'index'])->name('users.index');
        Route::post('/users-a', [DataUserController::class, 'store'])->name('users.store');
        Route::put('/users/{id}', [DataUserController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [DataUserController::class, 'destroy'])->name('users.destroy');

        // Data Masteradmin
        Route::get('/data-admin', [DataAdminController::class, 'index'])->name('masteradmin.index');
        Route::post('/data-admin', [DataAdminController::class, 'store'])->name('masteradmin.store');
        Route::put('/data-admin/{id}', [DataAdminController::class, 'update'])->name('masteradmin.update');
        Route::delete('/data-admin/{id}', [DataAdminController::class, 'destroy'])->name('masteradmin.destroy');
    });

    Route::get('/redeem-rewards', [UserTokoController::class, 'index'])->name('usertoko.index');

    
});

require __DIR__ . '/auth.php';
