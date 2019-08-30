<?php

namespace frontend\controllers;

use frontend\models\ProductAttribute;
use Yii;
use yii\web\Controller;
use frontend\models\Product;
use frontend\models\Material;
use frontend\models\Category;
use frontend\models\Comparison;
use frontend\models\ProductToCategory;
use yii\web\NotFoundHttpException;

class ProductController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionView($id)
    {
        $productToCategory = new ProductToCategory;
        $category = $productToCategory->getCategory($id);
        $modelCategory = new Category;
        $similarProductsIds = $modelCategory->getProductFromCategory($category->category_id);
        $product = $this->findModel($id);
        $similarProducts = $product->getSimilarProduct($id, $similarProductsIds);
        $isnew = $product->getIsNew();
        $this->registerMeta($product);
        $images = $product->getImages($product->id);
        $prodAttrModel = new ProductAttribute;
        $attributes = $prodAttrModel->getAtttibuteToProduct($id);
        return $this->render('view', ['product' => $product, 'category' => $category, 'similarProducts' => $similarProducts, 'isnew' => $isnew, 'images' => $images, 'attributes' => $attributes]);
    }

    public function actionProductComparison($id = null)
    {
        $model = null;
        $products = null;
        if ($id !== null) {
            $model = $this->findModelMaterial($id);
            $this->registerMeta($model);
        }
        if (isset(Yii::$app->session['comparison'])) {
            $products = Comparison::getProductsComparison();
            $compariosonProduct = array_keys($products);
            $products = Product::getProdustsByIds($compariosonProduct);
        }

        return $this->render('comparison', ['model' => $model, 'products' => $products]);
    }

    public function actionAddToComparison($id)
    {
        Comparison::addProduct($id);
        return $this->renderAjax('/widget/comparison');
    }


    protected function registerMeta($model)
    {
        $view = Yii::$app->view;
        $view->title = $model->title;
        $view->registerMetaTag(['name' => 'description', 'content' => $model->description]);
        $view->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
    }

    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('admin', 'Товар не найден'));
    }

    protected function findModelMaterial($id)
    {
        if (($model = Material::findOne($id)) !== null) {
            return $model;
        }
    }

   
}
