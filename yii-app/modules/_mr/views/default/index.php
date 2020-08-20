<?php
use yii\bootstrap4\LinkPager;
use yii\helpers\Html;
use yii\widgets\Pjax;
$this->title = "รายการจองห้องประชุม";
$this->registerJS($this->render('../../web/js/countdown.min.js'));
?>
<span id="clock"></span>
<?php Pjax::begin(['id' => 'event-search']);?>
<div class="row">
    <div class="col-lg-4 col-md-12">
        <h3 class="text-white">
            <i class="fas fa-list-ul"></i> <?=$this->title;?>
        </h3>
    </div>
    <div class="col-lg-8 col-md-12">
        <?=$this->render('_search', ['model' => $searchModel]);?>
    </div>

</div>
<?php Pjax::end();?>
<?php Pjax::begin(['id' => 'event-result'])?>
<?php if ($dataProvider->getCount() == 0): ?>
<h1 class="text-center text-white mt-5"><i class="fas fa-exclamation-triangle"></i> ไม่พบข้อมูลที่ค้นหา</h1>
<?php endif;?>
<?php foreach ($dataProvider->getModels() as $model): ?>

<div class="card card-widget shadow mb-3 bg-white rounded collapse-card collapsed-card">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle" src="/img/user1-128x128.jpg" alt="User Image">
            <span class="username"><a href="#" data-card-widget="collapse">เรื่อง | <?=$model->title?></a> :
                <?php if ($model->end < $dateNow = Date('Y-m-d H:i:s')): ?>
                <span class="text-success"> การประชุมเสร็จสิ้น <i class="fas fa-check"></i></span>
                <?php else: ?>
                <code id="<?=$model->id;?>" class="<?=$model->id;?>" start="<?=$model->start;?>"
                    end="<?=$model->end;?>"><?=$model->id;?></code>
                <?php endif;?>
            </span>
            <span class="description">(<?=$model->room->name;?>) :
                <?php
$start = explode(" ", $model->start);
$end = explode(" ", $model->end);
echo Yii::$app->thaiFormatter->asDateTime($model->start, 'php:d/m/Y') . ' เวลา : ' . $start[1] . ' - ' . $end[1];
?>

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
        <p><?=$model->body;?></p>
        <!-- Social sharing buttons -->
        <?=Html::a('<i class="fas fa-print"></i> Print QR-Code', ['/mr/events/print-qr', 'id' => $model->id], ['class' => 'btn btn-primary', 'target' => '_blank', 'data-pjax' => 0])?>
        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
        <span class="float-right text-muted">45 likes - 2 comments</span>
    </div>
    <!-- /.card-body -->
</div>
<?php endforeach;?>
<?php
$dataProvider->getCount();
echo LinkPager::widget(['pagination' => $dataProvider->getPagination()]);
?>

<?php
$js = <<< JS
$('#eventssearch-q').select();

$('#event-result').find('code').each(function(e) {
    var id = this.id;
    var value = $(this).html();
    var start = $(this).attr('start');
    var end = $(this).attr('end');
    var ids = $(this).attr('id');
    var starttime = start.split(' ')[1];
var endtime = end.split(' ')[1];
var d = new Date(); // for now
datetext = d.getYear() + '-' + d.getMonth() + '-' + d.getDate() + ' '+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
datetime = d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();

    $("#"+ids).countdown(start, function(event) {

        if(event.strftime('%H:%M:%S') == "00:00:00"){
            if(endtime > datetime){
                $(this).html('เริ่มการประชุม <i class="fas fa-cog fa-spin"></i>');
            }else{
                $(this).html('<span class="text-success"> การประชุมเสร็จสิ้น <i class="fas fa-check"></i></span>');
            }
        }else{

            $(this).html(event.strftime('จะเริ่มใน %d วัน %H:%M:%S'));

        }
            });

});

$('#event-search')
  .on('pjax:start', function() {
      console.log('start')
  })
  .on('pjax:end',   function() {
      console.log('end');
      $.pjax.reload({container:"#event-result", async: false});
      $('#eventssearch-q').select();
  });


JS;
$this->registerJS($js)
?>
<?php Pjax::end();?>