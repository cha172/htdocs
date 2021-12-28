

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
        
        <li class="<?=(Yii::$app->controller->id == 'identitas') ? 'active' : ''?>">
            <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/identitas')?>">
                <span class="icon"><i class="glyphicon glyphicon-transfer"></i></span>
                <span class="text">Cerapan Penguji</span>
                <?=(Yii::$app->controller->id == 'identitas') ? '<span class="selected"></span>' : ''?>
            </a>
        </li>
        <li class="<?=(Yii::$app->controller->id == 'sertifikat') ? 'active' : ''?>">
            <a href="<?=Yii::$app->getUrlManager()->createUrl('/' . Yii::$app->controller->module->id . '/sertifikat')?>">
                <span class="icon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <span class="text">Data Sertifikat</span>
                <?=(Yii::$app->controller->id == 'sertifikat') ? '<span class="selected"></span>' : ''?>
            </a>
        </li>	
        <li class="<?=(Yii::$app->controller->id == 'laporan') ? 'active' : ''?>">
            <a href="/operator/laporan">
                <span class="icon"><i class="glyphicon glyphicon-list-alt"></i></span>
                <span class="text">Laporan Bulanan</span>
                <?=(Yii::$app->controller->id == 'laporan') ? '<span class="selected"></span>' : ''?>
            </a>
        </li>        

               

		
        
                        <li class="divider"></li>
						<li><a href="javascript:;" onclick="document.getElementById('sub').submit();"><i class="fa fa-sign-out"></i>Logout</a></li>       
        
        <!--/ End navigation - forms -->
	</ul>
     

    <!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left -->
