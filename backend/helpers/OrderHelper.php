<?php

namespace backend\helpers;

use backend\models\Order;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Yii;

class OrderHelper
{

     public static function statusList()
    {
        return [
            Order::STATUS_OLD_ORDER => 'Закрытый',
            Order::STATUS_NEW_ORDER => 'Новый заказ',
            Order::STATUS_WAIT_ORDER => 'В ожидании',
            Order::STATUS_GO_ORDER => 'Доставляеться',
        ];
    }

    public static function statusName($status)
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status)
    {
        switch ($status) {
            case Order::STATUS_OLD_ORDER:
                $class = 'label label-danger';
                break;
            case Order::STATUS_NEW_ORDER:
                $class = 'label label-success';
                break;
            case Order::STATUS_WAIT_ORDER:
                $class = 'label label-warning';
                break;
            case Order::STATUS_GO_ORDER:
                $class = 'label label-info';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }
}