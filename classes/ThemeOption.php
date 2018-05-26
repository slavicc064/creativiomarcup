<?php

class ThemeOption
{
    public $true_page = 'myparameters.php';

    public function __construct()
    {
        add_action('admin_menu', array($this, 'true_options'));
        add_action('admin_init', array($this, 'true_option_settings'));
    }


    public function true_options()
    {
        global $true_page;

        add_theme_page('Theme Option', 'Theme Option', 'manage_options', $this -> true_page, array($this, 'true_option_page'));
    }

    public function true_option_page()
    {
        global $true_page;
        ?>
        <div class="wrap">
        <h2>Theme Option</h2>
        <form method="post" enctype="multipart/form-data" action="options.php">
            <?php
            settings_fields('true_options');
            do_settings_sections($this -> true_page);
            ?>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
            </p>
        </form>
        </div>
        <?php
    }

    public function true_option_settings()
    {
        global $true_page;

        register_setting('true_options', 'true_options', array($this, 'true_validate_settings'));


        add_settings_section('true_section_1', 'Header Option', '', $this -> true_page);

        add_settings_section('true_section_2', 'Footer Option', '', $this -> true_page);

        $true_field_params = array(
            'type' => 'select',
            'id' => 'my_select',
            'desc' => 'NavBar Style',
            'vals' => array('primary' => 'Primary', 'secondary' => 'Secondary', 'success' => 'Success', 'danger' => 'Danger', 'warning' => 'Warning', 'info' => 'Info', 'light' => 'Light', 'dark' => 'Dark'
            )
        );
        add_settings_field('my_select_field', 'NavBar Style', array( $this, 'true_option_display_settings' ), $this -> true_page, 'true_section_1', $true_field_params);

        $true_field_params = array(
            'type' => 'radio',
            'id' => 'my_radio',
            'vals' => array('default' => 'Default', 'fixed-top' => 'Fixed top', 'fixed-bottom' => 'Fixed bottom', 'sticky-top' => 'Sticky top')
        );
        add_settings_field('my_radio', 'NavBar position', array( $this, 'true_option_display_settings' ), $this -> true_page, 'true_section_1', $true_field_params);

        $true_field_params = array(
            'type' => 'textarea',
            'id' => 'my_textarea',
            'desc' => 'Footer Column 1'
        );
        add_settings_field('my_textarea_field', 'Footer Column 1', array( $this, 'true_option_display_settings' ), $this -> true_page, 'true_section_2', $true_field_params);

        $true_field_params = array(
            'type' => 'textarea2',
            'id' => 'my_textarea_2',
            'desc' => 'Footer Column 2'
        );
        add_settings_field('my_textarea_field_2', 'Footer Column 2', array( $this, 'true_option_display_settings' ), $this -> true_page, 'true_section_2', $true_field_params);

        $true_field_params = array(
            'type' => 'textarea3',
            'id' => 'my_textarea_3',
            'desc' => 'Footer Column 3'
        );
        add_settings_field('my_textarea_field_3', 'Footer Column 3', array( $this, 'true_option_display_settings' ), $this -> true_page, 'true_section_2', $true_field_params);

        $true_field_params = array(
            'type' => 'textarea4',
            'id' => 'my_textarea_4',
            'desc' => 'Footer Column 4'
        );
        add_settings_field('my_textarea_field_4', 'Footer Column 4', array( $this, 'true_option_display_settings' ), $this -> true_page, 'true_section_2', $true_field_params);

        $true_field_params = array(
            'type' => 'textarea5',
            'id' => 'my_textarea_5',
            'desc' => 'Site information'
        );
        add_settings_field('my_textarea_field_5', 'Site info', array( $this, 'true_option_display_settings' ), $this -> true_page, 'true_section_2', $true_field_params);

    }

    public function true_option_display_settings($args)
    {
        extract($args);

        $option_name = 'true_options';

        $o = get_option($option_name);

        //global $type, $desc, $id, $vals;

        switch ($type) {
            case 'textarea':
                $o[$id] = esc_attr(stripslashes($o[$id]));
                wp_editor( $o[$id], $id, array( 'wpautop' => 1, 'textarea_name' => "$option_name" . "[$id]", 'textarea_rows' => 5 ) );
                echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
                break;
            case 'textarea2':
                $o[$id] = esc_attr(stripslashes($o[$id]));
                wp_editor($o[$id], $id, array( 'wpautop' => 1, 'textarea_name' => "$option_name" . "[$id]", 'textarea_rows' => 5 ) );
                echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
                break;
            case 'textarea3':
                $o[$id] = esc_attr(stripslashes($o[$id]));
                wp_editor($o[$id], $id, array( 'wpautop' => 1, 'textarea_name' => "$option_name" . "[$id]", 'textarea_rows' => 5 ) );
                echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
                break;
            case 'textarea4':
                $o[$id] = esc_attr(stripslashes($o[$id]));
                wp_editor($o[$id], $id, array( 'wpautop' => 1, 'textarea_name' => "$option_name" . "[$id]", 'textarea_rows' => 5 ) );
                echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
                break;
            case 'textarea5':
                $o[$id] = esc_attr(stripslashes($o[$id]));
                wp_editor($o[$id], $id, array( 'wpautop' => 1, 'textarea_name' => "$option_name" . "[$id]", 'textarea_rows' => 10 ) );
                echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
                break;
            case 'select':
                echo "<select id='$id' name='" . $option_name . "[$id]'>";
                foreach ($vals as $v => $l) {
                    $selected = ($o[$id] == $v) ? "selected='selected'" : '';
                    echo "<option value='$v' $selected>$l</option>";
                }
                echo ($desc != '') ? $desc : "";
                echo "</select>";
                break;
            case 'radio':
                echo "<fieldset>";
                foreach ($vals as $v => $l) {
                    $checked = ($o[$id] == $v) ? "checked='checked'" : '';
                    echo "<label><input type='radio' name='" . $option_name . "[$id]' value='$v' $checked />$l</label><br />";
                }
                echo "</fieldset>";
                break;
        }
    }

    public function true_validate_settings($input)
    {
        foreach ($input as $k => $v) {
            $valid_input[$k] = trim($v);
        }
        return $valid_input;
    }
}
new ThemeOption;