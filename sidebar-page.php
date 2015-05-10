<?php
/**
 * The sidebar containing the main widget area for displaying all pages
 *
 * @package Radix
 * @since Radix 1.0
 *
 */
?>
<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
	<div id="sidebar" class="col-md-3" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
		<div class="sidebar-padder clearfix">
			<aside class="widget-area">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</aside>
		</div>
	</div>
<?php } ?>
