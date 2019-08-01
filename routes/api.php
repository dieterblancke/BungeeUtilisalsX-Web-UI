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
Route::get('mutes/recent', 'ApiController@getRecentMutes');
Route::get('kickwarns/recent', 'ApiController@getRecentKickAndWarns');
