<?php

use yii\helpers\Html;
use common\models\Language;
$lang = Language::getDefaultLanguage();
$this->title = Yii::t('admin', 'Редактирование блока: {name}', [
    'name' => $model->translate($lang)->header,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Блоки'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Редактирование')]; ?>
<div class="atribute-group-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>