<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Banner;
use frontend\models\ProductAttribute;
use frontend\models\Filter;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

class CategoryController extends Controller
{

    public $statusActive = 1;
    public $pageSize = 20;
    public $enableCsrfValidation = false;
    public function actionView($id)
    {
        $session = Yii::$app->session;
        $productIds = null;
        $dataProvider = null;
        $banners = null;
        if (!empty((int)Yii::$app->config->get('productCategoryCount'))) {
            $this->pageSize = (int)Yii::$app->config->get('productCategoryCount');
        }
        $model = new Category;
        $productIds = $model->getProductFromCategory($id);
        $productCategory = $productIds;
        if (Yii::$app->request->post('filter')) {
            $filter = Yii::$app->request->post('filter');
            $productAttrModel = new Filter;
            if (!empty($productAttrModel->filterProduct($id, $filter))) {
                $productCategory = $productAttrModel->filterProduct($id, $filter);
                $session->set('productIds', $productCategory);
                $session->set('categoryId', $id);
            }
            return $this->refresh();

        }

        if (!empty($session->get('productIds') and $session->get('categoryId') == $id)) {
            $productCategory = $session->get('productIds');
        }

        if (!empty($productIds)) {
            $dataProvider = new ActiveDataProvider([
                'query' => Product::find()->where('`id` IN(' . $productCategory . ')')->andWhere(['status' => $this->statusActive])->orderBy('id DESC'),
                'pagination' => [
                    'pageSize' => $this->pageSize,
                ],
            ]);
        }
        $category = $this->findModel($id);
        $this->registerMeta($category);
        $bannerModel = new Banner;
        if (!empty($category->banner_id) and $category->banner_id > 0) {
            $banners = $bannerModel->getBennerById($category->banner_id);
        }
        return $this->render('view', ['category' => $category, 'dataProvider' => $dataProvider, 'productIds' => $productIds, 'banners' => $banners, 'bannerModel' => $bannerModel]);
    }

    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('admin', 'Категория не найдена'));
    }

    protected function registerMeta($model)
    {
        $view = Yii::$app->view;
        $view->title = $model->title;
        $view->registerMetaTag(['name' => 'description', 'content' => $model->description]);
        $view->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
    }

    public function actionAttributeLoad()
    {
        if (\Yii::$app->request->isAjax) {
            $filterModel = new Filter;
            $attributes = $filterModel->getProductsAttributes(12, '9,10');
            $post = Yii::$app->request->post();
            $attrIds = [];
           foreach ($attributes as $attribute){
               foreach ($attribute as $attr){
                   $attrIds[] = $attr['id'];
               }
           }
           print_r($attrIds);
            return 'data_s';
        }
    }

}
