<?php

use yii\helpers\Html;

$this->title = Yii::t('admin', 'Добавить категорию');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Категории'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
