<?php
/**
 * Custom sinppets functions that act independently of any themes
 *
 * @package Radix
 * @since Radix 1.0
 * 
 */


/**
  Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
*/
function Radix_enhanced_image_navigation( $url, $id ) {
  if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
   return $url;

 $image = get_post( $id );
 if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
   $url .= '#main';

 return $url;
}
add_filter( 'attachment_link', 'Radix_enhanced_image_navigation', 10, 2 );

/**
  password protected post form 
*/

function Radix_custom_password_form() {
  global $post;
  $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $output  = '<form class="protected-post-form" action="' . esc_url( home_url( '/wp-login.php?action=postpass' ) ) . '" method="post">';
    $output .= '<div class="col-lg-10">';
    $output .= '<p>' . __( "This post is password protected. To view it please enter your password below:" , 'radix') . '</p>';
    $output .= '<div class="input-group">';
    $output .= '<label for="' . $label . '" class="screen-reader-text">' . sprintf( __('Password', 'radix') ) . '</label>';
    $output .= '<input id="' . $label . '" class="form-control" name="post_password" type="password"/>';
    $output .= '<span class="input-group-btn"><button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="' . esc_attr__( "Submit",'radix' ) . '">' . __( "Submit" ,'radix') . '</button></span>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</form>';
  return $output;
}

add_filter( 'the_password_form', 'Radix_custom_password_form' );


/** 
  Add responsive container to embeds
*/
function Radix_embed_wrap($html, $url, $attr = '', $post_ID = '') {
  if ( strpos($html, 'class="twitter-tweet"') ) {
    return $html;
  } else {
    return '<div class="embed-asset embed-responsive embed-responsive-16by9">' . str_replace( array('frame') , array('frame class="embed-responsive-item"'), $html) . '</div>';
  }
}
add_filter('embed_oembed_html', 'Radix_embed_wrap', 10, 3);


/**
 * Add Bootstrap thumbnail styling to images with captions
 * Use <figure> and <figcaption>
 * @link http://justintadlock.com/archives/2011/07/01/captions-in-wordpress
 */
   
function Radix_caption($output, $attr, $content) {
  if (is_feed()) {
    return $output;
  }

  $defaults = array(
    'id'      => '',
    'align'   => 'alignnone',
    'width'   => '',
    'caption' => ''
    );

  $attr = shortcode_atts($defaults, $attr);

  // If the width is less than 1 or there is no caption, return the content wrapped between the [caption] tags
  if ($attr['width'] < 1 || empty($attr['caption'])) {
    return $content;
  }

  // add HTML attributes to the caption
  $attributes  = (!empty($attr['id']) ? ' id="' . esc_attr($attr['id']) . '"' : '' );
  $attributes .= ' class="thumbnail wp-caption ' . esc_attr($attr['align']) . '"';
  $attributes .= ' style="width: ' . (esc_attr($attr['width']) + 10) . 'px"';

  $output  = '<figure' . $attributes .'>';
  $output .= do_shortcode($content);
  $output .= '<figcaption class="caption wp-caption-text">' . $attr['caption'] . '</figcaption>';
  $output .= '</figure>';

  return $output;
}
add_filter('img_caption_shortcode', 'Radix_caption', 10, 3);


/**
  Add featured image to RSS feed
*/
function Radix_featured_image_in_feed( $content ) {
  global $post;
  if( is_feed() ) {
    if ( has_post_thumbnail( $post->ID ) ){
      $output = get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'float:right; margin:0 0 10px 10px;' ) );
      $content = $output . $content;
    }
  }
  return $content;
}
add_filter( 'the_content', 'Radix_featured_image_in_feed' );


/** 
  Add a span into the WP categories widget count
*/
function Radix_cat_count_span($links) {
  $links = str_replace('</a> (', '</a> <span class="cat-count-span">(', $links);
  $links = str_replace(')', ')</span>', $links);
  return $links;
}
add_filter('wp_list_categories', 'Radix_cat_count_span');
