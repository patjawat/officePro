<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\MeetingRoom */

$this->title = 'สร้างห้องประชุม';
$this->params['breadcrumbs'][] = ['label' => 'Meeting Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meeting-room-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
