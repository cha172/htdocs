<?php

use app\assets\admin\table\DefaultAsset;
DefaultAsset::register($this);
$this->title = 'New Sains Admission | STIF.ID';
?>


<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-table"></i> Table <span>Identitas</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Tables</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Identitas</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-6">
                <!-- Start table horizontal scroll -->
                <h4 class="mt-0">Identitas</h4>
                <div class="table-responsive mb-20">
                    <table class="table table-striped table-success">
                        <thead>
                        <tr>
                            <th class="text-center border-right">No.</th>
                            <th>Keterangan</th>
                            <th>-</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        <tr>
                            <td class="text-center border-right">1</td>
                            <td>Username</td>
                            <td><?= Yii::$app->user->identity->username;?></td>
                        </tr>
                        <tr>
                            <td class="text-center border-right">2</td>
                            <td>email</td>
                            <td><?= Yii::$app->user->identity->email;?></td>
                        </tr>  
                        <tr>
                            <td class="text-center border-right">3</td>
                            <td>Nama</td>
                            <td><?= Yii::$app->user->identity->nm_pd;?></td>
                        </tr>                                                  
                        <tr>
                            <td class="text-center border-right">4</td>
                            <td>Level</td>
                            <td><?= Yii::$app->user->identity->role;?></td>
                        </tr>   

  
                        
                        
                                                                                                               
                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="text-center border-right"></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- /.table-responsive -->
                <!--/ End table horizontal scroll -->
            </div>
        </div><!-- /.row -->
        </div>
       </section>
       