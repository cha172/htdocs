
<?php
use app\assets\admin\chart\MorrisAsset;

use app\assets\admin\table\DefaultAsset;

DefaultAsset::register($this);

/* @var $this \yii\web\View */

MorrisAsset::register($this);

$this->title = "DASHBOARD | E-Tera";
?>
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">
        <div class="row">
        <div class="panel">
        <div class="panel-body">
			<div class="col-md-12 table-responsive">
				
			</div>
 		</div>
 		</div>
		</div>
                 


   
                  
    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php

    echo $this->render('/shares/_footer_admin');
    ?>
    <!--/ End footer content -->

</section><!-- /#page-content -->