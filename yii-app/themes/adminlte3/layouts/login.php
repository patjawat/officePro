<?php

/**
 * หน้าหลักระบบ Theptarin TCDs
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Modal;
use yii\widgets\Breadcrumbs;
use yii\widgets\ActiveForm;
\hail812\adminlte3\assets\FontAwesomeAsset::register($this);
\hail812\adminlte3\assets\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./img/medico.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./img/medico.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?>:TCDs</title>
    <?php $this->head() ?>
</head>
<style>
body {
    background: linear-gradient(100deg, rgb(182, 40, 111) 50%, #ac2066 0);
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.containers {
    background: linear-gradient(100deg, rgb(182, 40, 111) 50%, #ac2066 0);
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.app-wrapper {
    background-color: #292f38;
    /* width: 25%; */
    min-width: 450px;
    height: 600px;
    padding: 30px;
    box-sizing: border-box;
    border-radius: 5px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
}

.wrapper-box {
    background-color: #292f38;
    box-sizing: border-box;
    border-radius: 5px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
}

.wrapper-container {
    background-color: #292f38;
    padding: 30px;
    box-sizing: border-box;
    border-radius: 5px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
}

.form-dark {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #fcfdff;
    background-color: #495057;
    background-clip: padding-box;
    border: 1px solid #495057;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
</style>

<body style="min-height: 512.391px;">
    <?php $this->beginBody() ?>

    <br>
    <br>
    <br>
    <?= $content ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>