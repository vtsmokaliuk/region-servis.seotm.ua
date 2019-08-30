<?php

namespace backend\models;

use Yii;

class MaterialToSection
{
    public static function tableName()
    {
        return 'material_to_section';
    }

    public static function saveMaterial(int $material_id, array $data = null)
    {
        if($data !== null) {
            self::deleteMatetialFromSection($material_id);
            foreach ($data as $section_id => $val) {
                if ($val == 1) {
                    self::addMaterialToSection($material_id, $section_id);
                }
            }
        }
    }

    public static function deleteMatetialFromSection(int $material_id)
    {
        return Yii::$app->db->createCommand()->delete(self::tableName(), ['material_id' => $material_id])->execute();
    }

    public static function addMaterialToSection($material_id = null, $section_id = null)
    {
        if ($material_id !== null and $section_id !== null) {
            return Yii::$app->db->createCommand()
                ->insert(self::tableName(), [
                    'material_id' => $material_id,
                    'section_id' => $section_id,
                ])->execute();
        }
    }

    public static function checked(int $material_id = null, int $section_id)
    {
        if ($material_id !== null) {
            $sql = "SELECT id FROM " . self::tableName() . " WHERE material_id = " . $material_id . " AND section_id = " . $section_id;
            $result = Yii::$app->db->createCommand($sql)->queryOne();
            if ($result['id'] !== null and !empty($result['id'])) {
                return 'checked';
            }
        }
    }
}

