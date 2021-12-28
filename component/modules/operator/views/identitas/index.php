<?php
use app\assets\admin\table\ColorAsset;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\web\View;
use yii\web\YiiAsset;
use app\assets\AppAsset;
use kartik\grid\GridView;
ColorAsset::register($this);
YiiAsset::register($this);
AppAsset::register($this);
$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Cerapan Penguji <span> Operator</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">
                            
            <div class="row">

                          
            	<div class="col-md-12">
                <div class="panel panel-lilac">
               
                <div class="panel-body">     
                    <p>
        <?=Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah', ['create'], ['class' => 'btn btn-sm btn-success'])?>
    </p>
                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'responsiveWrap'=>false,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'uttp',
                        'merk_buatan',
                        'model',
                        'volume_nominal',
                        'jml_kompartemen',
                        'merk_kendaraan',
                        'no_polis',
                        'suhu_dasar',
                        'tgl_pemeriksaan:date',
                        ['label'=>'Pemilik',
                            'attribute'=>'nm_pemilik',
                            'value'=>function($data){
                                return $data->pemilik['nama'];
                            }
                        ],
                        'nip_pemeriksa',
                        'nip_penguji',
                       
                        
                        ['label'=>'File',
                            'format'=>'raw',
                            'value'=>function($data){
                                return \yii\bootstrap\Html::a('Kom','/'.Yii::$app->controller->module->id.'/identitas/kom?idk='.$data->id_identitas,['class'=>'btn btn-xs btn-primary'])  ;
                            }
                        ],
                        ['label'=>'Sertifikat',
                            'format'=>'raw',
                            'value'=>function($data){
                                if ($data->diajukan=='0') {
                                    return \yii\bootstrap\Html::a('Ajukan Sertifikat','/'.Yii::$app->controller->module->id.'/identitas/ajukan?id='.$data->id_identitas,['data-confirm'=>'Yakin Ajukan','class'=>'btn btn-xs btn-warning'])  ;
                                }else{
                                    if ($data['sertifikat']=='1') {
                                        return Html::button('Download',['onClick'=>'download('.$data->id_identitas.')','id'=>'btndownload','class'=>'btn btn-xs btn-primary','data-pjax'=>0])  ;
                                    }else{
                                        
                                        return ' Menunggu Acc';
                                    }
                                }
                            
                            }
                            ],
                        ['class' => 'yii\grid\ActionColumn',
                            'buttons'=>[
                                'update' => function ($url, $model, $key) {
                                return empty($model->edit==1) ? '' : Html::a('<i class="glyphicon glyphicon-pencil"></i>', $url) ;
                            },
                            'delete' => function ($url, $model, $key) {
                            return empty($model->edit==1) ? '' : Html::a('<i class="glyphicon glyphicon-remove"></i>', $url) ;
                            },
                            
                            
                            ],
                            
                          
                            'template'=>'{update}{delete}'
                        ],
                        
                    ],
                ]); ?>
            
                <?php Pjax::end(); ?>                            

</div>
</div>
</div>
</div>
</div>
</section>

<?php 
$url ='/'.Yii::$app->controller->module->id.'/sertifikat/download?id=';
$script= <<<script


function download(id){
    window.open('$url'+id);
    location.reload();

}



script;
$this->registerJS($script,View::POS_END);
?>

