<?php
namespace app\modules\admin\controllers;

use app\models\Pengguna;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use app\models\UploadForm;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use app\models\IdentitasSearch;
use app\models\Identitas;
use app\models\KompartemenSearch;
use kartik\mpdf\Pdf;
use app\models\Kompartemen;

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
        $searchModel = new IdentitasSearch();
        $dataProvider = $searchModel->searchunverifikasi(Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
        ]);
    }
 

    public function actionVer($id)
    {
        $searchModel = new KompartemenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $identitas = Identitas::find()->where(['id_identitas'=>$id])->one();
        $kompartemen = Kompartemen::find()->where(['id_identitas'=>$id])->all();
        if ($identitas->load(Yii::$app->request->post())){
            $identitas->sertifikat=1;
            $identitas->tgl_sertifikat=date('Y-m-d H:i:s');
            $identitas->nama_file = 'Surat Keterangan Hasil Pengujian '.$identitas->id_identitas;
            $identitas->save(false);
            
            $path = 'upload/sertifikat';
            if (!is_dir($path)) {
                FileHelper::createDirectory($path, $mode = 0775, $recursive = true);
            }
            
            $content= $this->renderPartial('sertifikat',['identitas'=>$identitas,'kompartemen'=>$kompartemen]);
       
                $pdf = new Pdf([
                    'mode' => Pdf::MODE_UTF8,
                    //'format' => "SETENGAH",
                    'marginLeft' =>5,
                    'marginRight' =>5,
                    'marginTop' =>14,
                    'marginBottom' =>10,
                    'defaultFontSize'=>11,
                    'format' => [210, 330],
                    'orientation' => Pdf::ORIENT_PORTRAIT,
                    //'orientation' => Pdf::ORIENT_LANDSCAPE,
                    'destination' => Pdf::DEST_FILE ,
                    'filename'=>'upload/sertifikat/sertifikat-'.$identitas->id_identitas.'.pdf',
                    'content' => $content,
                    'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
                    'options' => ['title' => 'SPTPD']
                    
                ]);
                
                
                return $pdf->render();
            return true;
        }
        return $this->renderAjax('ver',[
            'identitas'=>$identitas,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
        
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




