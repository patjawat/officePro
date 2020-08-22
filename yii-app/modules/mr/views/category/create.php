<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\Category */

$this->title = 'สร้างใหม่';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
