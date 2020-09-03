<?php
// use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use app\components\TCDSHelper;
use app\components\UserHelper;
use app\components\PatientHelper; // *orr ยังมีการเช็คแพ้ยา
use yii\widgets\ActiveForm;

$module = \Yii::$app->controller->module->id;
$iconsRight = '<i class="fas fa-caret-right"></i>';
$visit_ = TCDSHelper::getVisit();
$opd_visit = $visit_['opd_visit'];
$patient = $visit_['his_patient'];
$hn = $visit_['hn'];
$vn = $visit_['vn'];
$sex = $visit_['sex'];
      ?>
<!-- Navbar -->
<!-- <nav class="main-header navbar navbar-expand navbar-dark navbar-primary shadow p-2 mb-4 rounded" style="background-color: #009688!important;"> -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-primary shadow p-2 mb-4 rounded"
    style="background-color: #009688!important;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a('<img src="img\Logo-TRH.png" style="height: 45px; margin: -10px;" />', ['/'], ['class' => 'nav-link']) ?>
        </li>
        <li>
            <div style="color: white;margin-left: 17px;margin-top:-4px;">

                <?php if (!empty($hn)) : ?>
                <h5>
                    <?php echo empty($this->params['pt_title']) ? '' : $this->params['pt_title'] ?>
                    <?php Html::a('  <i class="fas fa-power-off"></i>', ['/site/index'], ['style' => 'color:white', 'title' => 'ยกเลิกให้บริการ', 'class' => 'btn btn-sm btn-danger']) ?>
                </h5>
                <?php endif; ?>
            </div>
        </li>
    </ul>
    <!-- SEARCH FORM -->
    <?php if (!\Yii::$app->user->isGuest) : ?>
    <?php if (empty($hn)) : ?>
    <?php $form = ActiveForm::begin([
                        'method' => 'POST',
                        'action' => $module ==  'ipd' ? Url::to(['/ipd/admit/check-admit']) : Url::to(['/opdvisit/opd-visit/api']),
                        'options' => ['class' => 'form-inline'],
                        // 'id' => $module ==  'ipd' ? 'ipd-search' : 'form-search'
                        'id' => $module ==  'ipd' ? 'ipd-search' : 'form-search'
                    ]);
                    ?>
    <!-- <form class="form-inline ml-3"> -->
    <div class="input-group">
        <input class="form-control form-control-navbar" type="search" placeholder="เลือกผู้รับบริการ..."
            aria-label="Search" name="hn" id="hn" value="<?php // $hn;?>" required>
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    <?php ActiveForm::end() ?>
    <!-- </form> -->
    <?php endif; ?>

    <?php endif; ?>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" style="margin-top:-19px;">
        <!-- Messages Dropdown Menu -->
        <?php if (!Yii::$app->user->isGuest) : ?>
        <?= Html::a(UserHelper::getUser('fullname') ? '<i class="fas fa-fingerprint" style="font-size: 25px;color: #ffffff;"></i> ' . UserHelper::getUser('fullname') : \Yii::$app->user->identity->username, ['/profile'], ['class' => 'nav-link link-loading', 'style' => 'font-size: 23px;font-weight: 300;']) ?>
        <?=Html::a('|',null,['class' => 'nav-link','style' => 'font-size: 20px;'])?>
        <?= Html::a('<i class="fas fa-code-branch"></i> ' . PatientHelper::getDepartment(), null, ['class' => 'nav-link show-department','style' => 'font-size: 20px;']) ?>
        <?php endif; ?>



        <?php if (\Yii::$app->user->can('admin')) : ?>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-sliders-h"></i>
            </a>
        </li>
        <?php endif;?>

    </ul>

</nav>