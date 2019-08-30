<?php

namespace frontend\models;

use Yii;
use frontend\models\Product;
use creocoder\translateable\TranslateableBehavior;


class Filter extends \yii\db\ActiveRecord
{
    public $productTable = 'product';
    public $productAttributeTable = 'product_attribute';
    public $productToCategoryTable = 'product_to_category';
    public $attributeTable = 'attribute';
    public $attributeDescTable = 'attribute_description';

    public function getProductsAttributes($category_id = null, $productIds)
    {
        if ($category_id != null and !empty($productIds)) {
            $sql = "SELECT id, attribute_id, text, language  FROM " . (new self)->productAttributeTable .
                " WHERE product_id IN (" . $productIds . ")  GROUP BY text";
            $result = Yii::$app->db->createCommand($sql)->queryAll();
            foreach ($result as $item) {
                $attrName = $this->getAttributeName($item['attribute_id']);
                $attrList[] =
                    [

                        'attribute_id' => $item['attribute_id'],
                        'text' => $item['text'],
                    ];
                $attributeName[$item['attribute_id']][] = [
                    'id' => $item['id'],
                    'attribute_id' => $item['attribute_id'],
                    'text' => $item['text'],
                ];
            }
            return $attributeName;

        }
    }

    public function getAttributeName($attribute_id = null)
    {
        if ($attribute_id !== null) {
            $sql = "SELECT " . $this->attributeDescTable . ".header FROM " . $this->attributeTable . " JOIN " . $this->attributeDescTable . " ON " . $this->attributeTable . ".id = " .
                $this->attributeDescTable . ".attribute_id  WHERE " . $this->attributeTable . ".id = " . $attribute_id;
            $result = Yii::$app->db->createCommand($sql)->queryOne();
            return $result['header'];
        }
    }


    public function filterProduct($category_id, $param)
    {
        $language = \common\models\Language::getDefaultLanguage();
        $sql = "SELECT id as product_id, price FROM ".$this->productTable. " WHERE status =1 AND price >= '".$param['price']['min']."' AND price <= '".$param['price']['max']."' AND id IN (";
        $sql .= "SELECT product_id FROM ".$this->productToCategoryTable." WHERE category_id = '".$category_id."' AND product_id IN (";
        $sql .= "SELECT ".$this->productAttributeTable.".product_id FROM ".$this->productAttributeTable." ";
        $sql .= " WHERE " . $this->productAttributeTable . ".language = 'ru' ";

//        $sql = "SELECT " . $this->productAttributeTable . ".product_id FROM " . $this->productAttributeTable . " ";
//        $sql .= "INNER JOIN " . $this->productTable . " ON " . $this->productTable . ".id = " . $this->productAttributeTable . ".product_id ";
//        $sql .= "INNER JOIN " . $this->productToCategoryTable . " ON " . $this->productToCategoryTable . ".product_id = " . $this->productTable . ".id ";
//        $sql .= " WHERE " . $this->productAttributeTable . ".language = 'ru' ";
//        if (is_array($param['price'])) {
//            $min = $param['price']['min'];
//            $max = $param['price']['max'];
//            $sql .= " AND " . $this->productTable . ".price >='" . $min . "'";
//            $sql .= " AND " . $this->productTable . ".price <='" . $max . "'";
//        }
        if (isset($param['checkbox'])) {
            $count = 0;
            foreach ($param['checkbox'] as $key => $checkbox) {
                //echo $key.'-key';
                foreach ($checkbox as $attr) {
                    if ($count == 0) {
                        $sql .= " AND " . $this->productAttributeTable . ".attribute_id = ".$key." AND " . $this->productAttributeTable.".text LIKE '" . $attr . "'";
                    } else {
                        $sql .= " OR " . $this->productAttributeTable . ".attribute_id = ".$key." AND " . $this->productAttributeTable.".text LIKE '" . $attr . "'";
                    }
                    $count++;
                }
            }
        }
$sql .= ") 
GROUP BY product_id
)
GROUP BY id";
       // echo $sql;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        if (is_array($result)) {
            foreach ($result as $val) {
                $productIds[] = (int)$val['product_id'];
            }
            if (!empty($productIds)) {
                $productIds = array_unique($productIds);
                $result = implode(',', $productIds);
                return $result;
            }
        }
        return $result;
    }

    public function getMaxPrice()
    {
        $maxPrice = Product::find()->max('price');
        return $maxPrice;
    }

    public function getMinPrice()
    {
        $minPrice = Product::find()->min('price');
        return $minPrice;
    }

}