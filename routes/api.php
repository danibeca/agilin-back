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

Route::group(['middleware' => ['api']], function ()
{
    Route::resource('accounts.details', 'Account\AccountDetailsController', ['only' => ['index']]);
    Route::resource('accounts.indicators', 'Account\AccountIndicatorController', ['only' => ['show', 'index']]);
    Route::resource('accounts.qa', 'Account\QAController', ['only' => ['show', 'index']]);
    Route::resource('accounts.indicators.series', 'Account\AccountIndicatorSeriesController', ['only' => ['index']]);
    Route::resource('systems', 'System\SystemController', ['only' => ['index']]);
    Route::resource('systems.indicators', 'System\SystemIndicatorController', ['only' => ['show', 'index']]);
    Route::resource('systems.indicators.series', 'System\SystemIndicatorSeriesController', ['only' => ['index']]);
    Route::resource('applications', 'Application\ApplicationController', ['only' => ['index']]);
    Route::resource('applications.indicators', 'Application\ApplicationIndicatorController', ['only' => ['show']]);
    Route::resource('applications.indicators.series', 'Application\ApplicationIndicatorSeriesController', ['only' => ['index']]);
    Route::post('login', 'Auth\TokenAuthController@authenticate');
    Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('token/valid', 'Auth\TokenAuthController@validateToken');
});
