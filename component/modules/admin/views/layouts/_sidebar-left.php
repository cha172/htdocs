

<aside id="sidebar-left" class="<?php
echo ! empty($classLeft) ? $classLeft : 'sidebar-circle'?>">

    <!-- Start left navigation - profile shortcut -->
    <div class="sidebar-content">
        <div class="media">
            <a class="pull-left has-notif avatar" href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/dashboard/uploadfoto')?>">


                <img src="/site/createpasfoto" alt="Tera">
                <i class="online"></i>
            </a>
            <div class="media-body">
                <h4 class="media-heading"><span><?=Yii::$app->user->identity->nm_pd;?></span></h4>
                <small>Level: <?=Yii::$app->user->identity->role?></small>
            </div>
        </div>
    </div><!-- /.sidebar-content -->
    <!--/ End left navigation -  profile shortcut -->

    <!-- Start left navigation - menu -->
    <ul class="sidebar-menu">

        <!-- Start navigation - dashboard -->
        <li class="<?=(Yii::$app->controller->id == 'dashboard') ? 'active' : ''?>">
            <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/dashboard/index')?>">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Home</span>
                <?=(Yii::$app->controller->id == 'dashboard') ? '<span class="selected"></span>' : ''?>
            </a>
        </li>
        <!--/ End navigation - dashboard -->

        <li class="<?=(Yii::$app->controller->id == 'data') ? 'active' : ''?>">
            <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/data')?>">
                <span class="icon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <span class="text">Data Sertifikat</span>
                <?=(Yii::$app->controller->id == 'data') ? '<span class="selected"></span>' : ''?>
            </a>
        </li>	
        
        <li class="<?=(Yii::$app->controller->id == 'pinjaman') ? 'active' : ''?>">
            <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/pinjaman')?>">
                <span class="icon"><i class="glyphicon glyphicon-transfer"></i></span>
                <span class="text">Riwayat</span>
                <?=(Yii::$app->controller->id == 'pinjaman') ? '<span class="selected"></span>' : ''?>
            </a>
        </li>
               
        <!--/ End category ui kit-->
		    <!-- Start category apps -->
        <li class="sidebar-category">
            <span><?php

            if (! Yii::$app->user->isGuest)
                echo Yii::$app->user->identity->role;
            ?></span>
            <span class="pull-right"><i class="fa fa-trophy"></i></span>
        </li>
        <!--/ End category apps -->
		
	        <!-- Start navigation - forms -->
        <li class="submenu <?=(Yii::$app->controller->id == 'kepalaupt' ||  Yii::$app->controller->id == 'pemilik' || Yii::$app->controller->id == 'pengguna' || Yii::$app->controller->id == 'pemeriksa' || Yii::$app->controller->id == 'penguji' || Yii::$app->controller->id == 'metode') ? 'active' : ''?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-list-alt"></i></span>
                <span class="text">Manajemen</span>
                <span class="arrow"></span>
                <?=(Yii::$app->controller->id == 'kepalaupt' || Yii::$app->controller->id == 'pemilik' || Yii::$app->controller->id == 'pengguna' || Yii::$app->controller->id == 'pemeriksa' || Yii::$app->controller->id == 'penguji'|| Yii::$app->controller->id == 'metode') ? '<span class="selected"></span>' : ''?>
            </a>
            <ul>
            	<li class="<?=(Yii::$app->controller->id == 'kepalaupt') ? 'active' : ''?>">
                    <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/kepalaupt')?>">Kepala UPT</a>
                </li>             
            	<li class="<?=(Yii::$app->controller->id == 'pemilik') ? 'active' : ''?>">
                    <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/pemilik')?>">Pemilik</a>
                </li>    
				 <li class="<?=(Yii::$app->controller->id == 'metode') ? 'active' : ''?>">
                    <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/metode')?>">Metode</a>
                </li>             
				 <li class="<?=(Yii::$app->controller->id == 'pemeriksa') ? 'active' : ''?>">
                    <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/pemeriksa')?>">Pemeriksa</a>
                </li>
				 <li class="<?=(Yii::$app->controller->id == 'penguji') ? 'active' : ''?>">
                    <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/penguji')?>">Penguji</a>
                </li>                        
				 <li class="<?=(Yii::$app->controller->id == 'pengguna') ? 'active' : ''?>">
                    <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/pengguna')?>">Pengguna</a>
                </li> 


                                
			</ul>
			   

        </li>
        
                        <li class="divider"></li>
						<li><a href="javascript:;" onclick="document.getElementById('sub').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>       
        
        <!--/ End navigation - forms -->
	</ul>
     

    <!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left -->
