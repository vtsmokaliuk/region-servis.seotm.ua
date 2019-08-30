<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\HttpException;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;
use frontend\models\OrderRent;

class RentController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionSaveOrderRent()
    {
        $model = new OrderRent;
        if(Yii::$app->request->post()) {
            $data = Yii::$app->request->post('OrderRent');
            if ($model->saveOrderRent($data) == true) {
                return 'success';
            }
        }
        else{
            throw new NotFoundHttpException(Yii::t('frontend', 'Материал не найден'));
        }
    }
}
