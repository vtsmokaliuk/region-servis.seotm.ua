<?

use yii\widgets\Breadcrumbs;

?>

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <?
            if($model) {
                echo Breadcrumbs::widget([
                    'itemTemplate' => "<li>{link}</li>\n",
                    'links' => $model->getBreadcrumbs($model),
                    'options' => ['class' => 'list-inline list-unstyled']
                ]);
            }
            ?>
        </div>
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

