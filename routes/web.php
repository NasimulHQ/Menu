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

Route::get('/', function () {
    return view('welcome');
});

Route::get('menus', 'App\Http\Controllers\MenuController@index');
Route::get('menus-show', 'App\Http\Controllers\MenuController@show');
Route::post('menus', 'App\Http\Controllers\MenuController@store')->name('menus.store');
