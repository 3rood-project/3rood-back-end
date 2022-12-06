<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('users.signup');
});
Route::get('/login', function () {
    return view('users.login');
});

Route::get('/forgot-password', function () {
    return view('users.forgot-password');
});

Route::get('/reset-password', function () {
    return view('users.reset-password');
});

Route::get('/change-pass', function () {
    return view('users.change-pass');
});

Route::get('/editProfile', function () {
    return view('users.profile-edit');
});

Route::get('/profile', function () {
    return view('users.profile');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/allshops', function () {
    return view('Shopping.allshops');
});

Route::get('/allshops/name/product', function () {
    return view('Shopping.productDetails');
});

Route::get('/allshops/name', function () {
    return view('Shopping.profile');
});

Route::get('/profile/orderDetails/id', function () {
    return view('users.orderDetails');
});

Route::get('/cart', function () {
    return view('Shopping.cart');
});
Route::get('/checkout', function () {
    return view('Shopping.checkout');
});

Route::get('/shopUser/profile/', function () {
    return view('shop.profile');
});
Route::get('/orders', function () {
    return view('shop.shopOrder');
});
Route::get('/activeOrder', function () {
    return view('shop.profile');
});

Route::get('/joinUs ', function () {
    return view('shop.shop-signup');
});
Route::get('/shop-login', function () {
    return view('shop.login');
});
Route::get('/addProduct ', function () {
    return view('shop.addProduct');
});
