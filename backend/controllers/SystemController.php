<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use backend\models\System;
use common\components\DConfig;
use pendalf89\filemanager\behaviors\MediafileBehavior;
use pendalf89\filemanager\models\Mediafile;
class SystemController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
            'mediafile' => [
                'class' => MediafileBehavior::className(),
                'name' => 'site',
                'attributes' => [
                    'system[logo]',
                ],
            ]
        ];
    }

    public function actionIndex()
    {
        $model = new System();
        if (Yii::$app->request->post('system')) {
            $post = Yii::$app->request->post('system');
            foreach ($post as $key => $value) {
                Yii::$app->db->createCommand()
                    ->update('system', ['value' => $value], ['param' => $key])
                    ->execute();
            }
            $this->behaviors();
            return $this->refresh();
        }
        if (Yii::$app->request->post('addField')) {
            $post = Yii::$app->request->post('addField');
            Yii::$app->config->add([
                'param' => $post['param'],
                'label' => $post['label'],
                'value' => $post['value'],
                'type' => $post['type'],
                'default' => $post['default'],
            ]);
            return $this->refresh();
        }
        $tabs = System::find()->groupBy(['type', 'type'])->all();
        return $this->render('index', ['model' => $model, 'tabs' => $tabs]);
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if (Yii::$app->request->post()) {
            $model->delete($id);
            return $this->redirect(['/system']);
        }
        return $this->render('delete', ['model' => $model]);
    }

    protected function findModel($id)
    {
        if (($model = System::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

?>