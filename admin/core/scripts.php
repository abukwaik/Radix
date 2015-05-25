<?php 

/**
* @package Radix enqueued scripts
* @since Radix 1.0
*
*/

/**
    Load needed scripts
**/

function Radix_scripts() {

	wp_enqueue_script('Radix-modernizr',      RADIX_JS_URI . '/modernizr.min.js', 	array(), '2.8.3', true);
	wp_enqueue_script('Radix-bootstrapjs',    RADIX_JS_URI . '/bootstrap.min.js', 	array('jquery'), '3.3.4', true);
	// jquery.nicescroll + WOW.js
	wp_enqueue_script('Radix-plugins',        RADIX_JS_URI . '/plugins.min.js', 	array(), '1.0.5', true);
	wp_enqueue_script('Radix-scripts',   	  RADIX_JS_URI . '/scripts.min.js', 	array(), '1.0.5', true);

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script('keyboard-image-navigation',   RADIX_JS_URI . '/keyboard-image-navigation.js');
	}

	if ( (!is_admin()) && is_singular() && comments_open() && !is_front_page() && get_option('thread_comments')) { 
		wp_enqueue_script( 'comment-reply' ); 
	}

	// We dont need these in Frontpage
	if (!is_home()) { 
		wp_enqueue_script('Radix-prettyphoto',     		RADIX_JS_URI  . '/jquery.prettyPhoto.min.js',  array('jquery'), '3.1.6', true );
		wp_enqueue_style ('Radix-prettyphoto-css',   	RADIX_CSS_URI . '/prettyPhoto.min.css');
	}

	// Animate.css - font-awesome
	wp_enqueue_style('Radix-all-css',   		RADIX_CSS_URI 	. '/all.min.css');
	// Load Bootstrap
	wp_enqueue_style('Radix-bootstrap', 		RADIX_CSS_URI   . '/bootstrap.min.css');
	// Load main stylesheet
	wp_enqueue_style( 'Radix-style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'Radix_scripts');


function Radix_IE() {
	global $wp_scripts;
	wp_enqueue_script( 'Radix-html5shiv', 		RADIX_JS_URI 	. '/html5shiv.js', array(), '3.7.2', false );
	$wp_scripts->add_data( 'Radix-html5shiv', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'Radix_IE' );
