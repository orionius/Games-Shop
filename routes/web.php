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

Route::get('/', 'GamesController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('logged');
Route::get('/playstation', 'PlaystationController@index')->name('playstation');
Route::get('/xbox', 'XboxController@index')->name('xbox');
Route::get('/nintendo', 'NintendoController@index')->name('nintendo');
Route::get('/show/{id?}', 'PlaystationController@show')->name('pages.show');
Route::get('/basket', 'OrderController@index');
Route::get('/basket/add/{id}', 'OrderController@addProduct')->name('basket.add');
Route::get('/basket/delete/{id}', 'OrderController@delete')->name('basket.delete');
