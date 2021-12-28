<?php
use app\assets\admin\table\ColorAsset;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use yii\web\YiiAsset;
use app\assets\AppAsset;
use kartik\grid\GridView;
ColorAsset::register($this);
YiiAsset::register($this);
AppAsset::register($this);
$this->title = 'Pemeriksa';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Data <span>Pemeriksa</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Data Pemeriksa</li>
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
            <div class="row">

                          
            	<div class="col-md-12">
                <div class="panel panel-lilac">
               
                <div class="panel-body">  

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('Update', ['update','id' => $model->nip_pemeriksa], ['class' => 'btn btn-primary'])?>
        <?=Html::a('Delete', ['delete','id' => $model->nip_pemeriksa], ['class' => 'btn btn-danger','data' => ['confirm' => 'Are you sure you want to delete this item?','method' => 'post']])?>
    </p>

    <?=DetailView::widget(['model' => $model,'attributes' => ['nip_pemeriksa','nama']])?>

</div>
</div>
</div>
</div>
</div>
</section>

