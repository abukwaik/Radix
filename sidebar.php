<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 *
 */
?>
<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
	<div id="sidebar" class="col-md-3" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
		<div class="sidebar-padder clearfix">
			<aside class="widget-area">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</aside>
		</div>
	</div>
<?php } ?>