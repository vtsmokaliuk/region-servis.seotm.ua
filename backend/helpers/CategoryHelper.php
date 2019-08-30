<?php
namespace backend\helpers;
use backend\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Yii;
class CategoryHelper
{
    public static function statusList(): array
    {
        return [
            Category::STATUS_DRAFT => Yii::t('admin','Отключен'),
            Category::STATUS_PUBLISH => Yii::t('admin','Активный'),
        ];
    }

    public static function endCategory(): array
    {
        return [
            Category::STATUS_DRAFT => Yii::t('admin','Нет'),
            Category::STATUS_PUBLISH => Yii::t('admin','Да'),
        ];
    }

    public static function statusName($status): string
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status): string
    {
        switch ($status) {
            case Category::STATUS_DRAFT:
                $class = 'label label-danger';
                break;
            case Category::STATUS_PUBLISH:
                $class = 'label label-success';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }

    public static function findParentCategory($id){
        if(!empty($id)){
            $result = Category::find()->where(['id' => $id])->one();
            return $result;
        }
    }

    public static function parentCategory($parent_id)
    {
        $parentCategory = [];
        if(!empty($parent_id) and $parent_id !=null){
            $result = self::findParentCategory($parent_id);
            $parentCategory[] = $result->name;
            if(!empty($result->parent_id)){
                $parentCategory[] = self::findParentCategory($result->parent_id)->name;
            }
            return implode("/", array_reverse($parentCategory));
        }
    }

}