<?php

use app\modules\mr\models\Books;
use yii\bootstrap4\LinkPager;
use yii\helpers\Html;
$this->title = 'ห้องประชุม';
$this->params['breadcrumbs'][] = $this->title;
// $books = Books::find()
// ->where(['category_id' => $model->id])
// ->where('date_end < now()')
// ->all()

?>
<?=$this->render('../default/link')?>
<?php Html::a('<i class="fas fa-plus"></i> สร้างใหม่', ['create'], ['class' => 'btn btn-success  text-white'])?>
<?php foreach ($dataProvider->getModels() as $model): ?>
<!-- <div class="card card-widget shadow mb-3 bg-white rounded collapse-card collapsed-card"> -->
<div class="card card-widget shadow mb-3 bg-white rounded">
    <div class="card-header">
        <div class="user-block">
            <?=Html::img('@web/adminlte3/dist/img/user1-128x128.jpg', ['class' => 'img-circle']);?>
            <span class="username"><a href="#" data-card-widget="collapse"><?=$model->name?></a> :

            </span>
            <span class="description">
               <!-- xxx -->
            </span>

        </div>
        <!-- /.user-block -->
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                <i class="far fa-circle"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" aria-expanded="false"><i
                    class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">

    <div class="d-flex bd-highlight">
  <div class="p-2 flex-shrink-1 bd-highlight">
  <?=Html::img($model->photo, ['width' => '300px']);?>
  </div>
  <div class="p-2 w-100 bd-highlight">
<?php
$querys = Books::find()
    ->andWhere(['category_id' => $model->id])
    // ->andWhere('date_end > now()')
    ->all();
?>
<?php foreach ($querys as $book): ?>
<div>

<div class="user-block">
            <img class="img-circle" src="/adminlte3/dist/img/user1-128x128.jpg" alt="">
            <span class="username"><span>หัวข้อ : <?=Html::a($book->data_json['topic'], ['/mr/books/view', 'id' => $book->id], []);?>  </span>
            </span>
            <span class="description">
            <?=Yii::$app->formatter->asDate($book->date_start, 'php:d/m/Y');?>
            </span>
        </div>
</div>
<br>
<br>
<?php endforeach;?>
  </div>
</div>
        <!-- Social sharing buttons -->
        <?=Html::a('<i class="fas fa-print"></i> จองห้องประชุม', ['/mr/books/create', 'category_id' => $model->id], ['class' => 'btn btn-primary loading-pagexx', 'data-pjax' => 0])?>
        <!-- <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
        <span class="float-right text-muted">45 likes - 2 comments</span> -->
    </div>
    <!-- /.card-body -->
</div>
<?php endforeach;?>
<?php
$dataProvider->getCount();
echo LinkPager::widget(['pagination' => $dataProvider->getPagination()]);
?>
