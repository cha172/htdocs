<?php

use yii\helpers\Html;

use app\assets\AppAsset;
AppAsset::register($this);

use app\assets\admin\form\ElementAsset;

ElementAsset::register($this);

/* @var $this yii\web\View */
/* @var $model app\models\AdmissionUser */

$this->title = 'Register: Step 1 ';
$this->params['breadcrumbs'][] = ['label' => 'Admission Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-list-alt"></i> Register Step: 1 <span>Lengkapi Identitas</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('daftar/dashboard/register') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Daftar</a>
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
                        <div class="callout callout-info"><p>Lengkapi Form dibawah ini dan pastikan isian sudah dilakukan dengan benar. <code> Kesalahan</code> dalam proses pengisian data, tidak dapat diubah kembali</p></div>
                    </div><!-- /.panel-subheading -->
                    <div class="panel-body no-padding">
                    
                    
                        <div class="admission-user-update">      
                            <?= $this->render('_form', [
                                'model' => $model,
                                'wil'=>$wil,
                            ]) ?>
                        
                        </div>
                	</div>
             </div>
        </div>
    </div>
            
</section>

