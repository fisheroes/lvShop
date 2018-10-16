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

Route::get('page-home', 'homeController@home');
Route::get('page-stuff', 'homeController@stuff');
Route::get('page-order', 'homeController@order');
Route::get('page-about', 'homeController@about');
