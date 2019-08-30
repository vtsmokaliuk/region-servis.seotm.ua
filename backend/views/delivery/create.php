<?php

use yii\helpers\Html;
$this->title = Yii::t('admin', 'Добавить способ доставки');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Способы доставки'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atribute-group-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
