<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\assets\admin\table\ColorAsset;
use kartik\select2\Select2;
ColorAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\models\AdmissionUser */
/* @var $form yii\widgets\ActiveForm */
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Data Master <span>Admission user</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Data Master</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">
    
            <div class="row">
            <div class="col-md-6">
                <div class="panel panel-lilac">
                <div class="panel-body">
            	
                                	
                    <div class="admission-user-form">
                    
                        <?php $form = ActiveForm::begin(); 
                        $model->password_hash="";
                        ?>
                    	
                        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'nm_pd')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'password_hash')->passwordInput() ?>
						<?= $form->field($model, 'role')->dropDownList($model->Userlevel(),['maxlength' => true]) ?>

                        <div class="form-group text-right">
                            <?= Html::submitButton('<i class="glyphicon glyphicon-floppy-save"></i> Simpan', ['class' => 'btn btn-sm btn-primary']) ?>
                        </div>
                    
                        <?php ActiveForm::end(); ?>
                    
                    </div>
                    </div>
                    </div>
            	</div>
            </div>
     </div>
</section>   