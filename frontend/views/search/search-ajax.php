<?
use yii\widgets\ListView;
use yii\widgets\Pjax;

Pjax::begin([
    'enablePushState' => false, // to disable push state
    'enableReplaceState' => false // to disable replace state
]);
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_search-ajax-item',
]);
Pjax::end();
?>