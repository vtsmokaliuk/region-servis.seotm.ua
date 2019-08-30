<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;

$languages = Language::findAllActive();
$lang = Language::getDefaultLanguage();
$this->registerJs("
  var editor = CodeMirror.fromTextArea(document.getElementById(\"blockdescription-ru-content\"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true
  });
  var input = document.getElementById(\"select\");
  function selectTheme() {
    var theme = 'dracula';
    editor.setOption(\"theme\", theme);
    location.hash = \"#\" + theme;
  }
  var choice = (location.hash && location.hash.slice(1)) ||
               (document.location.search &&
                decodeURIComponent(document.location.search.slice(1)));
  if (choice) {
    input.value = choice;
    editor.setOption(\"theme\", choice);
  }
  CodeMirror.on(window, \"hashchange\", function() {
    var theme = location.hash.slice(1);
    if (theme) { input.value = theme; selectTheme(); }
  });
");
?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'pos')->textInput() ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'type')->dropDownList([
                    $model::$typeText => Yii::t('admin', 'Text'),
                    $model::$typeHtml => Yii::t('admin', 'Html')
                ],
                    ['class' => 'custom-select']
                ) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 <?= $form->field($model, 'key')->textInput() ?>
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
        </div> </div>
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
                    <?= $form->field($model->translate($language->code), '[' . $language->code . ']header')->textInput(['class' => 'form-control header-field']) ?>
                    <?= $form->field($model->translate($language->code), '[' . $language->code . ']content')->textarea(['class' => 'form-control']) ?>
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
