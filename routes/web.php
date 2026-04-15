<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/login');
});

// Route::get('cart', function () {
//     return view('frontend.cart');
// });
// Route::get('offers', function () {
//     return view('frontend.offers');
// });
// Route::get('new-arrivals', function () {
//     return view('frontend.new-arrivals');
// });
// Route::get('wishlist', function () {
//     return view('frontend.wishlist');
// });
// Route::get('login', function () {
//     return view('frontend.login');
// });
// Route::get('about', function () {
//     return view('frontend.about');
// });
// Route::get('branches', function () {
//     return view('frontend.branches');
// });
