<?php

namespace frontend\models;
use Yii;
use creocoder\translateable\TranslateableBehavior;

class Delivery extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'delivery';
    }

    public function behaviors()
    {
        return [
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'content'],
            ],
        ];
    }

    public function rules()
    {
        return [
            [['status'], 'integer', 'message'=> Yii::t('admin','Значение должно быть целым числом')],
            [['price', 'pos'], 'number'],
            ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => Yii::t('admin', 'Статус'),
            'price' => Yii::t('admin', 'Цена'),
            'pos' => Yii::t('admin', 'Порядок отображения'),

        ];
    }

    public function getTranslations()
    {
        return $this->hasMany(DeliveryDescription::className(), ['delivery_id' => 'id']);
    }

}
