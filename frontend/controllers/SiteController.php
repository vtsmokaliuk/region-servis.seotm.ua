<?php

namespace frontend\controllers;

use frontend\models\Product;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\ContactForm;
use common\modules\cabinet\models\SignupForm;
use frontend\models\Material;
use frontend\models\Banner;
use frontend\models\Category;


class SiteController extends Controller
{
    public $statusIsActive = 1;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
        ];
    }


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


    public function actionIndex($id = null)
    {
        $banners = null;
        $material = null;
        $bannerModel = null;
        $blogItems = null;
        $isnew = null;
        $isrecomended = null;
        $categoryModel = new Category;
        $mainCategory = $categoryModel->getMainCategory();
        if (!empty($id)) {
            $material = $this->findModel($id);
            $this->registerMeta($material);
        }
        $product = new Product;
        $isnew = $product->getIsNew();
        $isrecomended = $product->getIsRecomended();
        $bannerModel = new Banner;
        $materialModel = new Material;
        $blogItems = $materialModel->getBloglist();
        if (!empty($material->banner_id) and $material->banner_id > 0) {
            $banners = $bannerModel->getBennerById($material->banner_id);
        }
        return $this->render('index', ['banners' => $banners, 'material' => $material, 'bannerModel' => $bannerModel, 'isnew' => $isnew, 'blogItems' => $blogItems, 'isrecomended' => $isrecomended, 'mainCategory' => $mainCategory]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionContact($id)
    {
        $model = null;
        if ($id !== null) {
            $model = $this->findModel($id);
            $this->registerMeta($model);
        }

        $modelContact = new ContactForm();
        if ($modelContact->load(Yii::$app->request->post()) && $modelContact->validate()) {
            if ($modelContact->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }


    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Material::findOne(['id' => $id, 'status' => $this->statusIsActive])) !== null) {
            return $model;
        } else {
            echo '404404';
        }
    }

    protected function registerMeta($model)
    {
        if ($model) {
            $view = Yii::$app->view;
            $view->title = $model->title;
            $view->registerMetaTag(['name' => 'description', 'content' => $model->description]);
            $view->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
        }
    }

    public function getBreadcrumbs($model)
    {
        if ($model) {
            $breadcrumbs = [];
            $breadcrumbs[] = ['label' => $model->header];
            return $breadcrumbs;
        }
    }
}
