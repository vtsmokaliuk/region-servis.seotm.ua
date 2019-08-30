<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;
$languages = Language::findAllActive();
$lang = Language::getDefaultLanguage();
?>
<div class="card">
    <div class="card-body">
        <div class="row" id="my-menu-editor">
            <ul class="nav nav-tabs width-100" role="tablist">
                <?php $i = 0;
                foreach ($languages as $language): ?>
                    <li role="presentation" class="<?= $language->code == $lang ? 'active' : '' ?>">
                        <a href="#lang-<?= $language->code ?>" aria-controls="lang-<?= $language->code ?>" role="tab"
                           data-toggle="tab">
                            <?= Html::tag('i', '', ['class' => $language->code, 'style' => 'margin-right: 5px;']) ?>
                            <?= $language->title ?>
                        </a>
                    </li>
                    <?php $i++; endforeach ?>
            </ul>
            <div class="tab-content width-100">
                <?php $j = 0;
                foreach ($languages as $language): ?>
                    <div class="tab-pane <?= $language->code == $lang ? 'active' : '' ?>" role="tabpanel"
                         id="lang-<?= $language->code ?>">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <div class=""><?= Yii::t('admin', 'Меню') ?></div>
                                    </div>
                                    <div class="card-body">
                                        <ul id="myEditor-<?= $language->code ?>" class="sortableLists list-group">
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" style="display:none;">JSON
                                        <div class="float-right">
                                            <button id="btnOutput-<?= $language->code ?>" type="button"
                                                    class="btn btn-success btn-output-json"><i
                                                        class="mdi mdi-content-save"></i> <?= Yii::t('admin', 'Обновить') ?>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <?php $form = ActiveForm::begin(); ?>
                                        <?= $form->field($model->translate($language->code), '[' . $language->code . ']header')->textInput(['class' => 'form-control header-field']) ?>
                                        <?= $form->field($model->translate($language->code), '[' . $language->code . ']content')->textarea(['id' => 'out-' . $language->code, 'readonly' => 'readonly', 'style' => 'display:none'])->label(false) ?>
                                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>

                                            <?= $form->field($model, 'status')->dropDownList([
                                                $model::$statusIsActive => Yii::t('admin', 'Отображать'),
                                                $model::$statusDraft => Yii::t('admin', 'Не отображать')
                                            ],
                                                ['class' => 'custom-select']
                                            ) ?>
                                     
                                        <div class="form-group">
                                            <?= Html::submitButton(Yii::t('admin', 'Сохранить'), ['class' => 'btn btn-success btn-save-menu']) ?>
                                        </div>
                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-primary mb-3">
                                    <div class="card-header bg-primary text-white"><?= Yii::t('admin', 'Управление элементом') ?></div>
                                    <div class="card-body">
                                        <form id="frmEdit-<?= $language->code ?>" class="form-horizontal">
                                            <div class="form-group">
                                                <label for="text"><?= Yii::t('admin', 'Название') ?></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control item-menu" name="text"
                                                           id="text-<?= $language->code ?>"
                                                           placeholder="<?= Yii::t('admin', 'Название') ?>">
                                                </div>
                                                <input type="hidden" name="icon" class="item-menu">
                                            </div>
                                            <div class="form-group">
                                                <label for="href">URL</label>
                                                <input type="text" class="form-control item-menu" id="href" name="href"
                                                       placeholder="URL">
                                            </div>
                                            <div class="form-group">
                                                <label for="target"><?= Yii::t('admin', 'Тип ссылки') ?></label>
                                                <select name="target" id="target" class="form-control item-menu">
                                                    <option value="_self">Self</option>
                                                    <option value="_blank">Blank</option>
                                                    <option value="_top">Top</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title"><?= Yii::t('admin', 'Подсказка') ?></label>
                                                <input type="text" name="title" class="form-control item-menu"
                                                       id="title" placeholder="<?= Yii::t('admin', 'Подсказка') ?>">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" id="btnUpdate-<?= $language->code ?>"
                                                class="btn btn-primary" disabled><i
                                                    class="mdi mdi-update"></i> <?= Yii::t('admin', 'Обновить') ?>
                                        </button>
                                        <button type="button" id="btnAdd-<?= $language->code ?>"
                                                class="btn btn-success"><i
                                                    class="mdi mdi-plus"></i> <?= Yii::t('admin', 'Добавить') ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? if (!empty($model->translate($language->code)->content)) {
                    $json_content = $model->translate($language->code)->content;
                } else {
                    $json_content = '[{"text":"Главная","href":"/","icon":"","target":"_top","title":"Главная"}]';
                }
                ?>
                    <script>
                        jQuery(document).ready(function () {
                            $(document).on('click', '.btn-save-menu', function (e) {
                                  $('.btn-output-json').trigger('click');
                            });
                            $(document).on('change, click, keyup, keydown', '#my-menu-editor *', function () {
                                $('#btnOutput-<?= $language->code ?>').trigger('click');
                            });
                            var arrayjson_<?= $language->code ?> = <?= $json_content;?>;
                            var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
                            var sortableListOptions = {
                                placeholderCss: {'background-color': "#cccccc"}
                            };

                            var editor = new MenuEditor('myEditor-<?= $language->code ?>', {
                                listOptions: sortableListOptions,
                                iconPicker: iconPickerOptions
                            });
                            editor.setForm($('#frmEdit-<?= $language->code ?>'));
                            editor.setUpdateButton($('#btnUpdate-<?= $language->code ?>'));
                            // $('#btnReload-<?= $language->code ?>').on('click', function () {
                            editor.setData(arrayjson_<?= $language->code ?>);
                            // });
                            $('#btnOutput-<?= $language->code ?>').on('click', function () {
                                var str = editor.getString();
                                $("#out-<?= $language->code ?>").text(str);
                            });

                            $("#btnUpdate-<?= $language->code ?>").click(function () {
                                editor.update();
                            });

                            $('#btnAdd-<?= $language->code ?>').click(function () {
                                editor.add();
                            });

                            $('[data-toggle="tooltip"]').tooltip();

                            $('#btnStars-<?= $language->code ?>').html(data.stargazers_count);
                            $('#btnForks-<?= $language->code ?>').html(data.forks_count);

                        });

                    </script>
                    <?php $j++; endforeach ?>
            </div>
        </div>
    </div>
</div>
