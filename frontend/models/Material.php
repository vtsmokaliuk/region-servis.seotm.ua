<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\behaviors\RoutableBehavior;
use creocoder\translateable\TranslateableBehavior;
use pendalf89\filemanager\behaviors\MediafileBehavior;
use pendalf89\filemanager\models\Mediafile;
use yii\helpers\Url;
class Material extends \yii\db\ActiveRecord
{
    public $statusIsActive = 1;
    public $mainPageLimit = 10;
    public $materialToSectionTable = 'material_to_section';
    public static function tableName()
    {
        return 'material';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'translateable' => [
                'class' => TranslateableBehavior::className(),
                'translationAttributes' => ['header', 'header2','title','keywords','description', 'content',
                    'short_content'],
            ],
        ];
    }

    public function getAlias($model = null)
    {
        if($model != null) {
            return Url::to(['/'.$model->alias]);
        }
    }

    public function getBigImage($id, $size = null)
    {
        $param = 'original';
        if ($size != null) {
            $param = $size;
        }
        if ($mediafile = Mediafile::loadOneByOwner('material', $id, 'image')) {
            return $mediafile->getThumbUrl($param);
        } else {
            return Yii::$app->request->baseUrl . '/images/blog-post/blog_big_01.jpg';
        }
    }

    public function getTranslations()
    {
        return $this->hasMany(MaterialDescription::className(), ['material_id' => 'id']);
    }


    public function getBreadcrumbs($model)
    {
        $breadcrumbs = [];
        $breadcrumbs[] = ['label' => $model->header];

        return $breadcrumbs;
    }

    public function getMaterialsIdsFromSection(int $section_id = null){
        if(!empty($section_id)){
            $sql = 'SELECT material_id FROM '.$this->materialToSectionTable.' WHERE section_id = '.$section_id;
            return Yii::$app->db->createCommand($sql)->queryAll();
        }
    }

   public function getBloglist(){
       $limit = $this->mainPageLimit;
       if(!empty(Yii::$app->config->get('mainBlogCount'))){
           $limit = Yii::$app->config->get('mainBlogCount');
       }
       if(!empty((int)Yii::$app->config->get('categoryBlogIdInMainPage'))){
           $section_id = Yii::$app->config->get('categoryBlogIdInMainPage');
           $sectionIds = $this->getMaterialsIdsFromSection($section_id);
           foreach ($sectionIds as $sectionId) {
               $ids[]= $sectionId['material_id'];
           }
           $sectionIds = implode(',', $ids);
           return Material::find()->where(['status' => $this->statusIsActive])->andWhere('id IN ('.$sectionIds.')')->orderBy('id DESC')->limit($limit)->all();
       }

   }

}
