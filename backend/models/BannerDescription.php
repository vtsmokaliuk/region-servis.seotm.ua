<?php

namespace backend\models;

use Yii;

class BannerDescription extends \yii\db\ActiveRecord
{
    static function tableName()
    {
        return 'banner_desctiption';
    }

    public function rules()
    {
        return [
            [['header'], 'required','message'=> Yii::t('admin','Пожалуйста, заполните поле: {attribute}') ],
            [['header'], 'string', 'max' => 255,  'tooLong'=> Yii::t('admin','Максимальное количество символов 255')],
            ['content', 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => Yii::t('admin', 'Название'),
            'content' => Yii::t('admin', 'Контент'),
        ];
    }

    public function getAttributeGroup()
    {
        return $this->hasOne(Banner::className(), ['id' => 'banner_id']);
    }
}
