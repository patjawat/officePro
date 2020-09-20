@extends('master')
@section('title','WEllcome To laravel Site')
@section('content')

<?php foreach ($model as $model):?>
    <div class="card card-widget shadow mb-3 bg-white rounded">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle" src="/adminlte3/dist/img/user1-128x128.jpg" alt="">            <span class="username"><a href="#" data-card-widget="collapse">ห้องประชุมทานตะวัน</a> :
              
            </span>
            <span class="description">
               xxx

            </span>

        </div>
        <!-- /.user-block -->
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                <i class="far fa-circle"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" aria-expanded="false"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">

    <div class="d-flex bd-highlight">
  <div class="p-2 flex-shrink-1 bd-highlight">
  <img src="/uploads/mr/img/5f3fc9f344957324277704.jpg" width="300px" alt="">  </div>
  <div class="p-2 w-100 bd-highlight">

<div>
<div class="user-block">
            <img class="img-circle" src="/adminlte3/dist/img/user1-128x128.jpg" alt="">            
            <span class="username"><a href="#" data-card-widget="collapse">หัวข้อ :   </a> :
            </span>
            <span class="description">
            15/03/2563
            </span>
        </div>
       
</div>
<br>
<br>
<div>
<div class="user-block">
            <img class="img-circle" src="/adminlte3/dist/img/user1-128x128.jpg" alt="">            
            <span class="username"><a href="#" data-card-widget="collapse">หัวข้อ : </a> :
            </span>
            <span class="description">
            15/03/2563
            </span>
        </div>
</div>

  </div>
</div>
        <!-- Social sharing buttons -->
        <a class="btn btn-primary loading-page" href="/module/mr/books/create?category_id=1" data-pjax="0"><i class="fas fa-print"></i> จองห้องประชุม</a>        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
        <span class="float-right text-muted">45 likes - 2 comments</span>
    </div>
    <!-- /.card-body -->
</div>
<?php endforeach;?>
@stop()
