<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;
use backend\models\AtributeGroup;
$languages = Language::findAllActive();
$lang = Language::getDefaultLanguage();

$groupList = AtributeGroup::getAtributeGroup();
$groups = [];
foreach ($groupList as $group){
    $groups[$group->id] = $group->translate($lang)->header;
}
?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <?php $form = ActiveForm::begin(); ?>
               
                        <?= $form->field($model, 'attribute_group_id')->dropDownList($groups)->label() ?>

                <?= $form->field($model, 'pos')->textInput() ?>

                <ul class="nav nav-tabs" role="tablist">
                    <?php $i = 0;
                    foreach ($languages as $language): ?>
                        <li role="presentation" class="<?= $language->code == $lang ? 'active' : '' ?>">
                            <a href="#lang-<?= $language->code ?>" aria-controls="lang-<?= $language->code ?>"
                               role="tab"
                               data-toggle="tab">
                                <?= Html::tag('i', '', ['class' => $language->code, 'style' => 'margin-right: 5px;']) ?>
                                <?= $language->title ?>
                            </a>
                        </li>
                        <?php $i++; endforeach ?>
                </ul>
                <div class="tab-content">
                    <?php $j = 0;
                    foreach ($languages as $language): ?>
                        <div class="tab-pane <?= $language->code == $lang ? 'active' : '' ?>" role="tabpanel"
                             id="lang-<?= $language->code ?>">
                            <?= $form->field($model->translate($language->code), '[' . $language->code . ']header')->textInput(['class' => 'form-control header-field']) ?>
                           </div>
                        <?php $j++; endforeach ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('admin', 'Сохранить'), ['class' => 'btn btn-success']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
