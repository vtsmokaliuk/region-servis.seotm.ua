<?php

use yii\helpers\Html;
$this->title = Yii::t('admin', 'Добавить группу атрибутов');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Группа атрибутов'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atribute-group-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
