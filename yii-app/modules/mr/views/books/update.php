<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\Books */

$this->title = 'แก้ไข: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="books-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
