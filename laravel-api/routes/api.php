<?php

use App\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('login', function () {
    abort(401);
})->name('login');

// Route::post('login', function () {
//     $req = request()->only(['email', 'password']);
//     if (!auth()->validate($req)) {
//         abort(401);
//     } else {
//         $user = User::where('email', $req['email'])->first();
//         //ถ้ามี tokens เดิมให้ลบของเก่าแล้วสร้างใหม่
//         $user->tokens()->delete();
//         //  $token = $user->createToken('postman');
//         $token = $user->createToken('postman', ['admin']);
//         return response()->json([
//             'token' => $token->plainTextToken,
//             'status' => 'ok',
//         ]);
//     }
// });

Route::post('login', function () {
    $req = request()->only(['username', 'password']);
    $name = $req['username'];
    // if (!auth()->validate($req)) {
    //     abort(401);
    // } else {
       $user = User::where('name',$req['username'])->first();
    //     //ถ้ามี tokens เดิมให้ลบของเก่าแล้วสร้างใหม่
    $user->tokens()->delete();
    $token = $user->createToken('postman');
    $token = $user->createToken('postman', ['admin']);
        return response()->json([
            'token' => $token->plainTextToken,
            'user' => $user,
            'status' => 'ok',

        ]);
    // }
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('numbers', function () {
        $use = auth()->user();
        return $use->tokenCan('admins') ? response()->json([1, 2, 3, 4]) : abort(403);
    });
});

Route::apiResource('customers', 'Api\CustomersController');
