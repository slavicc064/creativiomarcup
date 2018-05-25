<?php

include "classes/ThemeSupport.php";
include "bootstrap-menu.php";
include "classes/Editor.php";
include "classes/RegisterWidgets.php";
//include "classes/widgets.php";

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter('comment_text', 'wpautop');

remove_filter('the_content','wptexturize');
remove_filter('the_excerpt','wptexturize');
remove_filter('comment_text', 'wptexturize');


$true_page = 'myparameters.php';

function true_options() {
    global $true_page;
    add_options_page( 'Theme Option', 'Theme Option', 'manage_options', $true_page, 'true_option_page');
}
add_action('admin_menu', 'true_options');

function true_option_page(){
    global $true_page;
    ?><div class="wrap">
    <h2>Theme Option</h2>
    <form method="post" enctype="multipart/form-data" action="options.php">
        <?php
        settings_fields('true_options');
        do_settings_sections($true_page);
        ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
    </div><?php
}

function true_option_settings() {
    global $true_page;

    register_setting( 'true_options', 'true_options', 'true_validate_settings' );


    add_settings_section( 'true_section_1', 'Header Option', '', $true_page );


    $true_field_params = array(
        'type'      => 'text',
        'id'        => 'my_text',
        'desc'      => 'Big Text 1',
        'label_for' => 'my_text'
    );
    add_settings_field( 'my_text_field', 'Text', 'true_option_display_settings', $true_page, 'true_section_2', $true_field_params );

    $true_field_params = array(
        'type'      => 'textarea',
        'id'        => 'my_textarea',
        'desc'      => 'Big Text 2'
    );
    add_settings_field( 'my_textarea_field', 'Big Text', 'true_option_display_settings', $true_page, 'true_section_2', $true_field_params );


    add_settings_section( 'true_section_2', 'Footer Option', '', $true_page );

    $true_field_params = array(
        'type'      => 'checkbox',
        'id'        => 'my_checkbox',
        'desc'      => 'Checkbox'
    );
    add_settings_field( 'my_checkbox_field', 'Checkbox', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

    $true_field_params = array(
        'type'      => 'select',
        'id'        => 'my_select',
        'desc'      => 'NavBar Style',
        'vals'		=> array( 'val1' => 'Primary', 'val2' => 'Dark', 'val3' => 'Light')
    );
    add_settings_field( 'my_select_field', 'NavBar Style', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

    $true_field_params = array(
        'type'      => 'radio',
        'id'      => 'my_radio',
        'vals'		=> array( 'val1' => 'Value 1', 'val2' => 'Value 2', 'val3' => 'Value 3')
    );
    add_settings_field( 'my_radio', 'Radio buttons', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

    $true_field_params = array(
        'type'      => 'text',
        'id'        => 'my_text',
        'desc'      => 'Footer Text',
        'label_for' => 'my_text'
    );
    add_settings_field( 'my_text_field', 'Text input', 'true_option_display_settings', $true_page, 'true_section_2', $true_field_params );

    $true_field_params = array(
        'type'      => 'textarea',
        'id'        => 'my_textarea',
        'desc'      => 'Footer Text'
    );
    add_settings_field( 'my_textarea_field', 'Footer Text 2', 'true_option_display_settings', $true_page, 'true_section_2', $true_field_params );

}
add_action( 'admin_init', 'true_option_settings' );

function true_option_display_settings($args) {
    extract( $args );

    $option_name = 'true_options';

    $o = get_option( $option_name );

    switch ( $type ) {
        case 'text':
            $o[$id] = esc_attr( stripslashes($o[$id]) );
            echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'textarea':
            $o[$id] = esc_attr( stripslashes($o[$id]) );
            echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$o[$id]</textarea>";
            echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
        case 'checkbox':
            $checked = ($o[$id] == 'on') ? " checked='checked'" :  '';
            echo "<label><input type='checkbox' id='$id' name='" . $option_name . "[$id]' $checked /> ";
            echo ($desc != '') ? $desc : "";
            echo "</label>";
            break;
        case 'select':
            echo "<select id='$id' name='" . $option_name . "[$id]'>";
            foreach($vals as $v=>$l){
                $selected = ($o[$id] == $v) ? "selected='selected'" : '';
                echo "<option value='$v' $selected>$l</option>";
            }
            echo ($desc != '') ? $desc : "";
            echo "</select>";
            break;
        case 'radio':
            echo "<fieldset>";
            foreach($vals as $v=>$l){
                $checked = ($o[$id] == $v) ? "checked='checked'" : '';
                echo "<label><input type='radio' name='" . $option_name . "[$id]' value='$v' $checked />$l</label><br />";
            }
            echo "</fieldset>";
            break;
    }
}

function true_validate_settings($input) {
    foreach($input as $k => $v) {
        $valid_input[$k] = trim($v);
    }
    return $valid_input;
}
?>