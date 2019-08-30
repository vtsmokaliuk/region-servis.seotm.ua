<?

namespace backend\models;

use Yii;

class ProductAttribute
{
    public $tableName = 'product_attribute';
    public $tableAttribute = 'attribute';

    public function getAttribute($attribute_id = null){
        if($attribute_id != null){
            $sql = "SELECT * FROM ".$this->tableAttribute." WHERE id = ".$attribute_id;
            return  Yii::$app->db->createCommand($sql)->execute();
        }
        return false;
    }

    public function addAttributeToProduct(array $productAttribute)
    {
        if(is_array($productAttribute)){
            foreach ($productAttribute as $attribute){
              $this->addAttribute($attribute['language'], $attribute['product_id'], $attribute['attribute_id'], $attribute['text']);
            }
        }
    }

    public function addAttribute(string $language, int $product_id = null, int $attribute_id = null, string $text)
    {
        if (!empty($language) and !empty($product_id) and !empty($attribute_id) and !empty($text)){
            return Yii::$app->db->createCommand()->insert((new self)->tableName, [
                'language' => $language,
                'product_id' => $product_id,
                'attribute_id' => $attribute_id,
                'text' => $text
            ])->execute();
        }
    }

    public function getAtttibuteToProduct($product_id = null){
        if($product_id != null){
           $sql = "SELECT language, product_id, attribute_id, text FROM ".$this->tableName.' WHERE product_id = '. $product_id
           .' ORDER BY id ASC';
           return  Yii::$app->db->createCommand($sql)->queryAll();
        }
        return false;
    }

    public function deleteAttribureFromProduct($product_id = null){
        if($product_id != null){
            $sql = "DELETE FROM ".$this->tableName.' WHERE product_id = '. $product_id;
            return  Yii::$app->db->createCommand($sql)->execute();
        }
        return false;
    }
}



?>