<?php

namespace frontend\models;

use Yii;
use creocoder\translateable\TranslateableBehavior;
use pendalf89\filemanager\models\Mediafile;
use common\models\Route;
use yii\helpers\Url;
use frontend\models\Category;
class Product extends \yii\db\ActiveRecord
{

    public $productAttributeTable = 'product_attribute';
    public $attributeTable = 'attribute';
    public $attributeDescTable = 'attribute_description';
    public $productImageTable = 'product_image';
    public $productToCategoryTable = 'product_to_category';
    public $statusIsActive = 1;


    public function behaviors()
    {
        return [
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'title', 'keywords', 'description', 'content', 'short_content'],
            ],
        ];
    }

    public static function tableName()
    {
        return 'product';
    }

    public function getTranslations()
    {
        return $this->hasMany(ProductDescription::className(), ['product_id' => 'id']);
    }

    public function getCurrency()
    {
        return Yii::$app->config->get('currency');
    }

    public function getProductPrice($model = null)
    {
        $currency = $this->getCurrency();
        if ($model !== null) {
            return $model->price . $currency;
        }
    }

    public function getPriceRent($model = null)
    {
        $currency = $this->getCurrency();
        if ($model !== null) {
            return $model->price_rent . $currency;
        }
    }

    public function getProductPriceTotalInCart($model = null, $quantity = null)
    {
        $currency = $this->getCurrency();
        if ($model !== null && $quantity !== null) {
            return $model->price * $quantity . $currency;
        }
    }

    public function getProductStockStatus($stock_status_id)
    {
        switch ($stock_status_id) {
            case 1:
                $result = Yii::t('frontend', 'В наличии');
                break;
            case '':
                $result = Yii::t('frontend', 'Нет в наличии');
                break;
            default:
                $result = Yii::t('frontend', 'Нет в наличии');
        }
        return $result;
    }

    public function getBigImage($id, $size = null)
    {
        $param = 'original';
        if ($size !== null) {
            $param = $size;
        }
        if ($mediafile = Mediafile::loadOneByOwner('product', $id, 'image')) {
            return $mediafile->getThumbUrl($param);
        } else {
            return Yii::$app->request->baseUrl . '/images/products/p1_hover.jpg';
        }
    }

    public function getAlias($model = null)
    {
        if ($model !== null) {
            return Url::to(['/' . $model->alias]);
        }
    }

    public function getSimilarProduct($current_product_id = null, $product_ids = null)
    {
        if ($current_product_id !== null and $product_ids !== null) {
            return Product::find()->where('`id` IN(' . $product_ids . ')')->andWhere(['status' => $this->statusIsActive])->andWhere('id != ' . $current_product_id)->orderBy('id DESC')->all();
        }
    }

    public static function getProdustsByIds($idsArray)
    {
        $products = Product::find()->where(['status' => (new self)->statusIsActive])->andwhere(['in', 'id', $idsArray])->all();
        return $products;
    }

    public function getIsNew(){
        $limit = 5;
        if(Yii::$app->config->get('countItemsInNew')){
            $limit = Yii::$app->config->get('countItemsInNew');
        }
        $products = Product::find()->where(['status' => (new self)->statusIsActive])->andwhere(['is_new' => 1])->orderBy('id DESC')->limit($limit)->all();
        return $products;
    }

    public function getIsRecomended(){
        $limit = 5;
        if(Yii::$app->config->get('countItemsIsRecomended')){
            $limit = Yii::$app->config->get('countItemsIsRecomended');
        }
        $products = Product::find()->where(['status' => (new self)->statusIsActive])->andwhere(['is_recomended' => 1])->orderBy('id DESC')->limit($limit)->all();
        return $products;
    }

    public function productTags($product = null){
        if(!empty($product)) {
            if($product->is_new == 1) {
                return Yii::$app->view->render('_is-new-tag');
            }
        }
    }
    public function getImages(int $product_id = null){
        if($product_id != null){
            $sql = "SELECT * FROM ".$this->productImageTable." WHERE product_id = ".$product_id. " ORDER BY id ASC";
            return Yii::$app->db->createCommand($sql)->queryAll();
        }
        return false;
    }

    public function getSmallImage(string $image = null){
        if(!empty($image)){
            return $image;
        }
    }

    public function getCategory(int $product_id = null){
        if(!empty($product_id)){
            $sql = "SELECT * FROM ".$this->productToCategoryTable." WHERE product_id = ".$product_id;
            return Yii::$app->db->createCommand($sql)->queryOne();
        }
    }
    public function getCategoryDescription(int $id = null){
        if(!empty($id)){
            return Category::find()->where(['id' => $id])->one();
        }
    }
    public function getBreadcrumbs($model)
    {
        $breadcrumbs = [];
        if($this->getCategory($model->id)){
            $category = $this->getCategory($model->id);
            $categoryDesc = $this->getCategoryDescription($category['category_id']);
            $breadcrumbs[] = ['url' => $categoryDesc->getAlias($categoryDesc),'label' => $categoryDesc->header];
        }
        $breadcrumbs[] = ['label' => $model->header];

        return $breadcrumbs;
    }

}
