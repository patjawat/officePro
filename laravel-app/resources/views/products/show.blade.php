@extends('layouts.app')
@section('title','WEllcome To laravel Site')
@section('content')

<a href="{{ route('products.index')}}" class = "btn btn-danger"> กลับหน้าหลัก</a>

<div class="card">
    <div class="card-header">
       แสดงข้อมูล
    </div>
    <div class="card-body">
        <h4 class="card-title">{{$product->name}}</h4>
        <p class="card-text">ราคา {{$product->price}}</p>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>
@stop()
