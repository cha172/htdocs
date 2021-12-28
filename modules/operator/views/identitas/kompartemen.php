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
$this->title = 'Kompartemen';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Identitas <span>Kompartemen</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Kompartemen</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">
    		<?php

    if (Yii::$app->session->getFlash('success')) {
        ?>
    		<div class="alert alert-success">
                 <strong>Berhasil</strong> <?=Yii::$app->session->getFlash('success')?>
            </div>
            <?php
    }
    ?>
    <div class="col-md-6">
    
    <table class="table table-bordred table-stripped">
    <tr>
    	<td> UTTP </td>
    	<td> : </td>
    	<td> <?= $identitas['uttp']?></td>
    </tr>
    <tr>
    	<td> Pemilik </td>
    	<td> : </td>
    	<td> <?= $identitas->pemilik['nama']?></td>
    </tr>
    <tr>
    	<td> Merk Buatan </td>
    	<td> : </td>
    	<td> <?= $identitas['merk_buatan']?></td>
    </tr>    
     <tr>
    	<td> Model </td>
    	<td> : </td>
    	<td> <?= $identitas['model']?></td>
    </tr>
     <tr>
    	<td> Volume </td>
    	<td> : </td>
    	<td> <?= $identitas['volume_nominal']?></td>
    </tr>
     <tr>
    	<td> Jumlah Kompartemen </td>
    	<td> : </td>
    	<td> <?= $identitas['jml_kompartemen']?></td>
    </tr>
     <tr>
    	<td> Merk Kendaraan </td>
    	<td> : </td>
    	<td> <?= $identitas['merk_kendaraan']?></td>
    </tr>       
     <tr>
    	<td> No. Polis </td>
    	<td> : </td>
    	<td> <?= $identitas['no_polis']?></td>
    </tr>    
     <tr>
    	<td> Suhu Dasar </td>
    	<td> : </td>
    	<td> <?= $identitas['suhu_dasar']?></td>
    </tr>  
     <tr>
    	<td> Metode </td>
    	<td> : </td>
    	<td> <?= $identitas->metode['metode']?></td>
    </tr> 
    <tr>
    	<td> Tgl Pemeriksaan </td>
    	<td> : </td>
    	<td> <?= $identitas['tgl_pemeriksaan']?></td>
    </tr>  
    <tr>
    	<td> Penguji </td>
    	<td> : </td>
    	<td> <?= $identitas->penguji['nama']?></td>
    </tr>           
    </table>  
    </div> 
    <div class="col-md-6">                 
    <h4> PEMERIKSAAN FISIK <br> URAIAN PEMERIKSAAN</h4>
    </div>
    <div class="col-md-6">
     <table class="table table-bordred table-stripped">
    <tr>
    	<td> Surat Asli Tahun <?=$identitas['tahun']?> </td>
    	<td> : </td>
    	<td> <?php if ($identitas['surat']=='3'){ echo 'Rusak';}
    	       else if ($identitas['surat']=='1'){echo 'Ada';}
    	       else{ echo 'Rusak';}?>
    	</td>
    </tr>
    <tr>
    	<td> Lobang Jarum </td>
    	<td> : </td>
    	<td> <?php if ($identitas['lob_jarum']=='3'){ echo 'Rusak';}
    	       else if ($identitas['lob_jarum']=='1'){echo 'Ada';}
    	       else{ echo 'Rusak';}?>
    	</td>
    </tr>
    <tr>
    	<td> Lobang Kawat Indeks </td>
    	<td> : </td>
    	<td> <?php if ($identitas['lob_kawat_indeks']=='3'){ echo 'Rusak';}
    	       else if ($identitas['lob_kawat_indeks']=='1'){echo 'Ada';}
    	       else{ echo 'Rusak';}?>
    	</td>
    </tr>
        
    <tr>
    	<td> Lobang Kawat Manhole </td>
    	<td> : </td>
    	<td> <?php if ($identitas['lob_kawat_manhole']=='3'){ echo 'Rusak';}
    	       else if ($identitas['lob_kawat_manhole']=='1'){echo 'Ada';}
    	       else{ echo 'Rusak';}?>
    	</td>
    </tr>
    
    <tr>
    	<td> Lobang Kawat Manhole </td>
    	<td> : </td>
    	<td> <?php if ($identitas['lob_kawat_chasis']=='3'){ echo 'Rusak';}
    	       else if ($identitas['lob_kawat_chasis']=='1'){echo 'Ada';}
    	       else{ echo 'Rusak';}?>
    	</td>
    </tr>
    
    <tr>
    	<td> Benda dalam TUM </td>
    	<td> : </td>
    	<td> <?php if ($identitas['benda_tum']=='3'){ echo 'Rusak';}
    	       else if ($identitas['benda_tum']=='1'){echo 'Ada';}
    	       else{ echo 'Rusak';}?>
    	</td>
    </tr>
             
    </table>  
    </div>               
            <div class="row">

                          
            	<div class="col-md-12">
            	                   
    
  
                <div class="panel panel-lilac">
               
                <div class="panel-body">  
                <h4> KOMPARTEMEN</h4>                
                    <p>
                        <?= Html::button('<i class="glyphicon glyphicon-plus"></i> Tambah',['class' => 'btn btn-sm btn-success','title'=>'Tambah Kompartemen','onClick'=>'tambah()']) ?>
                    </p>
                
                    <?php Pjax::begin(['id'=>'pgrid']); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                
                            'jenis',
                            't1',
                            't3',
                            'T',
                            'D',
                            'P',
                            'Q',
                            'S',
                            'R',
                            'L',
                            
                            //'id_hasil',
                            //'id_identitas',
                
                            ['label'=>'Aksi',
                                'format'=>'raw',
                                'value'=> function($data){
                                return Html::button('edit',['data-pjax'=>0,'class'=>'showModalButton','value'=>'/'.Yii::$app->controller->module->id . '/identitas/editkompartmen?id='.$data->id_kompartemen.'&idk='.$data->id_identitas]);
                                }
                                ],
                                

                                    
                                    ['class' => 'yii\grid\ActionColumn',
                                        'buttons'=>[
                                            'delete' => function ($url, $model, $key) {
                                            
                                            return Html::a('<span class="glyphicon glyphicon-ban-circle"></span>', '/operator/identitas/deletekom?id='.$key.'&idk='.$model->id_identitas, [
                                                'title' => Yii::t('app', 'Delete'),
                                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete?'),
                                                'data-method' => 'post', 'data-pjax' => '0',
                                            ]);
                                            }
                                            
                                    ],
                                    'template'=>'{delete}',
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


<?php
yii\bootstrap\Modal::begin([
'headerOptions' => ['id' => 'modalHeader'],
'id' => 'modalkom',
'size' => 'modal-lg',
'clientOptions' => ['backdrop' => 'static', 'keyboard' => true]
]);
echo "<div id='modalContent'>";?>
                   <?php $form = ActiveForm::begin(['layout'=>'horizontal','id'=>'fkom']); ?>
                	<?= $form->field($kompartemen, 'jenis')->dropDownList(['Komp. I'=>'Komp. I','Komp. II'=>'Komp. II','Komp. III'=>'Komp. III','Komp. IV'=>'Komp. IV'],['prompt'=>'-Pilih-']) ?>
                    <?= $form->field($kompartemen, 't1')->textInput(['id'=>'t1']) ?>
               	    <?= $form->field($kompartemen, 't2')->textInput(['readOnly'=>true,'id'=>'t2']) ?>
                    <?= $form->field($kompartemen, 't3')->textInput(['id'=>'t3']) ?>
                	<?= $form->field($kompartemen, 't4')->textInput(['readOnly'=>true,'id'=>'t4']) ?>
                    <?= $form->field($kompartemen, 'T')->textInput(['id'=>'Tbs']) ?>
                    <?= $form->field($kompartemen, 'D')->textInput() ?>               
                    <?= $form->field($kompartemen, 'P')->textInput() ?>             
                    <?= $form->field($kompartemen, 'Q')->textInput() ?> 
                    <?= $form->field($kompartemen, 'S')->textInput() ?>            
                    <?= $form->field($kompartemen, 'R')->textInput() ?>          
                    <?= $form->field($kompartemen, 'L')->textInput() ?>
                
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-sm btn-success']) ?>
                        <button type="button" class="btn btn-sm btn-danger" pull-right data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                
                    <?php ActiveForm::end(); ?>

<?php echo "</div>";
yii\bootstrap\Modal::end();
?>

<script>
	function tambah(){
		$('#modalkom').modal('show');
	}


    
</script>
<?php 
$script = <<<SCRIPT



    function hitung()
    {
     
      var tbs = $('#Tbs').val();  
      var t1 = $('#t1').val();
      $('#t2').val(tbs-t1);
         
    }

    function hitung4()
    {
     
      var tbs = $('#Tbs').val();  
      var t3 = $('#t3').val();
      $('#t4').val(tbs-t3);
         
    }

    \$('#t4').change(
            function() {
              hitung();
            }
        );

    \$('#t1').change(
            function() {
              hitung();
            }
        );
    
    \$('#Tbs').change(
            function() {
              hitung();
                hitung4();
            }
        );

        $("#fkom").on('beforeSubmit',function(e){  
        var formData = new FormData(this);
        
        $.ajax(
        {

            type: "POST",
            data : formData,
            contentType: false,
            processData: false,
            success:function(data, textStatus, jqXHR) 
            {
                
            	$.pjax.defaults.timeout = false;      
            	$.pjax.reload({container: '#pgrid'});
               $('#modalkom').modal('hide');

            	
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                alert('gagal');
                    
            }
        });
        
        return false;
   
        
    });
SCRIPT;
    $this->registerJs($script, View::POS_END);
?>