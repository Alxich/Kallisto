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

<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>