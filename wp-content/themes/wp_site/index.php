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

</head>
<body>
<div id="wrap">
    <div id="header">
        <h1><a href="#">Manilla</a></h1>
        <ul>
            <li id="home"><a href="#"> Home</a></li>
            <li id="about"><a href="#">About</a></li>
            <li id="contact"><a href="#">Contact</a></li>
            <li id="search"><img src="<?php echo bloginfo('template_directory') . '../img/search.png'; ?>" /> <input type="text" name="search" value="search"/></li>
            <li id="rss"><a href="#"><img src="<?php echo bloginfo('template_directory') . '../img/rss.png'; ?>" /></a></li>
        </ul>
        <p id="slogan"> Another Rarely Updated Blog</p>

    </div> <!--  End of header  -->

    <div id="main">
        <div id="primary">
            <div class="post-item">
                <img src="<?php echo bloginfo('template_directory') . '../img/model1.jpg'; ?>" />
                <h2>Another New Tutorial</h2>

                <p class="meta">Inspiration 41+</p>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit
                    auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                    consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>
            </div> <!--  End of post-item  -->

            <div class="post-item">
                <img src="<?php echo bloginfo('template_directory') . '../img/model2.jpg'; ?>" />
                <h2>Another New Tutorial</h2><p class="meta">Inspiration 41+</p>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit
                    auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                    consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>
            </div> <!--  End of post-item  -->



            <div class="post-item">
                <img src="<?php echo bloginfo('template_directory') . '../img/model3.jpg'; ?>" />
                <h2>Another New Tutorial</h2>
                <p class="meta">Inspiration 41+</p>
                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit
                    auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                    consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>
            </div> <!--  End of post-item  -->

            <a href="#" class="more">More ...</a>
        </div>
        <!--  End of primary  -->


        <div id="secondary">
            <div class="secondary-box" id="photos">
                <h3>Flickr</h3>
                <img class="fetured-image" src="<?php echo bloginfo('template_directory') . '../img/grass.jpg'; ?>"/>
                <p>featured image</p>
                <div class="prevnext">
                    <a href="#"><img src="<?php echo bloginfo('template_directory') . '../img/arrow-left.png'; ?>"/></a>
                    <a href="#"><img src="<?php echo bloginfo('template_directory') . '../img/arrow-right.png'; ?>" /></a>
                </div> <!--  End of prevnext  -->
            </div>  <!--  End of secondary-box  -->

            <div class="secondary-box" id="recent-entries">
                <h3> Recent Entries</h3>
                <ul>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                </ul>
            </div>  <!--  End of secondary-box  -->

            <div class="secondary-box" id="recent-entries">
                <h3> Recent Entries</h3>
                <ul>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                </ul>
            </div>  <!--  End of secondary-box  -->

        </div> <!--  End of secondary  -->
    </div> <!--  End of main  -->
</div> <!--  End of wrap  -->

</body>
</html>

