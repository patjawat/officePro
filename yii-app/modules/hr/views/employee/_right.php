<?php
use yii\helpers\Html;
use yii\web\View;
$this->registerJS($this->render('../../dist/js/hr.js'), View::POS_END);
?>
<div class="card text-left">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle elevation-3" src="/img/user1-128x128.jpg" alt="User Image">
            <span class="username"><a href="#">เพิ่มข้อมูลพนักงาน</a></span>
            <span class="description">Shared publicly</span>
        </div>
        <!-- /.user-block -->
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                <i class="far fa-circle"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <div class="card-body">

        Form Search
    </div>
</div>

<div class="card text-left">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle elevation-3" src="/img/user1-128x128.jpg" alt="User Image">
            <span class="username"><a href="#">บริการ</a></span>
            <span class="description">Shared publicly</span>
        </div>
        <!-- /.user-block -->
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                <i class="far fa-circle"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <div class="card-body">

        <button type="button" class="btn btn-primary btn-block">พิมพ์รายชื่อ</button>
        <button type="button" class="btn btn-warning btn-block">.btn-block</button>
    </div>
</div>

<div class="card text-left">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle elevation-3" src="/img/user1-128x128.jpg" alt="User Image">
            <span class="username"><a href="#">ตั้งค่า</a></span>
            <span class="description">Shared publicly</span>
        </div>
        <!-- /.user-block -->
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                <i class="far fa-circle"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <div class="card-body bg-Secondary">
        <button type="button" class="btn btn-primary btn-block" onclick=" return loadDepartments()"><i
                class="fas fa-angle-double-right"></i> แผนก/ฝ่าย</button>
        <?=Html::a('<i class="fas fa-angle-double-right"></i> แผนก/ฝ่าย', ['#'], ['class' => '', 'onclick' => 'return loadDepartments()']);?><br>
        <?=Html::a('<i class="fas fa-angle-double-right"></i> ตำแหน่งงาน', ['/hr/department'], ['class' => '']);?>
    </div>
</div>