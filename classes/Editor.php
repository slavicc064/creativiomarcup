<?php

class Editor
{
    public function __construct()
    {
        add_action( 'admin_enqueue_scripts', array( $this, 'ex_first_css' ) );
        add_action( 'admin_head', array( $this, 'ex_add_my_first_button' ) );
        add_shortcode( 'container', array( $this, 'add_container' ) );
        add_shortcode( 'col', array( $this, 'add_column' ) );
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
        $plugin_array['ex_first_button'] = get_template_directory_uri()."/editor_button/btn.js";
        $plugin_array['ex_my_button'] = get_template_directory_uri()."/editor_button/btn.js";
        return $plugin_array;
    }

    public function ex_register_my_first_button($buttons)
    {
        array_push($buttons, "ex_first_button", "ex_my_button");
        return $buttons;
    }

    public function ex_first_css()
    {
        wp_enqueue_style( 'ex_first', get_template_directory_uri() . "/editor_button/btn.css" );
        wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/web-fonts-with-css/css/fontawesome-all.css');
    }

    //Shortcode
    public function add_container( $atts, $content )
    {
        if ( !empty( $atts['row'] ) )
        {
            if ( $atts['width'] == "full-width" )
            {
                echo "<div class='container-fluid'><div class='row'>";

                echo do_shortcode( $content );

                echo "</div></div>";
            }
            else
            {
                echo "<div class='container'><div class='row'>";

                echo do_shortcode( $content );

                echo "</div></div>";
            }

        }

        else
        {
            if ( $atts['width'] == "full-width" )
            {
                echo "<div class='container-fluid'>";

                echo do_shortcode( $content );

                echo "</div>";
            }
            else
            {
                echo "<div class='container'>";

                echo do_shortcode( $content );

                echo "</div>";
            }
        }

    }

    public function add_column( $atts, $content )
    {
        if (!empty($atts['class']))
        {
            switch ($atts['class']) {
                case 2:
                    echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>";

                    echo do_shortcode( $content );

                    echo "</div>";
                    break;
                case 3:
                    echo "<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>";

                    echo do_shortcode( $content );

                    echo "</div>";
                    break;
                case 4:
                    echo "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>";

                    echo do_shortcode( $content );

                    echo "</div>";
                    break;
            }
        }

        else
        {
            echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";

            echo do_shortcode( $content );

            echo "</div>";
        }

    }
}
new Editor;
?>
