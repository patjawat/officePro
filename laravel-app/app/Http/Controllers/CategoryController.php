<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   public function Index(){
       $model = Category::all();
       return view('category.index',[
           'model' => $model
       ]);
   }

   public function create(){
    $model = new Category();
       return view('category.create',[
           'model' => $model
       ]);
   }

   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required',
           'detail' => 'required',
       ]);
 
       Category::create($request->all());
  
       return redirect()->route('products.index')
                       ->with('success','Product created successfully.');
   }
}
