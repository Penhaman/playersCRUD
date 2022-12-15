<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', 'PlayerController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('players')->group(function () {
    Route::get('', 'PlayerController@index');
    // Auth Middleware
    Route::group(['middleware' => 'auth'], function () {
        Route::get('create', 'PlayerController@create');
        Route::post('', 'PlayerController@store');
        Route::get('{player}/edit', 'PlayerController@edit');
        Route::put('{player}', 'PlayerController@update');
        Route::delete('{player}', 'PlayerController@destroy');
        Route::get('export', 'PlayerController@export');
    });
    Route::get('{player}', 'PlayerController@show');
});

