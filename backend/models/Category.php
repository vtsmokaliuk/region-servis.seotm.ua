<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\behaviors\RoutableBehavior;
use creocoder\translateable\TranslateableBehavior;
use pendalf89\filemanager\behaviors\MediafileBehavior;

class Category extends \yii\db\ActiveRecord
{
    public $statusActive = 1;
    public $statusInActive = 0;
    public $backendPath = '/backend/web';
    public static function tableName()
    {
        return 'category';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'header2', 'title', 'keywords', 'description', 'content'],
            ],
            [
                'class' => RoutableBehavior::className(),
                'defaultRoute' => 'category/view'
            ],
            'mediafile' => [
                'class' => MediafileBehavior::className(),
                'name' => 'category',
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
            [['pos', 'status', 'on_main', 'created_at', 'updated_at', 'index', 'parent_id'], 'integer', 'message' => Yii::t('admin', 'Значение должно быть целым числом')],
            [['alias', 'image'], 'string', 'max' => 255, 'message' => Yii::t('admin', 'Максимальное количество символов 255')],
            [['alias'], 'unique', 'message' => Yii::t('admin', 'Такой адрес уже существует'), 'on' => 'create'],
            ['banner_id', 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => Yii::t('admin', 'Url адрес'),
            'parent_id' => Yii::t('admin', 'Родительская категория'),
            'image' => Yii::t('admin', 'Картинка'),
            'pos' => Yii::t('admin', 'Порядок сортировки'),
            'status' => Yii::t('admin', 'Статус'),
            'index' => Yii::t('admin', 'Не индексировать'),
            'created_at' => Yii::t('admin', 'Дата добавления'),
            'updated_at' => Yii::t('admin', 'Дата изменения'),
        ];
    }


    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => $this->parent_id]);
    }

    public function getTreeUrl()
    {
        $row = (new \yii\db\Query())->select(['url', 'id'])->from('route')->where(['model_id' => $this->parent_id])->andWhere(['route' => $this->route])->one();
        if ($row['url'] != '') {
            return $row['url'];
        }
    }

    public function getParentAlias()
    {
        $row = (new \yii\db\Query())->select(['alias', 'id'])->from((new self)->tableName())->where(['id' => $this->parent_id])->one();
        if ($this->getTreeUrl()) {
            return $this->getTreeUrl();
        } else {
            return $row['alias'];
        }
    }

    public function getUrl()
    {
        if (isset($this->parent_id)) {
            if ($this->parent_id !== null && $this->parent_id > 0) {
                return '/' . $this->getParentAlias() . '/' . $this->alias;
            } else {
                return '/' .$this->alias;
            }
        }
        else{
            return '/' .$this->alias;
        }
    }

    public function getTranslations()
    {
        return $this->hasMany(CategoryDescription::className(), ['category_id' => 'id']);
    }

    public static function getCategoryList()
    {
        return static::find()->where(['status' => (new self)->statusActive])->all();
    }
    public function getImagePlaceholder()
    {
        return $this->backendPath . '/image/placeholder.jpg';
    }

}
