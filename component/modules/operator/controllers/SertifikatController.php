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

class SertifikatController extends Controller
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

    public function actionDownload($id)
    {
        $path= 'upload/sertifikat/sertifikat-'.$id.'.pdf';
        $identitas = Identitas::find()->where(['id_identitas'=>$id])->one();
        $identitas->sertifikat='0';
        $identitas->diajukan='0';
        $identitas->save();
        $log = new History();
        $log->user_name = Yii::$app->user->identity->username;
        $log->aktifitas = "Mendownload Sertifikat id identias " . $identitas->id_identitas;
        $log->save();
        
        if ($identitas!==null){
        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path, $identitas->nama_file.'.pdf');
            
        }
        }
        return false;
    }
    public function actionIndex()
    {
        
        $searchModel = new IdentitasSearch();
        $dataProvider = $searchModel->searchsertifikat(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    protected function findModel($id)
    {
        if (($model = Identitas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
