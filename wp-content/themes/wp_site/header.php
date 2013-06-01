
<!--
  Created by JetBrains PhpStorm.
  User: solidstunna101
  Date: 01/06/13
  Time: 09:29
  To change this template use File | Settings | File Templates.
 -->

<!DOCTYPE html>
<html>
<head>
    <meta name="generator" content="wordpress <?php bloginfo('version'); ?>"/>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type');?> <?php bloginfo('charset'); ?>"/>


    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<link href="<?php bloginfo('stylesheet_url'); ?>" media="screen" rel="stylesheet" type="text/css"/>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo(rss2_url); ?>"/>
<link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
<link rel="shortcut icon" href="<?php echo bloginfo('template_directory') . '../img/favicon.ico'; ?>"/>
<?php wp_head(); ?>

</head>
<body>
<div id="wrap">
    <div id="header">
        <h1><a href="<?php bloginfo('url') ?>">Manilla</a></h1>
        <ul>
            <li id="home"><a href="#"> Home</a></li>
            <?php wp_list_pages('title_li='); ?>
        </ul>
        <div id="search">
            <img src="<?php echo bloginfo('template_directory') . '../img/search.png'; ?>" />
            <?php include TEMPLATEPATH . '/searchform.php';  ?>


            <a href="<?php bloginfo('rss2_url'); ?>">
                <img src="<?php echo bloginfo('template_directory') . '../img/rss.png'; ?>" alt="rss" />

            </a>
        </div>


        <p id="slogan"> Another Rarely Updated Blog</p>

    </div> <!--  End of header  -->