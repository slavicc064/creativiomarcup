<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.05.18
 * Time: 11:21
 */

class Editor
{
    public function __construct()
    {
        add_action( 'edit_page_form', array( $this, 'my_second_editor' ) );
    }

    public function my_second_editor()
    {
        $content = 'test';
        $editor_id = 'mycustomeditor';

        wp_editor( $content, $editor_id );
    }
}
?>
