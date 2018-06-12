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
Route::resource('/blog', 'BlogController');
Route::resource('/post', 'PostController');

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));
// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/ourJourney', function () {
    $name = "Our Journey";
    return view('ourJourney' ,compact($name));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
