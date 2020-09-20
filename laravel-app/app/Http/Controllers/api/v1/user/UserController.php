<?php

namespace App\Http\Controllers\api\v1\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Facedes\Auth;
use App\User;

class UserController extends Controller
{
   public function index(){
       return User::all();
   }
}
