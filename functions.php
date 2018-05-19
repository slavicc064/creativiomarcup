<?php

include "classes/ThemeSupport.php";
include "bootstrap-menu.php";
include "classes/Editor.php";

// add more buttons to the html editor
function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
        ?>
        <script type="text/javascript">
            QTags.addButton( 'eg_paragraph', 'p', '<p>', '</p>', 'p', 'Paragraph tag', 1 );
            QTags.addButton( 'eg_hr', 'hr', '<hr />', '', 'h', 'Horizontal rule line', 201 );
            QTags.addButton( 'eg_pre', 'pre', '<pre lang="php">', '</pre>', 'q', 'Preformatted text tag', 111 );
        </script>
        <?php
    }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );
?>