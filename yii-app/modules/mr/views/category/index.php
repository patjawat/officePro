<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\mr\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
<div class="col-3">
<div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fas fa-tasks"></i> การตั้งค่า</a>
      <?=Html::a('ห้องประชุม',['/mr/category','type' => 'room'],['class' => 'list-group-item list-group-item-action loading-page'])?>
      <?=Html::a('สถานะห้องประชุม',['/mr/category','type' => 'status'],['class' => 'list-group-item list-group-item-action loading-page'])?>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
</div>
<div class="col-9">


<div class="card">
    <div class="card-header">
        <?=$searchModel->type;?>
    </div>
    <div class="card-body">
    <p>
        <?= Html::a('<i class="fas fa-plus"></i> สร้างใหม่', ['create','type' => $searchModel->type], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'photo',
            'data_json:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>


</div>
</div>

