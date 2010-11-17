<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
  <head profile="http://gmpg.org/xfn/11">
  <title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold&subset=latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
    <?php wp_head() // For plugins ?>
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
    </head>
    <body class="<?php sandbox_body_class() ?>">
    <div id="wrapper" class="hfeed">
    <div id="header"><div class="row">
    <div id="blog-title" class="column grid_3">
    <a href="<?=bloginfo('home')?>/" title="<?=wp_specialchars(get_bloginfo('name'),1)?>" rel="home">
    <img src="<?=bloginfo('template_directory')?>/png/logo.png"></a></div>
    <div id="blog-banner" class="column grid_9">

    <ul class="hnav">
    <li><a href="#">About</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Wiki</a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Files</a></li>
    <li><a href="#">Contact</a></li>
    </ul>

    </div>
    </div></div>
    <div id="redbox" class="row">
    <div id="dred" class="column grid_3">

    <ul class="rnav">
    <li><a href="#">About</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Wiki</a></li>
    </ul>

    </div>
    <div class="column grid_9">
    The world's smallest and fastest 32-bit multi-threaded cores.
    </div>
    </div><!--lred-->
    </div><!--redbox-->