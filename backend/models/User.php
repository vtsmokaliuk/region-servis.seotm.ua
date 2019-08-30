<?php
namespace backend\models;
use Symfony\Component\CssSelector\Tests\Node\SelectorNodeTest;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use common\helpers\UserHelper;

class User extends ActiveRecord
{
    public $username;
    public $statusDeleted;
    public $statusActive;
    public $role;
    public $status;

    CONST STATUS_OFFLINE = 0;
    CONST STATUS_ONLINE = 1;

    public function __construct()
    {
        $userHelper = new UserHelper;
        $this->statusDeleted = $userHelper->statusDeleted;
        $this->statusActive = $userHelper->statusActive;
        $this->role = $userHelper->role;
        unset($userHelper);
    }

    public static function statusList(): array
    {
        return [
            User::STATUS_OFFLINE => Yii::t('admin','Офлайн'),
            User::STATUS_ONLINE => Yii::t('admin','Онлайн'),
        ];
    }

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function getOnlineUsers(){
        return User::find()
            ->where(['user.status' => $this->statusActive])
            ->andWhere(['user.role' => $this->role])
            ->andWhere('from_unixtime(user.last_visit) >= NOW() - INTERVAL 5 MINUTE')
            ->all();
    }
    
    public function getUsersetting()
    {
        return $this->hasOne(\common\modules\cabinet\models\UserSettings::className(), ['uid' => 'id']);
    }
}