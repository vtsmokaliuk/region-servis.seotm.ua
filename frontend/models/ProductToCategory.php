<?

namespace frontend\models;

use Yii;

class ProductToCategory extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'product_to_category';
    }

    public function rules()
    {
        return [
            [['product_id', 'category_id'], 'integer'],
        ];
    }


    public function getCategory(int $product_id = null)
    {
        if ($product_id !== null) {
            return ProductToCategory::find()->where(['product_id' => $product_id])->one();
        }
    }

}


?>