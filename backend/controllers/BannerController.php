<?php

namespace backend\controllers;

use Yii;
use backend\models\Banner;
use backend\models\BannerSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;

class BannerController extends Controller
{

    public $pageSize = 10;

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
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = $this->pageSize;
        Yii::$app->view->params['createBtn'] = Html::a(Yii::t('admin', 'Добавить баннер'), ['create'], ['class' => 'btn btn-success m-l-20']);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionCreate()
    {
        $model = new Banner();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $banner_id = $model->id;
            $bannerDescription = Yii::$app->request->post('banner_desc');
            if (isset($bannerDescription)) {
                $data['banner_description'] = array();
                foreach ($bannerDescription as $banner) {
                    $lang = array_key_first($banner['banner_description']);
                    $data['banner_description'][] = [
                        'language' => $lang,
                        'banner_id' => $banner_id,
                        'image' => $banner['banner_description'][$lang]['image'],
                        'header' => $banner['banner_description'][$lang]['header'],
                        'header2' => $banner['banner_description'][$lang]['header2'],
                        'btn_text' => $banner['banner_description'][$lang]['btn_text'],
                        'link' => $banner['banner_description'][$lang]['link'],
                        'content' => $banner['banner_description'][$lang]['content'],
                        'pos' => $banner['banner_description'][$lang]['pos'],
                    ];

                }
                $model->saveBannerDescription($data['banner_description']);
            }
            return $this->redirect(['index']);
        }
        return $this->render('create', ['model' => $model,]);
    }

    public
    function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $banner_id = $model->id;
            $bannerDescription = Yii::$app->request->post('banner_desc');
            if (isset($bannerDescription)) {
                $model->deleteBannerDescription($banner_id);
                $data['banner_description'] = array();
                foreach ($bannerDescription as $banner) {
                    $lang = array_key_first($banner['banner_description']);
                    $data['banner_description'][] = [
                        'language' => $lang,
                        'banner_id' => $banner_id,
                        'image' => $banner['banner_description'][$lang]['image'],
                        'header' => $banner['banner_description'][$lang]['header'],
                        'header2' => $banner['banner_description'][$lang]['header2'],
                        'btn_text' => $banner['banner_description'][$lang]['btn_text'],
                        'link' => $banner['banner_description'][$lang]['link'],
                        'content' => $banner['banner_description'][$lang]['content'],
                        'pos' => $banner['banner_description'][$lang]['pos'],
                    ];

                }
                $model->saveBannerDescription($data['banner_description']);
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public
    function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected
    function findModel($id)
    {
        if (($model = Banner::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('admin', 'Не найдено такого баннера'));
    }
}
