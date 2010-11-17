<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
  <head profile="http://gmpg.org/xfn/11">
  <title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:regular,bold&subset=latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
    <?php wp_head() // For plugins ?>
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
    </head>
    <body class="<?php sandbox_body_class() ?>">
    <div id="wrapper" class="hfeed">

    <div id="header"><div class="row">
    <div class="column grid_3">
    <a href="<?=bloginfo('home')?>/" title="<?=wp_specialchars(get_bloginfo('name'),1)?>" rel="home">
    <img id="logo" src="<?=bloginfo('template_directory')?>/png/logo.png"></a></div>
    <div class="column grid_9">

    <ul class="nav">
    <li><a href="http://www.aeste.my">Home</a></li>
    <li><a href="http://blog.aeste.my">Blog</a></li>
    <li><a href="http://wiki.aeste.my">Wiki</a></li>
    </ul>

    </div>
    </div></div>
    <div id="redbox" class="row">
    <div id="lred" class="column grid_3">

    <div style="font-size:small">
    <b>ELEGANCE</b>
    <p>There is an ineffable quality to some technology, described by its creators as concinnitous, or technically sweet, or a nice hack - signs that it was made with great care by one who was not merely motivated but inspired.</p>
    The Diamond Age
    </div>

    </div>
    <div id="rred" class="column grid_9">
    The world's smallest and fastest 32-bit multi-threaded cores.
    </div>
    </div><!--redbox-->
<div class="row wline">&nbsp;</div>