<?php
/**
 * The template for displaying search results pages.
 *
 * @package Radix
 * @since Radix 1.0
 */


get_header(); 

$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar' ) ) {
    $col = 'col-md-9';
} ?>
     
<div id="primary" class="content-area <?php echo $col; ?>" itemtype="http://schema.org/SearchResultsPage" itemscope="itemscope">
	<?php if ( have_posts() ) : ?>
		<header class="entry-header">
			<h2 class="search-title"><?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count;  echo $count . ' '; wp_reset_query(); ?><?php printf( __( ' Search Results found for' , 'radix') . '<span class="text-muted"> %s</span>', get_search_query() ); ?></h2>
		</header>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'loop/content', 'search' ); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( 'loop/content', 'none' ); ?>
	<?php endif; ?>
</div> <!--#primary -->
<?php get_sidebar(); ?>
<?php get_footer();