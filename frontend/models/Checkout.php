<?

namespace frontend\models;

use Yii;
use yii\web\Response;
use frontend\models\Product;

class Checkout
{



    public function getBreadcrumbs($model)
    {
        $breadcrumbs = [];
        $breadcrumbs[] = ['label' => $model->header];

        return $breadcrumbs;
    }

    public static function theTotalSumInCart()
    {
        if (isset($_SESSION['products'])) {
            $cart_product = self::getProducts();
            $cart_product = array_keys($cart_product);
            $products = Product::getProdustsByIds($cart_product);
            $sum = Cart::getTotalPrice($products);
            return $sum;
        }
    }

}

?>