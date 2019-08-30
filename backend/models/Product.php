<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\behaviors\RoutableBehavior;
use creocoder\translateable\TranslateableBehavior;
use pendalf89\filemanager\behaviors\MediafileBehavior;
use pendalf89\filemanager\models\Mediafile;


class Product extends \yii\db\ActiveRecord
{
    public $backendPath = '/backend/web';
    public $frontendPath = '';
    public $productImageTable = 'product_image';

    public function __construct()
    {
        $this->frontendPath = $_SERVER['DOCUMENT_ROOT'] . '/frontend/web/';
    }

    public static function tableName()
    {
        return 'product';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'title', 'keywords', 'description', 'content'],
            ],
            [
                'class' => RoutableBehavior::className(),
                'defaultRoute' => 'product/view'
            ],
            'mediafile' => [
                'class' => MediafileBehavior::className(),
                'name' => 'product',
                'attributes' => [
                    'image',
                ],
            ]
        ];
    }

    public function rules()
    {
        return [
            [['pos', 'status', 'index', 'price_rent_status'], 'integer'],
            [['price', 'new_price', 'price_rent'], 'number'],
            [['price'], 'required'],

            [['quantity'], 'integer'],
            [['is_new', 'is_recomended'], 'boolean'],
            [['stock_status_id', 'manufacture_id', 'shiping', 'points'], 'integer'],
            [['model', 'sku'], 'string', 'max' => 64],
            [['image'], 'string', 'max' => 255],
            [['alias'], 'required', 'message' => Yii::t('admin', 'Пожалуйста, заполните поле: {attribute}')],
            [['alias'], 'string', 'max' => 255, 'message' => Yii::t('admin', 'Максимальное количество символов 255')],
            [['alias'], 'unique', 'message' => Yii::t('admin', 'Такой адрес уже существует'), 'on' => 'create']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('admin', 'ID'),
            'model' => Yii::t('admin', 'Модель'),
            'sku' => Yii::t('admin', 'Артикул'),
            'alias' => Yii::t('admin', 'Url адрес'),
            'quantity' => Yii::t('admin', 'Количество'),
            'stock_status_id' => Yii::t('admin', 'В наличии'),
            'image' => Yii::t('admin', 'Картинка'),
            'manufacture_id' => Yii::t('admin', 'Производитель'),
            'shiping' => Yii::t('admin', 'Shiping'),
            'price' => Yii::t('admin', 'Цена'),
            'new_price' => Yii::t('admin', 'Новая цена'),
            'price_rent' => Yii::t('admin', 'Цена аренди'),
            'points' => Yii::t('admin', 'Points'),
            'is_new' => Yii::t('admin', 'Новинка'),
            'is_recomended' => Yii::t('admin', 'Рекомендуемый'),
            'pos' => Yii::t('admin', 'Порядок сортировки'),
            'status' => Yii::t('admin', 'Статус'),
            'index' => Yii::t('admin', 'Не индексировать'),
            'created_at' => Yii::t('admin', 'Created At'),
            'updated_at' => Yii::t('admin', 'Updated At'),
        ];
    }

    public function getUrl()
    {
        //return ($this->section !== null ? '/' . $this->section->alias : '') . '/' . $this->alias;
        return $this->alias;
    }

    public function getTranslations()
    {
        return $this->hasMany(ProductDescription::className(), ['product_id' => 'id']);
    }


    public function getImagePrev($id, $size = null)
    {
        $param = 'original';
        if ($size != null) {
            $param = $size;
        }
        if ($mediafile = Mediafile::loadOneByOwner('product', $id, 'image')) {
            return $mediafile->getThumbUrl($param);
        } else {
            return $this->backendPath . '/image/placeholder.jpg';
        }
    }

    public function getImagePlaceholder()
    {
        return $this->backendPath . '/image/placeholder.jpg';
    }

    public function addImageToProduct(int $product_id, array $imagesProduct)
    {
        if (is_array($imagesProduct)) {
            foreach ($imagesProduct as $image) {
                $this->saveImage($product_id, $image);
            }
        }
    }

    public function saveImage(int $product_id = null, string $image = null)
    {
        if (!empty($product_id) and !empty($image)) {
            return Yii::$app->db->createCommand()->insert($this->productImageTable, [
                'product_id' => $product_id,
                'image' => $image
            ])->execute();
        }
    }

    public function deleteImageFromProduct(int $product_id = null)
    {
        if ($product_id != null) {
            $sql = "DELETE FROM " . $this->productImageTable . ' WHERE product_id = ' . $product_id;
            return Yii::$app->db->createCommand($sql)->execute();
        }
        return false;
    }

    public function getImages(int $product_id = null){
        if($product_id != null){
            $sql = "SELECT * FROM ".$this->productImageTable." WHERE product_id = ".$product_id. " ORDER BY id ASC";
            return Yii::$app->db->createCommand($sql)->queryAll();
        }
        return false;
    }

}
