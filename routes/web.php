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
    return view('users.index');
});
Route::get('/showroom', function () {
    return view('users.showroom');
});
Route::get('/category', function () {
    return view('users.category');
});
Route::get('/product', function () {
    return view('users.product');
});
Route::get('/about', function () {
    return view('users.about');
});

Route::get('/contact', function () {
    return view('users.contact');
});

Route::get('/faqs', function () {
    return view('users.faqs');
});
