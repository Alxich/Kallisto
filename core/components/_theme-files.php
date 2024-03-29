<?php
/**
 * Register all necessary files for pages like scripts styles etc.
 * Do not forget to initial that in fucntions.php (root directory)
 */


/**
 * Register all necessary files for pages like scripts styles etc.
 * Do not forget to initial that in fucntions.php (root directory)
 */

/**
 * include custom jQuery 3.6.0.
 */
function including_custom_jquery()
{

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/source/assets/jquery/jquery.min.js', array(), null, false);

}

add_action('wp_enqueue_scripts', 'including_custom_jquery');

/**
 * Load scripts and css for owl carousel 2.3.4
 */
function load_owl_carousel()
{

    wp_enqueue_script('owl_carousel_min_js', get_stylesheet_directory_uri() . '/source/assets/owl-carousel/scripts/owl.carousel.min.js');

}

add_action('wp_enqueue_scripts', 'load_owl_carousel');

if (!function_exists('add_styles')) {

    function add_styles()
    {

        wp_enqueue_style('owl', get_template_directory_uri() . '/source/assets/owl-carousel/styles/owl.carousel.min.css');
        wp_enqueue_style('owl-theme', get_template_directory_uri() . '/source/assets/owl-carousel/styles/owl.theme.default.min.css');

    }

}

add_action('wp_print_styles', 'add_styles');

/**
 * Load scripts and css for fancybox
 */
function load_fancybox_script_plugin()
{

    wp_enqueue_script('kallisto-fancybox-script', get_template_directory_uri() . '/source/assets/fancybox/jquery.fancybox.min.js');

}

add_action('wp_enqueue_scripts', 'load_fancybox_script_plugin');

function load_fancybox_styles_plugin()
{

    wp_enqueue_style('kallisto-fancybox-style', get_template_directory_uri() . '/source/assets/fancybox/jquery.fancybox.min.css');

}

add_action('wp_print_styles', 'load_fancybox_styles_plugin');

/**
 * Load css styles for font-awesome
 */
function load_font_awesome_styles_plugin()
{

    wp_enqueue_style('kallisto-font-awesome-style', get_template_directory_uri() . '/source/assets/font-awesome/css/font-awesome.min.css');

}

add_action('wp_print_styles', 'load_font_awesome_styles_plugin');

/**
 * Load scripts and css for aos
 */
function load_aos_script_plugin()
{

    wp_enqueue_script('kallisto-aos-script', get_template_directory_uri() . '/source/assets/aos-animation/aos.js');

}

add_action('wp_enqueue_scripts', 'load_aos_script_plugin');

function load_aos_styles_plugin()
{

    wp_enqueue_style('kallisto-aos-style', get_template_directory_uri() . '/source/assets/aos-animation/aos.css');

}

add_action('wp_print_styles', 'load_aos_styles_plugin');

/**
 * Enqueue scripts and styles.
 */
function kallisto_scripts()
{

    wp_enqueue_style( 'kallisto-normalize', get_template_directory_uri().'/source/assets/normalize/normalize.min.css' );
    wp_enqueue_style( 'kallisto-main-style', get_template_directory_uri().'/source/dist/css/main.css' );
    wp_enqueue_style( 'kallisto-style', get_stylesheet_uri(), array(), _Kallisto_VERSION );
    wp_style_add_data( 'kallisto-style', 'rtl', 'replace' );
    wp_enqueue_style( 'kallisto-media-style', get_template_directory_uri().'/source/dist/css/media.css' );

    wp_enqueue_script( 'kallisto-scripts', get_template_directory_uri() . '/source/dist/js/app.js', array(), _Kallisto_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    {

        wp_enqueue_script( 'comment-reply' );

    }

}

add_action('wp_enqueue_scripts', 'kallisto_scripts');

?>