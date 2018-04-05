<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>


<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <a href="<?php echo home_url() ?>" class="logo"><strong><?php bloginfo('name') ?></strong></a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>


    <!-- Menu -->
    <nav id="menu">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header',
            'container' => 'ul',
            'menu_class' => 'links'
        ) );

        ?>
    </nav>