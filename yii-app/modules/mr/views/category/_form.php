<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php $form = ActiveForm::begin(); ?>
<div class="card">
    <div class="card-header">
     <?=$this->title;?>
    </div>
    <div class="card-body">


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'photo')->widget(\dkhlystov\uploadimage\widgets\UploadImage::className(), [
    'maxImageWidth' => 640,
    'maxImageHeight' => 480,
    'uploadPath' => '/uploads/mr/img'
]) ?>


    </div>
    <div class="card-footer text-muted">
    <div class="form-group">
        <?=Html::submitButton('<i class="fas fa-check"></i> บันทึก', ['class' => 'btn btn-success'])?>
        <?=Html::a('ยกเลิก', ['/mr/category','type' => $model->type], ['class' => 'btn btn-secondary'])?>
    </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>

