<?php get_header(); ?>
<?php get_sidebar("left"); ?>
<?php get_template_part('templates/single', 'loop');?>
<?php comments_template(); ?>
<?php get_sidebar("right"); ?>
<?php get_footer();?>