<?

namespace frontend\models;

use Yii;
use yii\web\Response;
use frontend\models\Product;

class Rent
{
    public static $priceRentStatus = 1;

    public static function addToRent($product = null)
    {
        if ($product !== null) {
            if ($product->price_rent_status == self::$priceRentStatus && $product->price_rent > 0) {
                return self::render('/rent/index', ['product' => $product]);
            }
        }

    }

    public static function render($view, $param = null)
    {
        if ($param !== null) {
            return Yii::$app->view->render($view, $param);
        } else {
            return Yii::$app->view->render($view);
        }
    }
}

?>