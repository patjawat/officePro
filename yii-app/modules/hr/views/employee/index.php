<?php

use yii\bootstrap4\LinkPager;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\hr\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลพนักงาน';
$this->registerJS($this->render('../../dist/js/hr.js'), View::POS_END);

?>
<?php Pjax::begin(['id' => 'employee-container']);?>
<h1 class="text-white"><i class="fas fa-user-tag"></i> ข้อมูลพนักงาน</h1>
<p>
    <?=Html::a('<i class="fas fa-plus"></i> สร้างใหม่', ['create'], ['class' => 'btn btn-success create-employee'])?>
</p>
<div class="row">
    <div class="col-8">
        <?php foreach ($dataProvider->getModels() as $model): ?>
        <div class="card card-widget shadow mb-3 bg-white rounded collapse-card collapsed-card">
            <div class="card-header">
                <div class="user-block">
                    <img class="img-circle" src="/img/user1-128x128.jpg" alt="User Image">
                    <span class="username"><a href="#" data-card-widget="collapse"><?=$model->fullname();?></a> :
                        <code>นักวิชาการคอมพิวเตอร์ <i class="fas fa-cog fa-spin"></i></code>
                    </span>
                    <span class="description">อายุ 34 ปี 4 เดือน
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
                <p></p>
                <!-- Social sharing buttons -->
                <a class="btn btn-primary btn-sm" href="/index.php?r=mr%2Fevents%2Fprint-qr&amp;id=79" target="_blank"
                    data-pjax="0"><i class="far fa-id-card"></i> พิมพ์บัตรประจำตัว</a>
                <?=Html::a('<i class="far fa-edit"></i>แก้ไข', ['/hr/employee/update', 'id' => $model->id], ['class' => 'btn btn-sm btn-warning create-employee']);?>
                <span class="float-right text-muted">45 likes - 2 comments</span>
            </div>
            <!-- /.card-body -->
        </div>
        <?php endforeach;?>
        <?php
$dataProvider->getCount();
echo LinkPager::widget(['pagination' => $dataProvider->getPagination()]);
?>
    </div>
    <div class="col-4">
        <?=$this->render('_right');?>
    </div>
</div>


<?php // echo $this->render('_search', ['model' => $searchModel]); ?>



<?php
$js = <<< JS

$('.create-employee').click(function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        beforeSend: function(){
            beforLoadModal();
        },
        success: function (response) {
            $('#main-modal').modal('show');
            $('.modal-footer').show();
            $(".modal-dialog").removeClass('modal-lg modal-sm modal-md')
            $('.modal-content').addClass('card-outline card-primary');
            $(".modal-dialog").addClass('modal-lg');
            $('#main-modal-label').html(response.title);
            $('.modal-body').html(response.content);
            $('.modal-footer').html(response.footer);
            $('.modal-header').html('<div class="user-block">'+
            '<img class="img-circle elevation-3" src="/img/user1-128x128.jpg" alt="User Image">'+
            '<span class="username"><a href="#">ข้อมูลพนักงาน</a></span>'+
            '<span class="description">อายุ 34 ปี 4 เดือน</span>'+
        '</div>'+
        '<div class="card-tools">'+
            '<button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">'+
                '<i class="far fa-circle"></i></button>'+
            '<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>'+
            '</button>'+
            '<button type="button" class="btn btn-tool" data-card-widget="remove" data-dismiss="modal"><i class="fas fa-times"></i>'+
            '</button>'+
       '</div>')
        }
    });
});

JS;
$this->registerJS($js)
?>
<?php Pjax::end();?>