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
$this->title = 'Sertifikat';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Sertifikat </h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Cerapan Penguji</li>
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
                        'nama_file',
                        ['label'=>'Jam',
                            'attribute'=>'tgl_sertifikat',
                            'format'=>'raw',
                            'value'=>function($data){
                            return date_format(date_create($data['tgl_sertifikat']),'H:i:s');
                            }
                            ],
                        ['label'=>'Tgl Sertifikat',
                            'attribute'=>'tgl_sertifikat',
                            'format'=>'raw',
                            'value'=>function($data){
                                return date_format(date_create($data['tgl_sertifikat']),'d-m-Y');
                            }
                        ],
                        
                        'no_polis',
                        //'suhu_dasar',
                      
                        ['label'=>'Tgl Pemeriksaan',
                            'attribute'=>'tgl_pemeriksaan',
                            'format'=>'raw',
                            'value'=>function($data){
                            return date_format(date_create($data['tgl_pemeriksaan']),'d-m-Y');
                            }
                            ],
                        
                        ['label'=>'Pemilik',
                            'attribute'=>'nm_pemilik',
                            'value'=>function($data){
                            return $data->pemilik['nama'];
                            }
                            ],
                            'nip_pemeriksa',
                            'nip_penguji',
                        
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

$script= <<<script

\$('#btndownload').onclick(
        function() {
            location.reload();
        }
    );


script;
$this->registerJS($script,View::POS_END);
?>


