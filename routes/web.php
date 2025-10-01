<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
Route::get('/', [AdminAuthController::class, 'login'])->name('login');
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');


// Admin Routes (requires auth)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'dashboard'])->name('dash');
    Route::get('/index', [AdminHomeController::class, 'index'])->name('index');
    Route::get('/newStep1', [AdminHomeController::class, 'newStep1'])->name('newStep1');
});

// Include admin Google Auth routes
require __DIR__ . '/auth.php';
