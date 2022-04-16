<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main home">
        <div class="container">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post();
                //Outputs the content
                the_content();
            endwhile; wp_reset_query(); ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>