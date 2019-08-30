<?php

namespace backend\models;
use Yii;
use creocoder\translateable\TranslateableBehavior;

class Attribute extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'attribute';
    }

    public function behaviors()
    {
        return [
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header'],
            ],
        ];
    }

    public function rules()
    {
        return [
            [['attribute_group_id'], 'required',  'message'=> Yii::t('admin','Пожалуйста, заполните поле: {attribute}')],
            [['pos'], 'integer', 'message'=> Yii::t('admin','Значение должно быть целым числом')],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attribute_group_id' => Yii::t('admin', 'Группа атрибута'),
            'pos' => Yii::t('admin', 'Порядок сортировки'),
        ];
    }

    public function getTranslations()
    {
        return $this->hasMany(AttributeDescription::className(), ['attribute_id' => 'id']);
    }

    public static function getAtttibuteList(){
        return static::find()->all();
    }
}
