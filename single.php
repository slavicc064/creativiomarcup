<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class=col-md-3>
                <?php get_sidebar("left"); ?></div>
            <div class="col-md-6">
                <?php get_template_part('templates/single', 'loop');?>
                <?php comments_template(); ?></div>
            <div class="col-md-3">
                <?php get_sidebar("right"); ?></div>
        </div>
    </div>
<?php get_footer();?>