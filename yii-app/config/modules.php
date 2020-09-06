<?php

use \kartik\datecontrol\Module;

//เพิ่ม module ที่นี่ที่เดียว
$modules = [];

$modules['datecontrol'] = [
    'class' => 'kartik\datecontrol\Module',
    'displaySettings' => [
        Module::FORMAT_DATE => 'dd/MM/yyyy',
        Module::FORMAT_TIME => 'hh:mm:ss a',
        Module::FORMAT_DATETIME => 'dd/MM/yyyy hh:mm:ss',
    ],
    'saveSettings' => [
        Module::FORMAT_DATE => 'php:Y-m-d',
        Module::FORMAT_TIME => 'php:H:i:s',
        Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
    ],
    'displayTimezone' => 'Asia/Bangkok',
    'saveTimezone' => 'UTC',
    'autoWidget' => true,
    'autoWidgetSettings' => [
        Module::FORMAT_DATE => ['type' => 2, 'pluginOptions' => ['autoclose' => true]], // example
        Module::FORMAT_DATETIME => ['pluginOptions' => ['autoclose' => true]],
        Module::FORMAT_TIME => [],
    ]]; //Oh

$modules['user'] = [
    'class' => 'dektrium\user\Module',
    'enableUnconfirmedLogin' => true,
    'confirmWithin' => 21600,
    'cost' => 12,
    'admins' => ['admin'],
    'controllerMap' => [
        'login' => [
            'class' => \dektrium\user\controllers\SecurityController::className(),
            'on ' . \dektrium\user\controllers\SecurityController::EVENT_AFTER_LOGIN => function ($e) {
                // Yii::$app->response->redirect(array('/user/security/login'))->send();
                Yii::$app->response->redirect(array('/site/login'))->send();
                Yii::$app->end();
            },
        ],
    ],
];

$modules['gridview'] = ['class' => '\kartik\grid\Module']; //system
$modules['admin'] = ['class' => 'mdm\admin\Module']; // จัดการระบ
$modules['gridviewKrajee'] = ['class' => '\kartik\grid\Module']; //system
$modules['uploadimage'] = ['class' => 'dkhlystov\uploadimage\Module']; //system
$modules['usermanager'] = ['class' => 'app\modules\usermanager\Usermanager']; //จัดการผู้ใช้งานระบบ
$modules['mr'] = ['class' => 'app\modules\mr\Module']; //ระบบจัดการห้องประชุม
$modules['hr'] = ['class' => 'app\modules\hr\Hr']; //ระบบงานออฟฟิศ
$modules['stock'] = ['class' => 'app\modules\stock\Stock']; //ระบบงานพัสดุ
$modules['financial'] = ['class' => 'app\modules\financial\Module']; //ระบบการเงิน
$modules['crm'] = ['class' => 'app\modules\crm\Module']; //ระบบการเงิน

return $modules;