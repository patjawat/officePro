<?php
namespace app\modules\mr\assets;
use yii\web\AssetBundle;

class MrAssets extends AssetBundle
{
    public $sourcePath = '@app/modules/mr/web';
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
        'js/mrScript.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}