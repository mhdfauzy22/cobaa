<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatauserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Data User
    Route::get('/users', [DatauserController::class, 'index'])->name('users.index');
    Route::post('/users', [DatauserController::class, 'store'])->name('users.store');
    Route::put('/users/{id}', [DatauserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [DatauserController::class, 'destroy'])->name('users.destroy');

});

require __DIR__ . '/auth.php';
