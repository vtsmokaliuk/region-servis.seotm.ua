<?php
namespace backend\models;
use \yii\db\ActiveRecord;
use pendalf89\filemanager\behaviors\MediafileBehavior;
use pendalf89\filemanager\models\Mediafile;
class System extends \yii\db\ActiveRecord
{

//    public function behaviors()
//    {
//        return [
//          'mediafile' => [
//                'class' => MediafileBehavior::className(),
//                'name' => 'site',
//                'attributes' => [
//                    'system[logo]',
//                ],
//            ]
//        ];
//    }
    public static function tableName()
    {
        return 'system';
    }
    public function rules()
    {
        return [
            [['param', 'value', 'default', 'label', 'type'], 'safe'],
            [['value', 'default'], 'string'],
            [['param', 'type'], 'string', 'max' => 128],
            [['label'], 'string', 'max' => 255],
            [['param'], 'unique'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'param' => 'Param',
            'value' => 'Value',
            'default' => 'Default',
            'label' => 'Label',
            'type' => 'Type',
        ];
    }
    public static function getFielsType($type){
        return System::find()->where(['type' => $type])->all();
    }
}