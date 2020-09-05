<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\financial\models\CustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ลูกค้า';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$layout = <<< HTML
<div class="clearfix"></div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list-ul"></i> รายการ{$this->title}</h3>

                <div class="card-tools">
                 <div style="width: 400px;">
                    {$this->render('_search', ['model' =>$searchModel])}
                  </div> 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 500px;">
              {items}
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-left">
                {summary}
                </ul>
                <ul class="pagination pagination-sm m-0 float-right">       
                  {pager}
                </ul>
              </div>
            </div>

HTML;

?>

<div class="row">
<div class="col-6">
<?php  echo $this->render('_search', ['model' => $searchModel]); ?>

<!-- <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="คำค้น">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary" type="button"><i class="fas fa-search"></i> ค้นหา</button>
    
  </div>
</div> -->
</div>
</div>


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'striped' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fullname',
            'address',

            [
                'class' => 'kartik\grid\ActionColumn',
                'width' => '110px',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
              </div>
              <!-- /.card-body -->
            </div>



<div class="customers-index">


</div>
