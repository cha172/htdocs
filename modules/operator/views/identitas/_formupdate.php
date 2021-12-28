<?php

use kartik\grid\GridView;
use unclead\multipleinput\MultipleInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\assets\admin\table\ColorAsset;
use yii\jui\DatePicker;
use yii\web\View;
use yii\widgets\Pjax;
use app\assets\AppAsset;
ColorAsset::register($this);
AppAsset::register($this);
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Cerapan <span> Penguji</span></h2>
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

                    <?php $form = ActiveForm::begin(); ?>
                
                    <?= $form->field($model, 'uttp')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'id_pemilik')->dropDownList($model->ListPemilik(),['prompt'=>'--Pilih--']) ?>
                    <?= $form->field($model, 'merk_buatan')->textInput(['maxlength' => true]) ?>
                
                    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>
                
                    <?= $form->field($model, 'volume_nominal')->textInput() ?>
                
                    <?= $form->field($model, 'jml_kompartemen')->textInput() ?>
                
                    <?= $form->field($model, 'merk_kendaraan')->textInput(['maxlength' => true]) ?>
                
                    <?= $form->field($model, 'no_polis')->textInput() ?>

                    <?= $form->field($model, 'suhu_dasar')->textInput() ?>
                
                    <?= $form->field($model, 'tgl_pemeriksaan')->widget(DatePicker::className(),['language'=>'id','dateFormat'=>'yyyy-MM-dd']) ?>
                
                    
                
                    <?= $form->field($model, 'id_metode')->dropDownList($model->ListMetode(),['prompt'=>'--Pilih--']) ?>
                
                    <?= $form->field($model, 'nip_pemeriksa')->dropDownList($model->ListPemeriksa(),['prompt'=>'--Pilih--']) ?>
                
                    <?= $form->field($model, 'nip_penguji')->dropDownList($model->ListPenguji(),['prompt'=>'--Pilih--']) ?>
     
                    <?= $form->field($model, 'nip_kepala')->dropDownList($model->ListKepala(),['prompt'=>'--Pilih--']) ?>
                    
                    
                	<?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>
                	<?= $form->field($model, 'surat')->dropDownList(['0' => 'Tidak','1'=>'Ada','3'=>'Rusak'],['prompt'=>'--Pilih--']) ?>
                 	<?= $form->field($model, 'lob_jarum')->dropDownList(['0' => 'Tidak','1'=>'Ada','3'=>'Rusak'],['prompt'=>'--Pilih--']) ?>
                 	<?= $form->field($model, 'lob_kawat_indeks')->dropDownList(['0' => 'Tidak','1'=>'Ada','3'=>'Rusak'],['prompt'=>'--Pilih--']) ?>
                 	<?= $form->field($model, 'lob_kawat_manhole')->dropDownList(['0' => 'Tidak','1'=>'Ada','3'=>'Rusak'],['prompt'=>'--Pilih--']) ?>
                 	<?= $form->field($model, 'benda_tum')->dropDownList(['0' => 'Tidak','1'=>'Ada','3'=>'Rusak'],['prompt'=>'--Pilih--']) ?>
                 	     
                
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>
                
                    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
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

