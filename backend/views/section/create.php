<?php

use yii\helpers\Html;

$this->title = Yii::t('admin', 'Добавить секцию');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Секции'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
