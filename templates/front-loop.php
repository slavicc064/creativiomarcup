<?php if ( have_posts() ) :  the_post(); ?>

    <div>
        <?php the_title('<h1>', '</h1>');?>
        <p><?php the_content()?></p>
    </div>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' );?></p>
<?php endif; ?>