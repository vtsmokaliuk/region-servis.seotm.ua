<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('admin', 'Авторизация');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'login-form',
    'options' => [
        'class' => 'form-horizontal m-t-20',
    ],

    'fieldConfig' => [
        'options' => [
            'tag' => false,

        ],
    ],]); ?>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
    </div>
    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-lg', 'placeholder' => Yii::t('admin', 'Логин или Email')])->label(false) ?>

</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
    </div>
    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-lg', 'placeholder' => Yii::t('admin', 'Пароль')])->label(false) ?>
</div>

<div class="form-group row">
    <div class="col-md-12">
        <div class="custom-control custom-checkbox">
            <input type="hidden" name="LoginForm[rememberMe]" value="0">
            <input type="checkbox" class="custom-control-input" id="customCheck1" name="LoginForm[rememberMe]" value="1" checked="">
            <label class="custom-control-label" for="customCheck1"><?=Yii::t('admin', 'Запомнить меня')?></label>
            <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><?=Yii::t('admin', 'Забыли пароль?')?></a>
        </div>
    </div>
</div>

<div class="form-group text-center">
    <div class="col-xs-12 p-b-20">
        <?= Html::submitButton(Yii::t('admin', 'Авторизация'), ['class' => 'btn btn-block btn-lg btn-info', 'name' => 'login-button']) ?>
    </div>
</div>


<?php ActiveForm::end(); ?>


