<?php
namespace common\models;
use Yii;
use yii\helpers\Url;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use common\models\User;
use common\helpers\UserHelper;

class UserSettings extends ActiveRecord
{
    public $result;
    public $modelResult;
    public $onlineMinute;
    public $currentTime;
    public $dbLastVisit;
    public $photo;
    public $photoPatch;

    public function __construct()
    {
        $this->currentTime = $this->currentTime();
        $this->dbLastVisit = $this->lastVisit();
        $this->onlineMinute = UserHelper::getOnlineMinute();
    }

    public static function tableName()
    {
        return '{{%user_settings}}';
    }

    public function rules()
    {
        return [
            ['uid', 'default', 'value' => Yii::$app->user->id],
            [['uid'], 'unique'],
            [['name', 'surname', 'patronymic'], 'string', 'max' => 80],
            [['country', 'city'] , 'string', 'max' => 50],
            [['surname'], 'required'],
            [['photo'], 'file', 'extensions' => 'png, jpg'],
            [['target'] ,'integer'],
            [['gender'] ,'string', 'max' => 20],
            ['dateBirth', 'string']
        ];
    }

    public function attributeLabels()
    {
        return [
            'surname' => Yii::t('cabinet','Фамилия'),
            'name' => Yii::t('cabinet','Имя'),
            'patronymic' => Yii::t('cabinet','Отчество'),
            'gender' => Yii::t('cabinet','Ваш пол'),
            'country' => Yii::t('cabinet','Страна'),
            'city' => Yii::t('cabinet','Город'),
            'password' => Yii::t('cabinet','Старый пароль'),
            'newpassword' => Yii::t('cabinet','Новый пароль'),
            'targer' => Yii::t('cabinet','Цель'),
        ];
    }

    public function upload(){
        if($this->validate()){
            $this->photo->saveAs(Yii::getAlias('@frontend')."/web/uploads/userimage/"."{$this->photo->baseName}.{$this->photo->extension}");

        }else{
            return false;
        }
    }

    public function urlUserPage(){
        return '/cabinet/user';
    }

    public function requestUrl(){
        return Yii::$app->request->url;
    }

    public function currentTime(){
        return time();
    }

    public function lastVisit(){
        return Yii::$app->user->identity->last_visit;
    }

    public function redirectToSettings(){
        return Yii::$app->response->redirect(Url::to([$this->urlUserPage()]));
    }

    public function checkUserPage()
    {
        if($this->urlUserPage() != $this->requestUrl()){
            return $this->redirectToSettings();
        }
    }

    public static function getUserInfornation()
    {
        return UserSettings::find()->where(['uid' => Yii::$app->user->id])->one();
    }

    public static function getUserName(){
        self::updateUserActivity(); // обновляем статус юзера
        if(!self::getUserInfornation() or empty(self::getUserInfornation()->name)){
            (new self)->checkUserPage();
            return Yii::$app->user->identity->email;
        }
        return self::getUserInfornation()->name;
    }

    public function updateLastVisit(){
        $this->modelResult = User::find()->where(['id' => Yii::$app->user->id])->one();
        $this->modelResult->last_visit = $this->currentTime();
        return $this->modelResult->save();
    }

    public function getVisitInterval(){
        $interval  = abs( $this->currentTime - $this->dbLastVisit);
        $minutes   = round($interval / 60);
        return $minutes;
    }

    public function theUserActivity(){
        if(empty($this->dbLastVisit)){
            $this->updateLastVisit();
        }
        return $this->getVisitInterval();
    }

    public static function getUserActivity(){
        return (new self)->theUserActivity();
    }

    public static function updateUserActivity(){
        if((new self)->theUserActivity() >= (new self)->onlineMinute){
            (new self)->updateLastVisit();
        }
    }

    public static function getUserActivityStatus(){
        if((new self)->theUserActivity() >= (new self)->onlineMinute){
            return Yii::t('cabinet','Офлайн');
        }
        else{
            return Yii::t('cabinet','Онлайн');
        }
    }

    public function getUser()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'uid']);
    }
}