<?php

namespace frontend\models;

use Yii;
use creocoder\translateable\TranslateableBehavior;


class Section extends \yii\db\ActiveRecord
{

    public $tableMaterialSection = 'material_to_section';

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
        return 'section';
    }

    public function getTranslations()
    {
        return $this->hasMany(SectionDescription::className(), ['section_id' => 'id']);
    }

   
    public function getMaterialFromSection($id = null)
    {
        if ($id != null) {
            $sql = "SELECT material_id FROM " . $this->tableMaterialSection . " WHERE section_id = " . $id;
            $result = Yii::$app->db->createCommand($sql)->queryAll();
            if (is_array($result)) {
                foreach ($result as $val) {
                    $materialIds[] = (int)$val['material_id'];
                }
                if(!empty($materialIds)) {
                    $result = implode(',', $materialIds);
                    return $result;
                }
            }

        }
    }


    public function getBreadcrumbs($model)
    {
        $breadcrumbs = [];
        $breadcrumbs[] = ['label' => $model->header];

        return $breadcrumbs;
    }
}
