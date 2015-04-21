<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 */

get_header(); 

$col= 'col-md-12';
if ( is_active_sidebar( 'sidebar-2' ) ) {
    $col = 'col-md-9';
} ?>
	<div class="row-fluid">       
		<div id="primary" class="content-area <?php echo $col; ?>">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'loop/content', 'page' ); ?>
				<?php if (ro_get_option('comments_on_pages')) { ?>
				<?php if ( comments_open() || '0' != get_comments_number() )
				comments_template(); ?>
				<?php } ?> 
			<?php endwhile; // end of the loop. ?>
		</div> <!--/#content -->
		<?php get_sidebar('page'); ?>
	</div>
<?php get_footer(); ?>