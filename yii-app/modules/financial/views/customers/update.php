<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\financial\models\Customers */

$this->title = 'Update Customers: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customers-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
