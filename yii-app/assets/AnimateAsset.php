<?php
/**
 * Created by PhpStorm.
 * User: ks
 * Date: 24/6/2561
 * Time: 1:55 น.
 */

namespace app\assets;

use yii\web\AssetBundle;

class AnimateAsset extends AssetBundle
{
    public $sourcePath = '@bower/animate.css';
    public $css = [
        'animate.min.css',
    ];
    public $publishOptions = [
        'only' => [
            '*',
        ],
    ];
}