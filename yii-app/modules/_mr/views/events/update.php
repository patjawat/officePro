<?php

use yii\helpers\Html;

$this->title = 'Update Event Room: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Event Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-room-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
