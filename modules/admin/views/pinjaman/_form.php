<?php
use app\assets\admin\table\ColorAsset;
use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use app\assets\AppAsset;

ColorAsset::register($this);
AppAsset::register($this);
$this->title = 'Kode Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Kode <span>Barang</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Kode Barang</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">                              
            <div class="row">        
            	<div class="col-md-12">
                <div class="panel panel-lilac">
               
                <div class="panel-body">                                	
                    <div class="pinjaman-form">
                    
                        <?php $form = ActiveForm::begin(); ?>
                    
                        <?= $form->field($model, 'tanggal')->textInput() ?>
                    
                        <?= $form->field($model, 'id_barang')->textInput() ?>
                    
                        <?= $form->field($model, 'pemberi')->textInput(['maxlength' => true]) ?>
                    
                        <?= $form->field($model, 'penerima')->textInput(['maxlength' => true]) ?>
                    
                        <?= $form->field($model, 'jumlah')->textInput() ?>
                    
                        <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>
                    
                        <?= $form->field($model, 'tipe')->textInput(['maxlength' => true]) ?>
                    
                        <?= $form->field($model, 'createDate')->textInput() ?>
                    
                        <div class="form-group">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                        </div>
                    
                        <?php ActiveForm::end(); ?>
                    
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
