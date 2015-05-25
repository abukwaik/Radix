<?php
/**
 *
 * Redux framework functions
 *
 * @package admin panel functions
 * @author Abukwaik http://www.radixtheme.com
 * @copyright Copyright (c) 2015, Radix
 * @since Radix 1.0
 */


/**
	Change customizer link
*/
/* Change customize link to theme options instead of live customizer */
function ro_change_customize_link($themes) {
	if(array_key_exists('radix', $themes)) {
		$themes['radix']['actions']['customize'] = admin_url('admin.php?page=radix_options');
	}
	return $themes;
}
add_filter('wp_prepare_themes_for_js', 'ro_change_customize_link');


/**
	Theme option function
*/

/* Generate theme option compressed CSS */
function ro_generate_option_css(){
	ob_start();
	get_template_part('admin/options-css');
	$output = ob_get_contents();
	ob_end_clean();
	return ro_compress_css_code($output);
}
/* add to head including favicons and custom css */
function ro_generate_option_to_head(){
	// Add favicons
	$favicon = ro_get_option_media('favicon');
	if(!empty($favicon)) { 
		echo '<link rel="shortcut icon" href="' . esc_url( $favicon ) . '" type="image/x-icon" />';
	}

	// Add apple touch icon
	$apple_touch_icon = ro_get_option_media('apple_touch_icon');
	if(!empty($apple_touch_icon)) { 
		echo '<link href="' . esc_url( $apple_touch_icon ) . '" rel="apple-touch-icon" />';
	}

	// Theme option CSS output
	$option_css = trim(preg_replace( '/\s+/', ' ', ro_generate_option_css()));
	if(!empty($option_css)) {
		echo '<style media="all" type="text/css">' . $option_css . '</style>';
	}
	// Custom CSS
	$custom_css = trim(preg_replace( '/\s+/', ' ', ro_get_option('custom_css')));
	if(!empty($custom_css)) {
		echo '<style media="all" type="text/css">' . $custom_css . '</style>';
	}
}
add_action('wp_head', 'ro_generate_option_to_head', 99);


/* Compress CSS output */
function ro_compress_css_code($code) {
	// Remove Comments
	$code = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $code);

	// Remove tabs, spaces, newlines, etc.
	$code = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $code);
	return $code;
}

/* Get theme option function */ 
function ro_get_option($option){
	global $ro_settings;
	if(isset($ro_settings[$option])){
		return $ro_settings[$option];
	} else {
		return false;
	}
}

/* Update theme option function */ 
function ro_update_option($key = false, $value = false){
	global $Redux_Options;
	if(!empty($key)){
		$Redux_Options->set($key, $value);
	} 
}

/* Maintenance mode.*/
function ro_maintenance_mode(){  
  if( ro_get_option ('maintenance_mode') && !is_user_logged_in() ) {  
    wp_die(__('Maintenance, please come back soon.', 'radix'), __('Maintenance - please come back soon.', 'radix'), array('response' => '503'));  
  }  
}
add_action('get_header', 'ro_maintenance_mode');

/* Additional JS output into theme footer if specified in theme options */
function ro_wp_footer(){
	
	//Additional JS
	$custom_js = trim(preg_replace( '/\s+/', ' ', ro_get_option('custom_js')));
	if(!empty($custom_js)) {
		echo '<script type="text/javascript">
			/* <![CDATA[ */
				' . $custom_js . '
			/* ]]> */
			</script>';
	}
}
add_action('wp_footer', 'ro_wp_footer', 99);

/* Convert hexdec color string to rgba */
function ro_hex2rgba($color, $opacity = false) {
	$default = 'rgb(0,0,0)';

	//Return default if no color provided
	if(empty($color))
		return $default;

	//Sanitize $color if "#" is provided
	if ($color[0] == '#' ) {
		$color = substr( $color, 1 );
	}

  //Check if color has 6 or 3 characters and get values
	if (strlen($color) == 6) {
		$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	} elseif ( strlen( $color ) == 3 ) {
		$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	} else {
		return $default;
	}

  //Convert hexadec to rgb
	$rgb = array_map('hexdec', $hex);

  //Check if opacity is set(rgba or rgb)
	if($opacity){
		if(abs($opacity) > 1){ $opacity = 1.0; }
		$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
	} else {
		$output = 'rgb('.implode(",",$rgb).')';
	}

  //Return rgb(a) color string
	return $output;
}

/* Get image option url */
function ro_get_option_media($option){
	$media = ro_get_option($option);
	if(isset($media['url']) && !empty($media['url'])){
		return $media['url'];
	}
	return false;
}