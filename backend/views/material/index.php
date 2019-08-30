<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = Yii::t('admin', 'Материалы');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-index">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                   <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'summary' => Yii::t('admin', 'Отображено {begin} -из {totalCount} элементов'),
                        'tableOptions' => ['class' => 'table'],
                        'layout' => "{items}\n{pager}\n{summary}",
                        'columns' => [
                            [
                                'attribute' => 'image',
                                'format' => 'raw',
                                'value' => function ($model) {
                                    return
                                        '<div class="table-image-prev"><img src="'.$model->getImagePrev($model->id).'"></div>';
                                }
                            ],
                            [
                                'attribute' => 'header',
                                'label' => Yii::t('admin', 'Название'),
                                'value' => function ($model) {
                                    return $model->translate(\common\models\Language::getDefaultLanguage())->header;
                                }
                            ],
                            'alias',
                                                       'pos',
                            [
                                'attribute' => 'status',
                                'filter' => \common\helpers\StatusHelper::statusList(),
                                'value' => function (\backend\models\Material $model) {
                                    return \common\helpers\StatusHelper::statusLabel($model->status);
                                },
                                'format' => 'raw',
                            ],
                            [
                                'format' => 'raw',
                                'value' => function ($data) {
                                    return
                                        '<div class="btn-group btn-group-xs">' .
                                        Html::a('<i class="m-r-10 mdi mdi-tooltip-edit"></i>', ['update', 'id' => $data->id], ['title' => 'edit', 'class' => 'btn btn-info']) . ' ' .
                                        Html::a('<i class="m-r-10 mdi mdi-delete"></i>', ['delete', 'id' => $data->id], [
                                            'class' => 'btn btn-danger',
                                            'data' => [
                                                'confirm' => Yii::t('admin', 'Вы уверены ччто хотите удалить этот материал?'),
                                                'method' => 'post',
                                            ],
                                        ]) . '</div>';
                                }
                            ],],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
