<?php
//Get global values
global $post;

get_header();
?>
    <?php //Get template for post without making lot moves with current file
        get_template_part('/templates/tpl.post', 'page');
    ?>
<?php get_footer(); ?>