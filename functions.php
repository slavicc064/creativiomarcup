<?php

include "classes/ThemeSupport.php";
include "bootstrap-menu.php";
include "classes/Editor.php";

function my_theme_add_editor_styles() {
    add_editor_style( 'editor-styles.css' );
}
add_action( 'current_screen', 'my_theme_add_editor_styles' );
?>