<?php

namespace frontend\models;
use Yii;

class CategoryDescription extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'category_description';
    }

    public function rules()
    {
        return [
            [['header', 'title'], 'required'],
            [['keywords', 'description', 'content'], 'string'],
            [['header', 'title'], 'string', 'max' => 255],
        ];
    }
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
