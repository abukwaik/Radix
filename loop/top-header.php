<?php
/**
 * The top header area including text, phone, link and socials
 *
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 */
?>

<div id="top-bar-wrap">
    <div id="top-bar"> 
        <div class="container clearfix">
        <div class="row-fluid">
            <div class="top-bar-left" id="top-bar-content">
                <?php $phone_text = ro_get_option('phone_text');
                if (!empty ($phone_text) && ro_get_option('phone_text')) { ?>
                <span class="external-link" itemprop="telephone">
                <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo ro_get_option('phone_text'); ?>"><?php echo ro_get_option('phone_text'); ?></a>
                </span> 
                <?php } ?>
                <?php $email_text = ro_get_option('email_text');
                if (!empty ($email_text) && ro_get_option('email_text')) { ?>
                <span class="external-link" itemprop="email">
                <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo ro_get_option('email_text'); ?>"><?php echo ro_get_option('email_text'); ?></a> 
                </span>
                <?php } ?>
                <?php $url_text = ro_get_option('url_text');
                if (!empty ($url_text) && ro_get_option('url_text')) { ?>         
                <span class="external-link">
                    <i class="fa fa-external-link" aria-hidden="true"></i>
                    <a itemprop="url" href="<?php echo esc_url( ro_get_option('custom_text_url') ); ?>"><span itemprop="name"><?php echo ro_get_option('url_text'); ?></span></a>
                </span>
                <?php } ?>
            </div><!-- #top-bar-content -->
            <?php if (ro_get_option('header_socials')) { ?>
            <?php Radix_header_socials(); ?>
            <?php } ?>
        </div>
        </div> <!-- .container -->
    </div> <!-- #top-bar -->
</div>
