<?php
use yii\helpers\Html;
use common\models\Language;
$lang = Language::getDefaultLanguage();
$this->title = Yii::t('admin', 'Редактирование категории: {name}', [
    'name' => $model->translate($lang)->header,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Категории'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('admin', 'Редактирование');
?>
<div class="section-update">
 <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
