<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="blog-post">

        <h2 class='blog-post-title'><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h2>


        <div class="plash">
            <p class='blog-post-meta date'><?php the_date("M t"); ?></p>
            <i class="fa fa-file-text" aria-hidden="true"></i>
        </div>

        <p class='blog-post-meta'><?php the_tags(); ?></p>

        <p class='blog-post-meta'><?php the_comment(); ?></p>

        <?php the_post_thumbnail("<img class='featurette-image img-fluid mx-auto'>");?>

        <p class='excerpt'><?php the_excerpt();?></p>

    </div><!-- /.blog-post -->

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
