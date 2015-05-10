<?php
/**
 * The top header area including text, phone, link and socials
 *
 * @package Radix
 * @since Radix 1.0
 */
?>
<div id="top-bar"> 
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-6">
                <div id="header_contacts" class="top-bar-left">
                    <?php $phone_text = ro_get_option('phone_text');
                    if (!empty ($phone_text) && ro_get_option('phone_text')) { ?>
                    <span class="header-phone" itemprop="telephone">
                        <a href="tel:<?php echo ro_get_option('phone_text'); ?>"><?php echo ro_get_option('phone_text'); ?></a>
                    </span> 
                    <?php } ?>
                    <?php $email_text = ro_get_option('email_text');
                    if (!empty ($email_text) && ro_get_option('email_text')) { ?>
                    <span class="header-email" itemprop="email">
                        <a href="mailto:<?php echo ro_get_option('email_text'); ?>"><?php echo ro_get_option('email_text'); ?></a> 
                    </span>
                    <?php } ?>
                    <?php $url_text = ro_get_option('custom_url_text');
                    if (!empty ($url_text) && ro_get_option('custom_url_text')) { ?>         
                    <span class="header-link">
                        <a itemprop="url" href="<?php echo esc_url( ro_get_option('custom_url') ); ?>"><span itemprop="name"><?php echo ro_get_option('custom_url_text'); ?></span></a>
                    </span>
                    <?php } ?>
                </div><!-- #top-bar-content -->
            </div>
            <?php if (ro_get_option('header_socials')) { ?>
            <div class="col-md-6">
                <?php Radix_header_socials(); ?>
            </div>
            <?php } ?>
        </div> <!-- row-fouid -->
    </div> <!-- .container -->
</div> <!-- top-bar -->
