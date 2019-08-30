<?php
namespace backend\models;
use Yii;
use yii\helpers\Url;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use backend\models\User;
use backend\helpers\UserHelper;

class UserSettings extends ActiveRecord
{
      public function __construct()
    {

    }

    public static function tableName()
    {
        return '{{%user_settings}}';
    }

    public function getUserInformation($user_id){
        if(!empty($user_id)) {
            return UserSettings::find()->where(['uid' => $user_id])->one();
        }
    }
}