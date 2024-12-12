<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('moments', [\App\Http\Controllers\MomentController::class, 'index'])
    // ->middleware(['auth', 'verified'])
    ->middleware('auth')
    ->name('moments');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
