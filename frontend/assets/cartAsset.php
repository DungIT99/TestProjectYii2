<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CartAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fonts/font-awesome-4.7.0/css/font-awesome.min.css',
	
	];
	
	
    public $js = [
    'vendor/jquery/jquery-3.2.1.min.js',
     'js/cart.js',
     'vendor/animsition/js/animsition.min.js',
     'vendor/bootstrap/js/popper.js',
     'vendor/bootstrap/js/bootstrap.min.js',
     


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
