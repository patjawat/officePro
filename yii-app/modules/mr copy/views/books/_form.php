<?php

use kartik\widgets\Select2;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\modules\mr\models\Rooms;
?>
<style>
.form-group {
    margin-bottom: 5px;
}
/* .form-group>label {
    text-align: end;
    font-size: 15px;
}

.custom-control-label::before {
    left: -24px !important;
}

.custom-control-label::after {
    left: -24px !important;
}

.custom-control-label::before {
    position: fixed;
}

.help-block {
    display: block;
    margin-top: 0px;
    margin-bottom: 0px;
    color: #737373;
}

.form-group {
    margin-bottom: 5px;
}

.field-chiefcomplaint-med_point {
    /* margin-left: -98px; */
}


.checkbox {
    position: relative !important;
    display: block !important;
    margin-top: 5px !important;
    margin-bottom: 5px !important;
    background-color: #e2e2e2;
    padding: 8px !important;
    width: 100%;
    border-radius: 5px !important;
} */

</style>
<div class="card">
    <div class="card-header">
        <?=$this->title;?>
    </div>
    <div class="card-body">


<?php
$form = ActiveForm::begin([
            'id' => 'form-chiefcomplaint',
            'fieldConfig' => [
                'horizontalCssClasses' => [
                    'label' => 'col-lg-3 col-md-4 col-sm-4',
                    'wrapper' => 'col-lg-8 col-md-8 col-sm-8 offset-sm-0',
                ],
            ],
            'layout' => 'horizontal',
        ]);
?>
<div class="row">


    <div class="col-6">
    <?= $form->field($model, 'topic')->textInput(['maxlength' => true]) ?>

</div>
<div class="col-6">
    <?=
                                $form->field($model, 'room_id')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map(Rooms::find()->all(),'id', 'name'),
                                    'options' => ['placeholder' => $model->getAttributeLabel('room_id')],
                                    'pluginOptions' => [
                                        'allowClear' => true,
                                    ],
                                ]);
                                ?>
</div>
</div>


    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>
