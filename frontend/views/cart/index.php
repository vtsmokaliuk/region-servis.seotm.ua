<?php
use yii\helpers\Url;
echo $this->render('/common/breadcrumbs',['model' => $model]);
?>
<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <? if(isset($products)):?>
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="cart-romove item"><?php echo Yii::t('frontend','Удалить') ?></th>
                                <th class="cart-description item"><?php echo Yii::t('frontend','Изображение') ?></th>
                                <th class="cart-product-name item"><?php echo Yii::t('frontend','Название товара') ?></th>
                                <th class="cart-qty item"><?php echo Yii::t('frontend','Количество') ?></th>
                                <th class="cart-sub-total item"><?php echo Yii::t('frontend','Цена') ?></th>
                                <th class="cart-total last-item"><?php echo Yii::t('frontend','Итого') ?></th>
                            </tr>
                            </thead><!-- /thead -->

                            <tbody>
                            <?php foreach ($products as $product): ?>
                            <tr>
                                <td class="romove-item"><a href="/cart/remove/<?php echo $product->id?>" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                <td class="cart-image">
                                    <a class="entry-thumbnail" href="<?php  echo $product->getAlias($product)?>">
                                        <img src="<?php echo $product->getBigImage($product->id, 'small')?>" alt="">
                                    </a>
                                </td>
                                
                                <td class="cart-product-name-info">
                                    <h4 class='cart-product-description'><a href="<?php  echo $product->getAlias($product)?>"><?php echo $product->header?></a></h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="rating rateit-small"></div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="reviews">
                                                (06 Reviews)
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="cart-product-info">
                                        <span class="product-color">COLOR:<span>Blue</span></span>
                                    </div>
                                </td>

                                <td class="cart-product-quantity">
                                    <div class="quant-input">
                                        <div class="arrows">
                                            <div class="arrow plus gradient"><span class="ir btn-add-product-quantity" data-product-id="<?php echo $product->id?>"><i class="icon fa fa-sort-asc"></i></span></div>
                                            <div class="arrow minus gradient"><span class="ir btn-min-product-quantity" data-product-id="<?php echo $product->id?>"><i class="icon fa fa-sort-desc"></i></span></div>
                                        </div>
                                        <input type="text" readonly class="input-result-product-auantity" data-product-id="<?php echo $product->id?>" value="<?php echo $productInCart[$product->id]; ?>">
                                    </div>
                                </td>
                                <td class="cart-product-sub-total"><span class="cart-sub-total-price"><?php echo $product->getProductPrice($product); ?></span></td>
                                <td class="cart-product-grand-total"><span class="cart-grand-total-price"><?php echo $product->getProductPriceTotalInCart($product, $productInCart[$product->id]); ?></span></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody><!-- /tbody -->

                            <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="shopping-cart-btn">
							<span class="">
								<a href="<?php echo Url::previous();?>" class="btn btn-upper btn-primary outer-left-xs"><?php echo Yii::t('frontend',Yii::$app->config->get('continueBuyBtn')) ?></a>
								<a href="<?php echo Url::to(['/cart'])?>" class="btn btn-upper btn-primary pull-right outer-right-xs"><?php echo Yii::t('frontend',Yii::$app->config->get('updateBuyBtn')) ?></a>
							</span>
                                    </div><!-- /.shopping-cart-btn -->
                                </td>
                            </tr>


                            </tfoot>
                        </table><!-- /table -->
                    </div>
                </div><!-- /.shopping-cart-table -->				<div class="col-md-4 col-sm-12 estimate-ship-tax">

                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 estimate-ship-tax">

                </div><!-- /.estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="cart-sub-total">
                                    <?php echo Yii::t('frontend','Итого') ?><span class="inner-left-md"><?php echo $sum?></span>
                                </div>
                                <div class="cart-grand-total">
                                    <?php echo Yii::t('frontend','Общая стоимость ') ?><span class="inner-left-md"><?php echo $sum?></span>
                                </div>
                            </th>
                        </tr>
                        </thead><!-- /thead -->
                        <tbody>
                        <tr>
                            <td>
                                <div class="cart-checkout-btn pull-right">
                                    <a href="<?php echo Url::to(['cart/checkout'])?>" class="btn btn-primary checkout-btn"><?php echo Yii::t('frontend',Yii::$app->config->get('btnToCkeckoutInCartPage')) ?></a>
                                    </div>
                            </td>
                        </tr>
                        </tbody><!-- /tbody -->
                    </table><!-- /table -->
                    <? else:?>
                    <h1 class="text-align:center"><?php echo Yii::t('frontend',Yii::$app->config->get('textCartEmptyInCartPage')) ?></h1>
                    <? endif;?>
                </div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
        </div> <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->