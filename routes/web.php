<?php

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


Route::resource('blog', 'BlogController');


Route::get('/', function () {
    return view('welcome');
});



Route::get('/upload', function () {
    return view('upload');
});

Route::get('/index', function () {
    return view('shop/index');
});
Route::resource('shop' ,"ShopController");



