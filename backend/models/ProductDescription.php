<?php

namespace backend\models;
use Yii;

class ProductDescription extends \yii\db\ActiveRecord
{
   public static function tableName()
    {
        return 'product_description';
    }

    public function rules()
    {
        return [
            [['header', 'title'], 'required'],
            [['keywords', 'description', 'content', 'short_content', 'tag'], 'string'],
            [['header', 'title'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('admin', 'ID'),
            'product_id' => Yii::t('admin', 'Product ID'),
            'language' => Yii::t('admin', 'Язык'),
            'header' => Yii::t('admin', 'Название'),
             'title' => Yii::t('admin', 'Мета заголовок'),
            'keywords' => Yii::t('admin', 'Meta ключи'),
            'description' => Yii::t('admin', 'Meta описание'),
            'content' => Yii::t('admin', 'Описание'),
            'short_content' => Yii::t('admin', 'Краткое описание'),
            'tag' => Yii::t('admin', 'Теги'),
        ];
    }
    public function getProduct(){
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
