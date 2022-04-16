<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <title>
        <?php
          if( ! is_home() ):
            wp_title( '|', true, 'right' );
          endif;
          bloginfo( 'name' );
        ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
    <header id="masthead" class="site-header">

    </header><!-- #masthead -->

    <div id="primary" class="content-area">
        <main id="main" class="site-main home">