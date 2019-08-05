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

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@home')->name('home');
Route::get('/users', 'PageController@users')->name('users');
Route::get('/bans', 'PageController@bans')->name('bans');
Route::get('/mutes', 'PageController@mutes')->name('mutes');
Route::get('/kicks', 'PageController@kicks')->name('kicks');
Route::get('/warns', 'PageController@warns')->name('warns');
Route::get('/punishmentactions', 'PageController@punishmentactions')->name('punishmentactions');
