<?php
/**
 * @package Radix
 * @since Radix 1.0
 * 
 */

  // Fonts
  $main_font = ro_get_option('main_font');
  $h1_font = ro_get_option('h1_font');
  $h2_font = ro_get_option('h2_font');
  $h3_font = ro_get_option('h3_font');
  $h4_font = ro_get_option('h4_font');
  $h5_font = ro_get_option('h5_font');
  $h6_font = ro_get_option('h6_font');
  $nav_font = ro_get_option('nav_font');

  // Header
  $color_header_bg = ro_hex2rgba(ro_get_option('color_header_bg'),ro_get_option('header_bg_opacity'));
  $a_color_header_txt = ro_get_option('a_color_header_txt');
  $a_color_header_hov = ro_get_option('a_color_header_hov');
  $color_nav_bg = ro_get_option('color_nav_bg');
  $color_nav_a = ro_get_option('color_nav_a');
  $color_nav_a_hov = ro_get_option('color_nav_a_hov');

  // Sub Header
  $sub_header_bg_img = ro_get_option_media('sub_header_bg_img');
  $sub_header_bg_color = ro_hex2rgba(ro_get_option('sub_header_bg_color'));
  $color_sub_header_txt = ro_get_option('color_sub_header_txt');
  $color_breadcrumbs_txt_a = ro_get_option('color_breadcrumbs_txt_a');
  $color_breadcrumbs_txt_a_hover = ro_get_option('color_breadcrumbs_txt_a_hover');

  // Body
  $color_a_text = ro_get_option('color_a_text');
  $color_a_hov = ro_get_option('color_a_hov');
  $color_body_boxed_bg = ro_get_option('color_body_boxed_bg');
  $body_bg_img = ro_get_option_media('body_bg_img');
  $body_bg_style = ro_get_option('body_bg_style');

  //Content
  $color_content_bg = ro_get_option('color_content_bg');
  $color_entry_title_a = ro_get_option('color_entry_title_a');
  $color_entry_title_a_h = ro_get_option('color_entry_title_a_h');
  $color_content_txt = ro_get_option('color_content_txt');
  $color_content_meta = ro_get_option('color_content_meta');
  $author_bg_color = ro_get_option('author_bg_color');
  $author_txt_color = ro_get_option('author_txt_color');

  //Sidebar
  $color_sidebar_bg = ro_get_option('color_sidebar_bg');
  $color_sidebar_txt_h = ro_get_option('color_sidebar_txt_h');
  $color_sidebar_txt = ro_get_option('color_sidebar_txt');
  $color_sidebar_txt_hov = ro_get_option('color_sidebar_txt_hov');

  //Footer
  $color_footer_bg = ro_get_option('color_footer_bg');
  $color_footer_txt_a = ro_get_option('color_footer_txt_a');
  $color_footer_txt_h = ro_get_option('color_footer_txt_h');
  $color_footer_txt = ro_get_option('color_footer_txt');
  $color_footer_txt_hov = ro_get_option('color_footer_txt_hov');
?>


<?php // Header Area //////////////////////////////////////////// ?>

#top-bar {
  background: <?php echo esc_attr($color_header_bg); ?>;
}

#top-bar a {
  color: <?php echo esc_attr($a_color_header_txt); ?>;
}

#top-bar a:hover {
  color: <?php echo esc_attr($a_color_header_hov); ?>;
}


.navbar {
  background: <?php echo esc_attr($color_nav_bg); ?>;
}

.navbar-default .navbar-nav > li > a {
  color: <?php echo esc_attr($color_nav_a); ?>;
}


#site-menu .navbar-nav > .open > a, 
#site-menu .navbar-nav > .open > a:focus, 
#site-menu .navbar-nav > .open > a:hover, 

#site-menu .navbar-nav > .active > a, 
#site-menu .navbar-nav > .active > a:focus, 
#site-menu .navbar-nav > .active > a:hover, 

#site-menu .navbar-nav > li > a:focus, 
#site-menu .navbar-nav > li > a:hover, 

.nav .open > a, 
.nav .open > a:focus, 
.nav .open > a:hover, 

.dropdown-menu > li > a:focus, 
.dropdown-menu > li > a:hover, 

.dropdown-menu > .active > a, 
.dropdown-menu > .active > a:focus, 
.dropdown-menu > .active > a:hover {
  background-color: <?php echo esc_attr($color_nav_a_hov); ?>;
  color: <?php echo esc_attr($color_nav_bg); ?>;
}

#sub-header {
  <?php if(!empty($sub_header_bg_img)): ?>
  background: url('<?php echo esc_url($sub_header_bg_img); ?>') center center / cover no-repeat fixed;
  <?php else: ?>
  background-color: <?php echo esc_attr($sub_header_bg_color); ?>;
  <?php endif; ?>
  color: <?php echo esc_attr($color_sub_header_txt); ?>;
}

#breadcrumbs a {
  color: <?php echo esc_attr($color_breadcrumbs_txt_a); ?>
}

#breadcrumbs a:hover {
  color: <?php echo esc_attr($color_breadcrumbs_txt_a_hover); ?>
}

