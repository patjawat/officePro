<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\mr\models\MeetingRoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ห้องประชุม';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- <div class="card text-white bg-dark shadow-lg rounded wrapper-box mt-5"> -->
<div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                <?=Html::encode($this->title)?>
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                        <?=Html::a('<i class="fas fa-plus"></i> สร้างใหม่', ['create'], ['class' => 'btn btn-success nav-link text-white'])?>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
              <?php Pjax::begin();?>
                <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'options' => [
      // 'class' => 'table table-dark',
   ],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'name',
        'data_json:ntext',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>
            <?php Pjax::end();?>
    </div>
</div>

