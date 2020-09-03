<?php

use app\widgets\Alert;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm; // *orr ยังมีการเช็คแพ้ยา

// app\themes\adminlte3\assets\AdminleAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicon-->
    <?php $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => Yii::$app->request->baseUrl . '/img/Logo-TRH.png']); ?>
    <?= Html::csrfMetaTags() ?>
    <title> | TCDS </title>
    <title> | TCDS | <?php // Html::encode($this->title) 
                        ?></title>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Prompt:300,400&display=swap" rel="stylesheet">
    <?php $this->head() ?>
</head>

<body class="layout-top-nav sidebar-collapse layout-navbar-fixed" style="font-family: 'Prompt', sans-serif;">
    <?php $this->beginBody() ?>
    <style>
    .swal2-actions>button {
        margin: 10px;
    }

    .popover-x {
        display: none;
        border: 1px solid rgba(169, 164, 164, 0.02) !important;
        border-radius: 5px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2) !important;
        box-shadow: 0px 3px 14px 0px rgba(0, 0, 0, 0.25) !important;
    }

    .popover-default>.popover-title {
        color: #333;
        background-color: #d2d2d2 !important;
    }

    /* loading Page */
    #loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
        background-color: #00000047;
    }

    #loader {
        display: block;
        position: relative;
        left: 50%;
        top: 50%;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #3498db;
        -webkit-animation: spin 2s linear infinite;
        /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 2s linear infinite;
        /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    #loader:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #e74c3c;
        -webkit-animation: spin 3s linear infinite;
        /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 3s linear infinite;
        /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    #loader:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #f9c922;
        -webkit-animation: spin 1.5s linear infinite;
        /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 1.5s linear infinite;
        /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);
            /* IE 9 */
            transform: rotate(0deg);
            /* Firefox 16+, IE 10+, Opera */
        }

        100% {
            -webkit-transform: rotate(360deg);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);
            /* IE 9 */
            transform: rotate(360deg);
            /* Firefox 16+, IE 10+, Opera */
        }
    }

    @keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);
            /* IE 9 */
            transform: rotate(0deg);
            /* Firefox 16+, IE 10+, Opera */
        }

        100% {
            -webkit-transform: rotate(360deg);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);
            /* IE 9 */
            transform: rotate(360deg);
            /* Firefox 16+, IE 10+, Opera */
        }
    }
    </style>
    <?php
    Modal::begin([
        'id' => 'main-modal',
        'title' => '<h4 class="modal-title"></h4>',
        // 'size' => 'modal-sm',
        'footer' => '',
        'clientOptions' => ['backdrop' => 'static', 'keyboard' => false],
    ]);
    Modal::end();
    ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>