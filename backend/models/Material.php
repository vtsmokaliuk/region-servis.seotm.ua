<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\behaviors\RoutableBehavior;
use creocoder\translateable\TranslateableBehavior;
use pendalf89\filemanager\behaviors\MediafileBehavior;
use pendalf89\filemanager\models\Mediafile;

class Material extends \yii\db\ActiveRecord
{

    public $backendPath = '/backend/web';

    public static function tableName()
    {
        return 'material';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'header2', 'title', 'keywords', 'description', 'content',
                    'short_content'],
            ],
            [
                'class' => RoutableBehavior::className(),
                'defaultRoute' => 'material/view'
            ],
            'mediafile' => [
                'class' => MediafileBehavior::className(),
                'name' => 'material',
                'attributes' => [
                    'image',
                ],
            ]
        ];
    }

    public function rules()
    {
        return [
            [['alias'], 'required', 'message' => Yii::t('admin', 'Пожалуйста, заполните поле: {attribute}')],
            [['pos', 'status', 'section_id', 'onmain', 'created_at', 'updated_at', 'index'], 'integer'],
            [['alias', 'image'], 'string', 'max' => 255],
            ['banner_id', 'integer']
             ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => Yii::t('admin', 'Url адрес'),
            'image' => Yii::t('admin', 'Картинка'),
            'pos' => Yii::t('admin', 'Порядок сортировки'),
            'status' => Yii::t('admin', 'Статус'),
            'header' => Yii::t('admin', 'Название'),
            'section_id' => Yii::t('admin', 'Категория'),
            'onmain' => Yii::t('admin', 'На главной'),
            'created_at' => Yii::t('admin', 'Дата добавления'),
            'updated_at' => Yii::t('admin', 'Дата изменения'),
        ];
    }

    public function getUrl()
    {
        //return ($this->section !== null ? '/' . $this->section->alias : '') . '/' . $this->alias;
        return $this->alias;
    }

    public function getTranslations()
    {
        return $this->hasMany(MaterialDescription::className(), ['material_id' => 'id']);
    }

    public function getImagePlaceholder()
    {
        return $this->backendPath . '/image/placeholder.jpg';
    }

    public function getImagePrev($id, $size = null)
    {
        $param = 'original';
        if ($size != null) {
            $param = $size;
        }
        if ($mediafile = Mediafile::loadOneByOwner('material', $id, 'image')) {
            return $mediafile->getThumbUrl($param);
        } else {
            return $this->backendPath . '/image/placeholder.jpg';
        }
    }


}
