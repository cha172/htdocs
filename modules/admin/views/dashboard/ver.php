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

<?php if ($identitas!==null){?>
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
    	<td> No. Polis </td>
    	<td> : </td>
    	<td> <?= $identitas['no_polis']?></td>
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
                
                    <?php Pjax::begin(['id'=>'pgrid']); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                   
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
                   
                        ],
                    ]); ?>
                	
                	<div class="modal-footer">
                    <?php Pjax::end(); ?>
                    	
                    
                     <?php $form = ActiveForm::begin(['layout'=>'horizontal','id'=>'fkom']); ?>
                     <?= $form->field($identitas, 'id_identitas')->hiddenInput()->label(false) ?>
                     <?= Html::submitButton('<i class="glyphicon glyphicon-ok"></i> Terbitkan Sertifikat', ['name'=>'btn-terbit','value'=>'btn-terbit','class' => 'btn btn-sm btn-success']) ?>
                     <button type="button" class="btn btn-sm btn-danger " data-dismiss="modal" aria-hidden="true">Tutup</button>
                     <?php ActiveForm::end(); ?>
                	</div>
                </div>
</div>
</div>
</div>
<?php }?>




<?php
$url = '/'.Yii::$app->controller->module->id .'/dashboard/ver?id='.$identitas['id_identitas'];
$script = <<<SCRIPT
        $("#fkom").on('beforeSubmit',function(e){  
        var formData = new FormData(this);
        
        $.ajax(
        {

            type: "POST",
            url : "$url",
            data : formData,
            contentType: false,
            processData: false,
            success:function(data, textStatus, jqXHR) 
            {
                
               $('#modal').modal('hide');
                location.reload();
            	
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



