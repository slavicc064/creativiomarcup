<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="blog-post">

        <h2 class='blog-post-title'><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h2>

        <p class='blog-post-meta'><?php the_time(); ?></p>

        <?php the_post_thumbnail("<img class='featurette-image img-fluid mx-auto'>");?>

        <p class='excerpt'><?php the_excerpt();?></p>

    </div><!-- /.blog-post -->

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
