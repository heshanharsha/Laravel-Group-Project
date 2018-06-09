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

  Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    // make routes to phone,Laptop,Smartwatch and tablet pages
    Route::get('/phone', 'AdminController@phone')->name('admin.dashboard.phone');
    Route::get('/laptop', 'AdminController@laptop')->name('admin.dashboard.laptop');
    Route::get('/tablet', 'AdminController@tablet')->name('admin.dashboard.tablet');
    Route::get('/smartwatch', 'AdminController@smartwatch')->name('admin.dashboard.smartwatch');
  });
