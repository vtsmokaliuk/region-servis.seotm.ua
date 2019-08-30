<?php

namespace backend\models;

use Yii;

class ProductToCategory
{
    public static function tableName()
    {
        return 'product_to_category';
    }

    public static function saveCategory($product_id, $data)
    {
        if (is_array($data)) {
            self::deleteProductFromCategory($product_id);
            foreach ($data as $val) {
                self::addProductToCategory($product_id, $val);
            }
        }
    }

    public static function deleteProductFromCategory($product_id)
    {
        return Yii::$app->db->createCommand()->delete(self::tableName(), ['product_id' => $product_id])->execute();
    }

    public static function addProductToCategory($product_id = null, $category_id = null)
    {
        if ($product_id !== null and $category_id !== null) {
            return Yii::$app->db->createCommand()
                ->insert(self::tableName(), [
                    'product_id' => $product_id,
                    'category_id' => $category_id,
                ])->execute();
        }
    }

    public static function checked(int $product_id = null, int $category_id)
    {
        if ($product_id !== null) {
            $sql = "SELECT id FROM " . self::tableName() . " WHERE product_id = " . $product_id . " AND category_id = " . $category_id;
            $result = Yii::$app->db->createCommand($sql)->queryOne();
            if ($result['id'] !== null and !empty($result['id'])) {
                return 'selected';
            }
        }
    }
}

