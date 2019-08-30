<?

use yii\helpers\Html;

?>
<div>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><?= Yii::t('admin', 'Атрибут') ?></th>
                <th scope="col"><?= Yii::t('admin', 'Значение') ?></th>
            </tr>
            </thead>
            <tbody id="attribute-result">
                    <? echo $this->render('_get-attribute', ['model' => $model]); ?>
            </tbody>
        </table>
        <?=Html::a(Yii::t('admin', 'Добавить атрибут'), ['create'], ['id' => 'btn-add-attribute', 'onClick'=> 'addAttribute()', 'class' => 'btn btn-info m-l-20 pull-right'])?>
    </div>
</div>
