<?php

use Illuminate\Support\Facades\Route;
use Modules\Backend\Http\Controllers\BackendController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('backends', BackendController::class)->names('backend');
});
