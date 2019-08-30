<?php

namespace backend\models;

use Yii;
use creocoder\translateable\TranslateableBehavior;

class Menu extends \yii\db\ActiveRecord
{
    public static $statusIsActive = 1;
    public static $statusDraft = 0;

    public function behaviors()
    {
        return [
           'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['content', 'header'],

            ],
        ];
    }
    public static function tableName()
    {
        return 'menu';
    }


    public function rules()
    {
        return [
            // [['name', 'key','status'], 'required'],
            [['status', 'pos'], 'integer'],
            [['name', 'key'], 'string', 'max' => 200],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => Yii::t('admin', 'ID'),
            'name' => Yii::t('admin', 'Название'),
            'key' => Yii::t('admin', 'Ключ'),
            'status' => Yii::t('admin', 'Статус'),
            'pos' => Yii::t('admin', 'Порядок отображения'),
        ];
    }

    public function getTranslations()
    {
        return $this->hasMany(MenuDescription::className(), ['menu_id' => 'id']);
    }
}
