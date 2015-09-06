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

// Route::get('/', function () {
//     return view('interact');
// });

Route::get('/', 'UserController@signin');
Route::get('signup', 'UserController@signup');
Route::get('profiles', 'UserController@profiles');
Route::get('loggedin', 'UserController@loggedin');
Route::get('profiles', 'UserController@profiles');
Route::get('logout', 'UserController@logout');





Route::get('signup/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'UserController@confirm'
]);







Route::post('signup', 'UserController@saveuser');
Route::post('signin', 'UserController@dologin');
Route::post('checkusername', 'UserController@checkUsername');
Route::post('checkemail', 'UserController@checkEmail');
Route::post('storefirstdetails', 'UserController@storefirstdetails');
Route::post('users/fav', 'UserController@add_fav');
Route::post('users/interest', 'UserController@add_interest');