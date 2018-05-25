<?php

include "classes/ThemeSupport.php";
include "bootstrap-menu.php";
include "classes/Editor.php";
include "classes/RegisterWidgets.php";
//include "classes/widgets.php";
include "classes/ThemeOption.php";

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter('comment_text', 'wpautop');

remove_filter('the_content','wptexturize');
remove_filter('the_excerpt','wptexturize');
remove_filter('comment_text', 'wptexturize');

?>
<?php
// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

    //create new top-level menu
    add_menu_page('BAW Plugin Settings', 'BAW Settings', 'administrator', __FILE__, 'baw_settings_page', "dashicons-screenoptions");

    //call register settings function
    add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {
    //register our settings
    register_setting( 'baw-settings-group', 'new_option_name' );
    register_setting( 'baw-settings-group', 'some_other_option' );
    register_setting( 'baw-settings-group', 'option_etc' );
}

function baw_settings_page() {
    ?>
    <div class="wrap">
        <h2>Your Plugin Name</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'baw-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">New Option Name</th>
                    <td><input type="text" name="new_option_name" value="<?php echo get_option('new_option_name'); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Some Other Option</th>
                    <td><input type="text" name="some_other_option" value="<?php echo get_option('some_other_option'); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Options, Etc.</th>
                    <td><input type="text" name="option_etc" value="<?php echo get_option('option_etc'); ?>" /></td>
                </tr>
            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>

        </form>
    </div>
<?php } ?>
