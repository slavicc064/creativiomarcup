<form role="search" method="get" id="searchform" class="form-inline my-2 my-lg-0" action="<?php
echo home_url( '/' ) ?>" >

    <input type="text" class="form-control mr-sm-2" value="<?php echo get_search_query() ?>"

           name="s" id="s" type="search" placeholder="Search" aria-label="Search"/>

    <input type="submit" id="searchsubmit" class="btn btn-outline-info my-2 my-sm-0" value="Search"/>

</form>