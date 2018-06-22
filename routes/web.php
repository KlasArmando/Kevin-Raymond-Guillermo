<?php

use App\blog;
use App\User;
use Illuminate\Support\Facades\Input;

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
Route::resource('/user', 'HomeController');

Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('shop/index');
});
Route::resource('shop' ,"ShopController");

Route::get('/ourJourney', function () {
    return view('ourJourney');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::any ( '/searchBlog', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
		$blog = blog::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
		if (count ( $blog ) > 0)
			return view ( 'blog/search' )->withDetails ( $blog )->withQuery ( $q );
		else
			return view ( 'blog/search' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'blog/search' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::any ( '/searchAdminBlog', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
		$blog = blog::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
		if (count ( $blog ) > 0)
			return view ( 'adminSearchBlog' )->withDetails ( $blog )->withQuery ( $q );
		else
			return view ( 'adminSearchBlog' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'adminSearchBlog' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::any ( '/searchUser', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
		// $blog = blog::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->get ();
    $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
		if (count ( $user ) > 0)
			return view ( 'adminSearchUser' )->withDetails ( $user)->withQuery ( $q );
		else
			return view ( 'adminSearchUser' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'adminSearchUser' )->withMessage ( 'No Details found. Try to search again !' );
} );