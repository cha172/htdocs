<?php

use yii\helpers\Html;

use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\web\View;
AppAsset::register($this);

use app\assets\admin\form\ElementAsset;

ElementAsset::register($this);




$this->title = 'Upload Foto';
$this->params['breadcrumbs'][] = ['label' => 'Admission Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Upload Foto', 'url' => ['/dashboard']];
$this->params['breadcrumbs'][] = 'Upload';
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-list-alt"></i> Upload <span>Foto</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl(Yii::$app->controller->module->id.'/dashboard') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Upload Foto</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Form</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-6">
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Input Fields</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-sub-heading">
                        <div class="callout callout-info"><p>Silahkan Upload </div>
                    </div><!-- /.panel-subheading -->
                    <div class="panel-body no-padding">
                    
                    
                        <div class="admission-user-update">      
                            <div class="admission-user-form">

                                    <?php $form = ActiveForm::begin(['layout'=>'horizontal','options' => ['enctype' => 'multipart/form-data']]) ?>
                                        <br>

                                    <?= $form->field($modelup, 'imageFile')->fileInput()->label('Upload Pasfoto') ?>
									
																				
                                    <div class="form-footer">
                                        <div class="pull-right">
        									<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- /.form-footer -->
                                                        
                            
                                <?php ActiveForm::end(); ?>
                            
                            </div>
                        
                        </div>
                	</div>
             </div>
        </div>
    </div>
            
</section>


