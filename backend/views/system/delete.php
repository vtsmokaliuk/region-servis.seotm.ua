<?

use backend\models\System;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\ActiveForm;
$this->title = Yii::t('admin', 'Удаление найстройки: {name}', [
    'name' => $model->label,
]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>
                <div class="form-group">
                    <label for="del-fil"><?php echo $model->label?></label>
                    <input type="text"  class="form-control" value="<?php echo $model->value?>" readonly>
                </div>
                <div class="form-group text-right">
                    <?= Html::submitButton(Yii::t('admin', 'Удалить'), ['class' => 'btn btn-success waves-effect waves-ligh', 'name' => 'delete']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
