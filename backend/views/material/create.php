<?php

use yii\helpers\Html;

$this->title = Yii::t('admin', 'Добавить материал');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Материалы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
