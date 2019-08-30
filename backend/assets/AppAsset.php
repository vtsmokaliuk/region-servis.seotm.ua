<?php

namespace backend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dist/css/style.css',
        'dist/libs/chartist/dist/chartist.min.css',
        'dist/icons/font-awesome/css/font-awesome.css',
        'dist/icons/themify-icons/themify-icons.css',
        'dist/css/select2.min.css',
        'dist/plugins/codemirror/lib/codemirror.css',
    ];
    public $js = [
        'dist/libs/jquery/dist/jquery.min.js',
        'dist/libs/popper.js/dist/umd/popper.min.js',
        'dist/js/bootstrap.min.js',
        'dist/extra-libs/sparkline/sparkline.js',
        'dist/js/waves.js',
        'dist/js/sidebarmenu.js',
        'dist/js/custom.min.js',
        'dist/libs/chartist/dist/chartist.min.js',
        'dist/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js',
          'dist/js/pages/dashboards/dashboard1.js',
        'dist/js/url-generate.js',
        'dist/js/tabs.js',
        'dist/js/product-attribute.js',
        'dist/js/banner.js',
        'dist/js/product-image.js',
        'dist/js/jquery-ui.min.js',
        'dist/js/select2.min.js',
        'dist/plugins/codemirror/lib/codemirror.js',
        'dist/plugins/menueditor/jquery-menu-editor.js',
        'dist/plugins/menueditor/bootstrap-iconpicker.min.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'backend\assets\BootboxAsset',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

}
