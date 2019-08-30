<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use common\modules\cabinet\models\SignupForm;
use common\modules\cabinet\models\LoginForm;

class AuthController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = '@common/modules/cabinet/views/layouts/auth.php';
        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/cabinet');
        }
        $model = new SignupForm();
        $modelLogin = new LoginForm();
        if ($modelLogin->load(Yii::$app->request->post()) && $modelLogin->login()) {
            return $this->redirect('/cabinet');
        }
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->redirect('/cabinet/auth');
                }
            }
        }
        return $this->render('@common/modules/cabinet/views/auth/index', ['model' => $model, 'modelLogin' => $modelLogin]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('/cabinet/auth');
    }
}
