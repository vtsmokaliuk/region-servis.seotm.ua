<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Material;
use yii\web\NotFoundHttpException;
class MaterialController extends Controller
{

    public $statusIsActive = 1;

    public function actionView($id)
    {

        $model= $this->findModel($id);
        $this->registerMeta($model);
        return $this->render('view', ['model'=> $model]);
    }

    protected function findModel($id)
    {
        if (($model = Material::findOne(['id'=>$id, 'status' => $this->statusIsActive])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('frontend', 'Материал не найден'));
    }

    protected function registerMeta($model)
    {
        $view = Yii::$app->view;
        $view->title = $model->title;
        $view->registerMetaTag(['name' => 'description', 'content' => $model->description]);
        $view->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
    }

}
