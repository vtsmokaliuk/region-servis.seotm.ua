<?

use yii\helpers\Html;
use  yii\widgets\ActiveForm;

?>
<div class="add-btn">
    <? $form = ActiveForm::begin(['action' => '/cart/add/' . $model->id, 'options' => [
        'class' => 'form-add-to-cart',
    ]]);
    echo Html::submitButton(Yii::t('frontend', Yii::$app->config->get('AddToCartBigBtn')), ['class' => 'btn btn-primary']);
    ActiveForm::end();
    ?>
</div>