<?php
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
$form = ActiveForm::begin();
?>

<div class="card text-white bg-dark shadow-lg rounded wrapper-box mt-5" style="width:30rem;">
    <div class=" card-header">
        <h5><i class="fas fa-fingerprint"></i>&nbsp;&nbsp;Authentication</h5>
    </div>
    <div class="card-body">
        <?=$form->field($model, 'username', ['inputOptions' =>
    [
        'autofocus' => 'autofocus',
        'tabindex' => '1',
        'class' => 'form-dark',
    ],

]
)->label('Username');?>
        <?=$form->field($model, 'password', ['inputOptions' =>
    [
        'autofocus' => 'autofocus',
        'tabindex' => '2',
        'class' => 'form-dark',
    ],
])->passwordInput()->label('Password');?>
        <div class="social-auth-links mb-3">
            <?=Html::submitButton('<i class="fas fa-user-lock"></i> เข้าสู่ระบบ', ['class' => 'btn btn-primary', 'name' => 'login-button', 'tabindex' => '3'])?>
            <?=Html::a('<i class="fas fa-user-plus"></i> ลงทะเบียน',['/site/register'],['class' => 'btn btn-default'])?>
        </div>
    </div>
</div>


<?php ActiveForm::end();?>