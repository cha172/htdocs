<?php

namespace app\modules\operator\controllers;

use Yii;
use app\models\Identitas;
use app\models\IdentitasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
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


    public function actionEditkompartmen($id,$idk)
    {
        $kompartemenedit = Kompartemen::find()->where(['id_kompartemen'=>$id])->one();
        if ($kompartemenedit->load(Yii::$app->request->post())){
            $kompartemenedit->save();
            
            return $this->redirect('update?id='.$idk);
        }
        
        
        return $this->renderAjax('editkompartemen',['kompartemenedit'=>$kompartemenedit]);
        
    }
    
    public function actionRequestedit($id) {
        $model = Identitas::find()->where(['id_identitas' =>$id])->one();
        if ($model !==null) {
            $model->request_edit=1;
            $model->save();
            
            
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Mengajukan Request Edit id " . $model->id_identitas;
            $log->save();
            
            return Json::encode(['respon'=>'true','desc'=>'Berhasil Request']);
        }
    }
    
    public function actionRequesthapus($id) {
        $model = Identitas::find()->where(['id_identitas' =>$id])->one();
        if ($model !==null) {
            $model->request_hapus=1;
            $model->save();
            
            
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Mengajukan Request Hapus id " . $model->id_identitas;
            $log->save();
            
            return Json::encode(['respon'=>'true','desc'=>'Berhasil Request']);
        }
    }
    
    public function actionAjukan($id) {
        $model = Identitas::find()->where(['id_identitas' =>$id])->one();
        if ($model !==null) {
            $model->diajukan=1;
            $model->sertifikat =0;
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

        if ($model->load(Yii::$app->request->post()) ){
           
            $kom=Yii::$app->request->post("Identitas")['kom'];
            if ($model->save()) {
            
                foreach ($kom as $k){
                    $kompartemen = new Kompartemen();
                    $kompartemen->t1= $k['t1'];
                    $kompartemen->t2= $k['t2'];
                    $kompartemen->t3= $k['t3'];
                    $kompartemen->T= $k['t'];
                    $kompartemen->D= $k['d'];
                    $kompartemen->P= $k['p'];
                    $kompartemen->Q= $k['q'];
                    $kompartemen->S= $k['s'];
                    $kompartemen->R= $k['r'];
                    $kompartemen->L= $k['l'];
                    $kompartemen->jenis= $k['jenis'];
                    $kompartemen->id_identitas= $model->id_identitas;
                    $kompartemen->save(false);
                }
        }
            return $this->redirect('index');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

  
    public function actionUpdate($id)
    {
        $id=(int)$id;
        $model = $this->findModel($id);
        
        
        if ($model->edit=='0') return $this->redirect('/operator/identitas');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->edit=0;
            $model->save();
            
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Melakukan Update id " . $model->id_identitas;
            $log->save();
            return $this->redirect('index');
        }
        
        
        
        $searchModel = new KompartemenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
      
        $kompartemen = new Kompartemen();
        if ($kompartemen->load(Yii::$app->request->post())){
            $kompartemen->id_identitas=$id;
            $kompartemen->save(false);
            return  true;
            
            
        }
        

        return $this->render('_formupdate', [
            'model' => $model,
            'dataProvider'=>$dataProvider,
            'searchModel'=>$searchModel,
            'kompartemen'=>$kompartemen,
        ]);
    }


    public function actionDelete($id)
    {
        $model=$this->findModel($id);
        $id=$model->id_identitas;
        if ($model->delete()) {
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Melakukan Delete id " . $id;
            $log->save();
            
        }

        return $this->redirect(['index']);
    }
    
    public function actionDeletekom($id,$idk)
    {
        $model=Kompartemen::find()->where(['id_kompartemen'=>$id])->one();
        if ($model!==null) {
        $id=$model->id_kompartemen;
        if ($model->delete()) {
            $log = new History();
            $log->user_name = Yii::$app->user->identity->username;
            $log->aktifitas = "Melakukan Delete kompartemen id " . $id;
            $log->save();
            
        }
        }
        
        return $this->redirect('/operator/identitas/kom?idk='.$idk);
    }

    protected function findModel($id)
    {
        if (($model = Identitas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
