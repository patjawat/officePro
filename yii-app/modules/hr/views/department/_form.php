<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\hr\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(['id' => 'form-department']);?>
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <?=$form->field($model, 'name')->textInput(['maxlength' => true])->label('ชื่อแผนก/ฝ่าย')?>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="form-group" style="margin-top:32px;">
                <?=$model->isNewRecord ? Html::a('<i class="fas fa-check"></i> ตกลง', null, ['class' => 'btn btn-success text-white', 'onclick' => 'return saveDepartment()']) : Html::a('<i class="fas fa-check"></i> ตกลง', null, ['class' => 'btn btn-warning text-white', 'onclick' => 'return saveDepartment()'])?>
                <?=Html::a('<i class="fas fa-undo-alt"></i> ยกเลิก', null, ['class' => 'btn btn-secondary text-white', 'onclick' => 'return loadFormDepartment()'])?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end();?>
</div>

<?php
$js = <<< JS
$("#form-department").submit(function(e) {
            e.preventDefault(); // stopping submitting

        });
JS;
$this->registerJS($js);
?>