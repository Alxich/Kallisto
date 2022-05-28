<?php
/**
 * That files help to change some function of plugins or wordpress.
 * Be carefully in changing some functions.
 * Do not forget to initial that in functions.php (root directory)
 */

/**
 *  Switch default core markup for search form, comment form, and comments
 *  to output valid HTML5.
 */
add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    )
);

/**
 *  Register new menus for theme
 */
function register_my_menus() {
    register_nav_menus(
        array(
            'Primary Header' => __( 'Primary Header' ),
            'Primary Footer' => __( 'Primary Footer' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

/**
 *   Add option page for default values of page,footer,header,etc.
 */
if( function_exists('acf_add_options_page') ) {
    $args = array(
        'page_title' => 'Theme settings',
        'menu_title' => '',
        'menu_slug' => 'Options',
        'post_id' => 'options',
    );
    acf_add_options_page( $args );
}

/**
 *   Allow loading and read svg format of images
 */
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 *   Remove <p> and <br/> from Contact Form 7
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 *   Add excerpts support to pages in WordPres admin panel
 */
add_post_type_support( 'page', 'excerpt' );


/**
 *   Disable comments in media for safety rule
 */
function filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

/**
 *   Removes comments from admin menu for safety rule
 */
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

/**
 *   Removes comments from post and pages for safety rule
 */
add_action('init', 'remove_comment_support', 100);
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}

/**
 *   Removes comments from admin bar for safety rule
 */
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

?>