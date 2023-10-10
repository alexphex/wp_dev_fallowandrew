
<form role="search" method="get" class="search-form signup-form form-inline justify-content-center pt-3" action="<?php echo home_url( '/' ); ?>">
   
    <label>
        <span class="screen-reader-text sr-only"><?php echo _x( 'Your email', 'label' ) ?></span>
        <input type="email" class="search-field form-control mr-md-1 semail" placeholder="<?php echo esc_attr_x( 'Enter email', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Your email', 'label' ) ?>" />
    </label>
   
	<input type="submit" class="search-submit btn btn-primary" value="<?php echo esc_attr_x( 'Subscribe', 'submit button' ) ?>" />
</form>

