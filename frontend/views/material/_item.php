<div class="blog-post outer-bottom-bd wow fadeInUp">
    <a href="<?php echo $model->getAlias($model)?>"><img class="img-responsive" src="<?=$model->getBigImage($model->id, 'original')?>" alt=""></a>
    <h1><a href="<?php echo $model->getAlias($model)?>"><?php echo $model->header?></a></h1>
     <p><?php echo strip_tags($model->short_content)?></p>
    <a href="<?php echo $model->getAlias($model)?>" class="btn btn-upper btn-primary read-more"><?php echo Yii::t('frontend', Yii::$app->config->get('moreInfoBlogBtn'))?></a>
</div>