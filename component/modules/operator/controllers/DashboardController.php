<?php
namespace app\modules\operator\controllers;

use app\models\Pengguna;
use yii\filters\AccessControl;
use app\models\UploadForm;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;

class DashboardController extends Controller
{

    public $layout = 'lay-admin';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => [
                            '@'
                        ]
                    ]

                    // ...
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index', []);
    }

    public function actionIdentitas()
    {
        return $this->render('identitas');
    }

    public function actionUploadfoto()
    {
        $modelup = new UploadForm();

        $model = Pengguna::findOne(Yii::$app->user->id);

        $nmfile = 'foto';
        if (Yii::$app->request->post()) {
            $modelup->imageFile = UploadedFile::getInstance($modelup, 'imageFile');
            if ($modelup->upload(Yii::$app->user->id, $nmfile)) {
                return $this->redirect('index');
            }
        }
        return $this->render('uploadfoto', [
            'modelup' => $modelup,
            'model' => $model
        ]);
    }

    protected function findModel()
    {
        if (($model = Pengguna::findOne(Yii::$app->user->id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}




