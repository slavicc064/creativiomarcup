<?php if ( have_posts() ) : the_post(); ?>
    <?php
    the_title();
    the_content();
    ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>