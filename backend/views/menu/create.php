<?php
use yii\helpers\Html;
$this->title = Yii::t('admin', 'Добавить новое меню');
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Меню'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-group-create">


    <?= $this->render('_form_create', [
        'model' => $model,
    ]) ?>

</div>
