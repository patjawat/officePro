<?php

use yii\helpers\Html;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\financial\models\FinancialConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'การตั้งค่า';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs($this->render('./script.js'));
?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">ที่อยู่</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">ประเภทเอกสาร</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill" href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages" aria-selected="false">Messages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false">Settings</a>
              </li>
            </ul>

<div class="tab-content" id="custom-content-above-tabContent">
              <div class="tab-pane fade active show" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
              <div class="show-form-address"></div>

              </div>
              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">

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
                <?php Html::a('<i class="fas fa-plus"></i> Add item', null, ['class' => 'btn btn-info float-right', 'onclick' => 'saveForm()'])?>
                <?=Html::a('<i class="fas fa-redo-alt"></i> เคลียร์', null, ['class' => 'btn btn-secondary text-white float-right', 'onclick' => 'loadFormConfig()'])?>
                <?=Html::a('<i class="fas fa-plus"></i> บันทึกข้อมูล', null, ['id' => 'btn-save', 'class' => 'btn btn-info text-white float-right mr-2', 'onclick' => 'saveForm()'])?>
              </div>
            </div>

              </div>
              <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel" aria-labelledby="custom-content-above-messages-tab">
                 Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
              </div>
              <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel" aria-labelledby="custom-content-above-settings-tab">
                 Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
              </div>
            </div>



<?php
$js = <<< JS
loadData();
loadFormAddress();
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

function loadFormAddress(){
  $.ajax({
    type: "get",
    beforeSend: function(){
      $('.show-form').html('Loading');
    },
    url: "/financial/configs/address",
    dataType: "json",
    success: function (res) {
      $('.show-form-address').html(res.content);
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
$this->registerJS($js, View::POS_END);
?>


