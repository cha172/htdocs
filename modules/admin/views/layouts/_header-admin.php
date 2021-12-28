<style>
.navbarx {
  background-image: linear-gradient(#068f86, #4da61e);
}
</style>
<header id="header">

    <!-- Start header left -->
    <div class="header-left">
        <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
        <div class="navbar-minimize-mobile left">
            <i class="fa fa-bars"></i>
        </div>
        <!--/ End offcanvas left -->

        <!-- Start navbar header -->
        <div class="navbar-header">

            <!-- Start brand -->
            <a class="navbar-brand navbarx" href="/<?=Yii::$app->getUrlManager()->createUrl(Yii::$app->controller->module->id . '/dashboard')?>">
                E-Tera
            </a><!-- /.navbar-brand -->
            <!--/ End brand -->

        </div><!-- /.navbar-header -->
        <!--/ End navbar header -->

        <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
        <div class="navbar-minimize-mobile right">
            <i class="fa fa-cog"></i>
        </div>
        <!--/ End offcanvas right -->

        <div class="clearfix"></div>
    </div><!-- /.header-left -->
    <!--/ End header left -->

    <!-- Start header right -->
    <div class="header-right">
        <!-- Start navbar toolbar -->
        <div class="navbar navbar-toolbar">

            <!-- Start left navigation -->
            <ul class="nav navbar-nav navbar-left">

                <!-- Start sidebar shrink -->
                <li class="navbar-minimize">
                    <a href="javascript:void(0);" title="Minimize sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <!--/ End sidebar shrink -->

                <!-- Start form search -->
                <li class="navbar-search">
                    <!-- Just view on mobile screen-->
                    <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
                    <form class="navbar-form">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control typeahead rounded" placeholder="Search for people, places and things">
                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
                        </div>
                    </form>
                </li>
                <!--/ End form search -->

            </ul><!-- /.nav navbar-nav navbar-left -->
            <!--/ End left navigation -->

            <!-- Start right navigation -->
            <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->

                <!-- Start messages -->
                <li class="dropdown navbar-message">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="count label  rounded">0</span></a>

                    <!-- Start dropdown menu -->
                    <div class="dropdown-menu animated flipInX">
                        <div class="dropdown-header">
                            <span class="title">Messages <strong>(0)</strong></span>
                            <span class="option text-right"><a href="#">+ New message</a></span>
                        </div>
                        <div class="dropdown-body">

                            <!-- Start message search -->
                            <form class="form-horizontal" action="#">
                                <div class="form-group has-feedback has-feedback-sm m-5">
                                    <input type="text" class="form-control input-sm" placeholder="Search message...">
                                    <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                </div>
                            </form>
                            <!--/ End message search -->

                            <!-- Start message list -->
                            <div class="media-list niceScroll">



                                <!--/ End message indicator -->

                            </div>
                            <!--/ End message list -->

                        </div>
                        <div class="dropdown-footer">
                            <a href="<?=Yii::$app->getUrlManager()->createUrl('daftar/page/messages')?>">See All</a>
                        </div>
                    </div>
                    <!--/ End dropdown menu -->

                </li><!-- /.dropdown navbar-message -->
                <!--/ End messages -->

                <!-- Start notifications -->
                <li class="dropdown navbar-notification">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="count label  rounded">0</span></a>

                    <!-- Start dropdown menu -->
                    <div class="dropdown-menu animated flipInX">
                        <div class="dropdown-header">
                            <span class="title">Notifications <strong>(0)</strong></span>
                            <span class="option text-right"><a href="#"><i class="fa fa-cog"></i> Setting</a></span>
                        </div>
                        <div class="dropdown-body niceScroll">

          
                            <!--/ End notification list -->

                        </div>

                    </div>
                    <!--/ End dropdown menu -->

                </li><!-- /.dropdown navbar-notification -->
                <!--/ End notifications -->

                <!-- Start profile -->
                <li class="dropdown navbar-profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="meta">
                            <span class="avatar"><img src="/site/createpasfoto" class="img-circle" alt="admin"></span>
                            <span class="text hidden-xs hidden-sm text-muted"><?=Yii::$app->user->identity->nm_pd?></span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <!-- Start dropdown menu -->
                    <ul class="dropdown-menu animated flipInX">
                        <li class="dropdown-header">Account</li>
                        <li><a href="<?=Yii::$app->getUrlManager()->createUrl('/backoffice/dashboard/identitas')?>"><i class="fa fa-user"></i>View profile</a></li>
                        
                        <li class="divider"></li>
						<li><a href="javascript:;" onclick="document.getElementById('sub').submit();"><i class="fa fa-sign-out"></i>Logout</a></li>
						
						<form id="sub" action='<?=Yii::$app->getUrlManager()->createUrl('/site/logout')?>' method='post'>
						   <input type="hidden" name="<?=Yii::$app->request->csrfParam;?>" value="<?=Yii::$app->request->csrfToken;?>" />
						</form>
						
						
                        
                    </ul>
                    <!--/ End dropdown menu -->
                </li><!-- /.dropdown navbar-profile -->
                <!--/ End profile -->

                <!-- Start settings -->
                <li class="navbar-setting pull-right">
                    <a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>
                </li><!-- /.navbar-setting pull-right -->
                <!--/ End settings -->

            </ul>
            <!--/ End right navigation -->

        </div><!-- /.navbar-toolbar -->
        <!--/ End navbar toolbar -->
    </div><!-- /.header-right -->
    <!--/ End header left -->

</header> <!-- /#header -->