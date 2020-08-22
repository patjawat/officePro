<?php

use app\modules\mr\models\Category;
use kartik\widgets\Select2;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
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
<div class="card">
    <div class="card-header">
    <i class="far fa-file-alt"></i> <?=$this->title;?>
    </div>
    <div class="card-body">
<div class="row">
    <div class="col-6">
    <?=$form->field($model, 'data_json[topic]')->textInput(['maxlength' => true])->label('หัวข้อการประชุม')?>

</div>
<div class="col-6">
    <?=
$form->field($model, 'category_id')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Category::find()->all(), 'id', 'name'),
    'options' => ['placeholder' => 'ห้องประชุม'],
    'pluginOptions' => [
        'allowClear' => true,
    ],
]);
?>
</div>
</div>




    </div>
    <div class="card-footer text-muted">
    <div class="form-group">
        <?=Html::submitButton('<i class="fas fa-check"></i> บันทึก', ['class' => 'btn btn-success'])?>
        <?=Html::a('ยกเลิก', ['/mr/rooms'], ['class' => 'btn btn-secondary'])?>
    </div>
    </div>
</div>
    <?php ActiveForm::end();?>
