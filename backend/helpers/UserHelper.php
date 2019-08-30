<?php
namespace backend\helpers;
use backend\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Yii;
class UserHelper
{
    public static function statusList(): array
    {
        return [
            User::STATUS_OFFLINE => Yii::t('admin','Офлайн'),
            User::STATUS_ONLINE => Yii::t('admin','Онлайн'),
         ];
    }

    public static function statusName($status): string
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status): string
    {
        switch ($status) {
            case User::STATUS_OFFLINE:
                $class = 'label label-danger';
                break;
            case User::STATUS_ONLINE:
                $class = 'label label-success';
                break;
            default:
                $class = 'label label-danger';
        }

        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }



}