<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php get_sidebar('left'); ?>

            </div>
            <div class="col-md-8">
                <?php get_template_part('templates/loop');?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>