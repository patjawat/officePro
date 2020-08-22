<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\Books */

$this->title = 'จองห้องประชุม';
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
