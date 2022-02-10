<?php
/**
 *  Register all necessary files for pages.
 *  Moving core files from root to core directory and download theme files.
 *  Do not forget to initial that in functions.php (root directory).
 *  Get all necessary theme files:
 */

// Add our custom index template to the top of the index template queue
add_filter( 'index_template_hierarchy', function( $templates ) {
    array_unshift( $templates, '/core/template-parts/index.php' );
    return $templates;
});
// Add our custom 404 template to the top of the 404 template queue
add_filter( '404_template_hierarchy', function( $templates ) {
    array_unshift( $templates, '/core/template-parts/404.php' );
    return $templates;
});
// Add our custom archive template to the top of the archive template queue
add_filter( 'archive_template_hierarchy', function( $templates ) {
    array_unshift( $templates, '/core/template-parts/archive.php' );
    return $templates;
});
// Add our custom single template to the top of the single template queue
add_filter( 'single_template_hierarchy', function( $templates ) {
    array_unshift( $templates, '/core/template-parts/single.php' );
    return $templates;
});
// Add our custom search template to the top of the search template queue
add_filter( 'search_template_hierarchy', function( $templates ) {
    array_unshift( $templates, '/core/template-parts/search.php' );
    return $templates;
});
// Add our custom page template to the top of the page template queue
add_filter( 'page_template_hierarchy', function( $templates ) {
    array_unshift( $templates, '/core/template-parts/page.php' );
    return $templates;
});
// Add our custom comments template to the top of the comments template queue
add_filter( 'comments_template', 'my_plugin_comment_template' );
function my_plugin_comment_template( $comment_template ){
    global $post;

    if ( !( is_singular() && ( have_comments() || 'open' == $post->comment_status ) ) ) {
        return __DIR__ . '/core/template-parts/comments.php';
    }
    if( $post ){
        return __DIR__ . '/core/template-parts/comments.php';
    }
}

?>