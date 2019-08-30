<?

namespace frontend\models;

use Yii;
use yii\web\Response;
use frontend\models\Product;

class Cart
{

//    public function __construct()
//    {
//        session_start();
//    }

    public static function addProduct($id)
    {
        $id = intval($id);
        $productsInCart = array();
        if (isset(Yii::$app->session['products'])) {
            $productsInCart = Yii::$app->session['products'];
        }
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }
        Yii::$app->session['products'] = $productsInCart;
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return ['success' => self::countItems()];

    }

    public static function minProduct($id)
    {
        $id = intval($id);
        $productsInCart = array();
        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }
        if (array_key_exists($id, $productsInCart)) {
            if ($productsInCart[$id] > 1) {
                $productsInCart[$id]--;
            } else {
                unset($productsInCart[$id]);
                $_SESSION['products'] = $productsInCart;
            }
            $_SESSION['products'] = $productsInCart;
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ['success' => self::countItems()];
        }
    }

    public static function countItems()
    {
        if (isset(Yii::$app->session['products'])) {
            $count = 0;
            foreach (Yii::$app->session['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getCurrency()
    {
        $model = new Product;
        return $model->getCurrency();
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();
        $total = 0;
        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total . self::getCurrency();
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
            return Yii::$app->response->redirect(['/cart/']);
        }
    }

    public static function deleteProduct($id)
    {
        $productsInCart = self::getProducts();
        unset($productsInCart[$id]);
        $_SESSION['products'] = $productsInCart;
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return ['success' => self::countItems()];
    }

    public static function addToCartBigBtn($model)
    {
        return Yii::$app->view->render('/cart/_add-to-cart-big', ['model' => $model]);
    }

    public static function showCountItems()
    {
        return Yii::$app->view->render('/cart/_header-count-items');
    }

    public static function render($view, $param = null)
    {
        if($param!==null){
            return Yii::$app->view->render($view, $param);
        }
        else {
            return Yii::$app->view->render($view);
        }
    }

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

    public static function getProductListInCart()
    {
        if (isset($_SESSION['products'])) {
            $cart_product = self::getProducts();
            $cart_product = array_keys($cart_product);
            $products['product'] = Product::getProdustsByIds($cart_product);
            $products['sum'] = self::getTotalPrice($products['product']);
            return $products;
        }
    }
}

?>