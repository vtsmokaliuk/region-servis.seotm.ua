<?php

namespace backend\controllers;

use Yii;
use backend\models\Category;
use backend\models\CategorySearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use frontend\models\Material;

class CategoryController extends Controller
{
    public $pageSize = 20;

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
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = $this->pageSize;
        Yii::$app->view->params['createBtn'] = Html::a(Yii::t('admin', 'Добавить категорию'), ['create'], ['class' => 'btn btn-success m-l-20']);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $model = new Category();
        $model->scenario = 'create';
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post('Category');
            foreach (Yii::$app->request->post('CategoryDescription', []) as $language => $data) {
                foreach ($data as $attribute => $translation) {
                    $model->translate($language)->$attribute = $translation;
                }
            }
            $model->save();
            $id = $model->id;
            if (isset($post['save'])) {
                return $this->redirect(['index']);
            }
            if (isset($post['apply'])) {
                return $this->redirect(['update', 'id' => $id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post('Category');
            foreach (Yii::$app->request->post('CategoryDescription', []) as $language => $data) {
                foreach ($data as $attribute => $translation) {
                    $model->translate($language)->$attribute = $translation;
                }
            }
            $model->save();
            $id = $model->id;
            if (isset($post['save'])) {
                return $this->redirect(['index']);
            }
            if (isset($post['apply'])) {
                return $this->redirect(['update', 'id' => $id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        }
}

    protected function registerMeta($model)
    {
        $view = Yii::$app->view;
        $view->title = $model->title;
        $view->registerMetaTag(['name' => 'description', 'content' => $model->description]);
        $view->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
    }
}
