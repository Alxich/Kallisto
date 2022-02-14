<?php
/**
 * Register all necessary files for pages like scripts styles etc.
 * Do not forget to initial that in fucntions.php (root directory)
 */

/**
 * include custom jQuery 3.6.0.
 */
function including_custom_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/source/assets/jquery/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'including_custom_jquery');

/**
 * Load scripts and css for owl carousel 2.3.4
 */
function load_owl_carousel() {
    wp_enqueue_script('owl_carousel_min_js', get_stylesheet_directory_uri() . '/source/assets/owl-carousel/scripts/owl.carousel.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'load_owl_carousel');

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
    function add_styles() {
        wp_enqueue_style( 'owl', get_template_directory_uri().'/source/assets/owl-carousel/styles/owl.carousel.min.css' );
        wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/source/assets/owl-carousel/styles/owl.theme.default.min.css' );
    }
}

/**
 * Load scripts and css for fancybox
 */
function load_fancybox_script_plugin() {
    wp_enqueue_script( 'kallisto-fancybox-script', get_template_directory_uri() . '/source/assets/fancybox/jquery.fancybox.min.js', array(), _Kallisto_VERSION, true );
}
add_action('wp_enqueue_scripts', 'load_fancybox_script_plugin');

function load_fancybox_styles_plugin() {
    wp_enqueue_style( 'kallisto-fancybox-style', get_template_directory_uri().'/source/assets/fancybox/jquery.fancybox.min.css' );
}
add_action('wp_print_styles', 'load_fancybox_styles_plugin');

/**
 * Enqueue scripts and styles.
 */
function kallisto_scripts() {
    wp_enqueue_style( 'kallisto-normalize', get_template_directory_uri().'/source/assets/normalize/normalize.css' );
    wp_enqueue_style( 'kallisto-main-style', get_template_directory_uri().'/source/dist/main.min.css' );
    wp_enqueue_style( 'kallisto-style', get_stylesheet_uri(), array(), _Kallisto_VERSION );
    wp_style_add_data( 'kallisto-style', 'rtl', 'replace' );

    wp_enqueue_script( 'kallisto-scripts', get_template_directory_uri() . '/source/dist/app.min.js', array(), _Kallisto_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'kallisto_scripts' );

?>