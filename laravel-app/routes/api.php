<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
// use Laravel\Sanctum\HasApiTokens;
use App\User;
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
// Auth::routes();

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/current','api\v1\user\UserController@index');
// Route::group(['middleware' => ['auth']], function () {
    Route::delete('/products/{id}','MembersController@destroy');
    Route::get('/products/{id}','MembersController@show');
    Route::put('/products/{id}','MembersController@update');
    // Route::resource('/v1/user','\auth\v1\UserController');
    // });
    
    
    Route::middleware(['api'])->group(function ($router) {
        Route::resource('/products','MembersController');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me')->middleware('log.route');

    Route::post('register', 'RegistrationController@register');
    Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
    Route::post('password/email', 'ForgotPasswordController@forgot');
    Route::post('password/reset', 'ForgotPasswordController@reset');

    Route::patch('user/profile', 'UserController@updateProfile');
});