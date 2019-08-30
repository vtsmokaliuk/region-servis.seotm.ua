<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use frontend\models\Cart;
use frontend\models\Product;
use frontend\models\Category;
use frontend\models\CategoryDescription;
use frontend\models\ProductDescription;
use yii\web\HttpException;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;

class SearchController extends Controller
{

    public $statusIsActive = 1;
    public $enableCsrfValidation = false;
    public $pageSize = 100;
    public $limit = 1;

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionSearchAjax()
    {
        if (Yii::$app->request->isAjax) {
            $search = Yii::$app->request->post('search');
            $category = $search['category'];
            $text = $search['text'];
            switch ($category) {
                case 'category':
                    $query = Category::find();
                    $query->joinWith('translations');
                    $dataProvider = new ActiveDataProvider([
                        'query' => $query,
                    ]);
                    $query->andFilterWhere([
                        'status' => $this->statusIsActive,
                    ]);
                    $query->andFilterWhere(['like', CategoryDescription::tableName() . '.header', $text]);
                    break;
                case 'product':
                    $query = Product::find();
                    $query->joinWith('translations');
                    $dataProvider = new ActiveDataProvider([
                        'query' => $query,
                    ]);
                    $query->andFilterWhere([
                        'status' => $this->statusIsActive,
                    ]);
                    $query->andFilterWhere(['like', ProductDescription::tableName() . '.header', $text]);

                    break;
                default:
                    break;

            }
            $dataProvider->pagination->pageSize = $this->pageSize;
            return $this->renderAjax('search-ajax', ['dataProvider' => $dataProvider]);

        }
    }
}