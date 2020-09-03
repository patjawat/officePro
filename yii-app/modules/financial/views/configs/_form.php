<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\financial\models\FinancialConfig */
/* @var $form yii\widgets\ActiveForm */
?>


    <?php $form = ActiveForm::begin(['id' => 'config-form']); ?>
<div class="row">
<div class="col-3">
    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-3">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
</div>
</div>


    <div class="form-group">
        <?php Html::submitButton('บันทึก', ['class' => 'btn btn-success']) ?>
        <?php Html::a('ยกเลิก',null,['class' => 'btn btn-secondary text-white']) ?>
    </div>

    <?php ActiveForm::end(); ?>

