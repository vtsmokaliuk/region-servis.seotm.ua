<?php
use danxill\sass\SassHandler;
$params = array_merge(
  require __DIR__ . '/../../common/config/params.php',
  require __DIR__ . '/../../common/config/params-local.php',
  require __DIR__ . '/params.php',
  require __DIR__ . '/params-local.php'
);

return [
  'aliases' => [
    '@npm'   => '@vendor/npm-asset',
  ],
  'id' => 'app-frontend',
  'basePath' => dirname(__DIR__),
  'bootstrap' => ['log'],
  'controllerNamespace' => 'frontend\controllers',

    'modules' => [

      
        'filemanager' => [
            'class' => 'pendalf89\filemanager\Module',
            // Upload routes
            'routes' => [
                // Base absolute path to web directory
                'baseUrl' => '',
                // Base web directory url
                'basePath' => '@frontend/web',
                // Path for uploaded files in web directory
                'uploadPath' => 'uploads',
            ],
            // Thumbnails info
            'thumbs' => [
                'small' => [
                    'name' => 'Мелкий',
                    'size' => [100, 100],
                ],
                'medium' => [
                    'name' => 'Средний',
                    'size' => [300, 200],
                ],
                'large' => [
                    'name' => 'Большой',
                    'size' => [500, 400],
                ],
            ],
        ],
    ],



    'language' => 'ru',

    'sourceLanguage' => 'ru',
  'components' => [
    'cache' => [
      'class' => 'yii\caching\FileCache',
    ],
   
    'request' => [
      'csrfParam' => '_csrf-frontend',
      'baseUrl' => '',
    ],
    'user' => [
      'identityClass' => 'common\modules\cabinet\models\User',
      'enableAutoLogin' => true,
      'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
    ],
    'session' => [
      // this is the name of the session cookie used for login on the frontend
      'name' => 'advanced-frontend',
    ],
    'log' => [
      'traceLevel' => YII_DEBUG ? 3 : 0,
      'targets' => [
        [
          'class' => 'yii\log\FileTarget',
          'levels' => ['error', 'warning'],
        ],
      ],
    ],
    'errorHandler' => [
      'errorAction' => 'site/error',
    ],

    'i18n' => [
      'translations' => [
        'frontend*' => [
          'class' => 'yii\i18n\PhpMessageSource',
          'basePath' => '@common/messages',
          'sourceLanguage' => 'en-US',
        ],
      ],
    ],
    'urlManager' => [
      //'class' => 'common\components\UrlManager',
        'class' => 'yii\web\UrlManager',
//        'enableLanguageDetection' => false,
//        'enableLanguagePersistence' => false,
          'enablePrettyUrl' => true,
          'showScriptName' => false,
          'enableStrictParsing' => false,
      'rules' => [
          ['class' => 'common\components\SlugRouteRule'],
          '<action:about|login|logout|signup|request-password-reset>' => 'site/<action>',
         // '<module:[\wd-]+>/<controller:[\wd-]+>/<action:[\wd-]+>/<id:\d+>' => '<module>/<controller>/<action>',
          //'<controller:[\wd-]+>/<action:[\wd-]+>/<id:\d+>' => '<controller>/<action>',
          'cart/add/<id:\d+>' =>'cart/add',
          'cart/min/<id:\d+>' =>'cart/min',
          'cart/remove/<id:\d+>' =>'cart/remove',
          'cart/clear' =>'cart/clear',
          'cart/checkout' =>'cart/checkout',
          'cart' =>'cart/index',
//         'product-comparison' => 'product/product-comparison',
         'product/add-to-comparison/<id:\d+>' => '/product/add-to-comparison'

         // 'cart/show-header-cart',

          
      ],
    ],

  ],
  'params' => $params,
];


