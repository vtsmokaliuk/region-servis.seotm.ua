<?php

namespace common\helpers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\base\Model;

class StatusHelper
{
    public $statusActive = 1;
    public $statusInActive = 0;

    public static function statusList()
    {
        return [
            (new self)->statusInActive => Yii::t('admin', 'Черновик'),
            (new self)->statusActive => Yii::t('admin', 'Опубликован'),
        ];
    }

    public static function statusName($status)
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status)
    {
        switch ($status) {
            case (new self)->statusInActive:
                $class = 'label label-danger';
                break;
            case (new self)->statusActive:
                $class = 'label label-success';
                break;
            default:
                $class = 'label label-default';
        }
        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }
}