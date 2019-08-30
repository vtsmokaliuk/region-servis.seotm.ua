<h3 class="section-title"><?= Yii::t('frontend', 'Новинки') ?></h3>
<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
<?   foreach ($products as $product): ?>
    <div class="item">
        <div class="products">
            <div class="hot-deal-wrapper">
                <div class="image">
                    <a href="<?php echo $product->getAlias($product) ?>">
                        <img src="<?php echo $product->getBigImage($product->id); ?>"
                             alt="">
                        <img src="<?php echo $product->getBigImage($product->id); ?>"
                             alt="" class="hover-image">
                    </a>
                </div>
              
            </div>
            <!-- /.hot-deal-wrapper -->

            <div class="product-info text-left m-t-20">
                <h3 class="name"><a href="<?php echo $product->getAlias($product) ?>"><?=$product->header?></a></h3>
                 <div class="product-price">   <span class="price"><?php echo $product->getProductPrice($product) ?></span>
                    <span class="price-before-discount" style="display:none">$ 800</span></div>
                <!-- /.product-price -->

            </div>
            <!-- /.product-info -->

            <div class="cart clearfix animate-effect">
                <div class="action">
                    <div class="add-cart-button btn-group">
                        <button class="btn btn-primary icon add-to-cart-small" data-toggle="dropdown"
                                type="button" href="/cart/add/<?php echo $product->id ?>"><i class="fa fa-shopping-cart"></i></button>
                        <button class="btn btn-primary cart-btn add-to-cart-small" type="button" href="/cart/add/<?php echo $product->id ?>"><?=Yii::$app->config->get('btnAddToCartInNewWidget')?>
                        </button>
                    </div>
                </div>
                <!-- /.action -->
            </div>
            <!-- /.cart -->
        </div>
    </div>
    <?   endforeach; ?>
</div>
<!-- /.sidebar-widget -->