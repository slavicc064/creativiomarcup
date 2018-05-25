<?php if ( have_posts() ) : the_post(); ?>
    <?php get_template_part("format", get_post_format());?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>