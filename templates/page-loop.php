<?php if ( have_posts() ) :  the_post(); ?>
    <?php
    the_title();
    the_content();
    the_permalink();
    the_excerpt();
    the_post_thumbnail();
    the_time();
    ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>