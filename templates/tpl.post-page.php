<?php
/**
 * This template used for posts there is main functions for yours posts.
 * It's redirects from root/core/template-parts/single-post.php
 * There is no needed to show header and footer functions (already loaded).
 */
?>

<section id="post">
    <div class="container">
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php

// Get excerpt by id with count of words
//function get_excerpt_by_id($post_id){
//    $the_post = get_post($post_id); //Gets post ID
//    $the_excerpt = ($the_post ? $the_post->post_content : null); // Gets post_content to be used as a basis for the excerpt
//    $excerpt_length = 7; // Sets excerpt length by word count
//    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); // Strips tags and images
//    $words = explode(' ', $the_excerpt, $excerpt_length + 1);
//
//    if(count($words) > $excerpt_length) :
//        array_pop($words);
//        array_push($words, '…');
//        $the_excerpt = implode(' ', $words);
//    endif;
//
//    return $the_excerpt;
//}

function get_excerpt_by_id($post_id){
    $the_post = get_post($post_id);
    $the_excerpt = $the_post->post_excerpt;
    return $the_excerpt;
}

$current_post = $post->ID; // Get current post ID
$current_cat = get_the_category($current_post); // From post ID get category
foreach($current_cat as $cd){
    $current_cat_name = $cd->cat_name;
}

$args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'post__not_in'   => array($current_post), // Exclude current post in loop
    'category_name'  => $current_cat_name,
    'orderby'        => 'date', // Order by final edit date
    'posts_per_page' => 4, // last 4 hide by css
    'hide_empty'     => false,
);
$post_more = new WP_Query( $args );
if ( $post_more->have_posts() ) { ?>
    <section id="posts">
        <div class="main-title">
            <h3>עוד מאמרים</h3>
        </div>
        <div class="container">
            <?php while ( $post_more->have_posts() ) : $post_more->the_post();
                /*Get values for post*/
                $post_id = $post_more->ID;
                $category = get_the_category($post_id);
                $category_link = get_category_link($category[0] -> term_id);
                $category_name = $category[0]->name;
                $data_create = get_the_date();
                $author_id =  get_the_author_meta('ID');
                $author_name = get_the_author_meta('user_nicename', $author_id);
                $author_link = get_author_posts_url($author_id);
                $post_text = get_excerpt_by_id($post_id);
                $title_btn = 'יש עוד';
                $post_title = get_the_title();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_more->post->ID ), 'single-post-thumbnail' );

                echo '<div class="post">';
                    echo '<a class="thumbnail" href="'. get_permalink() .'" target="_self">';
                        if($image) {
                            echo '<img src="' . $image[0] . '" alt="product-thumbnail-img">';
                        }else {
                            echo '<img src="/wp-content/uploads/woocommerce-placeholder.png" alt="post-thumbnail-img">';
                        }
                    echo'</a>';
                    echo '<div class="info-bar">';
                        echo '<div class="post-info">';
                            echo '<div class="category">';
                                echo '<a href="'. $category_link .'" target="_self">'. $category_name .'</a>';
                            echo '</div>';
                            echo '<div class="date">';
                                echo '<p>'. $data_create .'</p>';
                            echo '</div>';
                        echo '</div>';
                        echo '<a class="title" href="'. get_permalink() .'" target="_self">';
                            echo '<h4>'. $post_title .'</h4>';
                        echo '</a>';
                    echo '</div>';
                    echo '<div class="content">';
                        echo '<a class="author" href="'. $author_link .'" target="_self"> Edit '. $author_name .'"</a>';
                        echo '<a class="text-block" href="'. get_permalink() .'" target="_self">'. $post_text .'"</a>';
                        echo '<a class="more-info" href="'. get_permalink() .'" target="_self">'. $title_btn .'</a>';
                    echo '</div>';
                echo '</div>';
            endwhile;
            wp_reset_postdata();?>
        </div>
    </section>
<?php }?>