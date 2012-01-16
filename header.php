<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="<?php bloginfo('template_directory'); ?>/js/google-code-prettify/prettify.css" rel="stylesheet">
<?php
    wp_enqueue_script( 'jquery' );
    wp_head();
?>
</head>
<body <?php body_class(); ?>>
<div class="container">
    <div class="hero-unit">
        <a href="/"><img src="/wp-content/plugins/vulnero/public/images/logo.png" alt=""/></a>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </div>
    <div id="access" role="navigation">
        <?php wp_nav_menu(array(
            'container_class' => 'menu-header',
            'theme_location'  => 'primary',
            'menu_class'      => 'tab-navigation',
            'fallback_cb'     => false
        )); ?>
    </div><!-- #access -->
