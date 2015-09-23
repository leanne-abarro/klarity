<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('test', function () {
    return \App\Models\Post::find(3)->labels;
    //return \App\Models\User::find(2);
});

// Route::get('/', function () {
//     return view('allposts');
// });

// ===== posts routes =====

Route::resource('posts','PostsController');


// Route::get('post', function () {
//     return view('post');
// });

// ===== labels routes =====

Route::get('labels/{id}', function ($id) {

	$label = \App\Models\Label::find($id);

    return view('label',['label'=>$label]);
});

// ===== users routes =====

Route::resource('users','UsersController');


// ===== login routes =====

Route::get('login','LoginController@showLoginForm');

Route::post('login','LoginController@processLogin');

Route::get('logout','LoginController@logout');


