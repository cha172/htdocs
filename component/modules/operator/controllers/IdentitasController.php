<?php

namespace app\modules\operator\controllers;

use Yii;
use app\models\Identitas;
use app\models\IdentitasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Kompartemen;
use app\models\KompartemenSearch;
use app\models\History;

class IdentitasController extends Controller
{

    public $layout = 'lay-admin';
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    
    public function actionAjukan($id) {
        $model = Identitas::find()->where(['id_identitas' =>$id])->one();
        if ($model !==null) {
            $model->diajukan=1;
            $model->edit=0;
            $model->hapus=0;
            $model->save();
        
            
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Mengajukan Persetujuan Penerbitan Sertifikat id " . $model->id_identitas;
            $log->save();
            
            
            $this->redirect('/operator/identitas');
        }
    }

    
    public function actionKom($idk)
    {
        $searchModel = new KompartemenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $identitas = Identitas::find()->where(['id_identitas'=>$idk])->one();
        $kompartemen = new Kompartemen();
        if ($kompartemen->load(Yii::$app->request->post())){
                $kompartemen->id_identitas=$idk;
                $kompartemen->save(false);
                return  true;
                
            
        }
        return $this->render('kompartemen', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'identitas'=>$identitas,
            'kompartemen'=>$kompartemen,
        ]);
    }
    

    public function actionIndex()
    {
        $searchModel = new IdentitasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

 
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {
        $model = new Identitas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

  
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->edit=='0') return $this->redirect('/operator/identitas');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index');
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = Identitas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
