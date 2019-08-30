<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use frontend\models\Cart;
use frontend\models\Product;
use frontend\models\Material;
use frontend\models\Checkout;
use frontend\models\CheckoutDelivery;
use yii\web\HttpException;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;
use frontend\models\Order;
use frontend\models\Delivery;
class CartController extends Controller
{

    public $statusIsActive = 1;
    public $enableCsrfValidation = false;
    public $orderProductTable = 'order_product';
    public $ordertHistoryTable = 'order_history';
    public $orderStatusId = 1;
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionAdd($id)
    {
        return Cart::addProduct($id);
    }

    public function actionShowHeaderCart()
    {
        $products = Cart::getProductListInCart();
        return $this->renderAjax('_header-count-items', ['products' => $products]);
    }

    public function actionMin($id)
    {
        return Cart::minProduct($id);
    }

    public function actionClear()
    {
        Cart::clear();
        return $this->redirect('/cart');
    }

    public function actionRemove($id = null){
        if(!$id !== null){
            Cart::deleteProduct($id);
            return $this->goBack(Yii::$app->request->referrer);
        }
    }

    
    public function actionIndex($id = null)
    {
        $model = null;
        if ($id !== null) {
            $model = $this->findModel($id);
            $this->registerMeta($model);
        }
        if (isset($_SESSION['products'])) {
            $cart_product = Cart::getProducts();
            $productInCart = $cart_product;
            $cart_product = array_keys($cart_product);
            $products = Product::getProdustsByIds($cart_product);
            $sum = Cart::getTotalPrice($products);
        } else {
            $products = null;
            $sum = null;
            $productInCart = null;
        }
        return $this->render('index', ['products' => $products, 'sum' => $sum, 'productInCart' => $productInCart, 'model' => $model]);
    }

    public function actionCheckout($id = null)
    {
        $model = null;
        $delivery = null;
        if ($id !== null) {
            $model = $this->findModel($id);
            $this->registerMeta($model);
        }
        $order = new Order;
        $delivery = Delivery::find()->where(['status' => $this->statusIsActive])->all();
        if ($order->load(Yii::$app->request->post())) {
            $date = time();
            $currency = Yii::$app->config->get('currency');
            $cart_product = Cart::getProducts();
            $productInCart = $cart_product;
            $cart_product = array_keys($cart_product);
            $products = Product::getProdustsByIds($cart_product);
            $total = Cart::getTotalPrice($products);
            $order->total = $total;
            $order->date_added = $date;
            $order->order_status_id = $this->orderStatusId;
            $order->currency_code = $currency;
            if(isset($order->delivery_id)){
                $delivery =  Delivery::find()->where(['id' => $order->delivery_id])->one();
                $order->delivery_name = $delivery->header;
            }
            $order->save();
            $order_id = $order->id;
            if(is_array($products)) {
                foreach ($products as $product) {
                    $this->insertProductToCheckout($product, $order_id, $productInCart);
                    $this->insertProductToHistory($product, $order_id, $productInCart);
                }
            }
            Cart::clear();
            return $this->redirect(Url::to(['/cart/sussess?order_id='.$order_id]));
        }

        return $this->render('checkout', ['model' => $model, 'order' => $order, 'delivery' => $delivery]);
    }

    public function actionSuccess($id){
        $model = null;
        $order= null;
         if ($id !== null) {
            $model = $this->findModel($id);
            $this->registerMeta($model);
        }
         if(isset($_GET['order_id'])){
             $order_id = (int)$_GET['order_id'];
             $order = Order::find()->where(['id' =>  $order_id])->one();
         }
         return $this->render('success', ['model' => $model, 'order' => $order]);
    }


    protected function insertProductToCheckout($product, $order_id = null, $productInCart = null){
        if (isset($product)  and $order_id !== null and $productInCart != null) {
            return Yii::$app->db->createCommand()
                ->insert($this->orderProductTable, [
                    'order_id' => $order_id,
                    'product_id' => $product->id,
                    'name' => $product->header,
                    'model' => $product->model,
                    'quantity' => $productInCart[$product->id],
                    'price' => $product->getProductPrice($product),
                    'total' => $product->getProductPriceTotalInCart($product, $productInCart[$product->id])
                ])->execute();
        }
    }


    protected function insertProductToHistory($product, $order_id = null, $productInCart = null){
        if (isset($product)  and $order_id !== null and $productInCart != null) {
            return Yii::$app->db->createCommand()
                ->insert($this->ordertHistoryTable, [
                    'order_id' => $order_id,
                    'product_id' => $product->id,
                    'name' => $product->header,
                    'model' => $product->model,
                    'quantity' => $productInCart[$product->id],
                    'price' => $product->getProductPrice($product),
                    'total' => $product->getProductPriceTotalInCart($product, $productInCart[$product->id]),
                    'date_added' => time(),
                ])->execute();
        }
    }

    protected function findModel($id)
    {
        if (($model = Material::findOne(['id' => $id, 'status' => $this->statusIsActive])) !== null) {
            return $model;
        }
    }

    protected function registerMeta($model)
    {
        if($model) {
            $view = Yii::$app->view;
            $view->title = $model->title;
            $view->registerMetaTag(['name' => 'description', 'content' => $model->description]);
            $view->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
        }
    }

    public function getBreadcrumbs($model)
    {
        if($model) {
            $breadcrumbs = [];
            $breadcrumbs[] = ['label' => $model->header];
            return $breadcrumbs;
        }
    }


}
