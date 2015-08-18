<?php
/**
* This is the core Radix file where most of the
* main functions & features to keep our theme clean.
*
* @copyright Eddie Machado https://github.com/eddiemachado
* @package Radix
* @since Radix 1.0
*/


// we're firing all out initial functions at the start
add_action( 'after_setup_theme', 'Radix_ahoy', 16 );

function Radix_ahoy() {

    // remove pesky injected css for recent comments widget
	add_filter( 'wp_head', 'Radix_remove_wp_widget_recent_comments_style', 1 );
    // clean up comment styles in the head
	add_action( 'wp_head', 'Radix_remove_recent_comments_style', 1 );
    // clean up gallery output in wp
	add_filter( 'gallery_style', 'Radix_remove_gallery_style' );
	// deactivate default gallery CSS
	add_filter( 'use_default_gallery_style', '__return_false' );
    // cleaning up excerpt
	add_filter( 'excerpt_length', 'Radix_custom_excerpt_length', 999 );
	// Read more link on all excerpts
	add_filter( 'excerpt_more', 'Radix_new_excerpt_more' );

} /* end Radix ahoy */


// remove injected CSS for recent comments
function Radix_remove_wp_widget_recent_comments_style() {
   if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
      remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
   }
}

// remove injected CSS from recent comments widget
function Radix_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
  }
}

// remove injected CSS from gallery
function Radix_remove_gallery_style($css) {
  return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}


// Custom excerpt length
function Radix_custom_excerpt_length( $length ) {
	$count = ro_get_option( 'excerpt_length_count', '55' );
	return $count;
}

// Read more link on all excerpts
function Radix_new_excerpt_more( $more ) {
	return '</p><p class="btn-excerpt"><a class="btn btn-default btn-sm " href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'radix' ) . '</a>';
}

/*
 * This is a modified the_author_posts_link() which just returns the link.
 * This is necessary to allow usage of the usual l10n process with printf().
 */
function Radix_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s', 'radix' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}


/* Make your WordPress category list valid by removing the “rel” attribute */
function Radix_remove_category_rel($string){
  return str_replace('rel="category tag"', '', $string);
}
add_filter('the_category', 'Radix_remove_category_rel');


/* Set tag sizes in tag cloud widget */
function Radix_set_tag_cloud_sizes($args) {
	$args['smallest'] = 10;
	$args['largest'] = 20;
	return $args;
}
add_filter('widget_tag_cloud_args','Radix_set_tag_cloud_sizes');