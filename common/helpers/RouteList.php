<?php

namespace common\helpers;

use Yii;
use yii\base\Model;

class RouteList
{
    public static function getRoutes($model = null)
    {
        return [
            $model->defaultRoute => $model->defaultRoute,
            'product/view' => 'product/view',
            'category/view' => 'category/view',
            'material/view' => 'material/view',
            'section/view' => 'section/view',
            'cart/index' => 'cart/index',
            'cart/checkout' => 'cart/checkout',
            'cart/success' => 'cart/success',
            'site/index' => 'site/index',
            'site/contact' => 'site/contact',
            'product/product-comparison' =>'product/product-comparison'
        ];
    }
}