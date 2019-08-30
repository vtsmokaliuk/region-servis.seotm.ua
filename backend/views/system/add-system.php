<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

?>
<div class="col-md-12">
    <div class="card">
        <div id="add-field-form">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white"><?php echo Yii::t('admin', 'Добавить настройки') ?></h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php echo Html::hiddenInput(\Yii:: $app->getRequest()->csrfParam, \Yii:: $app->getRequest()->getCsrfToken(), []); ?>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="param"><?php echo Yii::t('admin', 'Системное название параметра') ?></label>
                                <input name="addField[param]" id="param" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="type"><?php echo Yii::t('admin', 'Типа настройки') ?></label>
                                <input name="addField[type]" id="type" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="value"><?php echo Yii::t('admin', 'Значение') ?></label>
                                <input name="addField[value]" id="value" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="label"><?php echo Yii::t('admin', 'Label поля') ?></label>
                                <input name="addField[label]" id="value" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="default"><?php echo Yii::t('admin', 'Значение по умолчапнию') ?></label>
                                <input name="addField[default]" id="default" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                        class="btn waves-effect waves-light btn-block btn-primary" name="addField[submit]"><?php echo Yii::t('admin', 'Добавить') ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
