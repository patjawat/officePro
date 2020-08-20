<?php

use app\modules\mr\models\Room;
use app\modules\mr\models\Gadget;
use kartik\datecontrol\DateControl;
use kartik\widgets\Select2;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\helpers\Url;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;
use yii\web\JsExpression;
$this->registerJS($this->render('../../web/js/mrScript.js'));
?>

<div class="event-room-form">

    <?php $form = ActiveForm::begin(['id' => 'events-form']);?>


    <div class="row">
        <div class="col-4">
            <?=$form->field($model, 'room_id')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Room::find()->all(), 'id', 'name'),
    'options' => ['placeholder' => 'เลือกห้องประชุม','id' => 'room_id'],
    'pluginOptions' => [
        'allowClear' => true,
    ],
]);?>
        </div>
        <div class="col-8">
            <?=$form->field($model, 'title')->textInput()?>
        </div>

    </div>
    <?php
    echo $form->field($model, 'gadget')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Gadget::find()->all(),'id','name'),
        'options' => ['placeholder' => 'รายการอุแกรณ์...'],
        'pluginOptions' => [
            'allowClear' => true,
            'multiple' => true
        ],
    ]);
    ?>

    <div class="row">
        <div class="col-12 col-sm-12">

            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                        href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                        aria-selected="true">รายละเอียดการประชุม</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                        href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile"
                        aria-selected="false"><i class="fas fa-user-friends"></i> ผู้เข้าร่วมประชุม</a>
                </li>
            </ul>

            <div class="tab-content pt-1" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                    aria-labelledby="custom-tabs-three-home-tab">
                    <?=$form->field($model, 'body')->widget(CKEditor::className(),[
                    'editorOptions' => ElFinder::ckeditorOptions('mr/elfinder',[
                    ]),])->label(false)?>

                </div>
                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-three-profile-tab">
                    <h1 class="text-center">
                        ระบบอยู่ในช่วงพัฒนา</h1>
                </div>

            </div>

        </div>

    </div>


    <?php ActiveForm::end();?>

</div>

<?php
$js = <<< JS

// $('body').on('beforeSubmit', 'form#events-form', function () {
//      var form = $(this);
//      // return false if form still have some validation errors
//      if (form.find('.has-error').length) {
//           return false;
//      }
//      // submit form
//      $.ajax({
//           url: form.attr('action'),
//           type: 'post',
//           data: form.serialize(),
//           success: function (response) {
//               console.log(response);
//                if(response){
//                 closeModal()
//                }else{
//                 alert(response)
//                }
//           }
//      });
//      return false;
// });

JS;
$this->registerJS($js);
?>