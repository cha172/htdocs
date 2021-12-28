<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\assets\admin\table\ColorAsset;
use yii\jui\DatePicker;
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
            <div class="col-md-6">
                <div class="panel panel-lilac">
                <div class="panel-body">

                    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>
                
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
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success pull-right']) ?>
                    </div>
                
                    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
</div>
</div>
</section>

