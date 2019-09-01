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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Route::get('/tos', 'HomeController@tos')->name('tos');

Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

Route::get('auth/login/{provider}',          'Auth\SocialAccountController@redirectToProvider');
Route::get('/auth/login/callback/{provider}', 'Auth\SocialAccountController@handleProviderCallback');

// //Twitter
// Route::get('auth/login/twitter', 'Auth\SocialController@getTwitterAuth');
// Route::get('auth/login/callback/twitter', 'Auth\SocialController@getTwitterAuthCallback');

// //Facebook
// Route::get('auth/login/facebook', 'Auth\SocialController@getFacebookAuth');
// Route::get('auth/login/callback/facebook', 'Auth\SocialController@getFacebookAuthCallback');
