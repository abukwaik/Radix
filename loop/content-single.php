<?php
/**
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemtype="http://schema.org/BlogPosting" itemscope="itemscope">
	
	<?php Radix_post_thumbnail(); ?>
	
	<header class="entry-header">
		<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php Radix_posted_on(); ?>
		</div>
	</header> <!-- entry-header -->

	<div class="entry-content clearfix">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', RTD ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

			wp_link_pages( array(
				'before'      	 => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', RTD ) . '</span>',
				'after'       	 => '</div>',
				'link_before' 	 => '<span>',
				'link_after'  	 => '</span>',
				'current_before' => '',
				'current_after'  => '',
				'pagelink'    	 => '%',
			) );
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php Radix_entry_footer(); ?>
	</footer> <!-- entry-footer -->
</article>

<?php if(ro_get_option ('blog_author_bio')) { ?>
	<?php get_template_part( 'loop/content', 'author' ); ?>
<?php } ?>