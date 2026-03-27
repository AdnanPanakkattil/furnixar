<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('cart', function () {
    return view('frontend.cart');
});