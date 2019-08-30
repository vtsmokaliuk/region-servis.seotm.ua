<?php

namespace backend\models;

use Yii;

class SectionDescription extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'section_description';
    }

    public function rules()
    {
        return [
            [['language', 'header', 'title'], 'required', 'message'=> Yii::t('admin','Пожалуйста, заполните поле: {attribute}') ],
            [['keywords', 'description', 'content', 'short_content'], 'string'],
            [['section_id'], 'string', 'max' => 11],
            [['language', 'header', 'header2', 'title'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => Yii::t('admin', 'ID'),
            'material_id' => Yii::t('admin', 'Material ID'),
            'language' => Yii::t('admin', 'Язык'),
            'header' => Yii::t('admin', 'Название'),
            'header2' => Yii::t('admin', 'Название доп.'),
            'title' => Yii::t('admin', 'Мета заголовок'),
            'keywords' => Yii::t('admin', 'Meta ключи'),
            'description' => Yii::t('admin', 'Meta описание'),
            'content' => Yii::t('admin', 'Описание'),
            'short_content' => Yii::t('admin', 'Краткое описание'),
        ];
    }

    public function getMaterial(){
        return $this->hasOne(Section::className(), ['id' => 'section_id']);
    }
}
