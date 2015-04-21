<?php 

/**
* @package Radix enqueued scripts
* @author Abukwaik http://www.croti.com
* @since Radix 1.0
*
*/

/**
    Load needed scripts
**/

function Radix_scripts() {

	wp_enqueue_script('Radix-modernizr',      RADIX_JS_URI . '/modernizr.min.js', 	array(), '', true);
	wp_enqueue_script('Radix-bootstrapjs',    RADIX_JS_URI . '/bootstrap.min.js', 	array('jquery'), '', true);
	wp_enqueue_script('Radix-plugins',        RADIX_JS_URI . '/plugins.min.js', 	array(), '', true);
	wp_enqueue_script('Radix-scripts',   	  RADIX_JS_URI . '/scripts.min.js', 	array(), '', true);

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script('keyboard-image-navigation',   RADIX_JS_URI . '/keyboard-image-navigation.js');
	}

	if ( (!is_admin()) && is_singular() && comments_open() && !is_front_page() && get_option('thread_comments')) { 
		wp_enqueue_script( 'comment-reply' ); 
	}

	// We dont need these in Frontpage
	if (!is_front_page()) { 
		wp_enqueue_script('Radix-prettyphoto',     		RADIX_JS_URI  . '/jquery.prettyPhoto.js',  array('jquery'), '', true );
		wp_enqueue_style ('Radix-prettyphoto-css',   	RADIX_CSS_URI . '/prettyPhoto.css');
	}
	// Animate.css - font-awesome
	wp_enqueue_style('Radix-all-css',   		RADIX_CSS_URI 	. '/all.min.css');
	// Load Bootstrap
	wp_enqueue_style('Radix-bootstrap', 		RADIX_CSS_URI   . '/bootstrap.min.css');
	// Load main stylesheet
	wp_enqueue_style( 'Radix-style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'Radix_scripts');
