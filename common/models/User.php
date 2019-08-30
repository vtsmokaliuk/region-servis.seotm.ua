<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
//use common\helpers\UserHelper;

class User extends ActiveRecord implements IdentityInterface
{
    public $statusDeleted = 0;
    public $statusActive = 10;
    public $role = 'cabinet';
    public $username;

    public function __construct()
    {
//        $userHelper = new UserHelper;
//        $this->statusDeleted = $userHelper->statusDeleted;
//        $this->statusActive = $userHelper->statusActive;
//        $this->role = $userHelper->role;
//        unset($userHelper);
//        echo $this->statusActive;
//        echo $this->statusDeleted;
    }

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    public function rules()
    {
        return [
            ['status', 'default', 'value' => $this->statusActive],
            ['status', 'in', 'range' => [$this->statusActive, $this->statusDeleted]],
            ['role', 'default', 'value' => $this->role],
            ['last_visit', 'default', 'value' => time()]
        ];
    }
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => (new self)->statusActive]);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }
    public static function findByUsername($username)
    {
        return static::findOne(['email' => $username, 'status' => (new self)->statusActive]);
    }
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => (new self)->statusActive]);
    }
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }
        return static::findOne([
            'password_reset_token' => $token,
            'status' => (new self)->statusActive,
        ]);
    }
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }
    public function getId()
    {
        return $this->getPrimaryKey();
    }
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

}