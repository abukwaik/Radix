<?php
/**
 * @package Radix
 * @since Radix 1.0
 */
?>
<?php if (ro_get_option('hide_sub_header')) { ?>
<div id="sub-header" itemtype="http://schema.org/WPHeader" itemscope="itemscope" role="banner">
    <div class="container clearfix">
        <div class="row">
            
            <div class="col-md-6">
                <?php if (ro_get_option('hide_page_title')) { ?>
                <?php Radix_page_title(); ?>
                <?php } ?>
            </div>

            <?php if (ro_get_option('hide_breadcrumb')) { ?>
            <div class="col-md-6">
                <?php Radix_breadcrumb(); ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } ?>
