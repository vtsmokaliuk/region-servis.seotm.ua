<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

frontend\assets\AppAsset::register($this);
echo $this->render('/common/breadcrumbs', ['model' => $model]);
?>

<div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="panel-group checkout-steps" id="accordion">
                        <?php $form = ActiveForm::begin(); ?>
                        <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                        <span>1</span> <?= Yii::t('frontend', 'Контактные данные') ?>
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->

                            <div id="collapseOne" class="panel-collapse collapse in">

                                <!-- panel-body  -->
                                <div class="panel-body">
                                    <div class="row">

                                        <!-- guest-login -->
                                        <div class="col-md-6 col-sm-6 guest-login">
                                            <?= $form->field($order, 'firstname')->textInput() ?>
                                            <?= $form->field($order, 'lastname')->textInput() ?>
                                            <?= $form->field($order, 'surname')->textInput() ?>
                                            <?= $form->field($order, 'email')->textInput() ?>
                                            <?= $form->field($order, 'telephone')->textInput() ?>
                                        </div>
                                        <!-- guest-login -->

                                        <!-- already-registered-login -->
                                        <div class="col-md-6 col-sm-6 already-registered-login">
                                            <?= $form->field($order, 'adress')->textInput() ?>
                                            <?= $form->field($order, 'city')->textInput() ?>
                                            <?= $form->field($order, 'postcode')->textInput() ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div>
                        <!-- checkout-step-01  -->
                        <!-- checkout-step-02  -->
                        <div class="panel panel-default checkout-step-02">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                       href="#collapseTwo">
                                        <span>2</span><?= Yii::t('frontend', 'Способ доставки') ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <? if (is_array($delivery)): ?>
                                        <div class="checkout-delivery-list">
                                            <?
                                            $deliverylist = [];
                                            foreach ($delivery as $deliv) {
                                                $deliverylist[$deliv->id] = $deliv->header;
                                            }
                                            ?>
                                            <?= $form->field($order, 'delivery_id')->radioList($deliverylist)->label(false) ?>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- checkout-step-02  -->

                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('frontend', 'Оформить заказ'), ['class' => 'btn btn-success']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>

                    </div><!-- /.checkout-steps -->
                </div>

            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    </div>
