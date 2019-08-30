<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="item">
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <div class="image">
                        <a href="<?php echo $product->getAlias($product)?>">
                            <img src="<?php echo $product->getBigImage($product->id);?>" alt="">
                            <img src="<?php echo $product->getBigImage($product->id);?>" alt="" class="hover-image">
                        </a>
                    </div>
                    <!-- /.image -->

                </div>
                <!-- /.product-image -->

                <div class="product-info text-left">
                    <h3 class="name"><a href="<?php echo $product->getAlias($product)?>"><?php echo $product->header?></a></h3>
                    <div class="description"><?=$product->short_content?></div>
                    <div class="product-price"> <span class="price"> <?php echo $product->getProductPrice($product)?> </span> <span class="price-before-discount">$ 800</span> </div>
                    <!-- /.product-price -->

                </div>
                <!-- /.product-info -->
                <div class="cart clearfix animate-effect">
                    <div class="action">
                        <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                           
                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                        </ul>
                    </div>
                    <!-- /.action -->
                </div>
                <!-- /.cart -->
            </div>
            <!-- /.product -->

        </div>
        <!-- /.products -->
    </div>
</div>
<!-- /.item -->
<!-- /.item -->