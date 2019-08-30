<?

use yii\helpers\Html;
use frontend\models\OrderRent;
use yii\widgets\ActiveForm;

$modelRend = new OrderRent;
if (!empty($product)): ?>
    <div class="clearfix"></div>
    <div class="col-md-12">
        <div class="price-container m-t-30">
            <div class="row">
                <div class="col-sm-6 col-xs-6">
                    <div class="price-box">
                        <span class="price"><?= $product->getPriceRent($product); ?></span>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="add-btn">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rendModal">
                            <?= Yii::$app->config->get('btnRent') ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="rendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $product->header ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success form-order-rent-result" role="alert" style="display: none">
                    <?=Yii::t('frontend', Yii::$app->config->get('alertRentOrder'))?>
                </div>
                <?php $form = ActiveForm::begin([
                        'action' => '/rent/save-order-rent',
                        'options' => [
                                'class' => 'form-order-rent',

                        ]
                ]); ?>
                <div class="modal-body">
                    <?= $form->field($modelRend, 'product_id')->hiddenInput(['value' => $product->id])->label(false); ?>
                    <?= $form->field($modelRend, 'product_name')->hiddenInput(['value' => $product->header])->label(false); ?>
                    <?= $form->field($modelRend, 'price')->hiddenInput(['value' => $product->price_rent])->label(false); ?>
                    <?= $form->field($modelRend, 'hour')->textInput() ?>
                    <?= $form->field($modelRend, 'firstname')->textInput() ?>
                    <?= $form->field($modelRend, 'lastname')->textInput() ?>
                    <?= $form->field($modelRend, 'surname')->textInput() ?>
                    <?= $form->field($modelRend, 'email')->textInput() ?>
                    <?= $form->field($modelRend, 'telephone')->textInput() ?>
                    <?= $form->field($modelRend, 'comment')->textarea() ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?= Yii::t('frontend', 'Закрыть') ?></button>
                    <?= Html::submitButton(Yii::t('frontend', 'Отправить'), ['class' => 'btn btn-success']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
<? endif; ?>