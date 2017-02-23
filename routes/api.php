<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => ['cors', 'web']], function ()
{
    Route::resource('users', 'UsersController', ['except' => ['create', 'edit']]);
    Route::resource('accounts', 'Account\AccountController', ['only' => ['show']]);
    Route::resource('accounts.indicators', 'Account\AccountIndicatorController', ['only' => ['show']]);
    Route::resource('accounts.indicators.series', 'Account\AccountIndicatorSeriesController', ['only' => ['index']]);
    Route::post('login', 'Auth\TokenAuthController@authenticate');
    Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});
