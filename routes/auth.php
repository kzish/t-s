<?php

use App\Http\Controllers\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Google OAuth Routes
    Route::get('auth/google', [AdminAuthController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('auth/google/callback', [AdminAuthController::class, 'handleGoogleCallback']);
});

