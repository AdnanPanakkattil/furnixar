<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('auths', AuthController::class)->names('auth');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginForm'])->name('login.submit');
});
