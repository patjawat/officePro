<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventRoom */

$this->title = 'Create Event Room';
$this->params['breadcrumbs'][] = ['label' => 'Event Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-room-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>