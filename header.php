<?php
/**
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Radix
 * @since Radix 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'radix' ); ?></a>
<?php if (ro_get_option('sticky_header')) { ?>
<header id="masthead" class="site-header clearfix" itemscope="itemscope" itemtype="http://schema.org/Organization" role="banner">
    <?php } ?>
    <?php if (ro_get_option('hide_top_header')) { ?>
    <?php get_template_part( 'loop/top-header'); ?>
    <?php } ?>
    <nav id="site-nav" class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"><?php _e('Toggle navigation', 'radix' ); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php $logo = ro_get_option('logo'); ?>
                <?php $logo_width = ro_get_option( 'logo_width', '91' ); $logo_height = ro_get_option( 'logo_height', '24' ); ?>        
                <?php if(!empty($logo['url'])) : ?>
                    <a class="navbar-brand" itemprop="url" href="<?php echo esc_url( home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
                        <img itemprop="logo" width="<?php echo esc_attr( $logo_width ); ?>" height="<?php echo esc_attr( $logo_height ); ?>" src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
                    </a>                 
                <?php else: ?>
                    <h1 class="site-title" itemprop="headline">
                        <a href="<?php echo esc_url( home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </h1>
                    <?php if (ro_get_option('header_description')) { ?>                              
                    <p class="site-desc" itemprop="description"><?php echo get_bloginfo('description'); ?></p>
                    <?php } ?>
                <?php endif; ?>
            </div> <!-- navbar-header -->
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="site-menu" class="collapse navbar-collapse navbar-right" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
                    <?php Radix_main_nav(); ?>
                </nav> <!-- site-menu -->
            <?php endif; ?>
        </div>  <!-- container -->
    </nav> <!-- site-nav -->
</header>  <!-- masthead -->
<main id="content" class="site-content"> 
<?php if( !is_page_template( 'page-fullwidth.php' ) ) { ?>
<?php get_template_part( 'loop/sub-header'); ?>
	<div class="main-content-area">
		<div class="container-fluid clearfix">
			<div class="row-fluid">
				<?php } ?>