<div class="item item-carousel">
    <div class="products">
        <div class="product">
            <div class="product-image">
                <div class="image">
                    <a href="<?php echo $model->getAlias($model) ?>"><img
                                src="<?php echo $model->getBigImage($model->id); ?>"
                                alt=""></a>
                </div><!-- /.image -->
            </div><!-- /.product-image -->
            <div class="product-info text-left">
                <h3 class="name"><a href="<?php echo $model->getAlias($model) ?>"><?php echo $model->header ?></a></h3>
                <div class="description"></div>
                <div class="product-price">
                    <span class="price"><?php echo $model->getProductPrice($model) ?></span>
                    <span class="price-before-discount" style="display:none">$ 800</span>
                </div><!-- /.product-price -->
            </div><!-- /.product-info -->
            <div class="cart clearfix animate-effect">
                <div class="action">
                    <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                            <a class="btn btn-primary icon add-to-cart-small" data-toggle="dropdown"
                                    type="button" href="/cart/add/<?php echo $model->id ?>">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <button class="btn btn-primary cart-btn" type="button">Add
                                to cart
                            </button>
                        </li>
                        <li class="lnk">
                            <a class="add-to-cart item-comparison add-to-comparison <? if(\frontend\models\Comparison::checkProductInComparison($model->id)==true) echo 'is_comparison'?>" href="/product/add-to-comparison/<?= $model->id ?>" title="Compare">
                                <i class="fa fa-signal"></i>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.action -->
            </div><!-- /.cart -->
        </div><!-- /.product -->
    </div><!-- /.products -->
</div><!-- /.item -->