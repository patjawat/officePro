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
      <nav class="main-header navbar navbar-expand-md navbar-dark navbar-white shadow p-2 mb-1 "
          style="background-color: #009688!important;">
          <div class="container-fluid">
              <!-- <a href="../../index3.html" class="navbar-brand">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a> -->
              <?= Html::a('<img src="img\logo-theptarin-src.png" style="height: 45px; margin: -10px;" />', ['/'], ['class' => 'brand-image img-circle']) ?>
              <!-- <div class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </div> -->
              <!-- SEARCH FORM -->
              <div style="color: white;margin-left:5px;margin-top:-4px;">
                  <?php if (!empty($hn)) : ?>
                  <!-- <h5> -->
                  <?php echo empty($this->params['pt_title']) ? '' : $this->params['pt_title'] ?>
                  <?php Html::a('  <i class="fas fa-power-off"></i>', ['/site/index'], ['style' => 'color:white', 'title' => 'ยกเลิกให้บริการ', 'class' => 'btn btn-sm btn-danger']) ?>
                  <!-- </h5> -->
                  <?php endif; ?>
                  <?php if (!\Yii::$app->user->isGuest) : ?>
                  <?php if (empty($hn)) : ?>
                  <?php
                    $form = ActiveForm::begin([
                        'method' => 'POST',
                        'action' => Url::to(['/opdvisit/opd-visit/api']),
                        'options' => ['class' => 'form-inline'],
                        'id' => 'form-search'
                    ]);
                    ?>

                  <!-- <form class="form-inline ml-3"> -->
                  <div class="input-group">
                      <input class="form-control form-control-navbar" type="search" placeholder="เลือกผู้รับบริการ..."
                          aria-label="Search" name="hn" id="hn"
                          value="<?php // $hn;                                                                                                                                          ?>">
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
              </div>
              <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                  ซ่อนเมื่อหน้าจอเล็ก
              </div>

              <!-- Right navbar links -->
              <!-- <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
       
      </ul> -->
          </div>
      </nav>