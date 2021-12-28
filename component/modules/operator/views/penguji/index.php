<?php
use app\assets\admin\table\ColorAsset;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\web\YiiAsset;
use app\assets\AppAsset;
use kartik\grid\GridView;
ColorAsset::register($this);
YiiAsset::register($this);
AppAsset::register($this);
$this->title = 'Penguji';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="page-content">
    <div class="header-content">
        <h2><i class="fa fa-magic"></i>Data <span>Penguji</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Data Penguji</li>
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
    <p>
        <?=Html::a('Create Penguji', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <?php

    Pjax::begin();
    ?>
    <?php
    // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=GridView::widget(
        ['dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'nip_penguji','nama',
                ['class' => 'yii\grid\ActionColumn']
            ]
            
        ]);?>

    <?php

    Pjax::end();
    ?>

</div>
</div>
</div>
</div>
</div>
</section>
