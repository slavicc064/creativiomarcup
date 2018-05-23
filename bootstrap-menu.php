<?php
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {

        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {

        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );
?>