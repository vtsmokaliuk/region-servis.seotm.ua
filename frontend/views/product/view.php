<?
use yii\widgets\ListView;
echo $this->render('/common/breadcrumbs',['model' => $product]);
?>
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                <div class="sidebar-module-container">
                    <? if (isset($isnew)): ?>
                        <div class="sidebar-widget hot-deals outer-bottom-xs">
                            <? if (is_array($isnew)):
                                echo $this->render('/widget/isnew', ['products' => $isnew]);
                            endif; ?>
                        </div>
                    <? endif; ?>
                    <div class="sidebar-widget outer-top-vs outer-bottom-small" id="comparison-widget">
                        <? echo $this->render('/widget/comparison') ?>
                    </div>
                </div>
            </div>
            <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                <div class="detail-block">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">
                                <div id="owl-single-product">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-lightbox="image-1" data-title="Gallery"
                                           href="<?php echo $product->getBigImage($product->id); ?>">
                                            <img class="img-responsive big-product-image" alt=""
                                                 src="<?php echo $product->getBigImage($product->id); ?>"
                                                 data-echo="<?php echo $product->getBigImage($product->id); ?>"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-product-gallery-thumbs gallery-thumbs">
                                    <div id="owl-single-product-thumbnails">
                                        <div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product"
                                               data-slide="1" href="#slide1">
                                                <img class="img-responsive small-product-image" alt=""
                                                     src="<?php echo $product->getBigImage($product->id, 'small'); ?>"
                                                     data-echo="<?php echo $product->getBigImage($product->id); ?>"/>
                                            </a>
                                        </div>
                                        <? if (isset($images)): ?>
                                            <? $count = 2;
                                            foreach ($images as $image): ?>
                                                <div class="item">
                                                    <a class="horizontal-thumb active" data-target="#owl-single-product"
                                                       data-slide="<? echo $count; ?>" href="#slide1">
                                                        <img class="img-responsive small-product-image" alt=""
                                                             src="<?php echo $product->getSmallImage($image['image']); ?>"
                                                             data-echo="<?php echo $product->getSmallImage($image['image']); ?>"/>
                                                    </a>
                                                </div>
                                                <? $count++;
                                            endforeach; ?>
                                        <? endif; ?>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                            <div class="product-info">
                                <h1 class="name"><? echo $product->header; ?></h1>
                                <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="label"><?= Yii::t('frontend', 'Наличие :') ?></span>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="value"><?= $product->getProductStockStatus($product->stock_status_id) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-container m-t-20">
                                    <?= $product->content; ?>
                                </div>
                                <div class="price-container info-container m-t-30">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="price-box">
                                                <span class="price"><?= $product->getProductPrice($product) ?></span>
                                                <span class="price-strike" style="display: none">$900.00</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="favorite-button m-t-5">
                                                <a class="btn btn-primary add-to-comparison <? if (\frontend\models\Comparison::checkProductInComparison($product->id) == true) echo 'is_comparison' ?>"
                                                   href="/product/add-to-comparison/<?= $product->id ?>"
                                                   data-toggle="tooltip" data-placement="right"
                                                   title="<?= Yii::t('frontend', 'Добавить товар в список сравнения') ?>"
                                                   data-add-in-comparison="<?= Yii::t('frontend', 'Добавить товар в список сравнения') ?>"
                                                   data-remove-in-comparison="<?= Yii::t('frontend', 'Удалить товар из списка сравнения') ?>"
                                                   href="/product/add-to-comparison/<?= $product->id ?>">
                                                    <i class="fa fa-signal"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.price-container -->

                                <div class="quantity-container info-container">
                                    <div class="row">

                                        <div class="qty">
                                            <span class="label"><?= Yii::t('frontend', 'Количество :') ?></span>
                                        </div>

                                        <div class="qty-count">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i
                                                                        class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i
                                                                        class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </div>

                                        <? echo \frontend\models\Cart::addToCartBigBtn($product); ?>
                                        <div><? echo \frontend\models\Rent::addToRent($product); ?></div>

                                    </div><!-- /.row -->
                                </div><!-- /.quantity-container -->


                            </div><!-- /.product-info -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div>
                <div class="product-tabs inner-bottom-xs">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab"
                                                      href="#description"><?= Yii::t('frontend', 'Описание') ?></a></li>
                                <li><a data-toggle="tab" href="#attr"><?= Yii::t('frontend', 'Характеристики') ?></a>
                                </li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content">
                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <h4 class="title"><?= Yii::t('frontend', 'Описание') ?></h4>
                                        <?= $product->content; ?>
                                    </div>
                                </div><!-- /.tab-pane -->
                                <div id="attr" class="tab-pane">
                                    <h4 class="title"><?= Yii::t('frontend', 'Технические характеристики') ?></h4>

                                    <?
                                    if (isset($attributes)):
                                        if (is_array($attributes)):
                                            ?>
                                            <table class="table table-striped product-attribute-table m-t-20">
                                                                                             <tbody>
                                                <? foreach ($attributes as $attribute): ?>
                                                    <tr>
                                                        <td class="text-left" style="width: 50%;">
                                                            <?= \frontend\models\ProductAttribute::getAttributeName($attribute['attribute_id']) ?>
                                                        </td>
                                                        <td class="text-left" style="width: 50%;">
                                                            <?= $attribute['text'] ?>
                                                        </td>
                                                    </tr>
                                                <? endforeach; ?>
                                                </tbody>
                                            </table>
                                        <? endif;
                                    endif; ?>
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.product-tabs -->

                <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <? if (count($similarProducts)): ?>
                    <section class="section featured-product">
                        <div class="row">
                            <div class="col-lg-3">
                                <h3 class="section-title"><?= Yii::t('frontend', 'Похожие товары') ?></h3>
                                <div class="ad-imgs">
                                    <img class="img-responsive"
                                         src="<?php echo Yii::$app->request->baseUrl; ?>/images/banners/home-banner1.jpg"
                                         alt="">
                                    <img class="img-responsive"
                                         src="<?php echo Yii::$app->request->baseUrl; ?>/images/banners/home-banner2.jpg"
                                         alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                                    <? foreach ($similarProducts as $similar): ?>
                                        <? echo $this->render('_item-similar', ['model' => $similar]) ?>
                                    <? endforeach; ?>
                                </div><!-- /.home-owl-carousel -->
                            </div>
                        </div>
                    </section><!-- /.section -->
                <? endif; ?>
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
            </div><!-- /.col -->
            <div class="clearfix"></div>
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->

        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /.body-content -->
