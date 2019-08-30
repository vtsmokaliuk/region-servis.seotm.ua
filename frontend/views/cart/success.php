<?php
use yii\helpers\Url;
echo $this->render('/common/breadcrumbs',['model' => $model]);
?>

<div class="body-content">
    <div class="container outer-bottom-small">
        <div class="terms-conditions-page">
            <div class="row">
                <div class="col-md-12 terms-conditions">
                    <h1 class="heading-title"><?=$model->header?></h1>
                    <? if(isset($order->id)){
                        $content = str_replace('{id}', $order->id,$model->content);
                        echo $content;
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
