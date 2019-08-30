<?php
namespace common\helpers;
use Yii;
use yii\base\Model;

class UserHelper
{
    public $onlineMinute = 5;
    public $statusDeleted = 0;
    public $statusActive = 10;
    public $role = 'cabinet';
    public $photoPatch = '@frontend/web/uploads/userimage/';

    public static function getOnlineMinute(){
        return (new self)->onlineMinute;
    }

    public static function getTarget($id)
    {
       switch ($id){
           case 1:
               return Yii::t('cabinet', 'Хочу продать');
               break;
           case 2:
               return Yii::t('cabinet', 'Хочу купить');
               break;
           case 3:
               return Yii::t('cabinet', 'Хочу арендовать');
               break;
           case 4:
               return Yii::t('cabinet', 'Хочу сдать в аренду');
               break;
       }
    }
}