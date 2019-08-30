<?php

namespace frontend\models;

use Yii;

class MaterialDescription extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'material_description';
    }

    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['id' => 'material_id']);
    }
}
