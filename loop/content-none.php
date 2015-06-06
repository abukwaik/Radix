<?php
/**
 * @package Radix
 * @since Radix 1.0
 * 
 */
?>

<article class="no-results not-found">
	<header class="entry-header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'radix' ); ?></h1>
	</header><!-- .page-header -->

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="' . esc_url('%1$s') . '">Get started here</a>.', 'radix' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'radix' ); ?></p>
			
			<div class="margin">
				<?php get_search_form(); ?>
			</div>
		<?php else : ?>

			<p><?php _e( 'It seems we did not find what you are looking for. Perhaps searching can help.', 'radix' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	
</article><!-- .no-results -->
