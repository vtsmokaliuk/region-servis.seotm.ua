<?php

namespace backend\models;

use Yii;

class AttributeGroupDescription extends \yii\db\ActiveRecord
{
    static function tableName()
    {
        return 'attribute_group_description';
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
            'attribute_group_id' => 'Attribute Group ID',
            'header' => Yii::t('admin', 'Название'),
        ];
    }

    public function getAttributeGroup()
    {
        return $this->hasOne(AttributeGroup::className(), ['id' => 'attribute_group_id']);
    }
}
