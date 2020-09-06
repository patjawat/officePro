<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datecontrol\DateControl;
use app\modules\crm\models\Gender;

/* @var $this yii\web\View */
/* @var $model app\modules\crm\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php $form = ActiveForm::begin(); ?>

<div class="card">
    <div class="card-header">
        ข้อมูลสมาชิก
    </div>
    <div class="card-body">

    <?= $form->field($model, 'gender_id')->inline()->radioList(ArrayHelper::map(Gender::find()->all(), 'id', 'name')); ?>
<div class="row">
<div class="col-6">
    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cid')->textInput() ?>
    <?= $form->field($model, 'address')->textArea(['maxlength' => true]) ?>

</div>
<div class="col-6">
    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'birthdate')->widget(DateControl::classname(), [
        'type'=>DateControl::FORMAT_DATE,
        'language' => 'th',
        'ajaxConversion'=>false,
        'widgetOptions' => [
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]
    ]);
    ?>
    <?= $form->field($model, 'zip_code')->textInput() ?>
</div>
</div>





    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>
    <?php ActiveForm::end(); ?>

