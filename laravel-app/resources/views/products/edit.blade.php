@extends('layouts.app')
@section('title','WEllcome To laravel Site')
@section('content')

<div class = "row">
    
    <div class= "col-lg-12 margin-tb">
      <div class = "pull-left"><h2>Laravel 7 CRUD</h2></div>
      <div class = "float-right">
      <a href="{{ route('products.index')}}" class = "btn btn-danger"> กลับหน้าหลัก</a>
      </div>
   
</div> 
        @if($errors->any())
            <div class= "alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
        @endif
</div>

<div class="card">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">

<form action = "{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">ชื่อ</label>
    <input type="text" class="form-control" name = "name" value="{{ $product->name }}"
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">เบอร์โทรติดต่อ</label>
    <input type="text" class="form-control" name = "price" value="{{ $product->price }}">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>
@stop()
