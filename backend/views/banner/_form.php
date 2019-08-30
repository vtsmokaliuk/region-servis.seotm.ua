<?php

use pendalf89\filemanager\models\Mediafile;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;
use pendalf89\filemanager\widgets\FileInput;

$languages = Language::findAllActive();
$lang = Language::getDefaultLanguage();
?>
<div class="card">
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'name')->textInput() ?>
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
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'pos')->textInput() ?>
                    </div>
                    <div class="col-md-6" style="">
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
     console.log( data );
        let currentImage = localStorage.getItem(\'currentImageInput\');
        let id = currentImage.split(\'"\').join(\'\');
        console.log(id);
         $("[data-id=\'"+id+"\']").val(data["url"]);
       $("#"+id).attr("src",data["url"]);
      
      
     }',]); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"><?= Yii::t('admin', 'Изображение') ?></th>
                    <th scope="col"><?= Yii::t('admin', 'Описание') ?></th>
                </tr>
                </thead>
                <tbody id="banner-result">
                <? $bannerDescription = $model->getBannerDescription($model->id);
                $count = 0;
                if (is_array($bannerDescription)) :

                    foreach ($bannerDescription as $banner):
                        ?>
                        <tr id="banner-row<?= $count ?>">
                            <td class="text-left" style="width: 20%;"><input type="hidden"
                                                                             name="banner_desc[<?= $count ?>][banner_description][<?= $banner['language'] ?>][image]"
                                                                             class="form-control product-attribute-list image-banner-field"
                                                                             value="<?= $banner['image'] ?>"
                                                                             data-id="banner-field-<?= $count ?>">
                                <div class="image-box el-element-overlay">
                                    <div class="card">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1">
                                                <? if (!empty($banner['image'])):
                                                    echo '<img src="' . $banner['image'] . '" class="" id="banner-field-' . $count . '">';
                                                else:
                                                    echo '<img src="' . $model->getImagePlaceholder() . '" class="" id="banner-field-' . $count . '">';
                                                endif; ?>
                                                <div class="el-overlay">
                                                    <ul class="list-style-none el-info">
                                                        <li class="el-item"><a
                                                                    class="btn default btn-outline el-link image-banner-field-link"
                                                                    href="javascript:void(0);"
                                                                    id="" data-id="banner-field-<?= $count ?>"><i
                                                                        class="mdi mdi-grease-pencil"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-left" style="width: 80%;">
                                <div class="input-group"><span
                                            class="input-group-addon"><?= $banner['language'] ?></span> <input
                                            type="text"
                                            name="banner_desc[<?= $count ?>][banner_description][<?= $banner['language'] ?>][header]"
                                            rows="5"
                                            placeholder="Название"
                                            class="form-control" value="<?= $banner['header'] ?>">
                                </div>
                                <div class="input-group"><span
                                            class="input-group-addon"><?= $banner['language'] ?></span> <input
                                            type="text"
                                            name="banner_desc[<?= $count ?>][banner_description][<?= $banner['language'] ?>][header2]"
                                            rows="5"
                                            placeholder="Навзание доп."
                                            class="form-control" value="<?= $banner['header2'] ?>">
                                </div>
                                <div class="input-group"><span
                                            class="input-group-addon"><?= $banner['language'] ?></span> <input
                                            type="text"
                                            name="banner_desc[<?= $count ?>][banner_description][<?= $banner['language'] ?>][link]"
                                            rows="5"
                                            placeholder="Ссылка"
                                            class="form-control" value="<?= $banner['link'] ?>">
                                </div>
                                <div class="input-group"><span
                                            class="input-group-addon"><?= $banner['language'] ?></span> <input
                                            type="text"
                                            name="banner_desc[<?= $count ?>][banner_description][<?= $banner['language'] ?>][btn_text]"
                                            rows="5"
                                            placeholder="Текст кнопки"
                                            class="form-control" value="<?= $banner['btn_text'] ?>">
                                </div>
                                <div class="input-group"><span
                                            class="input-group-addon"><?= $banner['language'] ?></span> <input
                                            type="text"
                                            name="banner_desc[<?= $count ?>][banner_description][<?= $banner['language'] ?>][content]"
                                            rows="5"
                                            placeholder="Контент"
                                            class="form-control" value="<?= $banner['content'] ?>">
                                </div>
                                <div class="input-group"><span
                                            class="input-group-addon"><?= $banner['language'] ?></span> <input
                                            type="text"
                                            name="banner_desc[<?= $count ?>][banner_description][<?= $banner['language'] ?>][pos]"
                                            rows="5"
                                            placeholder="Порядок сортировки"
                                            class="form-control" value="<?= $banner['pos'] ?>">
                                </div>
                            </td>
                            <td class="text-right">
                                <button type="button" onclick="$('#banner-row<?= $count ?>').remove();"
                                        data-toggle="tooltip"
                                        title="Удалить" class="btn btn-danger"><i class="fa fa-minus-circle"></i>
                                </button>
                            </td>
                        </tr>
                        <?
                        $count++;
                    endforeach;
                endif;
                ?></tbody>
            </table>
        </div>
        <a id="btn-add-attribute" class="btn btn-info m-l-20 m-t-20 pull-right" href="#"
           onclick="addBanner()"><?= Yii::t('admin', 'Добавить баннер') ?></a>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('admin', 'Сохранить'), ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <script>
        var banner_row = <?= $count ?>;

        function addBanner() {
            html = '<tr id="banner-row' + banner_row + '">';
            <?php $j = 0;
            foreach ($languages as $language): ?>
            <?   ?>
            html += '<td class="text-left" style="width: 20%;">';
            html += '<input type="hidden" name="banner_desc[' + banner_row + '][banner_description][<?=$language->code?>][image]" class="form-control product-attribute-list image-banner-field" data-id="banner-field-' + banner_row + '">';

            html += '<div class="image-box el-element-overlay">\n' +
                '                                    <div class="card">\n' +
                '                                        <div class="el-card-item">\n' +
                '                                            <div class="el-card-avatar el-overlay-1" >\n' +
                '                                           <img src="<? echo $model->getImagePlaceholder()?>" class="" id="banner-field-' + banner_row + '">\n' +
                '                                                <div class="el-overlay">\n' +
                '                                                    <ul class="list-style-none el-info">\n' +
                '                                                      <li class="el-item"><a class="btn default btn-outline el-link image-banner-field-link"\n' +
                '                                                                               href="javascript:void(0);"\n' +
                '                                                                               id="" data-id="banner-field-' + banner_row + '"><i\n' +
                '                                                                        class="mdi mdi-grease-pencil"></i></a></li>\n' +
                '                                                    </ul>\n' +
                '                                                </div>\n' +
                '                                            </div\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '                                </div>';
            html += '</td>';
            html += '<td class="text-left" style="width: 80%;">';
            html += '<div class="input-group"><span class="input-group-addon"><?=$language->code?></span>\
                             <input type="text" name="banner_desc[' + banner_row + '][banner_description][<?=$language->code?>][header]" rows="5" placeholder="Название" class="form-control"></div>';
            html += '<div class="input-group"><span class="input-group-addon"><?=$language->code?></span>\
                          <input type="text" name="banner_desc[' + banner_row + '][banner_description][<?=$language->code?>][header2]" rows="5" placeholder="Навзание доп." class="form-control"></div>';
            html += '<div class="input-group"><span class="input-group-addon"><?=$language->code?></span>\
                          <input type="text" name="banner_desc[' + banner_row + '][banner_description][<?=$language->code?>][link]" rows="5" placeholder="Ссылка" class="form-control"></div>';
            html += '<div class="input-group"><span class="input-group-addon"><?=$language->code?></span>\
                          <input type="text" name="banner_desc[' + banner_row + '][banner_description][<?=$language->code?>][btn_text]" rows="5" placeholder="Текст кнопки" class="form-control"></div>';
            html += '<div class="input-group"><span class="input-group-addon"><?=$language->code?></span>\
                          <input type="text" name="banner_desc[' + banner_row + '][banner_description][<?=$language->code?>][content]" rows="5" placeholder="Контент" class="form-control"></div>';
            html += '<div class="input-group"><span class="input-group-addon"><?=$language->code?></span>\
                          <input type="text" name="banner_desc[' + banner_row + '][banner_description][<?=$language->code?>][pos]" rows="5" placeholder="Порядок сортировки" class="form-control"></div>';

            <?php endforeach;?>
            html += '</td>';
            html += '<td class="text-right">\
        <button type="button" onclick="$(\'#banner-row' + banner_row + '\').remove();" data-toggle="tooltip" title="Удалить" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
            html += '</tr>';
            $('#banner-result').append(html);
            banner_row++;
            return false;
        }
    </script>
</div>
</div>
