<?

namespace frontend\models;

use Yii;

class ProductAttribute
{
    public $tableName = 'product_attribute';
    public $tableAttribute = 'attribute';
    public $tableAttributeDesc = 'attribute_description';

    public function getAttribute($attribute_id = null){
        if($attribute_id != null){
            $sql = "SELECT * FROM ".$this->tableAttribute." WHERE id = ".$attribute_id;
            return  Yii::$app->db->createCommand($sql)->execute();
        }
        return false;
    }

    public static function getAttributeName($attribute_id = null){
        if($attribute_id != null){
            $sql = "SELECT * FROM ".(new self)->tableAttributeDesc." WHERE attribute_id = ".$attribute_id;
            $result = Yii::$app->db->createCommand($sql)->queryOne();
            return  $result['header'];
        }
        return false;
    }


    public function getAtttibuteToProduct($product_id = null){
        $lang = \common\models\Language::getCurrentLanguage();
        if($product_id != null){
            $sql = "SELECT language, product_id, attribute_id, text FROM ".$this->tableName.' WHERE product_id = '. $product_id
                .' AND language = "'.$lang.'" ORDER BY id ASC';
            return  Yii::$app->db->createCommand($sql)->queryAll();
        }
        return false;
    }


}



?>