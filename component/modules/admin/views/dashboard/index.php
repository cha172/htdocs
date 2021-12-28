<?php
use app\assets\admin\table\ColorAsset;
use yii\bootstrap\ActiveForm;
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
        <h2><i class="fa fa-magic"></i>Dashboard <span> Permintan Aprove Sertifikat</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Request</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">
                               
            <div class="row">

                          
            	<div class="col-md-12">
                <div class="panel panel-lilac">
               
                <div class="panel-body">     
       
                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
            
                        //'id_identitas',
                        'uttp',
                        'merk_buatan',
                        'model',
                        'volume_nominal',
                        //'jml_kompartemen',
                        //'merk_kendaraan',
                        //'no_polis',
                        'tgl_pemeriksaan',
                        ['label'=>'Pemilik',
                            'attribute'=>'nm_pemilik',
                            'value'=>'pemilik.nama',
                        ],
                        //'id_metode',
                        'nip_pemeriksa',
                        'nip_penguji',
                        //'id_uraian',
                        'nip_kepala',
                        ['label'=>'Aksi',
                            'format'=>'raw',
                            'value'=>function($data){
                                return \yii\bootstrap\Html::button('<i class="glyphicon glyphicon-list-alt"></i> Terbitkan Sertifikat',['value'=>'/'.Yii::$app->controller->module->id.'/dashboard/ver?id='.$data->id_identitas,'class'=>'btn btn-xs btn-primary showModalButton'])  ;
                            }
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
yii\bootstrap\Modal::begin([
'headerOptions' => ['id' => 'modalHeader'],
'id' => 'modal',
'size' => 'modal-lg',
'clientOptions' => ['backdrop' => 'static', 'keyboard' => true]
]);
echo "<div id='modalContent'></div>";
yii\bootstrap\Modal::end();
?>



