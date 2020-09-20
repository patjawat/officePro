<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class MembersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
        $product = Products::all();
        return response()->json(['status' => 'success', 'data' => $product]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $model = Products::create($request->all());
        // return redirect()->route('products.index')
        // ->with('success','บันทึกข้อมูลสำเร็จ');
      

    }

    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $product->update($request->all());
        return response()->json(['status' => 'success']);
    }

    public function Show($id)
    {
        $product = Products::find($id);
        return response()->json(['status' => 'success', 'data' => $product]);
    }

    public function destroy(Products $product)
    {
        $product->delete();
        // return redirect()->route('products.index')
        //                  ->with('success','ลบข้อมูลเรียบร้อยแล้ว.');
        return 'success';
    }
}
