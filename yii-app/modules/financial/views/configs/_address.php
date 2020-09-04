<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['id' => 'formAdadress']);?>
<div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                ตั้งค่าที่อยู่หน่อยงาน
                </h3>

                <div class="card-tools">
                 buttom
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <?=$form->field($model, 'data_json[company_name]')->textInput(['maxlength' => true, 'placeholder' => 'บริษัท หรือ ชื่อ-นามสกุล'])->label('ชื่อหน่วยงาน')?>
                            <?=$form->field($model, 'data_json[company_address1]')->textInput(['maxlength' => true, 'placeholder' => 'เลขที่'])->label('ที่อยู๋1')?>
                            <?=$form->field($model, 'data_json[company_address2]')->textInput(['maxlength' => true, 'placeholder' => 'ตำบล อำเภอ จังหวัด'])->label('ที่อยู่2')?>
                            <?=$form->field($model, 'data_json[tax]')->textInput(['maxlength' => true, 'placeholder' => '0000000000'])->label('เลขที่เสียภาษี')?>
                        </div>
                    </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <?php echo Html::a('ยกเลิก', null, ['class' => 'btn btn-secondary text-white float-right']) ?>
                <?php echo Html::submitButton('บันทึก', ['class' => 'btn btn-info float-right mr-3']) ?>
              </div>
            </div>
    <?php ActiveForm::end();?>
<?php
$js = <<< JS
$("#formAdadress").on('beforeSubmit', function (e) {
  e.preventDefault(); // stopping submitting
  var form = $(this);
    $.ajax({
        type: form.attr("method"),
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        success: function (response) {
            console.log(response)
            if(response){
                alert('success');
            }else{

            }
        }
    });
    return false;
  });

JS;
$this->registerJS($js);
?>


