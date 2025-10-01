<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AdminHomeController::class, 'login'])->name('login');
Route::get('/', [AdminHomeController::class, 'login'])->name('login');
Route::post('/logout', [AdminHomeController::class, 'logout'])->name('logout');


// Admin Routes (requires auth)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'dashboard'])->name('dash');
});

// Include admin Google Auth routes
require __DIR__ . '/auth.php';
