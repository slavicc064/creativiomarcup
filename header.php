<!doctype html>
<html lang="en">
<head>
    <title> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

    <?php

    $options = get_option( 'true_options' );

    if( $options['my_select'] )
    {
        if( $options['my_select'] == "light" || $options['my_select'] == "white" )
        {
            $navbar_style = "navbar-light bg-" . $options['my_select'];
        }
        else
        {
            $navbar_style = "navbar-dark bg-" . $options['my_select'];
        }
    }

    if( $options['my_radio'] )
    {
        if( $options['my_radio'] != "default" )
        {
            $navbar_position = $options['my_radio'];
        }
    }

    ?>

    <nav class="navbar navbar-expand-md <?= $navbar_position; ?> <?= $navbar_style; ?>" role="navigation">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 10,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
        </div>
    </nav>

    <?php echo get_custom_logo();?>
