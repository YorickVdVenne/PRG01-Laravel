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

Route::prefix('/restaurants')->group(function() {
Route::get('/', 'RestaurantController@index');
Route::get('/{restaurant}', 'RestaurantController@show');
});

Route::prefix('/profile')->group(function() {
    Route::get('/', 'ProfileController@index')->name('profile.show');
    Route::get('/edit', 'ProfileController@edit');
    Route::patch('/', 'ProfileController@update');
});

Route::prefix('/admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/restaurants/create', 'AdminController@create');
    Route::post('/', 'AdminController@store');
    Route::get('/{restaurant}', 'AdminController@show');
    Route::get('/{restaurant}/edit', 'AdminController@edit');
    Route::patch('/{restaurant}', 'AdminController@update');
    Route::delete('/{restaurant}', 'AdminController@destroy');
});
