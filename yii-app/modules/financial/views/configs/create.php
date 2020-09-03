<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\financial\models\FinancialConfig */

$this->title = 'Create Financial Config';
$this->params['breadcrumbs'][] = ['label' => 'Financial Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="financial-config-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
