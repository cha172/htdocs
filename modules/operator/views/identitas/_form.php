<?php

use unclead\multipleinput\MultipleInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\assets\admin\table\ColorAsset;
use yii\jui\DatePicker;
use yii\web\View;
ColorAsset::register($this);

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
                 	
                        <?= $form->field($model, 'kom')->widget(MultipleInput::className(), [
                            'max' => 4,
                            'columns' => [
                                [
                                    'name'  => 'jenis',
                                    'type'  => 'dropDownList',
                                    'title' => 'Jenis',
                                    'options' => [
                                        'style' => 'width:200px',
                                    ],
                                    'items' => ['Komp. I'=>'Komp. I','Komp. II'=>'Komp. II','Komp. III'=>'Komp. III','Komp. IV'=>'Komp. IV']
                                ],
             
                                [
                                    'name'  => 't1',
                                    'title' => 'T1',
                                    'enableError' => true,
                                    'options' => [
                                        'required'=>'true',
                                        'onchange' => <<< JS
                                                  var id = $(this)[0].id;
                                                  hitung(id);
                                               
                                            
JS
                                            ],
                                ],
                                [
                                    'name'  => 't2',
                                    'title' => 'T2',
                                    'options' => [
                                        'required'=>'true',
                                        'readOnly' => true,
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 't3',
                                    'title' => 'T3',
                                    'options' => [
                                        'required'=>'true',
                                        'onchange' => <<< JS
                                                  var id = $(this)[0].id;
                                                  hitung4(id);
                                        
                                        
JS
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 't4',
                                    'title' => 'T4',
                                    'options' => [
                                        'required'=>'true',
                                        'readOnly' => true,
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 't',
                                    'title' => 'T',
                                    'options' => [
                                        'required'=>'true',
                                        'onchange' => <<< JS
                                                  var id = $(this)[0].id;
                                                hitung(id);
                                                hitung4(id);
                                        
                                        
JS
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 'd',
                                    'title' => 'D',
                                    'options' => [
                                        'required'=>'true',
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 'p',
                                    'title' => 'P',
                                    'options' => [
                                        'required'=>'true',
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 'q',
                                    'title' => 'Q',
                                    'options' => [
                                        'required'=>'true',
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 's',
                                    'title' => 'S',
                                    'options' => [
                                        'required'=>'true',
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 'r',
                                    'title' => 'R',
                                    'options' => [
                                        'required'=>'true',
                                    ],
                                    'enableError' => true,
                                ],
                                [
                                    'name'  => 'l',
                                    'title' => 'L',
                                    'options' => [
                                        'required'=>'true',
                                    ],
                                    'enableError' => true,
                                ],
                            ]
                         ]);
                        ?>                
                
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>
                
                    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>
</div>
</section>



<?php 
$script = <<<SCRIPT



    function hitung(id)
    {
      var nm = id.split("-");
    var t1 = document.getElementById(nm[0] +"-"+ nm[1] +"-"+nm[2] +"-t1");
    var t2 = document.getElementById(nm[0] +"-"+ nm[1] +"-"+nm[2] +"-t2");
    var tbs = document.getElementById(nm[0] +"-"+ nm[1] +"-"+nm[2] +"-t");
    t2.value=tbs.value-t1.value;

         
    }

    function hitung4(id)
    {
     
        var nm = id.split("-");
        var t3 = document.getElementById(nm[0] +"-"+ nm[1] +"-"+nm[2] +"-t3");
        var t4 = document.getElementById(nm[0] +"-"+ nm[1] +"-"+nm[2] +"-t4");
        var tbs = document.getElementById(nm[0] +"-"+ nm[1] +"-"+nm[2] +"-t");
        t4.value=tbs.value-t3.value;

         
    }
SCRIPT;
    $this->registerJs($script, View::POS_END);
?>


