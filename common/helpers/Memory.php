<?php
namespace common\helpers;
use Yii;
use yii\base\Model;

class Memory
{
    public static function echoMemoryUsage()
    {
        echo 'Requested: ' . (int)(memory_get_usage() / 1024) . ' KB';
        echo PHP_EOL . '';
        echo 'Allocated: ' . (int)(memory_get_usage(true) / 1024) . ' KB';
        echo PHP_EOL . PHP_EOL;
    }
}