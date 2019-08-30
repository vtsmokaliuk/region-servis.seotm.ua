<?

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('admin', 'Просмотр заказа: #{id}', [
    'id' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Заказы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('admin', 'Просмотр');
?>
<div class="card">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-body">
        <div class="row">

            <div class="col-md-12">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#information"
                                            role="tab"><span class="hidden-sm-up"></span> <span
                                    class="hidden-xs-down"><?= Yii::t('admin', 'Информация') ?></span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#delivery" role="tab"><span
                                    class="hidden-sm-up"></span> <span
                                    class="hidden-xs-down"><?= Yii::t('admin', 'Доставка') ?></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product" role="tab"><span
                                    class="hidden-sm-up"></span> <span
                                    class="hidden-xs-down"><?= Yii::t('admin', 'Товары') ?></span></a></li>
                </ul>
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane tab-pane-2 active" id="information" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table display table-bordered   dataTable no-footer dtr-inline">

                                <tbody>
                                <tr>
                                    <td><?= Yii::t('admin', 'Имя') ?></td>
                                    <td><?= $model->firstname ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Фамилия') ?></td>
                                    <td><?= $model->lastname ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Отчество') ?></td>
                                    <td><?= $model->surname ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Статус заказа') ?></td>
                                    <td><?= \backend\helpers\OrderHelper::statusName($model->order_status_id) ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Email') ?></td>
                                    <td><?= $model->email ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Телефон') ?></td>
                                    <td><a href="tel:<?= $model->telephone ?>"><?= $model->telephone ?></a></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Адресс') ?></td>
                                    <td><?= $model->adress ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Город') ?></td>
                                    <td><?= $model->city ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Код') ?></td>
                                    <td><?= $model->postcode ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Итого') ?></td>
                                    <td><?= $model->total ?> <?= $model->currency_code ?></td>
                                </tr>
                                <tr>
                                    <td><?= Yii::t('admin', 'Дата добавления') ?></td>
                                    <td><?= \common\components\Date::get_time($model->date_added) ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane tab-pane-2 " id="product" role="tabpanel">
                        <?
                        if (is_array($products)): ?>
                            <table class="table display table-bordered   dataTable no-footer dtr-inline">
                                <thead>
                                <tr>
                                    <th><?= Yii::t('admin', 'Название') ?></th>
                                    <th><?= Yii::t('admin', 'Модель') ?></th>
                                    <th><?= Yii::t('admin', 'Количество') ?></th>
                                    <th><?= Yii::t('admin', 'Цена') ?></th>
                                    <th><?= Yii::t('admin', 'Итого') ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <? foreach ($products as $product): ?>
                                    <tr>
                                        <td><a href="/admin/product/update?id=<?= $product['product_id'] ?>"><?= $product['name'] ?></a></td>
                                        <td><?= $product['model'] ?></td>
                                        <td><?= $product['quantity'] ?></td>
                                        <td><?= $product['price'] ?> <?= $model->currency_code ?></td>
                                        <td><?= $product['total'] ?>  <?= $model->currency_code ?></td>
                                    </tr>
                                <? endforeach; ?>
                                </tbody>
                            </table>
                        <? endif; ?>
                    </div>
                    <div class="tab-pane tab-pane-2 " id="delivery" role="tabpanel">
                        <table class="table display table-bordered   dataTable no-footer dtr-inline">
                            <tbody>
                            <tr>
                                <td><?= Yii::t('admin', 'Способ доставки') ?></td>
                                <td><?= $model->delivery_name ?> </td>
                            </tr>
                            </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
            <button type="button" onclick="location.href='/admin/order'" class="btn waves-effect waves-light btn-block btn-info"><i class="mdi mdi-playlist-check"></i> <?= Yii::t('admin', 'К списку заказов') ?></button>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>