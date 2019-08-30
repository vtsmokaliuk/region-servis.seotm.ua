<?php

namespace backend\controllers;

use Yii;
use backend\models\Product;
use backend\models\ProductSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use backend\models\ProductAttribute;
use backend\models\MigrationN;
use backend\models\ProductToCategory;

class ProductController extends Controller
{
    public $pageSize = 100;
    public $enableCsrfValidation = false;

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
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = $this->pageSize;
        Yii::$app->view->params['createBtn'] = Html::a(Yii::t('admin', 'Добавить товар'), ['create'], ['class' => 'btn btn-success m-l-20']);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $model = new Product();
        $model->scenario = 'create';
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post('Product');
            foreach (Yii::$app->request->post('ProductDescription', []) as $language => $data) {
                foreach ($data as $attribute => $translation) {
                    $model->translate($language)->$attribute = $translation;
                }
            }
            $model->save();
            $product_id = $model->id;
            $product_attributes = Yii::$app->request->post('product_attribute');
            $attributeModel = new ProductAttribute;
            if (is_array($product_attributes)) {
                $data['product_attributes'] = array();
                foreach ($product_attributes as $product_attribute) {
                    $lang = array_key_first($product_attribute['product_attribute_description']);
                    $attributeInfo = $attributeModel->getAttribute($product_attribute['name']);
                    if ($attributeInfo) {
                        $data['product_attributes'][] = [
                            'language' => $lang,
                            'product_id' => $product_id,
                            'attribute_id' => $product_attribute['name'],
                            'text' => $product_attribute['product_attribute_description'][$lang]['text'],
                        ];
                    }
                }
                $attributeModel->addAttributeToProduct($data['product_attributes']);
            }
            $categoryList = Yii::$app->request->post('productToCategory');
            ProductToCategory::saveCategory($product_id, $categoryList);

            $product_images = Yii::$app->request->post('image');
            if (is_array($product_images)) {
                $model->addImageToProduct($product_id, $product_images);
            }
            if (isset($post['save'])) {
                return $this->redirect(['index']);
            }
            if (isset($post['apply'])) {
                return $this->redirect(['update', 'id' => $product_id]);
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
            $post = Yii::$app->request->post('Product');
            foreach (Yii::$app->request->post('ProductDescription', []) as $language => $data) {
                foreach ($data as $attribute => $translation) {
                    $model->translate($language)->$attribute = $translation;
                }
            }
            $model->save();
            $product_id = $model->id;
            $product_attributes = Yii::$app->request->post('product_attribute');
            $attributeModel = new ProductAttribute;
            $attributeModel->deleteAttribureFromProduct($product_id);
            if (is_array($product_attributes)) {
                $data['product_attributes'] = array();
                foreach ($product_attributes as $product_attribute) {
                    $lang = array_key_first($product_attribute['product_attribute_description']);
                    $attributeInfo = $attributeModel->getAttribute($product_attribute['name']);
                    if ($attributeInfo) {
                        $data['product_attributes'][] = [
                            'language' => $lang,
                            'product_id' => $product_id,
                            'attribute_id' => $product_attribute['name'],
                            'text' => $product_attribute['product_attribute_description'][$lang]['text'],
                        ];
                    }
                }
                $attributeModel->addAttributeToProduct($data['product_attributes']);
            }
            $categoryList = Yii::$app->request->post('productToCategory');
            ProductToCategory::saveCategory($product_id, $categoryList);
            $model->deleteImageFromProduct($product_id);
            $product_images = Yii::$app->request->post('image');
            if (isset($product_images)) {
                $model->addImageToProduct($product_id, $product_images);
            }
            if (isset($post['save'])) {
                return $this->redirect(['index']);
            }
            if (isset($post['apply'])) {
                return $this->redirect(['update', 'id' => $product_id]);
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

    public function actionCreateAttribute()
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('_create-attribute');
        }
    }


    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('admin', 'Товар не найдена'));
    }

    public function actionMigrate()
    {
        $migrate = new MigrationN;
        $migrate->up();
    }
}
