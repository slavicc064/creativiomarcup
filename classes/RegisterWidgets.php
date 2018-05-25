<?php

class RegisterWidgets
{
    public function __construct()
    {
        add_action( 'widgets_init', array( $this, 'register_widgets' ) );
    }
    public function register_widgets()
    {

        register_sidebar( array(
            'name' => "Left Sidebar",
            'id' => 'left-sidebar',
            'description' => 'Left sidebar widgets',
            'before_title' => '<h1>',
            'after_title' => '</h1>'
        ) );

        register_sidebar( array(
            'name' => "Right Sidebar",
            'id' => 'right-sidebar',
            'description' => 'Right sidebar widgets',
            'before_title' => '<h1>',
            'after_title' => '</h1>'
        ) );

        register_sidebar(
            array(
                'name'          => __( 'Footer 1', 'creativiomarcup' ),
                'id'            => 'footer-widget',
                'description'   => __( 'Add widgets here to appear in your footer.', 'creativiomarcup' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        register_sidebar(
            array(
                'name'          => __( 'Footer 2', 'creativiomarcup' ),
                'id'            => 'footer-widget-2',
                'description'   => __( 'Add widgets here to appear in your footer.', 'creativiomarcup' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

    }

}
new RegisterWidgets;