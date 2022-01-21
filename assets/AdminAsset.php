<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        'admin_lte/plugins/fontawesome-free/css/all.min.css',
        'admin_lte/dist/css/adminlte.min.css',
    ];
    public $js = [
        'admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'admin_lte/dist/js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}