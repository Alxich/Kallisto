<?php get_header();

$not_fount_text = 'רשומות לא נמצאו';
$category_title = 'קטגוריה';
$tag_title = 'תָג';
$archive_for_title = 'ארכיון';
$archive_title = 'ארכיון';


function get_excerpt_by_id($post_id){
    $the_post = get_post($post_id);
    $the_excerpt = $the_post->post_excerpt;
    return $the_excerpt;
}

?>
<section id="posts">
    <div class="title-line">
        <h1>
            <?php if( is_author() ):
                echo $author_name;
            elseif( is_category() ):
                single_cat_title();
            elseif( is_tag() ):
                single_tag_title();
            elseif( is_year() ):
                the_time('Y');
            elseif( is_month() ):
                the_time('F Y');
            else:
                echo ''. $archive_title .'';
            endif; ?>
        </h1>
    </div>
    <div class="container">
        <?php if ( have_posts() ):
            while ( have_posts() ) : the_post();
                $current_post = get_the_ID(); // Get current post ID
                $current_cat = get_the_category($current_post); // From post ID get category
                foreach($current_cat as $cd){
                    $current_cat_name = $cd->cat_name;
                }

                /*Get values for post*/
                $post_id = get_the_ID();
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
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );

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
            endwhile; wp_reset_query();
        else:
          echo '<h2>'. $not_fount_text .'</h2>';
        endif; ?>
    </div>
</section>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <div class="prev">
    <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
  </div>
  <div class="next">
    <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
  </div>
<?php endif; ?>

<?php get_footer(); ?>