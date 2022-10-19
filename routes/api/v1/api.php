<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Auth
Route::prefix('user')->group( function() {
    Route::post('/login', 'App\Http\Controllers\api\v1\auth\LoginUser');
    Route::middleware('auth:api')->get('/current', 'App\Http\Controllers\api\v1\auth\CurrentUser');
});

//Users
Route::middleware('auth:api')->group(function() {
    Route::apiResource('users', 'App\Http\Controllers\api\v1\user\UserController');
    Route::patch('user/password', 'App\Http\Controllers\api\v1\user\UserController@password');
    Route::get('user/search', 'App\Http\Controllers\api\v1\user\UserController@search');
    Route::get('user/{user}/events', 'App\Http\Controllers\api\v1\user\UserController@events');
});

//Events
Route::middleware('auth:api')->group(function() {
    Route::apiResource('events', 'App\Http\Controllers\api\v1\event\EventController');
    Route::get('event/{event}/invitations', 'App\Http\Controllers\api\v1\event\EventController@invitEvent');
    Route::get('event/bulk-import', 'App\Http\Controllers\api\v1\event\EventController@import');
});

//invitations
    Route::apiResource('invitations', 'App\Http\Controllers\api\v1\invitation\InvitationController');
    Route::get('invitation/qrcode', 'App\Http\Controllers\api\v1\invitation\InvitationController@qrCode');
    Route::post('invitation/bulk-import', 'App\Http\Controllers\api\v1\invitation\InvitationController@import');


Route::patch('invitation/{invitation}/guest-response', 'App\Http\Controllers\api\v1\invitation\InvitationController@update');