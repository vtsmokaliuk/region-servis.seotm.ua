<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;
$languages = Language::findAllActive();
$lang = Language::getDefaultLanguage();
?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'pos')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'status')->dropDownList([
                            $model::$statusIsActive => Yii::t('admin', 'Отображать'),
                            $model::$statusDraft => Yii::t('admin', 'Не отображать')
                        ],
                            ['class' => 'custom-select']
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
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
                    <?= $form->field($model->translate($language->code), '[' . $language->code . ']header')->textInput(['class' => 'form-control']) ?>
                    <?= $form->field($model->translate($language->code), '[' . $language->code . ']content')->textarea(['class' => 'form-control']) ?>
                </div>
                <?php $j++; endforeach ?>
        </div>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('admin', 'Сохранить'), ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</div>
</div>
</div>
