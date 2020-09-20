<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\MeetingRoom */

$this->title = 'Update Meeting Room: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Meeting Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meeting-room-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
