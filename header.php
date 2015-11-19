<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(''); ?></title>
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/icons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/icons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/icons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/icons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/library/icons/manifest.json">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/icons/mstile-144x144.png">
        <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/library/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Your Name">
        <meta property="og:site_name" content="yoursite.com">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]><script src="https://cdn.rawgit.com/aFarkas/html5shiv/master/dist/html5shiv.min.js"></script><![endif]-->
        <script>!function(){if("-ms-user-select"in document.documentElement.style&&navigator.userAgent.match(/IEMobile\/10\.0/)){var a=document.createElement("style");a.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}")),document.getElementsByTagName("head")[0].appendChild(a)}}();</script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
        <script>!function(){var a=document.getElementsByTagName("body")[0],b=document.createElement("div");a.appendChild(b),b.id="loader",b.className="loading";var c=document.getElementById("loader");window.onload=function(){c.className="loaded",setTimeout(function(){a.removeChild(c)},1e3)},window.onbeforeunload=function(){a.id="byebye"}}();</script>
        
        <?php /*
        <div id="container">
            <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
                <div id="inner-header">
                    <p id="logo" itemscope itemtype="http://schema.org/Organization">
                        <a href="<?php echo home_url(); ?>" rel="nofollow">
                            <?php bloginfo('name'); ?>
                        </a>
                    </p>
                    <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <?php wp_nav_menu(array(
                        'container' => false,                           // remove nav container
                        'container_class' => 'menu',                    // class of container (should you choose to use it)
                        'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                        'menu_class' => 'nav top-nav',                  // adding custom nav class
                        'theme_location' => 'main-nav',                 // where it's located in the theme
                        'before' => '',                                 // before the menu
                        'after' => '',                                  // after the menu
                        'link_before' => '',                            // before each link
                        'link_after' => '',                             // after each link
                        'depth' => 0,                                   // limit the depth of the nav
                        'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>
                    </nav>
                </div>
            </header>
            */ ?>