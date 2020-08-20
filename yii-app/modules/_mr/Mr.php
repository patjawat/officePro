<?php

namespace app\modules\mr;

/**
 * Mr module definition class
 */
class Mr extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\mr\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
         \Yii::configure($this, require __DIR__ . '/config.php');
        // $this->setAliases([
        //     '@MY-MODULE-assets' => __DIR__ . '/assets'
        // ]);
    }

    
}