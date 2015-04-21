<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 *
 */
get_header(); ?>
<div class="row-fluid">  
	<div id="primary" class="content-area">
		<section class="error-404 not-found">
			<div class="page-content">
				<div class="container clearfix">
					<div class="row">
						<div class="error-404-box">
							<div class="error-message"><?php echo __( 'Error 404', 'Radix' ); ?></div>
							<p class="lead"><?php echo __( 'It looks like nothing was found at this location.', 'Radix' ); ?></p>
							<input type="button" value="<?php echo __( 'Go Back', 'Radix' ); ?>" onclick="history.back(-1)" />
						</div>
					</div>
				</div>
				<div class="container clearfix">
					<div class="row">
						<span class="search-text">
						<p><?php echo __( 'Or maybe try a search?', 'Radix' ); ?></p>
						</span>
						<?php get_search_form(); ?>
					</div>
					<br>
				</div>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>
