<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\mr\models\Books */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="card-header">
    <p class="mb-0">
    <?=Html::a('<i class="fas fa-angle-left"></i> หน้าหลัก', ['/mr'],['class' => 'btn btn-primary'])?>
        <?= Html::a('<i class="far fa-edit"></i> แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('<i class="far fa-trash-alt"></i> ลบทิ้ง', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    </div>
    <div class="card-body p-0">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'category_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>