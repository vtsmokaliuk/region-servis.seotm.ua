<?php
use yii\helpers\Html;
$this->title = Yii::t('admin','Админпанель');
$this->params['breadcrumbs'][] = ['label' => $this->title];
?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=Yii::t('admin','Статистика дохода за неделю')?></h4>
                <div class="sales ct-charts mt-3"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-5"><?=Yii::t('admin','Статистика дохода за все время')?></h5>
                <h3 class="font-light"><?= \backend\models\Order::getStatsByAllTime()?></h3>
                <div class="m-t-20 text-center">
                    <div id="earnings"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title m-b-0"><?=Yii::t('admin','Новых заказов всего на сумму')?></h4>
                <h3 class="font-light"><?=round(\backend\models\Order::find()->where(['order_status_id' => 1])->sum('total'))?><?=Yii::$app->config->get('currency')?></h3>
                <div class="m-t-30">
                    <div class="row text-center">
                        <div class="col-6 border-right">
                            <h4 class="m-b-0"><?=\backend\models\Order::find()->count()?></h4>
                            <span class="font-14 text-muted"><?=Yii::t('admin','Всего заказов')?></span>
                        </div>
                        <div class="col-6">
                            <h4 class="m-b-0"><?=\backend\models\Order::find()->where(['order_status_id' => 1])->count()?></h4>
                            <span class="font-14 text-muted"><?=Yii::t('admin','Новых заказов')?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Email campaign chart -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Ravenue - page-view-bounce rate -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=Yii::t('admin','Последние заказы')?></h4>
            </div>
            <div class="col-md-12">
            <div class="table-responsive">
                <? $orders = \backend\models\Order::find()->orderBy(['id'=>SORT_DESC])->limit(10)->all();?>
                <? if (count($orders)):?>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="border-top-0"><?=Yii::t('admin','Имя')?></th>
                        <th class="border-top-0"><?=Yii::t('admin','Фамилия')?></th>
                        <th class="border-top-0"><?=Yii::t('admin','Отчество')?></th>
                        <th class="border-top-0"><?=Yii::t('admin','Статус')?></th>
                        <th class="border-top-0"><?=Yii::t('admin','Телефон')?></th>
                        <th class="border-top-0"><?=Yii::t('admin','Итого')?></th>
                        <th class="border-top-0"><?=Yii::t('admin','Просмотр')?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($orders as $order):?>
                        <tr>
                            <td class="txt-oflo"><?=$order['firstname']?></td>
                            <td class="txt-oflo"><?=$order['lastname']?></td>
                            <td class="txt-oflo"><?=$order['surname']?></td>
                            <td><? echo  \backend\helpers\OrderHelper::statusLabel($order['order_status_id']);?>
                            </td>
                            <td class="txt-oflo"><?=$order['telephone']?></td>
                            <td class="txt-oflo"><?=$order['total']?></td>
                             <td><span class="font-medium"><?=  Html::a('<i class="m-r-10 mdi mdi-tooltip-edit"></i>', ['/order/edit','id'=>$order['id']], ['title' => 'edit','class'=>'btn btn-info']);?></span></td>
                        </tr>
                    <? endforeach;?>

                    </tbody>
                </table>
                <? endif;?>
            </div>
        </div>
            </div>
    </div>
</div>
<script>
    $(function() {
        "use strict";

        // ==============================================================
        // sales ratio
        // ==============================================================
        var chart = new Chartist.Line('.sales', {
            labels: [
                '<? $date = strtotime("-7 day"); echo date('Y-m-d',$date); ?>',
                '<? $date = strtotime("-6 day"); echo date('Y-m-d',$date); ?>',
                '<? $date = strtotime("-5 day"); echo date('Y-m-d',$date); ?>',
                '<? $date = strtotime("-4 day"); echo date('Y-m-d',$date); ?>',
                '<? $date = strtotime("-3 day"); echo date('Y-m-d',$date); ?>',
                '<? $date = strtotime("-2 day"); echo date('Y-m-d',$date); ?>',
                'Вчера',
                'Сегодня'],
            series: [
                [   <?= \backend\models\Order::getStatsByDate(7)?>,
                    <?= \backend\models\Order::getStatsByDate(6)?>,
                    <?= \backend\models\Order::getStatsByDate(5)?>,
                    <?= \backend\models\Order::getStatsByDate(4)?>,
                    <?= \backend\models\Order::getStatsByDate(3)?>,
                    <?= \backend\models\Order::getStatsByDate(2)?>,
                    <?= \backend\models\Order::getStatsByDate(1)?>,
                    <?= \backend\models\Order::getStatsByDate('today')?>,

                ]
            ]
            // [8.9, 5.8, 21.9, 5.8, 16.5, 6.5, 14.5]

        }, {
            top: 0,
            low: 0,
            showPoint: true,
            fullWidth: true,
            plugins: [
                Chartist.plugins.tooltip()
            ],
            axisY: {
                onlyInteger: true,
                scaleMinSpace: 40,
                offset: 20,
                labelInterpolationFnc: function(value) {
                    return (value / 1) + 'k';
                }
            },

        });
        var chart = [chart];

        // ==============================================================
        // Our Visitor
        // ==============================================================
        var sparklineLogin = function() {
            $('#earnings').sparkline(
                [   <?= \backend\models\Order::getStatsByDate(7)?>,
                    <?= \backend\models\Order::getStatsByDate(6)?>,
                    <?= \backend\models\Order::getStatsByDate(5)?>,
                    <?= \backend\models\Order::getStatsByDate(4)?>,
                    <?= \backend\models\Order::getStatsByDate(3)?>,
                    <?= \backend\models\Order::getStatsByDate(2)?>,
                    <?= \backend\models\Order::getStatsByDate(1)?>,
                    <?= \backend\models\Order::getStatsByDate('today')?>,

                ]
                , {
                type: 'bar',
                height: '40',
                barWidth: '4',
                width: '100%',
                resize: true,
                barSpacing: '8',
                barColor: '#137eff'
            });
        };
        var sparkResize;

        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();


        // ==============================================================
        // Our Visitor
        // ==============================================================

    });


</script>
<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->