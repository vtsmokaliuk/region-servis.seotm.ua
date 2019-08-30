<?php

namespace frontend\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $scss;
    public $scssArray;
    public $css = [
        '/css/bootstrap.min.css',
        '/css/main.css',
        '/css/blue.css',
        '/css/owl.carousel.css',
        '/css/owl.transitions.css',
        '/css/animate.min.css',
        'css/rateit.css',
        '/css/bootstrap-select.min.css',
        '/css/lightbox.css',
        '/css/font-awesome.css',
        'https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800',
        'http://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800',
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.2/nouislider.css'
    ];
    public $js = [
      '/js/jquery-1.11.1.min.js',
        '/js/nouislider.js',
        '/js/bootstrap.min.js',
        'js/bootstrap-hover-dropdown.min.js',
        '/js/owl.carousel.min.js',
        '/js/echo.min.js',
        '/js/jquery.easing-1.3.min.js',
        '/js/bootstrap-slider.min.js',
        '/js/jquery.rateit.min.js',
        '/js/lightbox.min.js',
        '/js/bootstrap-select.min.js',
        '/js/wow.min.js',
        '/js/scripts.js',
        '/js/cart.js',
         '/js/comparison.js',
        '/js/search.js',
        '/js/order-rent.js',
        '/js/filter.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
     ];
    public $jsOptions = [
       'position' => \yii\web\View::POS_HEAD,
        //'async' => 'async',
    ];
    public $publishOptions = [
        'forceCopy' => true,
    ];

    public function init()
    {
        parent::init();
//    $this->css = Yii::$app->sass->publishAndGetPathArray($this->css, $this->basePath . '/');
//    foreach ($this->css as $this->scss) {
//      $this->scssArray[] = str_replace('css/', 'css-compiled/', $this->scss);
//    }
//    $this->css = $this->scssArray;
    }
}
