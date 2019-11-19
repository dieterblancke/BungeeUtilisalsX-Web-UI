<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('bans/recent', 'ApiController@getRecentBans');
Route::get('bans/list', 'ApiController@getBansPage')->where('page', '[0-9]+');
Route::get('mutes/recent', 'ApiController@getRecentMutes');
Route::get('mutes/list', 'ApiController@getMutesPage')->where('page', '[0-9]+');
Route::get('kickwarns/recent', 'ApiController@getRecentKickAndWarns');
Route::get('kicks/list', 'ApiController@getKicksPage')->where('page', '[0-9]+');
Route::get('warns/list', 'ApiController@getWarnsPage')->where('page', '[0-9]+');
Route::get('users/recent', 'ApiController@getRecentUsers');
