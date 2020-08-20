<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\MeetingRoom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card text-white bg-dark shadow-lg rounded wrapper-box mt-5">
<div class="card-header">
<i class="far fa-edit"></i> <?=$this->title;?>
</div>
<div class="card-body">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>'form-dark']) ?>

    <?= $form->field($model, 'data_json[photo]')->fileInput()->label('รูปภาพ') ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fas fa-check"></i> บันทึก', ['class' => 'btn btn-primary']) ?>
        <?=Html::a('ยกเลิก',['/mr/meeting-room'],['class' => 'btn btn-default'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
