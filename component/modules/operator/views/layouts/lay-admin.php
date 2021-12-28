
<?php
$this->beginPage()?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="E-Tera">
        <meta name="keywords" content="Sistem Informasi Tera">
        <meta name="TERA" content="TERA.ID">
        <link href="/images/logo.png" rel="shortcut icon">
        <?php

        $this->registerCsrfMetaTags()?>
        <title><?=$this->title?></title>
        <!--/ END META SECTION -->

        <!-- START @FONT STYLES -->
        <link href="/css/fontfamilyopensans.css" rel="stylesheet">
        <link href="/css/fontfamilyoswald.css" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <?php

        $this->head();
        ?>
        
    </head>

        
    <body class="page-session page-header-fixed page-sidebar-fixed">
    <?php

    $this->beginBody()?>
        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->
            <?php

            echo $this->render("_header-admin")?>

            <?php

            echo $this->render("_sidebar-left");
            ?>
            <!--/ END SIDEBAR LEFT -->
                
            <!-- START @PAGE CONTENT -->
            <?php

            echo $content;
            ?>
            <!--/ END PAGE CONTENT -->

            <!-- START @SIDEBAR RIGHT -->
            <?php

            echo $this->render("_sidebar-right");
            ?>
            <!--/ END SIDEBAR RIGHT -->

        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        
    <?php

    $this->endBody()?>

    </body>
    <!--/ END BODY -->

</html>
<?php

$this->endPage()?>
