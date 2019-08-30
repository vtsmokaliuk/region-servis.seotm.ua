<?php
namespace common\widgets;
use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\base\Widget;
use common\models\Language;
use backend\models\Menu;
use common\components\BootstrapMenu;

class MenuWidget extends Widget
{
    public static function show($key, $param = null)
    {
        $menu = Menu::find()->where(['status' => 1,'key' => $key])->one();
        $html = '';
        if(empty($menu)) {
            return false;
        }
        if(isset($param['addTagForName']) and isset($param['TagForName']) and isset($param['TagClassForName'])){
            $html.= '<'.$param['TagForName'].' class="'.$param['TagClassForName'].'">';
        }
        if(isset($param['NameTag']) and isset($param['NameTagClass'])){
            $html.= '<'.$param['NameTag'].' class="'.$param['NameTagClass'].'">';
        }
        if(isset($param['showName']) == true){
            $html.= $menu['header'];
        }
        if(isset($param['NameTag'])){
            $html.= '</'.$param['NameTag'].'>';
        }
        if(isset($param['addTagForName']) and isset($param['TagForName']) and isset($param['TagClassForName'])){
            $html.= '</'.$param['TagForName'].'>';
        }
        $str = $menu['content'];
        $qMenu = new BootstrapMenu(['data'=>$str, 'param' => $param]);
        $menu = $qMenu->html();
        return $html.$menu;
    } 
}
