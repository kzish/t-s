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
    Route::get('/newStep2', [AdminHomeController::class, 'newStep2'])->name('newStep2');
    Route::get('/newStep3', [AdminHomeController::class, 'newStep3'])->name('newStep3');
    Route::get('/newStep4', [AdminHomeController::class, 'newStep4'])->name('newStep4');
    Route::get('/newStep5', [AdminHomeController::class, 'newStep5'])->name('newStep5');
    Route::get('/newStep6', [AdminHomeController::class, 'newStep6'])->name('newStep6');
    Route::get('/newStep7', [AdminHomeController::class, 'newStep7'])->name('newStep7');
});

// Include admin Google Auth routes
require __DIR__ . '/auth.php';
