<?php
/**
 *
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 */
?>
<?php if (ro_get_option('hide_sub_header')) { ?>
    <div id="sub-header" itemtype="http://schema.org/WPHeader" itemscope="itemscope" role="banner">
        <div class="container clearfix">
            <div class="row-fluid">
                <div class="sub-header-title">
                    <?php 
                    $title = get_option('page_for_posts') ? __('Blog', 'radix') : get_the_title(get_option('page_for_posts')) ;
                    
                    if (is_home()) {
                        echo '<h1 itemprop="headline">' . $title . ' </h1>';
                    }
                    else { ?>
                        <h1 itemprop="headline"><?php the_title(); ?></h1>
                    <?php } ?>
                </div>
                <?php if (ro_get_option('hide_breadcrumb')) { ?>
                    <?php Radix_breadcrumb_lists(); ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
