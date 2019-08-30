<?php

namespace common\components;

use Yii;
use codemix\localeurls\UrlManager as BaseUrlManager;
use common\models\Language;

class UrlManager extends BaseUrlManager
{
    public $items = [];
    public function init()
    {
        $languages = Language::find()->where(['status' => 1])->orderBy('sort_order')->all();

        if(count($languages) <= 1) {
            return false;
        }
        foreach ($languages as $language) {
            $this->items[] = $language->code;
        }
        $this->languages = $this->items;
        parent::init();
    }

}
