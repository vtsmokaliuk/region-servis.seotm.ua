<?php

namespace frontend\models;

use Yii;
use yii\helpers\Url;
use creocoder\translateable\TranslateableBehavior;


class Category extends \yii\db\ActiveRecord
{
    public $tableProductCategory = 'product_to_category';
    public $statusIsActive = 1;
    public $backendPath = '/backend/web';
    public function behaviors()
    {
        return [
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'title', 'keywords', 'description', 'content'],
            ],
        ];
    }

    public static function tableName()
    {
        return 'category';
    }

    public function getTranslations()
    {
        return $this->hasMany(CategoryDescription::className(), ['category_id' => 'id']);
    }

    public function getCurrency()
    {
        return Yii::$app->config->get('currency');
    }

    public function getProductFromCategory($id = null)
    {
        if ($id != null) {
            $sql = "SELECT product_id FROM " . $this->tableProductCategory . " WHERE category_id = " . $id;
            $result = Yii::$app->db->createCommand($sql)->queryAll();
            if (is_array($result)) {
                foreach ($result as $val) {
                    $productIds[] = (int)$val['product_id'];
                }
                if (!empty($productIds)) {
                    $result = implode(',', $productIds);
                    return $result;
                }
            }

        }
    }

//    public function getBreadcrumbs($model)
//    {
//        $breadcrumbs = [];
//        $breadcrumbs[] = ['label' => $model->header];
//
//        return $breadcrumbs;
//    }

    public function getAlias($model = null)
    {
        if(isset($model->id)) {
            $row = (new \yii\db\Query())->select(['url', 'id'])->from('route')->where(['model_id' => $model->id])->andWhere(['model' => 'backend\models\Category'])->one();
            if ($row['url'] != '') {
                return Url::to(['/' . $row['url']]);
            }
        }
    }

    public function getCategoryListWidget()
    {
        return Category::find()->where(['status' => $this->statusIsActive])->andWhere(['parent_id' => 0])->orWhere(['is', 'parent_id', null])->all();
    }

    public function getChildrenCategory(int $id = null)
    {
        if (!empty($id)) {
            return Category::find()->where(['parent_id' => $id])->andWhere(['status' => $this->statusIsActive])->all();
        }
    }

    public function getBreadcrumbs()
    {
        $breadcrumbs = [];
        $alias = explode('/',$_SERVER['REQUEST_URI']);
        unset($alias[0]);
        array_pop($alias);
        $url = null;
        foreach($alias as $cat){
            $category = $this->find()->where(['alias'=> $cat])->one();
            $url.= $category->alias.'/';
            $breadcrumbs[] = ['label' => $category->header, 'url' => substr('/'.$url,0,-1)];
        }
        $breadcrumbs[] = ['label' => $this->header];

        return $breadcrumbs;
    }

    public function getMainCategory()
    {
        return self::find()->where(['status' => $this->statusIsActive])->andWhere(['on_main' => 1])->all();
    }


    public function getImagePlaceholder()
    {
        return $this->backendPath . '/image/placeholder.jpg';
    }

    public function getImage($model = null){
        if(!empty($model)){
            if(!empty($model->image)){
                return $model->image;
            }
            else{
                return $this->getImagePlaceholder();
            }
        }
    }

}
