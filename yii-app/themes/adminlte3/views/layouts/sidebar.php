<?php

use yii\helpers\Html;
use app\components\TCDSHelper;

$iconsRight = '<i class="fas fa-caret-right"></i>';
$visit_ = TCDSHelper::getVisit();
$opd_visit = $visit_['opd_visit'];
$patient = $visit_['his_patient'];
$hn = $visit_['hn'];
$vn = $visit_['vn'];
$sex = $visit_['sex'];
?>
<aside class="main-sidebar elevation-4 sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="../../tcds" class="brand-link">
        <?= Html::img('@web/img/Logo-TRH.png', ['class' => 'brand-image img-circle elevation-3', 'style' => 'opacity: .8']); ?>
        <!-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">TCDS</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if (\Yii::$app->user->can('chiefcomplaint')) : ?>
                <li class="nav-item">
                    <?= Html::a('<i class="fas fa-user-friends"></i> ผู้ป่วยนอก', ['/chiefcomplaint/chiefcomplaint/show-form'], ['class' => 'nav-link']); ?>
                </li>
                <?php endif; ?>
                <?php if (\Yii::$app->user->can('doctor')) : ?>
                <li class="nav-item">
                    <?= Html::a('<i class="fas fa-user-md"></i> ระบบของแพทย์', ['/doctorworkbench'], ['class' => 'nav-link']); ?>
                </li>
                <?php endif; ?>
                <?php if (\Yii::$app->user->can('pharmacist')) : ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-notes-medical"></i>
                        <p>
                            ระบบจัดจ่ายยา
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li><?= Html::a($iconsRight . ' ตรวจสอบยา', ['/med/screen/list'], ['class' => 'nav-link']); ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a($iconsRight . ' <p>รอคีย์ยา</p>', ['/med/manage/list'], ['class' => 'nav-link']); ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a($iconsRight . ' <p>รอจัดยา</p>', ['/med/arrange/list'], ['class' => 'nav-link']); ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a($iconsRight . ' <p>รอตรวจสอบรายการยา</p>', ['/med/recheck/list'], ['class' => 'nav-link']); ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a($iconsRight . ' <p>รอจ่ายยา</p>', ['/med/dispense/list'], ['class' => 'nav-link']); ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a($iconsRight . ' <p>จ่ายยาแล้ว</p>', ['/med/default/index'], ['class' => 'nav-link']); ?>
                        </li>

                    </ul>
                </li>
                <?php endif; ?>

                <li class="nav-item has-treeview">
                    <?php if (\Yii::$app->user->can('risk_score') && $hn) : ?>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <?= Html::a('CV Risk (Thai)', 'http://10.1.99.6/Thai-CV-Risk-Score/index.php?hn="' . $hn . '"&prefix="' . $patient->prefix . '"&fname="' . $patient->fname . '"&lname="' . $patient->lname . '"sex="' . $sex . '"&birthday_date="' . $patient->birthday_date . '"', ['target' => '_blank', 'class' => 'nav-link']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('CV Risk (Acc)', 'http://tools.acc.org/ASCVD-Risk-Estimator-Plus/#!/calculate/estimate/', ['target' => '_blank', 'class' => 'nav-link']); ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('DM Risk', 'http://10.1.99.6/diabetes_risk_score/?hn="' . $hn . '"&prefix="' . $patient->prefix . '"&fname="' . $patient->fname . '"&lname="' . $patient->lname . '"sex="' . $sex . '"&birthday_date="' . $patient->birthday_date . '"', ['target' => '_blank', 'class' => 'nav-link']) ?>
                        </li>
                    </ul>
                    <?php endif; ?>
                </li>

                <?php if (\Yii::$app->user->can('hrdoctor')) : ?>
                <li class="nav-item">
                    <?= Html::a('<i class="fas fa-user-plus"></i> <p>เพิ่มข้อมูลแพทย์ใหม่</p>', ['/usermanager/hr/create'], ['class' => 'nav-link']) ?>
                </li>
                <?php endif; ?>
                <?php if (\Yii::$app->user->can('dmindicator')) : ?>
                <li class="nav-item">
                    <?= Html::a('<i class="fas fa-notes-medical"></i> <p>DM-Indicator</p>', ['/dmindicator'], ['class' => 'nav-link']) ?>
                </li>
                <?php endif; ?>
                <?php if (\Yii::$app->user->can('pacs')) : ?>
                <li class="nav-item">
                    <?= Html::a('<i class="fas fa-expand"></i> <p>PACS</p>', ['/doctorworkbench/default/pacs'], ['class' => 'nav-link', 'target' => '_blank']) ?>
                </li>
                <?php endif; ?>
                <?php if (\Yii::$app->user->can('lab')) : ?>
                <li class="nav-item">
                    <?= Html::a('<i class="fas fa-microscope"></i> <p>LAB</p>', ['/lab/default/lab-result-custom'], ['class' => 'nav-link', 'target' => '_blank']) ?>
                </li>
                <?php endif; ?>
                <?php if (\Yii::$app->user->can('emr')) : ?>
                <li class="nav-item">
                    <?= Html::a('<i class="fa fa-book"></i> <p>EMR</p>', ['/emr'], ['class' => 'nav-link', 'target' => '_blank']) ?>
                </li>
                <?php endif; ?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>