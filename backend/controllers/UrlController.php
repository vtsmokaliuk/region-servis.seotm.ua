<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use common\helpers\TranslitHelper;

class UrlController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionTranslitUrl()
    {
        if (Yii::$app->request->isAjax) {
            $model = new TranslitHelper;
            $post = Yii::$app->request->post();
            $header = array_key_first($post);
            return $model->str2url($header);
        }

    }
}