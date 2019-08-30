<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Language;
$this->title = Yii::t('admin', 'Заказы');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class=seсtion-index">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'summary' => Yii::t('admin', 'Отображено {begin} -из {totalCount} элементов'),
                        'tableOptions' => ['class' => 'table'],
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
                        'layout' => "{items}\n{pager}\n{summary}",
                        'columns' => [
                            [
                                'attribute' => 'id',
                                'options' => ['width' => '2%']
                            ],

                            'firstname',
                            'lastname',
                            'surname',
                            'email',
                            'telephone',
                            'total',
                            [
                                'attribute' => 'order_status_id',
                                'filter' => \backend\helpers\OrderHelper::statusList(),
                                'value' => function (\backend\models\Order $model) {
                                    return \backend\helpers\OrderHelper::statusLabel($model->order_status_id);
                                },
                                'format' => 'raw',
                            ],
                            [
                                'format' => 'raw',
                                'value' => function ($data) {
                                    return
                                        '<div class="btn-group btn-group-xs">' .
                                        Html::a('<i class="m-r-10 mdi mdi-tooltip-image"></i>', ['view', 'id' => $data->id], ['title' => 'view', 'class' => 'btn btn-success']) . ' ' .
                                        Html::a('<i class="m-r-10 mdi mdi-tooltip-edit"></i>', ['edit', 'id' => $data->id], ['title' => 'edit', 'class' => 'btn btn-info']) . ' ' .
                                        Html::a('<i class="m-r-10 mdi mdi-delete"></i>', ['delete', 'id' => $data->id], [
                                            'class' => 'btn btn-danger',
                                            'data' => [
                                                'confirm' => Yii::t('admin', 'Вы уверены что хотите удалить этот заказ?'),
                                                'method' => 'post',
                                                'data-pjax' => '0',
                                            ],
                                        ]) . '</div>';
                                }
                            ],

                        ],
                    ]); ?>



                </div>
            </div>
        </div>
    </div>
</div>
