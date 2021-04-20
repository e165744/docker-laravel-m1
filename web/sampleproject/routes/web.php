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

Route::group(['middleware' => 'auth'], function(){
    // ユーザープロファイル
    Route::get('/profile', 'UserController@getProfile')->name('user.profile');
    // ログアウト
    Route::get('/logout', 'UserController@getLogout')->name('logout');
});

Route::group(['middleware' => 'guest'], function(){
    // 登録
    Route::get('user/signup', 'UserController@getSignup')->name('signup');
    Route::post('user/signup/post', 'UserController@signupPost')->name('signup.post');
    // ログイン
    Route::get('user/signin', 'UserController@getSignin')->name('signin');
    Route::post('user/signin/post', 'UserController@signinPost')->name('signin.post');
});

// Route::get('/home', 'HomeController@index')->name('home');