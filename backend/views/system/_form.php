<?

use yii\helpers\Html;
use pendalf89\filemanager\widgets\FileInput;
use pendalf89\filemanager\models\Mediafile;
?>
<? foreach ($fields as $field): ?>
    <div class="form-group row">
        <label for="<?= $field->param ?>" class="col-sm-3 col-form-label"
               style="font-weight: 400;"><?= $field->label ?> <code><?= $field->param?></code></label>
        <div class="col-sm-8">
            <?= Html::input('text', 'system[' . $field->param . ']', $field->value, ['class' => 'form-control']); ?>
        </div>
        <div class="col-md-1 text-right">
            <div class="btn-group btn-group-xs">
                <a href="/admin/system/delete?id=<?php echo $field->id ?>" class="btn btn-danger" data-id="<?php echo $field['id'] ?>">
                    <i class="ti-trash"></i>
                </a>
            </div>
        </div>
    </div>
<? endforeach; ?>

<?  FileInput::widget([
    'name' => 'system[logo]',
    'buttonTag' => 'button',
    'buttonName' => Yii::t('admin','Выбрать'),
    'buttonOptions' => ['class' => 'btn btn-default'],
    'options' => ['class' => 'form-control'],
    // Widget template
    'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    // Optional, if set, only this image can be selected by user
    'thumb' => 'original',
    // Optional, if set, in container will be inserted selected image
    'imageContainer' => '.img',
    // Default to FileInput::DATA_IDL. This data will be inserted in input field
    'pasteData' => FileInput::DATA_URL,
    // JavaScript function, which will be called before insert file data to input.
    // Argument data contains file data.
    // data example: [alt: "Ведьма с кошкой", description: "123", url: "/uploads/2014/12/vedma-100x100.jpeg", id: "45"]
    'callbackBeforeInsert' => 'function(e, data) {
        console.log( data );
    }',
]);
?>
