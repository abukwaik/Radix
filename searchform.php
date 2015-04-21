<?php
/**
 * The template for displaying search forms in Radix
 *
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 */
?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
        <input type="text" value="" name="s" id="s" class="form-control" placeholder="<?php _e('Search', 'radix'); ?>" />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </span>
    </div>
</form>