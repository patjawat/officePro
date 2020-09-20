<?php
/**
 * Created by PhpStorm.
 * User: ks
 * Date: 24/6/2561
 * Time: 1:54 น.
 */
namespace app\themes\adminlte3\assets;

use yii\web\AssetBundle;

class AdminleAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'plugins/sweetalert2/sweetalert2.min.css',
        'plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
        'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'plugins/toastr/toastr.min.css',
        'dist/css/adminlte.min.css',
        'https://cdn.rawgit.com/rikmms/progress-bar-4-axios/0a3acf92/dist/nprogress.css',
        'plugins/chart.js/Chart.min.css',
    ];

    public $js = [
        'dist/js/demo.js',
        'dist/js/adminlte.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/sweetalert2/sweetalert2.min.js',
        'plugins/toastr/toastr.min.js',
        'plugins/sweetalert2/sweetalert2.all.min.js',
        // 'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'plugins/toastr/toastr.min.js',
        'https://cdn.jsdelivr.net/npm/vue/dist/vue.js',
        'https://unpkg.com/axios@0.19.2/dist/axios.min.js',
        'https://cdn.rawgit.com/rikmms/progress-bar-4-axios/0a3acf92/dist/index.js',
        'plugins/chart.js/Chart.min.js',
   
    ];

    public $publishOptions = [
        "only" => [
            "dist/js/*",
            "dist/css/*",
            'plugins/sweetalert2/*',
            'plugins/sweetalert2-theme-bootstrap-4/*',
            'plugins/tempusdominus-bootstrap-4/css/*',
            'plugins/tempusdominus-bootstrap-4/js/*',
            'plugins/toastr/*',
            "plugins/bootstrap/js/*",
            "plugins/chart.js/*",
        ],

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'app\themes\adminlte3\assets\FontAwesomeAsset',
    ];
}