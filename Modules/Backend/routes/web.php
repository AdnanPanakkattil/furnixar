<?php

use Illuminate\Support\Facades\Route;
use Modules\Backend\Http\Controllers\BackendController;

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [BackendController::class, 'index'])
        ->name('backend.dashboard');

});