<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeController extends Controller

{

    public function __construct(){
        $this->middleware(['auth:api']);
    }
    public function __invoke(Request $request){
        // return dd($request->user());
        $user  = $request->user();
        return response()->json([
        'email' => $user->email,
        'name' => $user->name
        ]);
        // return response()->json(['status' => 'success', 'data' => $request]);

    }
//    public function index(){
//        dd('Hello');
//    }
}