<?php // Body Area ////////////////////////////////////////////// ?>

body {

  <?php if(!empty($body_bg_img)): ?>
  background-image: url('<?php echo esc_url($body_bg_img); ?>');
  background-repeat: <?php echo esc_attr($body_bg_style['background-repeat']); ?>;
  background-size: <?php echo esc_attr($body_bg_style['background-size']); ?>;
  background-attachment: <?php echo esc_attr($body_bg_style['background-attachment']); ?>;
  background-position: <?php echo esc_attr($body_bg_style['background-position']); ?>;
  <?php else: ?>
  background-color: <?php echo esc_attr($body_bg_style['background-color']); ?>;
  <?php endif; ?>
  color: <?php echo esc_attr($main_font['color']); ?>;
  font-family: <?php echo esc_attr($main_font['font-family']); ?>;
  font-weight: <?php echo esc_attr($main_font['font-weight']); ?>;
  font-size: <?php echo esc_attr($main_font['font-size']); ?>;
}

a {
  color: <?php echo esc_attr($color_a_text); ?>;
}

a:hover, a:active, a:focus {
  color: <?php echo esc_attr($color_a_hov); ?>;
  text-decoration: none;
  -webkit-transition: all .3s;
  transition: all .3s
}

<?php // Content Area ////////////////////////////////////////////// ?>

.hentry {
  background-color: <?php echo esc_attr($color_content_bg); ?>;
}

.entry-title a {
  color: <?php echo esc_attr($color_entry_title_a); ?>;
}

.entry-title a:hover {
  color: <?php echo esc_attr($color_entry_title_a_h); ?>;
}

.entry-footer, .entry-meta {
  color: <?php echo esc_attr($color_content_meta); ?>;
}

.author-bio {
  background: <?php echo esc_attr($author_bg_color); ?>;
  color: <?php echo esc_attr($author_txt_color); ?>;
}  

<?php // Sidebar Area ////////////////////////////////////////////// ?>

#sidebar .sidebar-padder {
  background-color: <?php echo esc_attr($color_sidebar_bg); ?>;
}

.widget-title {
  color: <?php echo esc_attr($color_sidebar_txt_h); ?>;
}

#sidebar a {
  color: <?php echo esc_attr($color_sidebar_txt); ?>;
}

#sidebar a:hover, 
#sidebar a:active, 
#sidebar a:focus {
  color: <?php echo esc_attr($color_sidebar_txt_hov); ?>;
}


<?php // Footer Area ////////////////////////////////////////////// ?>

.footer-wrapper {
  background-color: <?php echo esc_attr($color_footer_bg); ?>;
  color: <?php echo esc_attr($color_footer_txt); ?>;
}

.footer-wrapper a {
  color: <?php echo esc_attr($color_footer_txt_a); ?>;
}

.footer-wrapper a:hover, 
.footer-wrapper a:active, 
.footer-wrapper a:focus {
  color: <?php echo esc_attr($color_footer_txt_hov); ?>;
}

.footer-widget-title {
  color: <?php echo esc_attr($color_footer_txt_h); ?>;
}


<?php // Typography Area ////////////////////////////////////////////// ?>

h1, .h1 {
  font-size: <?php echo esc_attr($h1_font['font-size']); ?>;
  font-family: <?php echo esc_attr($h1_font['font-family']); ?>;
  font-weight: <?php echo esc_attr($h1_font['font-weight']); ?>;
}

h2, .h2 {
  font-size: <?php echo esc_attr($h2_font['font-size']); ?>;
  font-family: <?php echo esc_attr($h2_font['font-family']); ?>;
  font-weight: <?php echo esc_attr($h2_font['font-weight']); ?>;
}

h3, .h3 {
  font-size: <?php echo esc_attr($h3_font['font-size']); ?>;
  font-family: <?php echo esc_attr($h3_font['font-family']); ?>;
  font-weight: <?php echo esc_attr($h3_font['font-weight']); ?>;
}

h4, .h4 {
  font-size: <?php echo esc_attr($h4_font['font-size']); ?>;
  font-family: <?php echo esc_attr($h4_font['font-family']); ?>;
  font-weight: <?php echo esc_attr($h4_font['font-weight']); ?>;
}

h5, .h5 {
  font-size: <?php echo esc_attr($h5_font['font-size']); ?>;
  font-family: <?php echo esc_attr($h5_font['font-family']); ?>;
  font-weight: <?php echo esc_attr($h5_font['font-weight']); ?>;
}

h6, .h6 {
  font-size: <?php echo esc_attr($h6_font['font-size']); ?>;
  font-family: <?php echo esc_attr($h6_font['font-family']); ?>;
  font-weight: <?php echo esc_attr($h6_font['font-weight']); ?>;
}

.navbar-default {
  font-family: <?php echo esc_attr($nav_font['font-family']); ?>;
  font-weight: <?php echo esc_attr($nav_font['font-weight']); ?>;
  font-size: <?php echo esc_attr($nav_font['font-size']); ?>;
}
