<?

use yii\widgets\ListView;

echo $this->render('/common/breadcrumbs', ['model' => $category]);
?>

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                <!-- ================================== TOP NAVIGATION ================================== -->
                <? echo $this->render('/widget/category-list') ?>
                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
                <div class="sidebar-module-container">
                    <? echo $this->render('/product/filter', ['category' => $category, 'productIds' => $productIds]) ?>
                    <!-- /.sidebar-filter -->
                </div>
                <!-- /.sidebar-module-container -->
            </div>
            <!-- /.sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-9 rht-col">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <?
                if(!empty($banners)):
                echo $this->render('/banner/banner', ['banners' => $banners, 'bannerModel' => $bannerModel]);
                endif; ?>


                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
                            <div class="filter-tabs">
                                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                    <li class="active"><a data-toggle="tab" href="#grid-container"><i
                                                    class="icon fa fa-th-large"></i><?= Yii::t('frontend', 'Сетка') ?></a></li>
                                    <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i><?= Yii::t('frontend', 'Список') ?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.filter-tabs -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">

                                <!-- /.lbl-cnt -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-6 col-md-6 no-padding hidden-sm hidden-md">

                                    <!-- /.fld -->
                             
                                <!-- /.lbl-cnt -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.col -->

                    <!-- /.row -->
                </div>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">

                                    <?
                                    if ($dataProvider):
                                        echo ListView::widget([
                                            'dataProvider' => $dataProvider,
                                            'itemView' => '/product/_item.php',
                                            'pager' => [
                                                'prevPageLabel' => '<i class="fa fa-angle-left"></i>',
                                                'nextPageLabel' => '<i class="fa fa-angle-right"></i>',
                                                'maxButtonCount' => 6,

                                                'options' => [
                                                    'tag' => 'ul',
                                                    'class' => 'list-inline list-unstyled',
                                                ],
                                                'linkOptions' => ['class' => 'mylink'],
                                                'activePageCssClass' => 'active',
                                                'disabledPageCssClass' => 'mydisable',
                                                'prevPageCssClass' => 'prev',
                                                'nextPageCssClass' => 'next',
                                            ],
                                            'layout' => " <div class='row'>{items}</div>\n
<div class='clearfix filters-container bottom-row row'>
                    <div class='text-right'><div class='pagination-container'>{summary}{pager}</div></div></div>",
                                        ]); endif; ?>

                                <!-- /.row -->
                            </div>
                            <!-- /.category-product -->

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane " id="list-container">
                            <div class="category-product">
                                <?
                                if ($dataProvider):
                                    echo ListView::widget([
                                        'dataProvider' => $dataProvider,
                                        'itemView' => '/product/_item-list.php',
                                        'pager' => [
                                            'prevPageLabel' => '<i class="fa fa-angle-left"></i>',
                                            'nextPageLabel' => '<i class="fa fa-angle-right"></i>',
                                            'maxButtonCount' => 6,

                                            'options' => [
                                                'tag' => 'ul',
                                                'class' => 'list-inline list-unstyled',
                                            ],
                                            'linkOptions' => ['class' => 'mylink'],
                                            'activePageCssClass' => 'active',
                                            'disabledPageCssClass' => 'mydisable',
                                            'prevPageCssClass' => 'prev',
                                            'nextPageCssClass' => 'next',
                                        ],
                                        'layout' => " <div class='row'>{items}</div>\n
<div class='clearfix filters-container bottom-row'>
                    <div class='text-right'><div class='pagination-container'>{summary}{pager}</div></div></div>",
                                    ]);

                                endif; ?>

                                <!-- /.category-product-inner -->

                            </div>
                            </div>
                            <!-- /.category-product -->
                        </div>
                        <!-- /.tab-pane #list-container -->
                    </div>
                    <!-- /.tab-content -->

                    <!-- /.filters-container -->

                </div>
                <!-- /.search-result-container -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
      
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->


    <!-- /.container -->
    </div>
</div>
