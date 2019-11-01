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

Route::any('/search', 'SearchController@search');

Route::prefix('/profile')->group(function() {
    Route::get('/', 'ProfileController@index')->name('profile.show');
    Route::get('/edit', 'ProfileController@edit');
    Route::patch('/', 'ProfileController@update');
});

Route::prefix('/admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/restaurants', 'AdminRestaurantController@index');
    Route::get('/restaurants/create', 'AdminRestaurantController@create');
    Route::post('/restaurants', 'AdminRestaurantController@store');
    Route::get('/restaurants/{restaurant}', 'AdminRestaurantController@show');
    Route::get('/restaurants/{restaurant}/edit', 'AdminRestaurantController@edit');
    Route::patch('/restaurants/{restaurant}', 'AdminRestaurantController@update');
    Route::delete('/restaurants/{restaurant}', 'AdminRestaurantController@destroy');
});
