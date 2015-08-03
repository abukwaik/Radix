<?php
/**
 * @package Radix
 * @since Radix 1.0
 * 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemtype="http://schema.org/Blog" itemscope="itemscope">
	
	<?php if ( is_sticky() && is_home() && ! is_paged() ) {
		printf( '<span class="sticky-pin"></span>' );
	} ?>

	<?php Radix_post_thumbnail(); ?>

	<header class="entry-header">
		<h1 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="entry-meta">
			<?php Radix_posted_on(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content clearfix">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf( 
				__( 'Continue reading %s', 'radix' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

			wp_link_pages( array(
				'before'      	 => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'radix' ) . '</span>',
				'after'       	 => '</div>',
				'link_before' 	 => '<span>',
				'link_after'  	 => '</span>',
				'current_before' => '',
				'current_after'  => '',
				'pagelink'    	 => '%',
			) );
		?>
	</div>

	<footer class="entry-footer">
		<?php Radix_entry_footer(); ?>
	</footer> <!-- entry-footer -->			

</article>
