<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use creocoder\translateable\TranslateableBehavior;
use yii\db\ActiveRecord;

class Language extends \yii\db\ActiveRecord
{
    protected $statusActive = 1;
    protected $statusInActive = 0;
    protected $systemTable = 'system';

    public static function tableName()
    {
        return 'language';
    }

    public function rules()
    {
        return [
            [['code', 'locale', 'title'], 'required'],
            [['sort_order'], 'integer'],
            [['code', 'locale'], 'string', 'max' => 8],
            [['title'], 'string', 'max' => 255],
            [['icon'], 'string', 'max' => 64],
            [['status'], 'string', 'max' => 6],
            [['code'], 'unique'],
            [['locale'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'code' => Yii::t('backend/language', 'Code'),
            'locale' => Yii::t('backend/language', 'Locale'),
            'title' => Yii::t('backend/language', 'Title'),
            'icon' => Yii::t('backend/language', 'Icon'),
            'status' => Yii::t('backend/common', 'Status'),
            'sort_order' => Yii::t('backend/common', 'Sort Order'),

        ];
    }

    public static function findAllActive()
    {
        return static::find()->where(['status' => (new self)->statusActive])->all();
    }

    public static function getDefaultLanguage()
    {
        if ($result = Yii::$app->config->get('default_language')) {
            return $result;
        }
    }

    public static function getAdminLanguage()
    {
        return 'ru';
    }

    public static function getCurrentLanguage(){
        return 'ru';
    }

}