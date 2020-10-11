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

Route::group(['namespace' => 'backend', 'prefix' => 'mg-admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('roles', 'RoleController');
});
