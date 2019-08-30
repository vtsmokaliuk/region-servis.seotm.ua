<?php
namespace common\widgets;
use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\base\Widget;
use backend\models\Block;
use creocoder\translateable\TranslateableBehavior;
class BlockWidget extends Widget
{

    public function behaviors()
    {
        return [
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'content'],
            ],
        ];
    }

    public static function show($key)
    {
        $block = Block::find()->where(['status' => 1,'key' => $key])->one();
        if(!empty($block) == 0) {
            return false;
        }
        return $block->content;
    }
}