<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.05.18
 * Time: 10:48
 */

class Arial
{
    public function __construct(){
        add_action( 'wp_enqueue_scripts', array( $this, 'theme_name_scripts' ) );
    }
}