<?php

namespace backend\models;

use Yii;
use creocoder\translateable\TranslateableBehavior;

class AtributeGroup extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'attribute_group';
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
            [['pos'], 'integer', 'message'=> Yii::t('admin','Значение должно быть целым числом')],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pos' => Yii::t('admin', 'Порядок сортировки'),
        ];
    }

    public function getTranslations()
    {
        return $this->hasMany(AttributeGroupDescription::className(), ['attribute_group_id' => 'id']);
    }

    public static function getAtributeGroup(){
        return static::find()->all();
    }
}
