<?php
namespace app\modules\admin\controllers;

use Yii;
use app\models\Pengguna;
use app\models\PenggunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;

/**
 * AdmissionusersysController implements the CRUD actions for AdmissionUser model.
 */
class PenggunaController extends Controller
{

    /**
     *
     * {@inheritdoc}
     */
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

    /**
     * Lists all AdmissionUser models.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenggunaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Displays a single AdmissionUser model.
     *
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Creates a new AdmissionUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @return mixed
     */
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

    /**
     * Updates an existing AdmissionUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
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

    /**
     * Deletes an existing AdmissionUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect([
            'index'
        ]);
    }

    /**
     * Finds the AdmissionUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     * @return AdmissionUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pengguna::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
