<div class="category-product-inner">
    <div class="products">
        <div class="product-list product">
            <div class="row product-list-row">
                <div class="col col-sm-3 col-lg-3">
                    <div class="product-image">
                        <div class="image"> <img src="<?php echo $model->getBigImage($model->id);?>" alt=""> </div>
                    </div>
                    <!-- /.product-image -->
                </div>
                <!-- /.col -->
                <div class="col col-sm-9 col-lg-9">
                    <div class="product-info">
                        <h3 class="name"><a href="<?php echo $model->getAlias($model)?>"><?php echo $model->header?></a></h3>
                        <div class="product-price"> <span class="price"> <?php echo $model->getProductPrice($model)?> </span> <span class="price-before-discount" style="display: none">$ 800</span> </div>
                        <!-- /.product-price -->
                        <div class="description m-t-10"><?php echo $model->short_content?></div>
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
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->

                    </div>
                    <!-- /.product-info -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.product-list-row -->
            
         <?=$model->productTags($model)?>
        </div>
        <!-- /.product-list -->
    </div>
    <!-- /.products -->
</div>