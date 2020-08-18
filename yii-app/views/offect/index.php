<?php

use yii\helpers\Html;
?>



<h1 class="text-light text-center">Pure CSS Animated Gradient Background</h1>
<div class="text-center mb-5">

    <div class="btn-group mt-2 mb-4" role="group" aria-label="actionButtons">
        <a href="https://codepen-api-export-production.s3.us-west-2.amazonaws.com/zip/PEN/pyBNzX/1578778289271/pure-css-gradient-background-animation.zip"
            class="d-block btn btn-outline-light" download><i class="fas fa-file-download mr-2"></i>Download Source</a>
        <a href="https://manuelpinto.in" target="_blank" class="d-block btn btn-outline-light">Visit my Website<i
                class="fas fa-external-link-square-alt ml-2"></i></a>
    </div>

    <h6 class="text-light small font-weight-bold"><i class="fas fa-code"></i> with <i class="fas fa-heart"></i> by
        Manuel
        Pinto</h6>
</div>


<?=$this->render('../../modules/hr/views/default/department');?>

<div class="row" style="height: 554px;">
    <div class="col-6">
        <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">ระบบจองห้องประชุม</h4>
                <p class="card-text">
                    <?=Html::a('เลือก', ['/mr'], [])?>
                </p>
            </div>
        </div>
        <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">ระบบจพัสดุตรุภัณฑ์</h4>
                <p class="card-text">
                    <?=Html::a('เลือก', ['/mr'], [])?>
                </p>
            </div>
        </div>
        <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">ระบบความเสี่ยง</h4>
                <p class="card-text">
                    <?=Html::a('เลือก', ['/mr'], [])?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">ระบบบริหารงานบุคคล (HR)</h4>
                <p class="card-text">
                    <?=Html::a('เลือก', ['/hr'], [])?>
                </p>
            </div>
        </div>
        <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">ระบบจองรถ</h4>
                <p class="card-text">Body</p>
            </div>
        </div>
        <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">ระบบเครื่องมือแพทย์</h4>
                <p class="card-text">Body</p>
            </div>
        </div>
    </div>
</div>