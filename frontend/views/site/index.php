<?php
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                <? echo $this->render('/widget/category-list') ?>
                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->

                <!-- ============================================== HOT DEALS ============================================== -->
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
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                <!-- ============================================== PRODUCT TAGS ============================================== -->

                <!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                <!-- ============================================== SPECIAL DEALS ============================================== -->


                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                <!-- ============================================== NEWSLETTER ============================================== -->

                <!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->

                <!-- ============================================== Testimonials============================================== -->


                <!-- ============================================== Testimonials: END ============================================== -->


            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->


                <?
                if (!empty($banners)):
                    echo $this->render('/banner/banner', ['banners' => $banners, 'bannerModel' => $bannerModel]);
                endif; ?>

                <!-- ========================================= SECTION – HERO : END ========================================= -->


                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left"><?= Yii::t('frontend', 'Новинки') ?></h3>
                        <!-- /.nav-tabs -->
                    </div>
                    <? if (isset($isnew)): ?>
                    <? if (is_array($isnew)): ?>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                                    <? foreach ($isnew as $model): ?>
                                        <? echo $this->render('/product/_item-similar', ['model' => $model]) ?>
                                    <? endforeach; ?>

                                    <!-- /.item -->


                                    <!-- /.item -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
                        <? endif; ?>
                        <? endif; ?>

                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
             
                <!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== FEATURED PRODUCTS ============================================== -->

                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->

                <!-- /.wide-banners -->
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->


                <!-- /.sidebar-widget -->
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
                <? if (isset($blogItems)): ?>
                    <? if (count($blogItems)): ?>
                        <section class="section latest-blog outer-bottom-vs">
                            <h3 class="section-title"><?= Yii::t('frontend', 'Блог') ?></h3>
                            <div class="blog-slider-container outer-top-xs">
                                <div class="owl-carousel blog-slider custom-carousel">
                                    <? foreach ($blogItems as $item): ?>
                                        <? echo $this->render('/material/_latest-item', ['item' => $item]); ?>
                                        <!-- /.item -->
                                    <? endforeach; ?>
                                    <!-- /.item -->

                                </div>
                                <!-- /.owl-carousel -->
                            </div>
                            <!-- /.blog-slider-container -->
                        </section>
                    <? endif; ?>
                <? endif; ?>
                <!-- /.section -->
                <!-- ============================================== BLOG SLIDER : END ============================================== -->

                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <? if (isset($isrecomended)): ?>
                    <? if (is_array($isrecomended)): ?>
                        <section class="section new-arriavls">
                            <h3 class="section-title"><?= Yii::t('frontend', 'Рекомендуемые') ?></h3>
                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                                <? foreach ($isrecomended as $model): ?>
                                    <? echo $this->render('/product/_item-similar', ['model' => $model]) ?>
                                <? endforeach; ?>
                                <!-- /.item -->
                            </div>
                            <!-- /.home-owl-carousel -->
                        </section>
                    <? endif; ?>
                <? endif; ?>
                <!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
              <!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
