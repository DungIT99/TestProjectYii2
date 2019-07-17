<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/main.css',
        'css/jquery-ui.css',
        
    ];
    public $js = [
        // 'js/main.js',
        'js/jquery-ui.js',
        'js/jquery-formatDate.js',
        'js/processingOrder.js'
        // 'tinymce/jquery.tinymce.min.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
