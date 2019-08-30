<?php

use yii\helpers\Html;
use common\models\Language;
$lang = Language::getDefaultLanguage();
$this->title = Yii::t('admin', 'Редактирование атрибута: {name}', [
    'name' => $model->translate($lang)->header,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Атрибуты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Редактирование')]; ?>
<div class="atribute-group-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>