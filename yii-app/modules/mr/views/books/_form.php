<?php

use app\modules\mr\models\Category;
use kartik\datecontrol\DateControl;
use kartik\widgets\Select2;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\MaskedInput;
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
}

*/
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
            <div class="col-7">
                <?=$form->field($model, 'data_json[topic]')->textInput(['maxlength' => true])->label('หัวข้อการประชุม')?>
                <?=$form->field($model, 'data_json[target_audience]')->textInput(['maxlength' => true])->label('กลุ่มเป้าหมาย')?>
                <?=$form->field($model, 'data_json[rang]')->inline()->radioList(['all' => 'ทั้งวัน', 'am' => 'ช่วงเช้า', 'pm' => 'ช่วงบ่าย'])->label('ช่วงเวลา')?>
                <div class="row">
                    <div class="col-7">
                    <?=$form->field($model, 'date_start', [
    'horizontalCssClasses' => [
        'label' => 'col-5',
        'wrapper' => 'col-6',
    ],
])->widget(DateControl::classname(), [
                        'type' => DateControl::FORMAT_DATE,
                        'language' => 'th',
                        'widgetOptions' => [
                            'removeButton' => false,
                            'pluginOptions' => [
                                'autoclose' => true,
                            ],
                        ],
                    ])->label('เวลา')?>
                    </div>
                    <div class="col-5">
                    <?=$form->field($model, 'date_end', [
    'horizontalCssClasses' => [
        'label' => 'col-2',
        'wrapper' => 'col-8',
    ],
])->widget(DateControl::classname(), [
                        'type' => DateControl::FORMAT_DATE,
                        'language' => 'th',
                        'widgetOptions' => [
                            'removeButton' => false,
                            'pluginOptions' => [
                                'autoclose' => true,
                            ],
                        ],
                    ])->label('เวลา')?>
                    </div>
                    </div>


                <?=$form->field($model, 'data_json[accessories]')->checkBoxList(ArrayHelper::map(Category::find()->where(['type' => 'accessories'])->all(), 'id', 'name'))->label('รายการอุปกรณ์')?>


            </div>
            <div class="col-5">
                <?=$form->field($model, 'category_id')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Category::find()->all(), 'id', 'name'),
    'options' => ['placeholder' => 'ห้องประชุม'],
    'pluginOptions' => [
        'allowClear' => true,
    ],
]);
?>
<?=$form->field($model, 'data_json[objective]')->textInput(['maxlength' => true])->label('วัตถุประสงค์')?>
<?=$form->field($model, 'data_json[qty]')->textInput(['maxlength' => true])->label('จำนวน')?>

 <div class="row">
   <div class="col-6">
                <?=$form->field($model, 'data_json[time_start]', [
    'horizontalCssClasses' => [
        'label' => 'col-6',
        'wrapper' => 'col-6',
    ],
])->widget(MaskedInput::className(), [
    'mask' => '99:99',
])->label('เริ่มต้น')?>

   </div>
   <div class="col-6">
<?=$form->field($model, 'data_json[time_end]', [
    'horizontalCssClasses' => [
        'label' => 'col-3',
        'wrapper' => 'col-7',
    ],
])->widget(MaskedInput::className(), [
    'mask' => '99:99',
])->label('สิ้นสุด')?>

   </div>
</div>

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