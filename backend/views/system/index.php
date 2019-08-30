<?

use yii\bootstrap\Tabs;
use backend\models\System;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\ActiveForm;

$this->title = Yii::t('admin', 'Настройки');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>
                <?
                $items = [];
                $count = 0;
                foreach ($tabs as $tab){
                    $active = false;
                    if($count == 0){
                        $active = true;
                    }
                    $fields = System::getFielsType($tab->type);
                    $items[] = [
                        'label' => Yii::t('admin', $tab->type),
                        'content' => $this->render('_form', ['fields' => $fields, 'model' => $model, 'form' => $form, 'tab' => $tab->type]),
                        'active' => $active
                    ];
                    $count++;
                }
                ?>
                <?= Tabs::widget([
                    'options' => [
                        'class' => 'nav-tabs',
                        'style' => 'margin-bottom: 15px',
                    ],
                    'items' => $items
                ]);
                ?>
                <div class="form-group text-right">
                    <?= Html::submitButton(Yii::t('admin', 'Сохранить'), ['class' => 'btn btn-success waves-effect waves-ligh', 'name' => 'save']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?php echo $this->render('add-system'); ?>
</div>
