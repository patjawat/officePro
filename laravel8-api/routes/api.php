<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\Api\CustomerController;
use App\Http\controllers\Api\UploadController;
use App\Http\controllers\Api\DocumentController;
use App\Http\controllers\Api\MeetingRoomController;
use App\models\User;
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

Route::apiResource('customers', CustomerController::class);

Route::get('login', function () {
    abort(401);
})->name('login');

Route::post('login', function () {
    $req = request()->only(['email', 'password']);
    if (!auth()->validate($req)) {
        abort(401);
    } else {
       $user = User::where('email',$req['email'])->first();
    //ถ้ามี tokens เดิมให้ลบของเก่าแล้วสร้างใหม่
    $user->tokens()->delete();
    //แนบแหล่งที่มาและสิทธิ admin
    $token = $user->createToken('postman', ['admin']);
        return response()->json([
            'token' => $token->plainTextToken,
            'profile' => $user,
            // 'status' => 'ok',
        ]);
    }
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('numbers', function () {
        $use = auth()->user();
        return $use->tokenCan('admin') ? response()->json([1, 2, 3, 4]) : abort(403);
    });

    Route::get('user', function (Request $request) {
        // return response()->json([1, 2, 3, 4]);
        $user =  $request->user();
        $token = $user->createToken('postman', ['admin']);
        return response()->json([
            'token' => $token->plainTextToken,
            'profile' => $user,
            // 'status' => 'ok',
        ]);
    });
    Route::get('storefile',function(){
        return 'dd';
    });
  
    Route::apiResource('meetting-room', MeetingRoomController::class);
});

// Route::prefix('v1')->group(function(){
    // Route::post('store-file', DocumentController::class);
//    });