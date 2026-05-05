<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/admin/dashboard');
});



// Route::get('/', [AuthController::class, 'login'])->name('login');
