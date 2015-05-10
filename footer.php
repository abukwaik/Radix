<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content main and all content after
 *
 * @package Radix
 * @since Radix 1.0
 */
?>
<?php if( !is_page_template( 'page-fullwidth.php' ) ) { ?>
                </div> <!-- row -->
            </div> <!-- container -->
        </div><!--/.main-content-area-->
<?php } ?>
</main><!--/#content-->
<?php if(ro_get_option('footer_display')) : ?>
    <footer class="footer-wrapper">
        <div class="container-fluid clearfix">  
            <div class="footer-content">
                <?php dynamic_sidebar('footer-widget-1'); ?>
            </div>
        </div> 
    </footer>
<?php endif; ?>
<?php if(ro_get_option('enable_footer_social')) : ?>
    <?php Radix_footer_socials(); ?>
<?php endif; ?>
<?php if (ro_get_option('enable_copyright')) : ?>
    <footer class="footer-bottom-wrapper" itemtype="http://schema.org/WPFooter" itemscope="itemscope" role="contentinfo">
        <div class="container-fluid clearfix">
            <div class="row-fluid">         
                <div class="copyright-text col-md-6">
                    <?php _e( 'Copyright &copy; ', RTD ); ?>
                    <span itemprop="copyrightYear">
                        <?php echo date( 'Y' ); ?>
                    </span>
                    <a href="<?php echo esc_url( home_url() ); ?>" itemprop="url"><span itemprop="copyrightHolder"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></span></a>
                    <?php _e( 'All rights reserved.', RTD ); ?>
                </div> 
                <?php if ( has_nav_menu('footer-menu') && ro_get_option('enable_footer_menu')) : ?>
                    <nav class="footer-nav col-md-6" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
                        <?php Radix_footer_nav(); ?>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </footer>
<?php endif; ?>
<?php if(ro_get_option('scroll_to_top')): ?>
    <a href="#" class="to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>