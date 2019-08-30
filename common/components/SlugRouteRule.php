<?php
namespace common\components;

use Yii;
use yii\base\BaseObject;
use yii\helpers\Url;
use yii\web\UrlRuleInterface;
use yii\web\NotFoundHttpException;
use common\models\Route;


class SlugRouteRule extends BaseObject implements UrlRuleInterface
{

    public function parseRequest($manager, $request)
    {
        // $redirects = Redirect::find()->all();
        //
        // foreach ($redirects as $redirect) {
        //
        //     if (preg_match('~' . $redirect->from . '~', $_SERVER['REQUEST_URI'])) {
        //         header("Location: ".Url::to([$redirect->to]),TRUE,$redirect->code);
        //         exit();
        //     }
        //
        // }

        $url = $request->getPathInfo();

        /* index page stored in db as "index" not "" */
        if($url == '') $url = 'index';

        $routeModel = Route::find()->where(['url' => $url])->one();

        if($routeModel) {
            return [$routeModel->route, ['id' => $routeModel->model_id]];
        }

        return false;
    }


    public function createUrl($manager, $route, $params)
    {


        $routeModel = null;
        if(isset($params['id'])) {
            $routeModel = Route::find()->where(['route' => $route, 'model_id' => $params['id']])->one();
            unset($params['id']);
        }

        if($routeModel) {

            $url = $routeModel->url;

            /* index page stored in db as "index" not "" */
            if($url == 'index') $url = '';

            if (!empty($params) && ($query = http_build_query($params)) !== '') {
                $url .= '?' . $query;
            }
            //echo $url;
            return $url;
        }
        return false;
    }
}
