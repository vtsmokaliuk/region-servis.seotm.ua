<?

use frontend\models\Filter;
use yii\helpers\Html;
use  yii\widgets\ActiveForm;
use yii\helpers\Url;
$filterModel = new Filter;

?>


<div class="sidebar-filter">
    <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
    <? $form = ActiveForm::begin(['method' => 'POST', 'options' => [
        'class' => 'form-filter',
        'id' => 'product-filter'
    ]]);
    ?>
    <div class="sidebar-widget">

        <h3 class="section-title"><?= Yii::t('frontend', 'Фильтр') ?></h3>
        <? $attributes = $filterModel->getProductsAttributes($category->id, $productIds); ?>
        <div class="sidebar-widget-body">
            <div class="accordion">
                <?
                if (is_array($attributes)):
                    foreach ($attributes as $key => $attrVal):?>

                        <div class="accordion-group">
                            <div class="accordion-heading"><a href="#collapse<?= $key ?>" data-toggle="collapse"
                                                              class="accordion-toggle collapsed"> <?= $filterModel->getAttributeName($key) ?></a>
                            </div>
                            <!-- /.accordion-heading -->
                            <div class="accordion-body collapse in" id="collapse<?= $key ?>">
                                <div class="accordion-inner">
                                    <ul>
                                        <?
                                        $count = 0;
                                        foreach ($attrVal as $attr): ?>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="filter[checkbox][<?= $key ?>][]"
                                                           value="<?= $attr['text'] ?>" class="custom-control-input product-filter-checkbox"
                                                           id="id-<?= $count . $key ?>" data-attr-checkbox="<?=$attr['id']?>">
                                                    <label class="custom-control-label product-filter-label"
                                                           for="id-<?= $count . $key ?>"><span
                                                                class="filter-span" data-attr-id="<?=$attr['id']?>"><?= $attr['text'] ?></span></label>
                                                </div>
                                            </li>
                                            <? $count++;
                                        endforeach; ?>
                                    </ul>
                                </div>
                                <!-- /.accordion-inner -->
                            </div>
                            <!-- /.accordion-body -->
                        </div>
                    <? endforeach; endif; ?>
            </div>
            <!-- /.accordion -->
        </div>


        <!-- /.sidebar-widget-body -->
    </div>
    <!-- /.sidebar-widget -->
    <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

    <!-- ============================================== PRICE SILDER============================================== -->
    <div class="sidebar-widget">
        <div class="widget-header">
            <h4 class="widget-title"><?= Yii::t('frontend', 'Цена') ?></h4>
        </div>

        <div class="sidebar-widget-body m-t-10">
            <input type="hidden" id="minPriceFiled" value="<?= $filterModel->getMinPrice() ?>"
                   name="filter[price][min]">
            <input type="hidden" id="maxPriceFiled" value="<?= $filterModel->getMaxPrice() ?>"
                   name="filter[price][max]">
            <div class="price-range-holder"><span class="min-max"> <span
                            class="pull-left" id="minPriceLabel"><?= $filterModel->getMinPrice() . Yii::$app->config->get('currency') ?></span> <span
                            class="pull-right" id="maxPriceLabel"><?= $filterModel->getMaxPrice() . Yii::$app->config->get('currency') ?></span> </span>


            </div>
            <div class="slider-wrap">
                <div id="slider"></div>
            </div>
            <!-- /.price-range-holder -->
            <?
            echo Html::submitButton(Yii::t('frontend', Yii::$app->config->get('filterBtn')), ['class' => 'lnk btn btn-primary']);

            ?>

        </div>
        <!-- /.sidebar-widget-body -->
    </div>
    <!-- /.sidebar-widget -->

    <!-- ============================================== COLOR: END ============================================== -->
    <!-- ============================================== COMPARE============================================== -->
    <div class="sidebar-widget outer-top-vs outer-bottom-small" id="comparison-widget">
        <? echo $this->render('/widget/comparison')?>
        <!-- /.sidebar-widget-body -->
    </div>
    <!-- /.sidebar-widget -->
    <!-- ============================================== COMPARE: END ============================================== -->
    <!-- ============================================== PRODUCT TAGS ============================================== -->

    <!-- /.sidebar-widget -->
    <!-- /.Testimonials -->


    <!-- ============================================== Testimonials: END ============================================== -->

    <!-- ============================================== NEWSLETTER ============================================== -->

    <!-- /.sidebar-widget -->
    <!-- ============================================== NEWSLETTER: END ============================================== -->

    <?

    ActiveForm::end();
    ?>
</div>