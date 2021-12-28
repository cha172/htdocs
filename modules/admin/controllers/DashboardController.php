<?php
namespace app\modules\admin\controllers;

use app\models\Pengguna;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\helpers\Json;
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
use app\models\History;
use Da\QrCode\QrCode;

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

    public function actionSetujuiedit($id) {
        $model = Identitas::find()->where(['id_identitas' =>$id])->one();
        if ($model !==null) {
            $model->edit=1;
            $model->request_edit=0;
            $model->save();
            
            
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Menyetujui Request Edit id " . $model->id_identitas;
            $log->save();
            
            return Json::encode(['respon'=>'true','desc'=>'Berhasil ']);
        }
    }

    public function actionTolakedit($id) {
        $model = Identitas::find()->where(['id_identitas' =>$id])->one();
        if ($model !==null) {
            $model->request_edit=0;
            $model->edit=0;
            $model->save();
            
            
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Menolak Request Edit id " . $model->id_identitas;
            $log->save();
            
            return Json::encode(['respon'=>'true','desc'=>'Berhasil ']);
        }
    }
    
    public function actionSetujuihapus($id) {
        $model = Identitas::find()->where(['id_identitas' =>$id])->one();
        if ($model !==null) {
            $model->hapus=1;
            $model->request_hapus=0;
            $model->save();
            
            
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Menyetujui Request Hapus id " . $model->id_identitas;
            $log->save();
            
            return Json::encode(['respon'=>'true','desc'=>'Berhasil ']);
        }
    }
    
    public function actionTolakhapus($id) {
        $model = Identitas::find()->where(['id_identitas' =>$id])->one();
        if ($model !==null) {
            $model->request_hapus=0;
            $model->hapus=0;
            $model->save();
            
            
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Menyetujui Request Hapus id " . $model->id_identitas;
            $log->save();
            
            return Json::encode(['respon'=>'true','desc'=>'Berhasil ']);
        }
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
            
            $vk='';
            foreach ($kompartemen as $dtk){
                $vk .= "Kompatermen= ". $dtk['jenis'] . ' , t1='.$dtk['t1']. ' , t2='.$dtk['t2']. ' , t3='.$dtk['t3']. ' , t4='.$dtk['t4'].' , T='. $dtk['T'].' , D='. $dtk['D'].' , P='. $dtk['P'].' , Q='. $dtk['Q']. ' , S='. $dtk['S'].' , R='. $dtk['R'].' , L='. $dtk['L'];
            }
           
            $html = 'Pemilik= ' . $identitas->pemilik['nama']. ', No.Polis= '.$identitas['no_polis']. ' , NIP Pemeriksa= '. $identitas['nip_pemeriksa']. ' , NIP Penguji= '. $identitas['nip_penguji']. ' , Tanggal Pemeriksaan= '. $identitas['tgl_pemeriksaan'].' , Kompartemen= '. $vk ;
            $qrCode = (new QrCode($html))
            ->setSize(250)
            ->setMargin(5);
            $path = 'upload/sertifikat';
            if (!is_dir($path)) {
                FileHelper::createDirectory($path, $mode = 0775, $recursive = true);
            }
            $qrCode->writeFile($path . '/'.$identitas->id_identitas.'.png');
            $content1 = $this->renderPartial('qrcode',['qrCode'=>$qrCode]);
            
            
            
            $identitas->sertifikat=1;
            $identitas->request_edit=0;
            $identitas->request_hapus=0;
            $identitas->edit=0;
            $identitas->hapus=0;
            $identitas->diajukan=0;
            
            $identitas->tgl_sertifikat=date('Y-m-d H:i:s');
            $identitas->nama_file = 'Surat Keterangan Hasil Pengujian '.$identitas->id_identitas;
            $identitas->save(false);
            
            

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




