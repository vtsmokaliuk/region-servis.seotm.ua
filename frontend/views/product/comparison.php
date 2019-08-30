<?

use yii\widgets\ListView;

echo $this->render('/common/breadcrumbs', ['model' => $model]);
?>

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            <div class='col-xs-12 col-sm-12 col-md-12 '>
                <div class="clearfix filters-container m-t-10">
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <? if (isset($model->header)): ?>
                                        <h1 class="page-title text-center heading-title"><?= $model->header ?></h1>
                                    <? endif; ?>

                                    <? if (is_array($products)): ?>
                                        <?
                                        foreach ($products as $product):
                                            echo $this->render('_item-comparison', ['product' => $product]);
                                        endforeach;
                                        ?>
                                    <? endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
