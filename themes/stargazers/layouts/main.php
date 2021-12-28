<?php
use yii\helpers\Html;
use yii\widgets\Menu;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
?>


<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo Html::encode($this->title); ?></title>
<meta property='og:site_name' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel='stylesheet' type='text/css' href='<?php echo $this->theme->baseUrl; ?>/files/main_style.css' title='wsite-theme-css' />
<link rel="stylesheet" href="/web/ism/css/my-slider.css"/>
<script src="/web/ism/js/ism-2.2.min.js"></script>


<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
  <?php $this->beginBody(); ?>
<div id="header-outer-wrap">
  <div class="wrapper">
    <table id="header">
      <tr>
        <td id="logo"><span class='wsite-logo'><a href='/'><span id="wsite-title"><?php echo Html::encode(\Yii::$app->name); ?></span></a></span></td>
        <td id="header-right">
          <table>
            <tr>
              <td class="phone-number"></td>
              <td class="social">            
            		<a href="https://www.facebook.com/universitaspahlawanUP"> <img src="/web/images/fb.png" width="30px"></a>
             </td>
              <td class="social">            
            		<a href="https://wa.me/6285232904156?text=Isi Pesan">  <img src="/web/images/wa.png" width="40px"></a>
             </td>
              <td class="search"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <div id="navigation">
<?php echo Menu::widget(array(
        'options' => array('class' => 'nav'),
        'items' => array(
          array('label' => 'Home', 'url' => array('/site/index')),
          array('label' => 'Prodi', 'url' => array('/site/about')),
          array('label' => 'Pengumuman', 'url' => array('/site/contact')), 
          array('label' => 'Pendaftaran', 'url' => array('/site/pendaftaran')),
          Yii::$app->user->isGuest ?
            array('label' => 'Login', 'url' => array('/site/login')) :
            
            array('label' => 'Logout (' . Yii::$app->user->identity->username .')', 
                'url' => array('/site/logout'),
                'template' => '<a href="{url}" data-method="post">{label}</a>'),
        ),
      )); ?>
    </div>
  </div>
</div>
<div id="main-wrapper">
  <div class="wrapper">
    <div id="content">
    
  
      <div id="banner-container">
        <div id="banner">
        <div class='container'>
                <div class="ism-slider" data-play_type="loop" data-transition_type="zoom" id="my-slider">
                  <ol>
                    <li>
                      <img src="/web/ism/image/slides/1.jpg">
                     
                    </li>
                    <li>
                      <img src="/web/ism/image/slides/2.jpg">
                
                    </li>
                    <li>
                      <img src="/web/ism/image/slides/3.jpg">
                     
                    </li>
                  </ol>
                </div>      
        </div>     
        </div>
        <div class="clear"></div>
      </div>
      <div id="text">
        <div id='wsite-content' class='wsite-not-footer'>
          <?php echo $content; ?>
</div>

      </div>
    </div>
    <div id="footer"><?php echo Html::encode(\Yii::$app->name); ?>

</div>
    <div class="clear"></div>
  </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>