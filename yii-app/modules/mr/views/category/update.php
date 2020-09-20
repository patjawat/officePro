<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\Category */

$this->title = 'แก้ไข: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
