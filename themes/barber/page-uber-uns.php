<?php get_header(); ?>

<?php get_template_part('parts/content', 'about'); ?>

<?php
while (have_posts()) : the_post(); ?>

<?php get_template_part('parts/content', 'page');

    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile;
?>

<?php get_footer(); ?>