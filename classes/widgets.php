<?php
/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'social_icon_widget', // Base ID
            esc_html__( 'Social Icon', 'text_domain' ), // Name
            array( 'description' => esc_html__( 'Social icon widget', 'text_domain' ), ) // Args
        );
        add_action( 'widgets_init', array($this, 'register_social_icon_widget') );
    }

    public function widget( $args, $instance ) {
          echo "
              
          ";
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
        ?>
        <div>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </div>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
    public function register_social_icon_widget() {
        register_widget( 'social_icon_widget' );
    }

}
new Foo_Widget;