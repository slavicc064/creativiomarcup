<?php

class Editor
{
    public function __construct()
    {
        add_action( 'admin_enqueue_scripts', array( $this, 'ex_first_css' ) );
        add_action( 'admin_head', array( $this, 'ex_add_my_first_button' ) );
        add_shortcode( 'row', array( $this, 'add_row' ) );
        add_shortcode( 'row_full_width', array( $this, 'add_row_full_width' ) );
        add_shortcode( 'col', array( $this, 'add_column' ) );
        add_shortcode( 'button', array( $this, 'add_button' ) );
        add_shortcode( 'text', array( $this, 'add_text' ) );
        add_action( 'current_screen', array( $this, 'my_theme_add_editor_styles' ) );
    }

    //Button
    public function ex_add_my_first_button()
    {
        global $typenow;

        if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') )
        {
            return;
        }

        if( ! in_array( $typenow, array( 'post', 'page' ) ) )
            return;

        if ( get_user_option('rich_editing') == 'true')
        {
            add_filter("mce_external_plugins", array( $this, "ex_add_tinymce_plugin" ) );
            add_filter('mce_buttons', array( $this, 'ex_register_my_first_button' ) );
        }
    }

    public function ex_add_tinymce_plugin($plugin_array)
    {
        $btnjs = get_template_directory_uri()."/editor_button/btn.js";
        $plugin_array = [
            'row_button' => $btnjs,
            'row_full_width_button' => $btnjs,
            'ex_col-2_button' => $btnjs,
            'ex_col-3_button' => $btnjs,
            'ex_col-4_button' => $btnjs,
            'ex_col-2-3_1-3_button' => $btnjs,
            'ex_col-1-4_3-4_button' => $btnjs,
            'ex_col-1-4_1-2_1-4_button' => $btnjs,
            'ex_col-5-6_1-6_button' => $btnjs,
            'ex_col-6_button' => $btnjs,
            'ex_col-1-6_4-6_1-6_button' => $btnjs,
            'ex_col-1-6_1-6_1-6_1-2_button' => $btnjs,
            'text_button' => $btnjs,
            "add_button" => $btnjs
        ];
        return $plugin_array;
    }

    public function ex_register_my_first_button($buttons)
    {
        array_push(

            $buttons,
            'row_button',
            'row_full_width_button',
            "ex_col-2_button" ,
            "ex_col-3_button",
            "ex_col-4_button",
            "ex_col-2-3_1-3_button",
            "ex_col-1-4_3-4_button",
            "ex_col-1-4_1-2_1-4_button",
            "ex_col-5-6_1-6_button",
            "ex_col-6_button",
            "ex_col-1-6_4-6_1-6_button",
            "ex_col-1-6_1-6_1-6_1-2_button",
            "text_button",
            "add_button"

        );
        return $buttons;
    }

    public function ex_first_css()
    {
        wp_enqueue_style( 'ex_first', get_template_directory_uri() . "/editor_button/btn.css" );
        wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/web-fonts-with-css/css/fontawesome-all.css');
    }

    public function my_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . '/fontawesome/web-fonts-with-css/css/fontawesome-all.css' );
    }

    //Shortcode
    public function add_row($atts, $content)
    {
        echo "<div class='container'><div class='row'>";

        echo do_shortcode( $content );

        echo "</div></div>";
    }
    public function add_row_full_width($atts, $content)
    {
        echo "<div class='container-fluid'><div class='row'>";

        echo do_shortcode( $content );

        echo "</div></div>";
    }

    public function add_column( $atts, $content )
    {
        if ( !empty( $atts['class'] ) )
        {
            echo "<div class='col-lg-{$atts['class']} col-md-{$atts['class']} col-sm-6 col-xs-12'><div class='lg-{$atts['class']} mb-{$atts['class']} sm-6 xs-12 box-shadow'>";

            echo do_shortcode( $content );

            echo "</div></div>";
        }

        else
        {
            echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'><div class='lg-12 mb-12 sm-12 xs-12 box-shadow'>";

            echo do_shortcode( $content );

            echo "</div></div>";
        }

    }

    public function add_button( $atts, $content )
    {
        echo '<div class="btn-group"><button type="button" class="btn btn-' . $atts['btn'] . '">' . $content . '</button></div>';
    }

    public function add_text( $atts, $content )
    {
        echo '<p class="card-text">';
        echo do_shortcode($content);
        echo '</p>';
    }
}
new Editor;
?>