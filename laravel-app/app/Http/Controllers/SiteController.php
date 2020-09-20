<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class SiteController extends Controller
{
    public function Index(){
        // $model = Category::all();
        // return view('site.index', ['model' => $model]);
        return view('site.index');
    }

    public function About(){
        return view('site.about');
    }
}
