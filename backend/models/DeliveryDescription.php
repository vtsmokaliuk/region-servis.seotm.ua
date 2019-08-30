<?php

namespace backend\models;

use Yii;

class DeliveryDescription extends \yii\db\ActiveRecord
{
    static function tableName()
    {
        return 'delivery_description';
    }

    public function rules()
    {
        return [
            [['header'], 'required','message'=> Yii::t('admin','Пожалуйста, заполните поле: {attribute}') ],
            [['header'], 'string', 'max' => 255,  'tooLong'=> Yii::t('admin','Максимальное количество символов 255')],
            [['content'], 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => Yii::t('admin', 'Название'),
            'content' => Yii::t('admin', 'Описание'),
        ];
    }

    public function getAttributeGroup()
    {
        return $this->hasOne(Delivery::className(), ['id' => 'delivery_id']);
    }
}
