<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
<?
use yii\helpers\Url;
?>
<div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
        <div class="items-cart-inner">
            <div class="basket">
                <div class="basket-item-count"><span class="count"><? echo \frontend\models\Cart::countItems();?></span></div>
                <div class="total-price-basket"> <span class="lbl"><?php echo Yii::t('frontend',Yii::$app->config->get('headerShopingCartText')) ?></span> <span class="value"><? echo frontend\models\Cart::theTotalSumInCart()?></span> </div>
            </div>
        </div>
    </a>
    <ul class="dropdown-menu">
        <li>
            <? if(isset($products['product'])):?>
            <?php foreach ($products['product'] as $product): ?>
            <div class="cart-item product-summary mb-10">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="image"> <a href="<?php  echo $product->getAlias($product)?>"><img src="<?php echo $product->getBigImage($product->id, 'small')?>"" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                        <h3 class="name"><a href="<?php  echo $product->getAlias($product)?>"><?php echo $product->header?></a></h3>
                        <div class="price"><?php echo $product->getProductPrice($product); ?></div>
                    </div>
                    <div class="col-xs-1 action"> <a href="/cart/remove/<?php echo $product->id?>"><i class="fa fa-trash"></i></a> </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- /.cart-item -->
            <div class="clearfix"></div>
            <hr>
            <div class="clearfix cart-total">
                <div class="pull-right"> <span class="text"><?php echo Yii::t('frontend','Итого') ?></span><span class='price'><?php echo $products['sum'];?></span> </div>
                <div class="clearfix"></div>
                <a href="<?php echo Url::to(['/cart'])?>" class="btn btn-upper btn-primary btn-block m-t-20"><?php echo Yii::t('frontend',Yii::$app->config->get('textGoToCartInCartModal')) ?></a> </div>
            <!-- /.cart-total-->

        </li>
        <? endif;?>
    </ul>
    <!-- /.dropdown-menu-->
</div>