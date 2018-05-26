<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <?php get_template_part('templates/loop');?>
        </div>
        <aside class="col-md-4 blog-sidebar">
            <?php get_sidebar('right');?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>