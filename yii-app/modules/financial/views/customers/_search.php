<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\financial\models\CustomersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

<?= $form->field($model, 'q', [
        'inputTemplate' => 
        '<div class="input-group">{input}'.Html::submitButton('<i class="fas fa-search"></i>', 
        ['class' => 'btn btn-default']).'&nbsp;'
        .Html::a('<i class="fas fa-plus"></i>', ['create'], ['class' => 'btn btn-success']).'&nbsp;'
        .Html::a('<i class="fas fa-redo"></i>', [''], ['class' => 'btn btn-secondary']).'</div>',
    ])->textInput(['class' => 'form-control float-righ','placeholder' => 'ค้นหา', 'autofocus' => 'autofocus'])->label(false); ?>

    <?php ActiveForm::end(); ?>

</div>
