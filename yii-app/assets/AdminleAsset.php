<?php
/**
 * Created by PhpStorm.
 * User: ks
 * Date: 24/6/2561
 * Time: 1:54 น.
 */
namespace app\assets;

use yii\web\AssetBundle;

class AdminleAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap',
        'plugins/sweetalert2/sweetalert2.min.css',
        'plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
        'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'plugins/toastr/toastr.min.css',
        'dist/css/adminlte.min.css',
    ];

    public $js = [
        'dist/js/adminlte.min.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/sweetalert2/sweetalert2.min.js',
        'plugins/toastr/toastr.min.js',
        'plugins/sweetalert2/sweetalert2.all.min.js',
        'plugins/toastr/toastr.min.js',
        'plugins/moment/moment.min.js',
    ];

    public $publishOptions = [
        "only" => [
            "dist/js/*",
            "dist/css/*",
            'plugins/moment/*',
            'plugins/sweetalert2/*',
            'plugins/sweetalert2-theme-bootstrap-4/*',
            'plugins/tempusdominus-bootstrap-4/css/*',
            'plugins/tempusdominus-bootstrap-4/js/*',
            'plugins/toastr/*',
            "plugins/bootstrap/js/*",
        ],

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'app\assets\FontAwesomeAsset',
        'app\assets\AppAsset',
    ];
}