<?php

namespace frontend\models;
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
        public function getProduct(){
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
