<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_template_part('loop', 'single');?>
    <?php // include(TEMPLATEPATH . '/file.php');?>
<?php comments_template(); ?>
<?php get_footer(); ?>