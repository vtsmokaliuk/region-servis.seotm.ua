<?php

namespace backend\models;

use Yii;


class MenuDescription extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'menu_description';
    }

    public function rules()
    {
        return [
            // [['language'], 'required'],
            [['content'], 'string'],
            [['language'], 'string', 'max' => 16],
            ['header', 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'menu_id' => Yii::t('admin', 'Меню айди'),
            'language' => Yii::t('admin', 'Язык'),
            'content' => Yii::t('admin', 'Контент'),
            'header' => Yii::t('admin', 'Заголовок меню'),
        ];
    }

    public function getMenu(){
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }
}
