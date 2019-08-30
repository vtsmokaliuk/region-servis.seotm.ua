<?php

use yii\helpers\Html;

$this->title = Yii::t('admin', 'Добавить товар');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Товары'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
