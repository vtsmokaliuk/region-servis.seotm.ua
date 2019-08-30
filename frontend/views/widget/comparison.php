<?
use yii\helpers\Url;

?>
<h3 class="section-title"><?= Yii::t('frontend', 'Сравнение товаров') ?></h3>
<div class="sidebar-widget-body">
    <div class="compare-report">
        <? if(\frontend\models\Comparison::countItems() == 0):?>
            <?= Yii::t('frontend', 'У вас нет товаров для сравнения') ?>
        <? else:?>
            <?= Yii::t('frontend', 'У вас ').'<span>'.\frontend\models\Comparison::countItems().'</span>'.Yii::t('frontend', ' товаров для сравнения') ?>
            <div class="form-group m-t-15">
                <a href="<?=Url::to(['/product-comparison'])?>" class="btn btn-primary" href=""> <?= Yii::t('frontend', 'Показать') ?></a>
            </div>
        <? endif;?>

    </div>

</div>