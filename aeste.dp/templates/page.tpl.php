<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
   <head>  
   <title><?php print $head_title; ?></title>
   <meta http-equiv="X-UA-Compatible" content="IE=8">
   <?//=$head; ?>
   <link rel="shortcut icon" href="<?=$base_path . path_to_theme()?>/ae.ico">
   <link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold&subset=latin' rel='stylesheet' type='text/css'>
   <?=$styles; ?>
   <!--[if lte IE 6]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie6.css";</style><![endif]-->
   <!--[if IE 7]><style type="text/css" media="all">@import "<?php print $base_path . path_to_theme() ?>/css/ie7.css";</style><![endif]-->
   <?=$scripts; ?>
   </head>
   <body class="<?php print $body_classes; ?>">
   <div id="wrapper">
   
   <!-- ______________________ HEADER _______________________ -->

   <div id="header" class="row">
   <div class="column grid_3">
   <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img id="logo" src="<?=$base_path . path_to_theme()?>/css/logo.png" alt="<?php print t('Home'); ?>"/></a>
   </div>

   <div id="name-and-slogan" class="column grid_9">

    <ul class="nav">
    <li><a href="http://www.aeste.my">Home</a></li>
    <li><a href="http://blog.aeste.my">Blog</a></li>
    <li><a href="http://wiki.aeste.my">Wiki</a></li>
    <li><a href="http://www.aeste.my/files">Files</a></li>
    </ul>

   </div> <!-- /name-and-slogan -->
   </div> <!-- /header -->

   <div id="redbox" class="row">
   <div id="lred" class="column grid_3">
   <img width="200" height="200" id="quote" src="<?=$base_path . path_to_theme()?>/css/quote.png">
   </div>
   <img width="720" height="240" id="banner" src="<?=$base_path . path_to_theme()?>/css/banner.png">   
   </div>
   <div class="row wline">&nbsp;</div>

    <!-- ______________________ MAIN _______________________ -->

    <div id="container" class="row">

   <div class="sidebar column grid_3">
        <?php if (!empty($primary_links) || !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
	     <?php// if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
	     <?php// if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>
        <?php if ($left): ?>
          <div id="sidebar-first" class="first">
            <div id="sidebar-first-inner" class="inner">
              <?php print $left; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-left -->
        <?php if ($right): ?>
          <div id="sidebar-second" class="second">
            <div id="sidebar-second-inner" class="inner">
              <?php print $right; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-second -->
   </div>

      <div id="content-outer" class="column grid_9">
        <div id="content" class="inner">

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

          <?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              <?=$breadcrumb; ?>

              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?=$messages; ?>

              <?=$help; ?> 

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php print $content; ?>
          </div> <!-- /#content-area -->

          <?php print $feed_icons; ?>

          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

          </div>
        </div> <!-- /content-inner /content -->

      </div> <!-- /main -->

      <!-- ______________________ FOOTER _______________________ -->

<div class="hline row"></div>
<div id="footer" class="row">
   <div id="lfoot" class="column grid_3">
   <div id="addr" class="">
   <b>AESTE WORKS (M) SB</b><br/>
   6-3-6 Queens Avenue<br/>
   Jalan Bayam, Cheras<br/>
   55100 Kuala Lumpur, Malaysia<br/>
   info&#64;aeste.my<br/>
   </div>
   </div><!--lfoot-->
<div id="rfoot" class="column grid_9">
   <div class="row">
   <div class="column grid_9">
    <ul class="nav">
    <li><a href="http://www.aeste.my/careers">Careers</a></li>
    <li><a href="http://www.aeste.my/donate">Contribute</a></li>
    <li><a href="http://www.aeste.my/contactus">Contact Us</a></li>
    </ul>
   </div>
   <div class="row">
   <div id="copyright" class="column grid_9">
   <p>Copyright &copy; 2000-<?=date('Y')?> Aeste Works (M) Sdn Bhd.<br/>All Rights Reserved.</p>
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
      <?php endif; ?>
   </div>
   </div>
 </div>
</div><!--rfoot-->
</div>
<div class="wline row"></div>


    </div> <!-- /page -->
    <?php print $closure; ?>
  </body>
</html>
