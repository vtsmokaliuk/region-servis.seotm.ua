<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Material;
use frontend\models\Section;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

class SectionController extends Controller
{

    public $statusActive = 1;
    public $pageSize = 20;


    public function actionView($id)
    {
        $dataProvider = null;
        $model = $this->findModel($id);
        $materialIds = $model->getMaterialFromSection($id);
        if (!empty((int)Yii::$app->config->get('blogSectionCount'))) {
            $this->pageSize = (int)Yii::$app->config->get('blogSectionCount');
        }
        if (!empty($materialIds)) {
            $dataProvider = new ActiveDataProvider([
                'query' => Material::find()->where('`id` IN(' . $materialIds . ')')->andWhere(['status' => $this->statusActive])->orderBy('id DESC'),
                'pagination' => [
                    'pageSize' => $this->pageSize,
                ],
            ]);
        }
        $this->registerMeta($model);
        return $this->render('view', ['model' => $model, 'dataProvider' => $dataProvider]);
    }

    protected function findModel($id)
    {
        if (($model = Section::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('admin', 'Секция не найдена'));
    }

    protected function registerMeta($model)
    {
        $view = Yii::$app->view;
        $view->title = $model->title;
        $view->registerMetaTag(['name' => 'description', 'content' => $model->description]);
        $view->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
    }

    public function getBreadcrumbs()
    {
        $breadcrumbs = [];
        $route = $this->getCatAlias($this->category_id);
        $alias = explode('/',$route->url);
        $url = null;
        foreach($alias as $cat){
            $category = Category::find()->where(['alias'=> $cat])->one();
            $url.= $category->alias.'/';
            $breadcrumbs[] = ['label' => $category->header, 'url' => substr('/'.$url,0,-1)];
        }
        $breadcrumbs[] = ['label' => $this->header];
        return $breadcrumbs;
    }


}
