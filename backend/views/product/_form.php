<?php

use pendalf89\filemanager\models\Mediafile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;
use common\helpers\RouteList;
use pendalf89\filemanager\widgets\FileInput;
use backend\models\Category;
use backend\models\Attribute;

$languages = Language::findAllActive();
$lang = Language::getDefaultLanguage();
$routeList = RouteList::getRoutes($model);
$categoryList = Category::getCategoryList();
$attributeList = Attribute::getAtttibuteList();
$script = <<< JS
   $('#delete_image_preview').click(function(){
    $('#trumb_image img').attr('src','/backend/web/image/placeholder.jpg');
    $('#product-image').attr('value','');
    return false;
});
$('#change_image_preview').click(function(){
    $('#product-image-btn').click();
    return false;
});
JS;
$this->registerJs($script);

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
                                <input type="hidden" name="Product[status]" value="0">
                                <input type="checkbox" class="custom-control-input" id="status" name="Product[status]"
                                       value="1" <? if ($model->status == 1) echo 'checked'; ?>>
                                <label class="custom-control-label"
                                       for="status"><?= Yii::t('admin', 'Опубликовать') ?></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="hidden" name="Product[index]" value="0">
                                <input type="checkbox" class="custom-control-input" id="index" value="1"
                                       name="Product[index]" <? if ($model->index == 1) echo 'checked'; ?>>
                                <label class="custom-control-label"
                                       for="index"><?= Yii::t('admin', 'Не индексировать') ?></label>
                            </div>
                        </div>
                        <div class="form-group mt-10">
                            <?= Html::submitButton(Yii::t('admin', 'Сохранить'), ['class' => 'btn btn-success', 'name' => 'Product[save]']) ?>
                            <?= Html::submitButton(Yii::t('admin', 'Применить'), ['class' => 'btn btn-default m-l-15', 'name' => 'Product[apply]']) ?>
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
                    <hr>
                    <div class="card p-15">
                        <h5 class="card-title"><?= Yii::t('admin', 'Изображение') ?></h5>
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1" id="trumb_image">
                                <? if ($mediafile = Mediafile::loadOneByOwner('product', $model->id, 'image')):
                                    echo $mediafile->getThumbImage('medium');
                                else:
                                    echo '<img src="' . $model->getImagePlaceholder() . '" class="">';
                                endif; ?>
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a
                                                    class="btn default btn-outline image-popup-vertical-fit el-link"
                                                    href="javascript:void(0);" id="delete_image_preview"><i
                                                        class="mdi mdi-delete"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link"
                                                               href="javascript:void(0);" id="change_image_preview"><i
                                                        class="mdi mdi-grease-pencil"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <? echo $form->field($model, 'image')->widget(FileInput::className(), [
                                    'buttonTag' => 'button',
                                    'buttonName' => Yii::t('admin', 'Выбрать'),
                                    'buttonOptions' => ['class' => 'btn btn-default'],
                                    'options' => ['class' => 'form-control '],
                                    'template' => '<div class="input-group hidden">{input}<span class="input-group-btn">{button}</span></div>',
                                    'thumb' => 'original',
                                    'imageContainer' => '.img',
                                    'pasteData' => FileInput::DATA_URL,
                                    'callbackBeforeInsert' => 'function(e, data) {
                $("#trumb_image img").attr("src",data["url"]);
                }',
                                ])->label(false);
                                ?>
                            </div>
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
                        <div id="product-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home"
                                                        role="tab"><span class="hidden-sm-up"></span> <span
                                                class="hidden-xs-down"><?= Yii::t('admin', 'Основное') ?></span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#data" role="tab"><span
                                                class="hidden-sm-up"></span> <span
                                                class="hidden-xs-down"><?= Yii::t('admin', 'Данные') ?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#call" role="tab"><span
                                                class="hidden-sm-up"></span> <span
                                                class="hidden-xs-down"><?= Yii::t('admin', 'Связи') ?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#attribute" role="tab"><span
                                                class="hidden-sm-up"></span> <span
                                                class="hidden-xs-down"><?= Yii::t('admin', 'Арибуты') ?></span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#images"
                                                        role="tab"><span
                                                class="hidden-sm-up"></span> <span
                                                class="hidden-xs-down"><?= Yii::t('admin', 'Изображения') ?></span></a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane tab-pane-2 active" id="home" role="tabpanel">

                                    <?= $form->field($model, 'alias', ['template' => '{label}<div class="input-group" id="alias-field">
<span class="input-group-addon">/</span>{input}
<span class="input-group-addon addon-right"><i class="mdi mdi-reload" id="transliteButton"></i></span></div><div class="help-block">{error}</div>'])->textInput(['maxlength' => true]) ?>


                                    <ul class="nav nav-tabs" role="tablist">
                                        <?php $i = 0;
                                        foreach ($languages as $language): ?>
                                            <li role="presentation"
                                                class="<?= $language->code == $lang ? 'active' : '' ?>">
                                                <a href="#lang-<?= $language->code ?>"
                                                   aria-controls="lang-<?= $language->code ?>"
                                                   role="tab" onclick="return false"
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
                                            <div class="tab-pane <?= $language->code == $lang ? 'active' : '' ?>"
                                                 role="tabpanel"
                                                 id="lang-<?= $language->code ?>">
                                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']header')->textInput(['class' => 'form-control header-field']) ?>
                                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']title')->textInput() ?>
                                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']keywords')->textArea() ?>
                                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']description')->textArea() ?>
                                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']short_content')->textArea() ?>
                                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']content')->textArea() ?>
                                                <?= $form->field($model->translate($language->code), '[' . $language->code . ']tag')->textArea() ?>
                                            </div>
                                            <?php $j++; endforeach ?>
                                    </div>
                                </div>
                                <div class="tab-pane tab-pane-2" id="data" role="tabpanel">
                                    <?= $form->field($model, 'model')->textInput() ?>
                                    <?= $form->field($model, 'sku')->textInput() ?>
                                    <?= $form->field($model, 'price')->textInput() ?>
                                    <?= $form->field($model, 'quantity')->textInput() ?>
                                    <?= $form->field($model, 'new_price')->textInput() ?>
                                    <?= $form->field($model, 'price_rent')->textInput() ?>
                                    <h5 class="card-title"><?= Yii::t('admin', 'Включить аренду') ?></h5>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="price_rent_status" name="Product[price_rent_status]"
                                               class="custom-control-input"
                                               value="1" <? if ($model->price_rent_status == 1) echo 'checked'; ?>>
                                        <label class="custom-control-label"
                                               for="price_rent_status"><?= Yii::t('admin', 'Да') ?></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="price_rent_status2" name="Product[price_rent_status]"
                                               class="custom-control-input"
                                               value="0" <? if ($model->price_rent_status != 1) echo 'checked'; ?>>
                                        <label class="custom-control-label"
                                               for="price_rent_status2"><?= Yii::t('admin', 'Нет') ?></label>
                                    </div>
                                    <br>
                                    <h5 class="card-title"><?= Yii::t('admin', 'Новинка') ?></h5>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="is_new" name="Product[is_new]"
                                               class="custom-control-input"
                                               value="1" <? if ($model->is_new == 1) echo 'checked'; ?>>
                                        <label class="custom-control-label"
                                               for="is_new"><?= Yii::t('admin', 'Да') ?></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="is_new2" name="Product[is_new]"
                                               class="custom-control-input"
                                               value="0" <? if ($model->is_new != 1) echo 'checked'; ?>>
                                        <label class="custom-control-label"
                                               for="is_new2"><?= Yii::t('admin', 'Нет') ?></label>
                                    </div>
                                    <br>
                                    <h5 class="card-title"><?= Yii::t('admin', 'Рекомендуемый') ?></h5>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="is_recomended" name="Product[is_recomended]"
                                               class="custom-control-input"
                                               value="1" <? if ($model->is_recomended == 1) echo 'checked'; ?>>
                                        <label class="custom-control-label"
                                               for="is_recomended"><?= Yii::t('admin', 'Да') ?></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="is_recomended2" name="Product[is_recomended]"
                                               class="custom-control-input" checked=""
                                               value="0" <? if ($model->is_recomended != 1) echo 'checked'; ?>>
                                        <label class="custom-control-label"
                                               for="is_recomended2"><?= Yii::t('admin', 'Нет') ?></label>
                                    </div>
                                    <?= $form->field($model, 'stock_status_id')->textInput() ?>
                                    <?= $form->field($model, 'manufacture_id')->textInput() ?>
                                    <?= $form->field($model, 'shiping')->textInput() ?>
                                    <?= $form->field($model, 'points')->textInput() ?>

                                </div>
                                <div class="tab-pane tab-pane-2" id="call" role="tabpanel">
                                    <h5 class="card-title"><?= Yii::t('admin', 'Отображать в категориях') ?></h5>
                                    <div class="div-product-category-list">
                                        <select name="productToCategory[]" class="form-control product-category-list"
                                                multiple="multiple">
                                            <? if (count($categoryList)):
                                                foreach ($categoryList as $category): ?>
                                                    <option value="<?= $category->id ?>" <?= \backend\models\ProductToCategory::checked($model->id, $category->id) ?>><?= $category->translate($lang)->header ?></option>
                                                <? endforeach;
                                            endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-pane tab-pane-2" id="attribute" role="tabpanel">
                                    <?= $this->render('_attribute', ['model' => $model]); ?>
                                </div>
                                <div class="tab-pane tab-pane-2" id="images" role="tabpanel">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <? echo FileInput::widget([
                                                'name' => 'mediafile',
                                                'buttonTag' => 'button',
                                                'buttonName' => 'Browse',
                                                'buttonOptions' => ['class' => 'btn btn-default'],
                                                'options' => ['class' => 'form-control'],
                                                'template' => '<div class="input-group" style="display: none">{input}<span class="input-group-btn" id="btn_file">{button}</span></div>',
                                                'thumb' => 'original',
                                                'imageContainer' => '.img',
                                                'pasteData' => FileInput::DATA_URL,
                                                'callbackBeforeInsert' => 'function(e, data) {  
            let currentImage = localStorage.getItem(\'currentImageInput\');
        let id = currentImage.split(\'"\').join(\'\');
          $("[data-id=\'"+id+"\']").val(data["url"]);
       $("#"+id).attr("src",data["url"]);      
      
     }',]); ?>

                                            <div id="image-result" class="product-image-flex">
                                                <? $count = 0; ?>
                                                <?
                                                $images = $model->getImages($model->id);
                                                if (is_array($images)):
                                                    foreach ($images as $image):?>
                                                        <div id="image-row<? echo $count ?>" class="product-image-flex-item">
                                                            <input type="hidden" name="image[]"
                                                                   class="form-control product-attribute-list product"
                                                                   data-id="image-field-<? echo $count ?>" value="<?echo $image['image'];?>">
                                                            <div class="image-box el-element-overlay">
                                                                <div class="card">
                                                                    <div class="el-card-item">
                                                                        <div class="el-card-avatar el-overlay-1">
                                                                            <? if (!empty($image['image'])):
                                                                                echo '<img src="' . $image['image'] . '" class="" id="image-field-' . $count . '">';
                                                                            else:
                                                                                echo '<img src="' . $model->getImagePlaceholder() . '" class="" id="image-field-' . $count . '">';
                                                                            endif; ?>
                                                                                                                                                      <div class="el-overlay">
                                                                                <ul class="list-style-none el-info">
                                                                                    <li class="el-item"><a
                                                                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                                                                onclick="$('#image-row<? echo $count ?>').remove();"
                                                                                                href="javascript:void(0);"
                                                                                                id="delete_image_preview">
                                                                                            <i class="mdi mdi-delete"></i></a>
                                                                                    </li>
                                                                                    <li class="el-item"><a
                                                                                                class="btn default btn-outline el-link image-product-field-link"
                                                                                                href="javascript:void(0);"
                                                                                                id=""
                                                                                                data-id="image-field-<? echo $count ?>"><i
                                                                                                    class="mdi mdi-grease-pencil"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <? $count++;
                                                    endforeach;
                                                endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <div class="clearfix"></div>
                                    <a id="btn-add-image" class="btn btn-info m-l-20 m-t-20 pull-right" href="#"
                                       onclick="addImage()"><?= Yii::t('admin', 'Добавить изображение') ?></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                    <script>
                        var image_row = <?= $count ?>;

                        function addImage() {
                            html = '<div id="image-row' + image_row + '" class="product-image-flex-item">';
                            html += '<input type="hidden" name="image[]" class="form-control product-attribute-list product" data-id="image-field-' + image_row + '">';

                            html += '<div class="image-box el-element-overlay">\n' +
                                '                                    <div class="card">\n' +
                                '                                        <div class="el-card-item">\n' +
                                '                                            <div class="el-card-avatar el-overlay-1" >\n' +
                                '                                           <img src="<? echo $model->getImagePlaceholder()?>" class="" id="image-field-' + image_row + '">\n' +
                                '                                                <div class="el-overlay">\n' +
                                '                                                    <ul class="list-style-none el-info">\n' +
                                '                                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" onclick="$(\'#image-row' + image_row + '\').remove();" href="javascript:void(0);" id="delete_image_preview"><' +
                                'i class="mdi mdi-delete"></i></a></li>\n' +
                                '                                                      <li class="el-item"><a class="btn default btn-outline el-link image-product-field-link"\n' +
                                '                                                                               href="javascript:void(0);"\n' +
                                '                                                                               id="" data-id="image-field-' + image_row + '"><i\n' +
                                '                                                                        class="mdi mdi-grease-pencil"></i></a></li>\n' +
                                '                                                    </ul>\n' +
                                '                                                </div>\n' +
                                '                                            </div\n' +
                                '                                        </div>\n' +
                                '                                    </div>\n' +
                                '                                </div>';

                            html += '</div>';
                            $('#image-result').append(html);
                            image_row++;
                            return false;
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>

          
