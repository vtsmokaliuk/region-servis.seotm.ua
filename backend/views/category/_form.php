<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Language;
use common\helpers\RouteList;
use backend\models\Category;
use backend\models\Banner;
use pendalf89\filemanager\widgets\FileInput;

$languages = Language::findAllActive();
$routeList = RouteList::getRoutes($model);
$lang = Language::getDefaultLanguage();
$categoryList = Category::getCategoryList();
$categoryProduct = [];
foreach ($categoryList as $category){
    $categoryProduct[$category->id] = $category->translate($lang)->header;
}
$params = [
    'prompt' => '...'
];

$bannerList = Banner::getBennerList();
$banners = [];
foreach ($bannerList as $banner){
    $banners[$banner->id] = $banner->name;
}
?>
<div class="reverse-mode">
    <?php $form = ActiveForm::begin(); ?>
    <div class="left-part bg-white p-b-40">
        <div class="scrollable position-relative ps-container ps-theme-default" style="height:100%;"
             data-ps-id="dc8b31a2-52cf-fc46-d4f2-f59d5c409b30">
            <div class="right-bar">
                <div class="el-element-overlay">
                    <div class="card p-15">
                        <h5 class="card-title"><?= Yii::t('admin', 'Параметры публикации') ?></h5>
                        <div class="el-card-item">
                            <div class="custom-control custom-checkbox">
                                <input type="hidden" name="Category[status]" value="0">
                                <input type="checkbox" class="custom-control-input" id="status" name="Category[status]"
                                       value="1" <? if ($model->status == 1) echo 'checked'; ?>>
                                <label class="custom-control-label"
                                       for="status"><?= Yii::t('admin', 'Опубликовать') ?></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                            <input type="hidden" name="Category[index]" value="0">
                            <input type="checkbox" class="custom-control-input" id="index" value="1"
                                   name="Category[index]" <? if ($model->index == 1) echo 'checked'; ?>>
                            <label class="custom-control-label"
                                   for="index"><?= Yii::t('admin', 'Не индексировать') ?></label>
                        </div>
                    </div>
                    <div class="form-group mt-10">
                        <?= Html::submitButton(Yii::t('admin', 'Сохранить'), ['class' => 'btn btn-success', 'name' => 'Category[save]']) ?>
                        <?= Html::submitButton(Yii::t('admin', 'Применить'), ['class' => 'btn btn-default m-l-15', 'name' => 'Category[apply]']) ?>
                    </div>
                </div>
                <hr>
                <div class="card p-15">
                    <h5 class="card-title"><?= Yii::t('admin', 'Параметры отображения') ?></h5>
                    <div class="el-card-item">
                        <?= $form->field($model, 'pos')->textInput() ?>
                    </div>
                </div>
                <hr>
                <div class="card p-15">
                    <h5 class="card-title"><?= Yii::t('admin', 'Параметры системы') ?></h5>
                    <div class="el-card-item">
                        <?= $form->field($model->route, 'route')->dropDownList($routeList)->label(Yii::t('admin', 'Роутер')) ?>
                    </div>
                </div>
                    <div class="card p-15">
                    <h5 class="card-title"><?= Yii::t('admin', 'Родительская категория') ?></h5>
                    <div class="el-card-item">
                        <?= $form->field($model, 'parent_id')->dropDownList($categoryProduct,$params)->label(false) ?>
                    </div>
                </div>
                <hr>
                    <div class="card p-15">
                    <h5 class="card-title"><?= Yii::t('admin', 'Баннер') ?></h5>
                    <div class="el-card-item">
                        <?= $form->field($model, 'banner_id')->dropDownList($banners,$params)->label(false) ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<div class="right-part">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'alias', ['template' => '{label}<div class="input-group" id="alias-field">
<span class="input-group-addon">/</span>{input}
<span class="input-group-addon addon-right"><i class="mdi mdi-reload" id="transliteButton"></i></span></div><div class="help-block">{error}</div>'])->textInput(['maxlength' => true]) ?>
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
                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']header2')->textInput() ?>
                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']title')->textInput() ?>
                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']keywords')->textArea() ?>
                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']description')->textArea() ?>
                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']content')->textArea() ?>
                            </div>
                            <?php $j++; endforeach ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>