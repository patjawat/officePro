<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\financial\models\FinancialConfig */

$this->title = 'แก้ไข: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Financial Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="financial-config-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
