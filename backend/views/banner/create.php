<?php

use yii\helpers\Html;
$this->title = Yii::t('admin', 'Добавить баннер');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Баннеры'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="block-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
