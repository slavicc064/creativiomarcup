<?php

class Editor
{
    public function __construct()
    {
        add_action( 'admin_enqueue_scripts', array( $this, 'ex_first_css' ) );
        add_action( 'admin_head', array( $this, 'ex_add_my_first_button' ) );
    }


    public function ex_add_my_first_button() {
        global $typenow;

        if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
            return;
        }

        if( ! in_array( $typenow, array( 'post', 'page' ) ) )
            return;

        if ( get_user_option('rich_editing') == 'true') {
            add_filter("mce_external_plugins", array( $this, "ex_add_tinymce_plugin" ) );
            add_filter('mce_buttons', array( $this, 'ex_register_my_first_button' ) );
        }
    }

    public function ex_add_tinymce_plugin($plugin_array) {
        $plugin_array['ex_first_button'] = get_template_directory_uri()."/editor_button/btn.js";
        $plugin_array['ex_my_button'] = get_template_directory_uri()."/editor_button/btn.js";
        return $plugin_array;
    }

    public function ex_register_my_first_button($buttons) {
        array_push($buttons, "ex_first_button", "ex_my_button");
        return $buttons;
    }

    public function ex_first_css() {
        wp_enqueue_style( 'ex_first', get_template_directory_uri() . "/editor_button/btn.css" );
        wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/web-fonts-with-css/css/fontawesome-all.css');
    }
}
new Editor;
?>