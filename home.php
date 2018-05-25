<?php get_header(); global $true_page;?>
<h1>
    <strong>
        <?php
/*            print_r(get_option( "true_option" ));
        $option_name = 'true_options';

        $o = get_option( $option_name );
        $o[$id] = esc_attr( stripslashes($o[$id]) );

        echo $id;

        */?>
        <?php print_r( esc_attr( get_option( 'true_options' ) ) ); ?>
    </strong>
</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 blog-main">
            <?php get_template_part('templates/loop');?>
        </div>
        <aside class="col-md-4 blog-sidebar">
            <?php get_sidebar('left');?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>