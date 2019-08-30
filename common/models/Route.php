<?php

namespace  common\models;

use Yii;

class Route extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%route}}';
    }

    public function rules()
    {
        return [
            [['model', 'model_id'], 'safe'],
            [['url', 'route'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '',
            'model' => '',
            'model_id' =>'',
            'url' => '',
            'route' => '',
        ];
    }
}
