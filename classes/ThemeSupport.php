<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.05.18
 * Time: 9:28
 */

class ThemeSupport
{
    public function __construct(){
        add_action( 'after_setup_theme', array( $this, 'add_post_formats' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'theme_name_scripts' ) );
    }

    public function add_post_formats(){
        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video',
            'audio', 'chat' ) );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-logo' );
    }

    public function theme_name_scripts() {

        wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/web-fonts-with-css/css/fontawesome-all.css' );

        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );

        wp_enqueue_style( 'roboto', "//fonts.googleapis.com/css?family=Roboto" );

        wp_enqueue_style( 'style-name', get_stylesheet_uri() );

        wp_deregister_script('jquery');

        wp_register_script('jquery', get_template_directory_uri() . '/jquery/jquery-3.2.1.slim.min.js', null, null, true);

        wp_enqueue_script('jquery');

        wp_enqueue_script( 'popper', get_template_directory_uri() . '/popper/dist/umd/popper.min.js', array('jquery'));

        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('popper'));

        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );

    }
}
new ThemeSupport;