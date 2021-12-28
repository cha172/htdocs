<?php
namespace app\modules\operator\controllers;

use yii\web\Controller;
use app\models\FormCetak;
use Yii;
use app\models\Identitas;
use kartik\mpdf\Pdf;
/**
 * Default controller for the `sadmin` module
 */
class LaporanController extends Controller
{


    public $layout = 'lay-admin';
    public function actionIndex()
    {
        $model = new FormCetak();
        
        if ($model->load(Yii::$app->request->post())) {
            $identitas = Identitas::find()
            ->where(['month(tgl_pemeriksaan)'=>$model->bulan])
            ->andWhere(['year(tgl_pemeriksaan)'=>$model->tahun])
            ->all();
            
            $content= $this->renderPartial('cetakpdf',['identitas'=>$identitas,'model'=>$model]);
            
            $pdf = new Pdf([
                'mode' => Pdf::MODE_UTF8,
                //'format' => "SETENGAH",
                'marginLeft' =>5,
                'marginRight' =>5,
                'marginTop' =>14,
                'marginBottom' =>10,
                'defaultFontSize'=>11,
                'format' => [210, 330],
                //'orientation' => Pdf::ORIENT_PORTRAIT,
                'orientation' => Pdf::ORIENT_LANDSCAPE,
                'destination' => Pdf::DEST_BROWSER ,
                'content' => $content,
                'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
                'options' => ['title' => 'SPTPD']
                
            ]);
            
            
            return $pdf->render();
        }
        return $this->render('index',['model'=>$model]);
    }
}
