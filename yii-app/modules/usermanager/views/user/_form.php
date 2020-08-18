<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>


<style>
.form-group>label {
    text-align: end;
    font-size: 15px;
}

.form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
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

.card-top {
    width: 100%;
    display: inline-block;
    border-radius: 5px;
    padding: 10px 30px;
    border-top: 2px solid var(--color-blue-d);
    box-shadow: 0px 6px 6px 0px rgba(0, 0, 0, 0.15);
    text-align: left;
    color: var(--color-gray-xd);
    text-decoration: none;
    margin-bottom: 1rem;
}

.custom-control-label::before {
    left: -24px !important;
}

.custom-control-label::after {
    left: -24px !important;
}
</style>

<?php $form = ActiveForm::begin([
    'id' => 'form-usermanager',
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-lg-4 col-md-4 col-sm-4',
            'wrapper' => 'col-lg-8 col-md-8 col-sm-8',
        ],
    ],
    'layout' => 'horizontal',
]);?>

<div class="card shadow mb-5 bg-white rounded">
              <div class="card-header border-transparent">
                <h3 class="card-title"><i class="fas fa-user-edit"></i> แบบฟอร์มผู้ใช้งาน</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-1">
                <div class="table-responsive11">


<div class="row" class="shadow">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'confirm_password')->passwordInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'doctor_id')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'status')->inline()->radioList($model->getItemStatus()) ?>
        <div class="form-group">
           
        </div>

    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <?= $form->field($model, 'roles')->checkboxList($model->getAllRoles()) ?>
    </div>
</div>


</div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '<i class="fas fa-check"></i> บันทึก') : Yii::t('app', '<i class="fas fa-check"></i> แก้ไข'), ['class' => $model->isNewRecord ? 'btn btn-sm btn-success float-left' : 'btn btn-sm btn-info float-left']) ?>
             &nbsp;
              <?=Html::a('<i class="fas fa-redo"></i> ยกเลิก', ['/usermanager/user'], ['class' => 'btn btn-sm btn-secondary','title' =>  'Reset Grid'])?>
              </div>
              <!-- /.card-footer -->
            </div>

<?php ActiveForm::end(); ?>
<br>
