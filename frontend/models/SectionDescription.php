<?php

namespace frontend\models;
use Yii;

class SectionDescription extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'section_description';
    }

    public function rules()
    {
        return [
            [['header', 'header2', 'title'], 'required'],
            [['keywords', 'description', 'content'], 'string'],
            [['header', 'header2', 'title'], 'string', 'max' => 255]
            ];
    }
    public function getCategory(){
        return $this->hasOne(Section::className(), ['id' => 'section_id']);
    }
}
