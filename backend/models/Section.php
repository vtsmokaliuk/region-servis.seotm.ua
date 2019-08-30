<?php

namespace backend\models;
use Yii;
use yii\behaviors\TimestampBehavior;
use common\behaviors\RoutableBehavior;
use creocoder\translateable\TranslateableBehavior;
use pendalf89\filemanager\behaviors\MediafileBehavior;

class Section extends \yii\db\ActiveRecord
{
    public $statusActive = 1;
    public $statusInActive = 0;

    public static function tableName()
    {
        return 'section';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'header2','title','keywords','description', 'content',
                    'short_content'],
            ],
            [
                'class' => RoutableBehavior::className(),
                'defaultRoute' => 'section/view'
            ],
//            'mediafile' => [
//                'class' => MediafileBehavior::className(),
//                'name' => 'material',
//                'attributes' => [
//                    'image',
//                ],
//            ]
        ];
    }

    public function rules()
    {
        return [
            [['alias'], 'required' , 'message'=> Yii::t('admin','Пожалуйста, заполните поле: {attribute}')],
            [['pos', 'status', 'created_at', 'updated_at'], 'integer'],
            [['alias'], 'string', 'max' => 255],
            //[['alias'], 'unique' ],
           [['index'], 'boolean']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => Yii::t('admin','Url адрес'),
            'image' => Yii::t('admin','Картинка'),
            'pos' => Yii::t('admin','Порядок сортировки'),
            'status' => Yii::t('admin','Статус'),
            'section_id' => Yii::t('admin','Категория'),
            'onmain' => Yii::t('admin','На главной'),
            'created_at' => Yii::t('admin','Дата добавления'),
            'updated_at' => Yii::t('admin','Дата изменения'),
        ];
    }

    public function getUrl()
    {
        //return ($this->section !== null ? '/' . $this->section->alias : '') . '/' . $this->alias;
        return $this->alias;
    }

    public function getTranslations()
    {
        return $this->hasMany(SectionDescription::className(), ['section_id' => 'id']);
    }

    public static function getActiveSection(){
        return static::find()->where(['status' => (new self)->statusActive])->orderBy('id ASC')->all();
    }


}
