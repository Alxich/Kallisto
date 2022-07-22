<?php
/**
 *  There are all necessary functions for Woocommerce Plugin.
 *  Allows to add some functionality for your website.
 *  Do not forget to initial that in functions.php (root directory).
 */

/**
 *   Allows you to make changes in root/core/plugins/woocommerce/
 */
add_theme_support( 'woocommerce' );

/**
 *   Allows you to move main WC template directory under some folders.
 */
add_filter( 'woocommerce_template_path', function( $path )
{

    //Init your route to folder.
    $path_files = '/core/plugins/woocommerce/';

    //Create full route
    $my_path = get_stylesheet_directory() . $path_files;

    //Changes default route.
    return file_exists( $my_path ) ? $path_files : $path;

});

/**
 *   Add support of features for custom theme
 */
add_action( 'after_setup_theme', 'kallisto_woocommerce_setup' );
function kallisto_woocommerce_setup()
{

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}

/**
 *   Remove unused function in woocommerce_single_product_summary
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

/**
 *   Remove unused function in woocommerce_before_main_content
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

/**
 *   Remove unused function in woocommerce_before_shop_loop
 */
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

/**
 *   Remove unused checkboxes in product settings
 */
function remove_product_types($types)
{
    unset($types['virtual']);
    unset($types['downloadable']);
    return $types;
}

add_filter('product_type_options', 'remove_product_types');

/**
 *   Moving text inside span in message block Woocommerce
 */
function custom_add_to_cart_message_html( $message, $products )
{

    $count = 0;

    foreach ( $products as $product_id => $qty )
    {

        $count += $qty;

    }

    // The custom message is just below
    $added_text = sprintf( _n("%s יש לפריט %s", "%s יש לפריטים %s", $count, "woocommerce" ), $count, __( "נוספו לסל שלך.", "woocommerce" ) );

    // Output success messages
    if ( 'yes' === get_option( 'woocommerce_cart_redirect_after_add' ) )
    {

        $return_to = apply_filters( 'woocommerce_continue_shopping_redirect', wc_get_raw_referer() ? wp_validate_redirect( wc_get_raw_referer(), false ) : wc_get_page_permalink( 'shop' ) );

        $message = sprintf( '<span>%s</span><a href="%s" class="button wc-forward">%s</a>', esc_html( $added_text ), esc_url( $return_to ), esc_html__( 'Continue shopping', 'woocommerce' ) );

    }
    else
    {

        $message = sprintf( '<span>%s</span><a href="%s" class="button wc-forward">%s</a>', esc_html( $added_text ), esc_url( wc_get_page_permalink( 'cart' ) ), esc_html__( 'View cart', 'woocommerce' ) );

    }

    return $message;
}

add_filter( 'wc_add_to_cart_message_html', 'custom_add_to_cart_message_html', 10, 2 );

/**
 * Change WooCommerce Add to cart message with a checkout link.
 */
function add_to_cart_message_html( $message, $products )
{

    $count = 0;
    $titles = array();

    foreach ( $products as $product_id => $qty )
    {

        $format_text = '<span>'.  strip_tags( get_the_title( $product_id ) ) .'</span>' . ( $qty > 1 ? ' &times; '. absint( $qty )  : '' );

        $titles[] = sprintf( esc_html__('%s', 'mytheme'), $format_text, 'Item name in quotes', 'woocommerce' );

        $count += $qty;

    }

    $titles = array_filter( $titles );
    $added_text = sprintf( _n(

        '%s נוסף לעגלת הקניות שלך.', // Singular
        '%s נוסף לעגלת הקניות שלך.', // Plural

        $count, // Number of products added

        'woocommerce' // Textdomain

    ), wc_format_list_of_items( $titles ) );

    $message = sprintf( '<span class="text">%s</span><a href="%s" class="button wc-forward">%s</a><a href="%s" class="button wc-forward">%s</a>',  $added_text , esc_url( wc_get_checkout_url() ), esc_html__( 'סה"כ לתשלום', 'woocommerce' ),  esc_url( wc_get_cart_url() ), esc_html__( 'מעבר לתשלום', 'woocommerce' ) );

    return $message;

}

add_filter( 'wc_add_to_cart_message_html', 'add_to_cart_message_html', 10, 2 );

?>