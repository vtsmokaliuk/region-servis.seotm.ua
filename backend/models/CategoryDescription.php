<?php

namespace backend\models;

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
            [['language', 'header', 'title'], 'required', 'message'=> Yii::t('admin','Пожалуйста, заполните поле: {attribute}') ],
            [['keywords', 'description', 'content'], 'string'],
            [['language', 'header', 'header2', 'title'], 'string', 'max' => 255, 'message'=> Yii::t('admin','Максимальное количество символов 255')],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => Yii::t('admin', 'ID'),
            'language' => Yii::t('admin', 'Язык'),
            'header' => Yii::t('admin', 'Название'),
            'header2' => Yii::t('admin', 'Название доп.'),
            'title' => Yii::t('admin', 'Мета заголовок'),
            'keywords' => Yii::t('admin', 'Meta ключи'),
            'description' => Yii::t('admin', 'Meta описание'),
            'content' => Yii::t('admin', 'Описание'),
              ];
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
