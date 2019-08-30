<?php

namespace backend\models;
use Yii;
use creocoder\translateable\TranslateableBehavior;

class Block extends \yii\db\ActiveRecord
{
    public static $typeHtml = 'html';
    public static $typeText = 'text';
    public static $statusIsActive = 1;
    public static $statusDraft = 0;

    public static function tableName()
    {
        return 'block';
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
             ['type', 'string'],
            [['key'], 'required' , 'message'=> Yii::t('admin','Пожалуйста, заполните поле: {attribute}')],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => Yii::t('admin', 'Статус'),
            'pos' => Yii::t('admin', 'Порядок отображения'),
            'key' => Yii::t('admin', 'Ключ'),
            'type' => Yii::t('admin', 'Тип блока'),

        ];
    }

    public function getTranslations()
    {
        return $this->hasMany(BlockDescription::className(), ['block_id' => 'id']);
    }

}
