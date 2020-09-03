<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\financial\models\FinancialConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'การตั้งค่า';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs($this->render('./script.js'));
?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



<div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                รายการตั้งต่า
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">«</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php // Pjax::begin(['id'=>'config-container']); ?>
                <div class="show-form" style="height: 80px;"></div>
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                  <div class="lists"></div>
                </ul>
            <?php // Pjax::end(); ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <?php Html::a('<i class="fas fa-plus"></i> Add item', null, ['class' => 'btn btn-info float-right','onclick' => 'saveForm()']) ?>
                <?= Html::a('<i class="fas fa-redo-alt"></i> เคลียร์', null, ['class' => 'btn btn-secondary text-white float-right','onclick' => 'loadFormConfig()']) ?>
                <?= Html::a('<i class="fas fa-plus"></i> บันทึกข้อมูล',null, ['id' => 'btn-save','class' => 'btn btn-info text-white float-right mr-2','onclick' => 'saveForm()']) ?>
              </div>
            </div>
<?php
$js = <<< JS
loadData();
function saveForm(){
  // e.preventDefault();
  
  var form = $('#config-form');
  $.ajax({
    type: form.attr('method'),
    url: form.attr('action'),
    data: form.serialize(),
    dataType: "json",
    success: function (res) {
      loadFormConfig();
      // $.pjax.reload({container: '#config-container-pjax'});
      loadData();
      $('#btn-save')
      .removeClass('btn btn-warning')
      .addClass('btn btn-info')
      .html('<i class="fas fa-plus"></i> บันทึก');

    }
  });
}
function loadFormConfig(){
  $.ajax({
    type: "get",
    beforeSend: function(){
      $('.show-form').html('Loading');
    },
    url: "/financial/configs/create",
    dataType: "json",
    success: function (res) {
      $('.show-form').html(res.content);
      $('#btn-save')
      .removeClass('btn btn-warning')
      .addClass('btn btn-info')
      .html('<i class="fas fa-plus"></i> บันทึก');
    }
  });
}

function loadData(){
  $.ajax({
    type: "get",
    url: "/financial/configs/list",
    dataType: "json",
    success: function (res) {
      $('.lists').html(res);
    }
  });
}

$('.edit-form').click(function (e) { 
  e.preventDefault();
  var url = $(this).attr('href');
  $.ajax({
    type: "get",
    url: url,
    dataType: "json",
    success: function (res) {
      $('#btn-save').addClass('btn btn-warning').html('<i class="far fa-edit"></i> แก้ไข');
      $('.show-form').html(res.content);
      
      // $.pjax.reload({container: '#config-container'});

    }
  });
  
});

function clearForm(){

}

JS;
$this->registerJS($js,View::POS_END);
?>


