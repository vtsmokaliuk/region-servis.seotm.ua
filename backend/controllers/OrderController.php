<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\helpers\TranslitHelper;
use backend\models\Order;
use backend\models\OrderSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class OrderController extends Controller
{
    public $enableCsrfValidation = false;
    public $pageSize = 20;
    public $orderProductTable = 'order_product';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = $this->pageSize;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        $products = $this->getProductFromOrder($id);
        return $this->render('view', ['model' => $model, 'products' => $products]);
    }

    public function actionEdit($id)
    {
        $model = $this->findModel($id);
        $products = $this->getProductFromOrder($id);
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post('Order');
            $order_status_id =  $post['order_status_id'];
            $model->order_status_id = $order_status_id;
            $model->save(false);
            return $this->redirect(['index']);
        }
        return $this->render('edit', ['model' => $model, 'products' => $products]);
    }

    protected function getProductFromOrder($order_id = null)
    {
        if ($order_id !== null) {
            $sql = 'SELECT * FROM ' . $this->orderProductTable . ' WHERE order_id = ' . $order_id;
            return Yii::$app->db->createCommand($sql)->queryAll();
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('admin', 'Заказ не найден'));
    }


}