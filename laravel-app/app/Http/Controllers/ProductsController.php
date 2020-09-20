<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index()
    {
        $models = Products::latest()->paginate(10);
    //    return view('products.index',[
    //        'models' => $models
    //    ]);
    return view('products.index',compact('models'))
    ->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //    $model = new Products();
    //    $model->name = 'Computer';
    //    $model->price = 100;
    //    $model->save();
    return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $model = Products::create($request->all());
        return redirect()->route('products.index')
        ->with('success','บันทึกข้อมูลสำเร็จ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        return view('products.show',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        return view('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success','แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                         ->with('success','ลบข้อมูลเรียบร้อยแล้ว.');
    }
}
