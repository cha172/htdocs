<?php
use app\assets\admin\table\ColorAsset;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\web\YiiAsset;
use app\assets\AppAsset;
use kartik\grid\GridView;
ColorAsset::register($this);
YiiAsset::register($this);
AppAsset::register($this);
$this->title = 'Pinjaman Aset';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Pinjaman <span>Aset</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Pinjaman Aset</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">
    		<?php if (Yii::$app->session->getFlash('success')){?>
    		<div class="alert alert-success">
                 <strong>Berhasil</strong> <?= Yii::$app->session->getFlash('success')?>
            </div>
            <?php }?>                                
            <div class="row">

                          
            	<div class="col-md-12">
                <div class="panel panel-lilac">
               
                <div class="panel-body">       
                                    
                    <div class="pinjaman-index">
                        <p>
                           <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah', ['create'], ['class' => 'btn btn-sm btn-primary']) ?>
                        </p>
                    
                        <?php Pjax::begin(); ?>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                                'tanggal',
                                ['label'=>'Kode',
                                    'value'=>function($data){
                                         return $data->data['gol'].'.'.$data['bid'].'.'.$data['kel'].'.'.$data['sub_kel'].'.'.$data['sub_sub'].'.'.$data['no_urut'];  
                                    }
                                    ],
                            
                                'pemberi',
                                'penerima',
                                'jumlah',
                                'keterangan',
                                //'tipe',
                                //'createDate',
                    
                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    
                        <?php Pjax::end(); ?>
                    
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
