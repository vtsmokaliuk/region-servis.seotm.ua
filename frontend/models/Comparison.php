<?

namespace frontend\models;

use Yii;
use yii\web\Response;
use frontend\models\Product;

class Comparison
{
    public static function addProduct($id)
    {
        $id = intval($id);
        $productsInComparison = array();
        if (isset(Yii::$app->session['comparison'])) {
            $productsInComparison = Yii::$app->session['comparison'];
        }
        if (array_key_exists($id, $productsInComparison)) {
            unset($productsInComparison[$id]);
        } else {
            $productsInComparison[$id] = 1;
        }
        Yii::$app->session['comparison'] = $productsInComparison;
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return ['success' => self::countItems()];

    }

    public static function countItems()
    {
        if (isset(Yii::$app->session['comparison'])) {
            $count = 0;
            foreach (Yii::$app->session['comparison'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function checkProductInComparison($id = null)
    {
        if ($id !== null) {
            if (isset(Yii::$app->session['comparison'])) {
                $productsInComparison = Yii::$app->session['comparison'];
                if (array_key_exists($id, $productsInComparison)) {
                    return true;
                }
            }
        }
    }

    public static function getProductsComparison()
    {
        if (isset(Yii::$app->session['comparison'])) {
            return Yii::$app->session['comparison'];
        }
        return false;
    }
}