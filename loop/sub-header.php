<?php
/**
 *
 * @package Radix
 * @since Radix 1.0
 */
?>
<?php if (ro_get_option('hide_sub_header')) { ?>
<div id="sub-header" itemtype="http://schema.org/WPHeader" itemscope="itemscope" role="banner">
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-6">
                <?php
                    $title = get_option('page_for_posts') ? __('Blog', RTD) : get_the_title(get_option('page_for_posts')) ;
                    
                    if (is_home()) {
                        echo '<h4 class="sub-header-title" itemprop="headline">' . $title . ' </h4>';
                    } 
                    else {
                        echo '<h4 class="sub-header-title" itemprop="headline">' . get_the_title() . ' </h4>';
                    } 
                ?>
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
