<?php

include "classes/ThemeSupport.php";
include "bootstrap-menu.php";
include "classes/Editor.php";
include "classes/RegisterWidgets.php";
//include "classes/widgets.php";
include "classes/ThemeOption.php";


function my_enqueue_media() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'my_enqueue_media' );
?>
