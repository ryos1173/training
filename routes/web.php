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


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('profile/create','Admin\ProfileController@add');
    Route::post('profile/create','Admin\ProfileController@create');
});

Route::get('user/mypage', 'User\MypageController@index');


Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('profile/goal', 'User\GoalController@add');
    Route::post('profile/goal', 'User\GoalController@create');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('profile/index', 'User\ProfileController@index');
    Route::get('profile/create', 'User\ProfileController@add');
    Route::post('profile/create', 'User\ProfileController@create');
    Route::get('profile/delete', 'User\ProfileController@delete');
});