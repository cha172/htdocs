<?php

namespace app\modules\admin\controllers;

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
