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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post1', function() {
	// if (Cache::has("post")) {
	// 	$post = Cache::get("post");
	// } else {
	// 	$post = "post1";
	// 	Cache::set("post", $post, 60);
	// }

	$post = Cache::remember("post", 60, function() {
		return "post";
	});

	return $post;
});

Route::get("/post", "\App\Http\Controllers\PostController@index");

Route::post("/post", "\App\Http\Controllers\PostController@store");

Route::get("/book", "\App\Http\Controllers\BookController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
