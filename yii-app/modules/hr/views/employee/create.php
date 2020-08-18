<?php

/* @var $this yii\web\View */
/* @var $model app\modules\hr\models\Employee */

$this->title = 'เพิ่มข้อมูลพนักงาน';
?>
<?=$this->render('_form', [
    'model' => $model,
])?>