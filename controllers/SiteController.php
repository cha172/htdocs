<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\LoginForm;

class SiteController extends Controller
{

    /**
     *
     * {@inheritdoc} $this->layout ='lay-admin-boxed';
     */
    public $layout = 'lay-admin';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [
                    'logout',
                    'signup'
                ],
                'rules' => [
                    [
                        'actions' => [
                            'signup'
                        ],
                        'allow' => true,
                        'roles' => [
                            '?'
                        ]
                    ],
                    [
                        'actions' => [
                            'logout'
                        ],
                        'allow' => true,
                        'roles' => [
                            '@'
                        ]
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => [
                        'post'
                    ]
                ]
            ]
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'transparent' => true,
                'offset' => 3,
                'minLength' => 3,
                'maxLength' => 3,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
            ]
        ];
    }

    public function actionPost()
    {
        $this->layout = 'home';
        return $this->render('post');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        return $this->redirect('/');
    }

  
    public function actionIndex()
    {
        if (! Yii::$app->user->isGuest) {
            switch (Yii::$app->user->identity->role) {

                case 'admin':
                    return $this->redirect(Yii::$app->getUrlManager()
                        ->createUrl('admin/dashboard'));
                    break;
                case 'operator':
                    return $this->redirect(Yii::$app->getUrlManager()
                    ->createUrl('operator/dashboard'));
                    break;
            }
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
                Yii::$app->session->set('suser', Yii::$app->user->identity->username);
                if (Yii::$app->user->identity->role == 'admin'){
                    return $this->redirect(Yii::$app->getUrlManager()->createUrl('admin/dashboard'));
                }else if (Yii::$app->user->identity->role == 'operator'){
                    return $this->redirect(Yii::$app->getUrlManager()->createUrl('operator/dashboard'));
                }
            
        } else {
            $model->password = '';

            return $this->render('loginadmin', [
                'model' => $model
            ]);
        }
    }

    public function actionCreatepasfoto()
    {
        if (Yii::$app->user->isGuest) {
            $image = @imagecreatefromjpeg('images/logo.jpg');
            return $this->renderpartial('foto', [
                'image' => $image
            ]);
        }

        if (file_exists(Yii::getAlias('@webroot') . '/upload/' . Yii::$app->user->id . '-foto.jpg')) {
            $image = @imagecreatefromjpeg('/upload/user/' . Yii::$app->user->id . '-foto.jpg');
            return $this->renderpartial('foto', [
                'image' => $image
            ]);
        } else {
            $image = @imagecreatefromjpeg('images/logo.jpg');
            return $this->renderpartial('foto', [
                'image' => $image
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
