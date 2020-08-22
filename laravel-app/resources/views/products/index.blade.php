@extends('master')
@section('title','WEllcome To laravel Site')
@section('content')

<div class = "row">
    <div class= "col-lg-12 margin-tb">
      <div class = "float-right">
      <a href="{{ route('products.create')}}" class = "btn btn-danger"> สร้างข้อมูลใหม่</a>
      </div>
    </div>
</div>

   @if($message = Session::get('success'))
     <div class= "alert alert-success">
         <p>{{ $message }}</p>
     </div>

   @endif

  <hr/>

  <div class="card">
    <div class="card-header">
    Laravel 7 CRUD
    </div>
    <div class="card-body">
     
  <table class = "table table-bordered">
    <thead>
      <tr>
        <th>ลำดับที่</th>
        <th>ชื่อ</th>
        <th>เบอร์โทรติดต่อ</th>
        <th>จัดการ</th>
      </tr>
    </thead>

    <tbody>
   
      @foreach ($models as $model)
        
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $model->name }}</td>
          <td>{{ $model->price }}</td>
          <td>
          <form action = "{{ route('products.destroy',$model->id) }}" method="POST">
          <a href = "{{ route('products.show',$model->id) }}" class = "btn btn-info">ดูข้อมูล</a>
          <a href = "{{ route('products.edit',$model->id) }}" class = "btn btn-primary">แก้ไข</a>

          @csrf
          @method('DELETE')
          <button class = "btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูลหรือไม่!!!')">ลบ</button>

          </form>
          </td>
        </tr>
      @endforeach
    </tbody>
       
  </table>
    </div>
    <div class="card-footer text-muted">
      Footer
    </div>
  </div>
  {!! $models->links() !!}
@stop()
