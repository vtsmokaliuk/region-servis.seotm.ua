<?php

use yii\helpers\Html;
$this->title = Yii::t('admin', 'Добавить блок');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Блоки'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="block-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
