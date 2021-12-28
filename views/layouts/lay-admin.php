
<?php
$this->beginPage()?>

<!DOCTYPE html>

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Sains-Inventaris">
        <meta name="keywords" content="Sistem Informasi Tera">
        <meta name="author" content="Sains-Inventaris">
        <link href="/images/logo.png" rel="shortcut icon">
        <title>Sistem Informasi Tera</title>


        <link href="/css/fontfamilyopensans.css" rel="stylesheet">
        <link href="/css/fontfamilyoswald.css" rel="stylesheet">

        <?php

$this->head();
        ?>
        
    </head>
<style>
.headerxs {
  background-image: linear-gradient(#0dc1ff,#ffffff);
}
</style>
        
    <body class="page-session page-header-fixed page-sidebar-fixed">
    <?php

$this->beginBody()?>

        <section id="wrapper" class="headerxs">


            <?php

echo $content;
            ?>


        </section>


    <?php

$this->endBody()?>
    </body>


</html>
<?php

$this->endPage()?>
