<div class="container-fluid bg-creativio bg-footer-pd color-white">
    <div class="container">
        <div class="row">
            <?php

            $options = get_option( 'true_options' );

            if( $options['my_textarea'] )
            {
                echo
                    "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>" .
                    $options['my_textarea'] .
                    "</div>";
            }
            if( $options['my_textarea_2'] )
            {
                echo
                    "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>" .
                    $options['my_textarea_2'] .
                    "</div>";
            }
            if( $options['my_textarea_3'] )
            {
                echo
                    "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>" .
                    $options['my_textarea_3'] .
                    "</div>";
            }
            if( $options['my_textarea_4'] )
            {
                echo
                    "<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>" .
                    $options['my_textarea_4'] .
                    "</div>";
            }

            ?>
        </div>
    </div>

</div>
<div class="container-fluid bg-footer color-white">
    <div class="container">
        <div class="row">
            <?php
            if( $options['my_textarea_5'] )
            {
                echo
                    "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>" .
                    $options['my_textarea_5'] .
                    "</div>";
            }
            ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>