<?php

use yii\helpers\Html;
$this->title = Yii::t('admin', 'Добавить атрибут');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Атрибуты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atribute-group-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
