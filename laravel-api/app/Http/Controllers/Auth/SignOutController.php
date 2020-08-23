<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignOutController extends Controller
{

    // public function __invoke(){
        public function index()
        {
            auth()->logout();
    
            return response()->json(['message' => 'Successfully logged out']);
        }
    // }

}
