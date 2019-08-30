<?php

namespace backend\models;

use pendalf89\filemanager\models\Mediafile;
use Yii;
use creocoder\translateable\TranslateableBehavior;

class Banner extends \yii\db\ActiveRecord
{
    public static $typeHtml = 'html';
    public static $typeText = 'text';
    public static $statusIsActive = 1;
    public static $statusDraft = 0;
    public $bannerDescriptionTable = 'banner_desctiption';
    public $backendPath = '/backend/web';

    public static function tableName()
    {
        return 'banner';
    }

    public function rules()
    {
        return [
            [['status'], 'integer', 'message' => Yii::t('admin', 'Значение должно быть целым числом')],
            //[['name'], 'string'],
            [['name'], 'required', 'message' => Yii::t('admin', 'Пожалуйста, заполните поле: {attribute}')],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => Yii::t('admin', 'Статус'),
            'pos' => Yii::t('admin', 'Порядок отображения'),
            'key' => Yii::t('admin', 'Ключ'),
            'name' => Yii::t('admin', 'Название'),

        ];
    }

    public function saveBannerDescription($data = null)
    {
        if (isset($data)) {
            foreach ($data as $banner) {
                Yii::$app->db->createCommand()->insert($this->bannerDescriptionTable, [
                    'banner_id' => $banner['banner_id'],
                    'language' => $banner['language'],
                    'image' => $banner['image'],
                    'header' => $banner['header'],
                    'header2' => $banner['header2'],
                    'btn_text' => $banner['btn_text'],
                    'link' => $banner['link'],
                    'content' => $banner['content'],
                    'pos' => $banner['pos'],
                ])->execute();
            }
        }
    }

    public function getBannerDescription(int $banner_id = null)
    {
        if (!empty($banner_id)) {
            return Yii::$app->db->createCommand('SELECT * FROM ' . $this->bannerDescriptionTable . '  WHERE banner_id = '.$banner_id.' ORDER BY pos')->queryAll();
        }
    }

    public function deleteBannerDescription(int $banner_id = null)
    {
        if (!empty($banner_id)) {
            return Yii::$app->db->createCommand('DELETE FROM ' . $this->bannerDescriptionTable . '  WHERE banner_id = '.$banner_id)->execute();
        }
    }

    public function getImagePlaceholder()
    {
        return $this->backendPath . '/image/placeholder.jpg';
    }

    public function getImagePrev($id, $size = null)
    {
        $param = 'original';
        if ($size != null) {
            $param = $size;
        }
        if ($mediafile = Mediafile::loadOneByOwner('material', $id, 'image')) {
            return $mediafile->getThumbUrl($param);
        } else {
            return $this->backendPath . '/image/placeholder.jpg';
        }
    }

    public static function getBennerList(){
            return  Banner::find()->where(['status' =>  self::$statusIsActive])->all();
    }

}
