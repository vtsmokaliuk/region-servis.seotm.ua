<?php

namespace backend\models;

use Yii;

class AttributeDescription extends \yii\db\ActiveRecord
{
    static function tableName()
    {
        return 'attribute_description';
    }

    public function rules()
    {
        return [
            [['header'], 'required','message'=> Yii::t('admin','Пожалуйста, заполните поле: {attribute}') ],
            [['header'], 'string', 'max' => 255,  'tooLong'=> Yii::t('admin','Максимальное количество символов 255')]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => Yii::t('admin', 'Название'),
        ];
    }

    public function getAttributeGroup()
    {
        return $this->hasOne(Attribute::className(), ['id' => 'attribute_group_id']);
    }
}
