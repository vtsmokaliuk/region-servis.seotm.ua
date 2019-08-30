<?php
use danxill\sass\SassHandler;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'config'=>[
            'class' => 'common\components\DConfig'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
           ],


    'modules' => [
            'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['*']
        ],
        
    ],
];

$config['components']['assetManager']['forceCopy'] = true;