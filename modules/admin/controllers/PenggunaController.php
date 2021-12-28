<?php
namespace app\modules\admin\controllers;

use Yii;
use app\models\Pengguna;
use app\models\PenggunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;


class PenggunaController extends Controller
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
        $searchModel = new PenggunaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }


    public function actionCreate()
    {
        $model = new Pengguna();

        if ($model->load(Yii::$app->request->post())) {
            $cek = Pengguna::find()->where("username='" . $model->username . "'")->one();

            if ($cek) {
                $model->addError('username', "Username Sudah Pernah digunakan");
                return $this->render('create', [
                    'model' => $model
                ]);
            } else {

                $cek = Pengguna::find()->where("email='" . $model->email . "'")->one();

                if ($cek) {
                    $model->addError('email', "Email Sudah Pernah digunakan");
                    return $this->render('create', [
                        'model' => $model
                    ]);
                } else
                    $model->status = 10;

                $model->setPassword($model->password_hash);
                if ($model->save(false)) {
                    return $this->redirect('index');
                }
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->setPassword($model->password_hash);
            if ($model->save(false)) {
                return $this->redirect('index');
            }
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect([
            'index'
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Pengguna::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
