<?php
/**
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 */

/* General */
$this->sections[] = array(
    'icon'      => 'el el-icon-cog',
    'title'     => __('General', 'Radix'),
    'fields'    => array(
        array(
            'id'    => 'info_success',
            'type'  => 'info',
            'style' => 'success',
            'title' => __('Welcome to Radix Theme Option Panel', 'Radix'),
            'icon'  => 'el el-icon-smiley',
            'desc'  => __( 'From here you can config your theme in the way you like.', 'Radix')
            ),
        array(
            'id' => 'favicon',
            'type' => 'media',
            'url' => true,
            'title' => __('Favicon', 'Radix'), 
            'subtitle' => __('Upload your favicon here', 'Radix'),
            'desc' => __('Should be 16 x 16px Supported formats: .ico .gif .png', 'Radix'),
            'default'   => ''
            ),

        array(
            'id' => 'apple_touch_icon',
            'type' => 'media',
            'url' => true,
            'title' => __('Apple Touch Icon', 'Radix'), 
            'subtitle' => __('Upload icon for the Apple touch', 'Radix'),
            'desc' => __('Size: 57 x 57px Supported formats: .ico .gif .png', 'Radix'),
            'default'   => ''
            ),

        array(
            'id'        => 'scroll_to_top',
            'type'      => 'switch',
            'title'     => __('Scroll to top button', 'Radix'),
            'subtitle'  => __('Check if you want to disable scroll to top button', 'Radix'),
            'default'   => true
            ),
        array(
            'id'       => 'ga',
            'type'     => 'ace_editor',
            'title'    => __('Tracking Code', 'Radix'),
            'subtitle' => __('Paste your google analytics tracking code or any other javascript related tracking code', 'Radix'),
            'desc'  => __( 'This will be placed into the footer.', 'Radix'),
            'mode'     => 'text',
            'theme'    => 'monokai',
            'default'  => ''
            )
    )
);

/* Header */
$this->sections[] = array(
    'icon'      => 'el el-icon-user',
    'title'     => __('Header', 'Radix'),
    'desc'      => __('These are options to modify and style your header area', 'Radix'),
    'fields'    => array(
        array(
            'id'        => 'logo',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Logo', 'Radix'),
            'subtitle'  => __('Upload your logo image here, or leave empty to show website title instead', 'Radix'),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', 'Radix'),
            'default'   => ''
            ),
        array(
            'id'        =>'logo_width',
            'type'      => 'slider',       
            'title'     => __('Logo Width', 'Radix'), 
            'subtitle'  => __('Specify your logo width.', 'Radix'),
            'validate'  => 'numeric',
            "min"       => "50",
            "step"      => "1",
            "max"       => "300",
            'default'   => "110"          
            ),
        array(
            'id'        =>'logo_height',
            'type'      => 'slider',       
            'title'     => __('Logo Height', 'Radix'), 
            'subtitle'  => __('Specify your logo height.', 'Radix'),
            'validate'  => 'numeric',
            "min"       => "10",
            "step"      => "1",
            "max"       => "300",
            'default'   => "30"          
            ),    
        array(
            'id'        => 'header_description',
            'type'      => 'switch',
            'title'     => __('Display site description', 'Radix'),
            'subtitle'  => __('Check if you want to display site description.', 'Radix'),
            'desc'      => __('Note: It will apply only if You remove logo image. You can change your site description inside <array href="'.admin_url('options-general.php').'">Settings / General</a>', 'Radix'),
            'default'   => false,
            ),
        array(
            'id'        => 'sticky_header',
            'type'      => 'switch',
            'title'     => __('Sticky header', 'Radix'),
            'subtitle'  => __('Check if you want to disable sticky navigation.', 'Radix'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_nav_bg',
            'type'      => 'color',
            'title'     => __('Menu Background color', 'Radix'),
            'subtitle'  => __('Specify menu background color', 'Radix'),
            'transparent' => false,
            'default'   => '#b2afe8'
            ), 
        array(
            'id'        => 'color_nav_a',
            'type'      => 'color',
            'title'     => __('Menu Link color', 'Radix'),
            'subtitle'  => __('Specify menu link color', 'Radix'),
            'transparent' => false,
            'default'   => '#fff'
            ), 
        array(
            'id'        => 'navbar_search',
            'type'      => 'switch',
            'title'     => __('Show Menu Search', 'Radix'),
            'subtitle'  => __('Check if you want to disable search from nav menu.', 'Radix'),
            'default'   => true,
            ), 
        array(
            'id'        => 'top_header_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Top Header </h4>'),
            ),
        array(
            'id'        => 'hide_top_header',
            'type'      => 'switch',
            'title'     => __('Show Top Header Area', 'Radix'),
            'subtitle'  => __('Check if you want to remove top bar.', 'Radix'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_header_txt',
            'type'      => 'color',
            'title'     => __('Header Text color', 'Radix'),
            'subtitle'  => __('Specify header Text color', 'Radix'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#212121'
            ),              
        array(
            'id'        => 'color_header_bg',
            'type'      => 'color',
            'title'     => __('Header Background color', 'Radix'),
            'subtitle'  => __('Specify header background color', 'Radix'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#eee'
            ),      
        array(
            'id'        => 'header_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Header Background Image', 'Radix'),
            'subtitle'  => __('Upload a custom background for your header.', 'Radix'),
            'default'   => '',
            'required'  => array('hide_top_header', '=', true),
            ),
        array(
            'id'        => 'header_bg_style',
            'type'      => 'select',
            'title'     => __( 'Background Image Style', 'Radix' ), 
            'required'  => array('hide_top_header', '=', true),
            'subtitle'  => __( 'Select your header background style.', 'Radix' ),
            'options'   => array(
                'no-repeat'     => __( 'no-repeat', 'Radix' ),
                'repeat-x'      => __( 'repeat-x', 'Radix' ),
                'repeat-y'      => __( 'repeat-y', 'Radix' ),
                'repeat'        => __( 'repeat', 'Radix' ),
                ),
            'default'   => 'no-repeat'
            ),
        array(
            'id'        => 'top_header_text_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Top Header Text</h4>'),
            'required'  => array('hide_top_header', '=', true),
            ),                     
        array(
            'id'        =>'phone_text',
            'type'      => 'text',      
            'title'     => __('Header Phone Number', 'Radix'), 
            'subtitle'  => __('Insert your phone number here.', 'Radix'),
            'desc'      => __('Leave it empty to hide it.', 'Radix'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => "1-800-987-654"          
            ),
        array(
            'id'        =>'email_text',
            'type'      => 'text',      
            'title'     => __('Header Email Address', 'Radix'), 
            'subtitle'  => __('Insert your email address here.', 'Radix'),
            'desc'      => __('Leave it empty to hide it.', 'Radix'),
            'default'   => "info@Radix.com",
            'required' => array('hide_top_header', '=', true),
            'validate'  => 'email'
            ),
        array(
            'id'        =>'url_text',
            'type'      => 'text',      
            'title'     => __('Custom Header Link', 'Radix'), 
            'subtitle'  => __('Insert your custom link here.', 'Radix'),
            'desc'      => __('Leave it empty to hide it.', 'Radix'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => 'custom link'
            ),
        array(
            'id'        =>'custom_text_url',
            'type'      => 'text',      
            'title'     => __('Custom Header Link URL', 'Radix'), 
            'subtitle'  => __('Insert your custom link url here.', 'Radix'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#'
            ),                                                                              
        array(
            'id'        => 'a_color_header_txt',
            'type'      => 'color',
            'title'     => __('Custom Link color', 'Radix'),
            'subtitle'  => __('Change the custom link color.', 'Radix'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#212121'
            ),
        array(
            'id'        => 'a_color_header_hov',
            'type'      => 'color',
            'title'     => __('Custom Link color hover', 'Radix'),
            'subtitle'  => __('custom link color hover.', 'Radix'),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#908dbd'
            ),
        array(
            'id'        => 'sub_header_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Sub Header </h4>'),
            ),
        array(
            'id'        => 'hide_sub_header',
            'type'      => 'switch',
            'title'     => __('Show Sub Header Area', 'Radix'),
            'subtitle'  => __('Check if you want to remove sub header area including breadcrumbs.', 'Radix'),
            'desc'      => __('Note: You can hide breadcrumbs separately in Body section.', 'Radix'),
            'default'   => true,
            ),
        array(
            'id'        => 'sub_header_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Sub Header background pattern', 'Radix'),
            'subtitle'  => __('Choose sub header background pattern or image.', 'Radix'),
            'default'   => array('url' => RADIX_IMG_URI .'/bg-section.jpg'),
            'required'  => array('hide_sub_header', '=', true),
            ),                          
        array(
            'id'        => 'sub_header_bg_color',
            'type'      => 'color',
            'title'     => __('Sub Header Background color', 'Radix'),
            'subtitle'  => __('Specify the sub header background color', 'Radix'),
            'transparent' => false,
            'desc'      => __('If there is no Background image the default value is #615e95.', 'Radix'),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#644c80'
            ),
        array(
            'id'        => 'color_sub_header_txt',
            'type'      => 'color',
            'title'     => __('Sub Header Text Color', 'Radix'),
            'subtitle'  => __('Change the default sub-header text color.', 'Radix'),
            'desc'      => __('Note: this will be applied on breadcrumbs text color too.', 'Radix'),
            'transparent' => false,
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#fff'
            ),
        array(
            'id'        => 'hide_breadcrumb',
            'type'      => 'switch',
            'title'     => __('Show Breadcrumb ', 'Radix'),
            'subtitle'  => __('Check if you want to remove breadcrumb from pages', 'Radix'),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => true
            ),        
        array(
            'id'        => 'color_breadcrumbs_txt_a',
            'type'      => 'color',
            'title'     => __('Breadcrumbs Link Color', 'Radix'),
            'subtitle'  => __('Change the default breadcrumbs link color.', 'Radix'),
            'transparent' => false,
            'required'  => array('hide_breadcrumb', '=', true),
            'default'   => ''
            ),
        array(
            'id'        => 'color_breadcrumbs_txt_a_hover',
            'type'      => 'color',
            'title'     => __('Breadcrumbs Link Hover Color', 'Radix'),
            'subtitle'  => __('Change the default breadcrumbs link hover color.', 'Radix'),
            'transparent' => false,
            'required'  => array('hide_breadcrumb', '=', true),
            'default'   => ''
            ),                                        
    )
);

/* Body */
$this->sections[] = array(
    'icon'      => 'el el-icon-screen',
    'title'     => __('Body', 'Radix'),
    'desc'     => __('These are options to modify and style your body area', 'Radix'),
    'fields'    => array(
        array(
            'id'        => 'comments_on_pages',
            'type'      => 'switch',
            'title'     => __('Comments on pages', 'Radix'),
            'subtitle'  => __('turn off comments on pages', 'Radix'),
            'default'   => true
            ),                    
        array(
            'id'        => 'body_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Body background Image', 'Radix'),
            'subtitle'  => __('Choose body background pattern or image.', 'Radix'),
            'default'   => array('url' => ''),
            ),
        array(
            'id'        => 'body_bg_style',
            'type'      => 'background',
            'background-image' => false,
            'title'     => __( 'Background Style', 'Radix' ), 
            'subtitle'  => __( 'Select your body background style.', 'Radix' ),
            'transparent' => false,
            'preview' => false,
            'default'  => array(
                'background-color' => '#f3f3f3')
            ),
        array(
            'id' => 'color_a_text',
            'type' => 'color',
            'title' => __('a link color', 'Radix'),
            'subtitle' => __('Color for a links', 'Radix'),
            'transparent' => false,
            'default' => '#908dbd'
            ),         
        array(
            'id' => 'color_a_hov',
            'type' => 'color',
            'title' => __('a link color hover', 'Radix'),
            'subtitle' => __('Hover color for a links', 'Radix'),
            'transparent' => false,
            'default' => '#b2afe8'
            ),                

    )
);

/* Content */
$this->sections[] = array(
    'icon'      => 'el el-icon-blogger',
    'title'     => __('Blog', 'Radix'),
    'desc'     => __('These are options to modify and style your main content area only', 'Radix'),
    'fields'    => array(
        array(
            'id'        =>'excerpt_length_count',
            'type'      => 'slider',       
            'title'     => __('Excerpt Length Limits', 'Radix'), 
            'subtitle'  => __('Enter the number of excerpt length limit to display.', 'Radix'),
            'validate'  => 'numeric',
            "min"       => "5",
            "step"      => "5",
            "max"       => "100",
            'default'   => "55"          
            ), 
        array(
            'id'        => 'post_navigation',
            'type'      => 'switch',
            'title'     => __('Show post navigation', 'Radix'),
            'subtitle'  => __('Check if you want to remove post navigation on single post', 'Radix'),
            'default'   => true,
            ),
        array(
            'id'        => 'post_content_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Single Post style</h4>'),
            ),                                                      
        array(
            'id' => 'color_content_bg',
            'type' => 'color',
            'title' => __('Background color', 'Radix'),
            'subtitle' => __('Specify content area background color', 'Radix'),
            'transparent' => false,
            'default' => '#ffffff',
            ),
        array(
            'id' => 'color_content_txt_h',
            'type' => 'color',
            'title' => __('Post title color', 'Radix'),
            'subtitle' => __('This color will apply to post title heading, which is (H2) by default.', 'Radix'),
            'transparent' => false,
            'default' => '#212121'
            ),       
        array(
            'id' => 'color_content_txt',
            'type' => 'color',
            'title' => __('Content text color', 'Radix'),
            'subtitle' => __('This color will apply to text color in the content area only', 'Radix'),
            'transparent' => false,
            'default' => '#212121'
            ),
        array(
            'id' => 'color_content_meta',
            'type' => 'color',
            'title' => __('Meta text color', 'Radix'),
            'subtitle' => __('This color will apply to your meta data (secondary text)', 'Radix'),
            'transparent' => false,
            'default' => '#888888'
            ),

        array(
            'id'        => 'author_content_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Author Box</h4>'),
            ),
        array(
            'id'        => 'blog_author_bio',
            'type'      => 'switch',
            'title'     => __('Enable author Bio', 'Radix'),
            'subtitle'  => __('Enable / Disable author box', 'Radix'),
            'default'   => true,
            ),  
        array(
            'id' => 'author_bg_color',
            'type' => 'color',
            'title' => __('Background color', 'Radix'),
            'subtitle' => __('Specify content area background color', 'Radix'),
            'transparent' => false,
            'required'  => array('blog_author_bio', '=', true),
            'default' => '#352041',
            ),
        array(
            'id' => 'author_txt_color',
            'type' => 'color',
            'title' => __('Content text color', 'Radix'),
            'subtitle' => __('This color will apply to text color in the content area only', 'Radix'),
            'transparent' => false,
            'required'  => array('blog_author_bio', '=', true),
            'default' => '#fff'
            ),      
        array(
            'id'        => 'author_socials',
            'type'      => 'switch',
            'title'     => __('Author Social Share', 'Radix'),
            'subtitle'  => __('Check if you want to remove social share from author box', 'Radix'),
            'required'  => array('blog_author_bio', '=', true),
            'default'   => true,
            ),
        array(
            'id'        =>'author_socials_text',
            'type'      => 'text',      
            'title'     => __('Author Social Text', 'Radix'), 
            'subtitle'  => __('Change post social text here.', 'Radix'),
            'required'  => array('author_socials', '=', true),
            'desc'      => 'Leave it empty to hide it.',
            'default'   => "Follow me"          
            ), 
        array(
            'id'        =>'author_facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', 'Radix'), 
            'subtitle'  => __('Insert your Facebook fanpage here.', 'Radix'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'author_twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', 'Radix'), 
            'subtitle'  => __('Insert your Twitter URL here.', 'Radix'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'author_linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', 'Radix'), 
            'subtitle'  => __('Insert your Linkedin URL here.', 'Radix'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'author_google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', 'Radix'), 
            'subtitle'  => __('Insert your Google Plus URL here.', 'Radix'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
    )
);

/* Sidebar */
$this->sections[] = array(
    'icon'      => 'el el-icon-lines',
    'title'     => __('Sidebar', 'Radix'),
    'desc'      => __('These are global styling settings for the sidebar area', 'Radix'),
    'fields'    => array(
        array(
            'id' => 'color_sidebar_bg',
            'type' => 'color',
            'title' => __('Background color', 'Radix'),
            'subtitle' => __('Specify sidebar background color', 'Radix'),
            'transparent' => false,
            'default' => '#ffffff',
            ),
        array(
            'id' => 'color_sidebar_txt_h',
            'type' => 'color',
            'title' => __('Sidebar titles color', 'Radix'),
            'subtitle' => __('This color will apply to your sidebar titles.', 'Radix'),
            'transparent' => false,
            'default' => '#212121'
            ),
        array(
            'id' => 'color_sidebar_txt',
            'type' => 'color',
            'title' => __('a links color', 'Radix'),
            'subtitle' => __('This color will apply to sidebar links.', 'Radix'),
            'transparent' => false,
            'default' => '#908dbd'
            ),       
        array(
            'id' => 'color_sidebar_txt_hov',
            'type' => 'color',
            'title' => __('a links color hover', 'Radix'),
            'subtitle' => __('This color will apply to sidebar links hover.', 'Radix'),
            'transparent' => false,
            'default' => '#b2afe8'
            ),
    )
);

/* Footer */
$this->sections[] = array(
    'icon'      => 'el el-icon-bookmark',
    'title'     => __('Footer', 'Radix'),
    'desc'      => __('Manage settings for footer area', 'Radix'),
    'fields'    => array(

         array(
            'id'        => 'footer_display',
            'type'      => 'switch',
            'switch'    => true,
            'title'     => __('Enable Footer', 'Radix'),
            'subtitle'  => __('Check if you want to disable footer widgets area.', 'Radix'),
            'default'   => true
            ),
        array(
            'id'        => 'footer_col',
            'type'      => 'image_select',
            'compiler'  => true,
            'title'     => __('Footer Widget Columns', 'Radix'),
            'subtitle'  => __('Choose columns you want for your footer widgets.', 'Radix'),
            'desc'      => __('You can manage footer area content in <a href="'.admin_url('widgets.php').'">Apperance / Widgets</a> settings.', 'Radix'),
            'options'   => array(
                '1' => array('alt' => '1 Column ', 'img' => RADIX_IMG_URI . '/1column.png'),
                '2' => array('alt' => '2 Column ', 'img' => RADIX_IMG_URI . '/2columns.png'),
                '3' => array('alt' => '3 Column ', 'img' => RADIX_IMG_URI . '/3columns.png'),
                '4' => array('alt' => '4 Column ', 'img' => RADIX_IMG_URI . '/4columns.png')
                ),
            'required'  => array('footer_display', '=', true),
            'default'   => '4',
            
            ),
        array(
            'id'        => 'color_footer_bg',
            'type'      => 'color',
            'title'     => __('Background color', 'Radix'),
            'subtitle'  => __('Specify the footer background color', 'Radix'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#222222',
            ),
        array(
            'id'        => 'color_footer_txt_h',
            'type'      => 'color',
            'title'     => __('Footer titles color', 'Radix'),
            'subtitle'  => __('This color will apply to your footer titles.', 'Radix'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#fff'
            ),
        array(
            'id'        => 'color_footer_txt',
            'type'      => 'color',
            'title'     => __('Footer Text color', 'Radix'),
            'subtitle'  => __('This color will apply to footer text.', 'Radix'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#777'
            ),      
        array(
            'id'        => 'color_footer_txt_a',
            'type'      => 'color',
            'title'     => __('Footer a links color', 'Radix'),
            'subtitle'  => __('This color will apply to footer links.', 'Radix'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#aaa'
            ),       
        array(
            'id'        => 'color_footer_txt_hov',
            'type'      => 'color',
            'title'     => __('Footer a links color hover', 'Radix'),
            'subtitle'  => __('This color will apply to footer links hover.', 'Radix'),
            'transparent' => false,
            'required'  => array('footer_display', '=', true),
            'default'   => '#b2afe8'
            ),
         array(
            'id'        => 'enable_footer_social',
            'type'      => 'switch',
            'title'     => __('Enable Footer Socials', 'Radix'),
            'subtitle'  => __('Check if you want to hide footer socials bar','Radix'),
            'required'  => array('footer_display', '=', true),
            'default'   => true
            ),
        array(
            'id'        =>'footer_socials_text',
            'type'      => 'text',      
            'title'     => __('Footer Social Text', 'Radix'), 
            'subtitle'  => __('Change post social text here.', 'Radix'),
            'required'  => array('footer_display', '=', true),
            'default'   => "Follow us: "          
            ),
         array(
            'id'        => 'enable_copyright',
            'type'      => 'switch',
            'title'     => __('Enable Copyright Area', 'Radix'),
            'subtitle'  => __('Check if you want to include copyright area below footer','Radix'),
            'default'   => true
            ),
         array(
            'id'        => 'enable_footer_menu',
            'type'      => 'switch',
            'title'     => __('Enable Footer Menu', 'Radix'),
            'subtitle'  => __('Check if you want to show footer menu inside copyright area', 'Radix'),
            'desc'  => __('Note: you need to set footer menu inside <a href="'.admin_url('nav-menus.php').'">Apperance / Menu</a>', 'Radix'),
            'default'   => true,
            'required'  => array('enable_copyright', '=', true)
            )

    )
);

/* Typography */
$this->sections[] = array(
    'icon'      => 'el el-icon-font',
    'title'     => __('Typography', 'Radix'),
    'desc'     => __('Manage fonts and typography settings', 'Radix'),
    'fields'    => array(

        array(
            'id'          => 'main_font',
            'type'        => 'typography', 
            'title'       => __('Main text font', 'Radix'),
            'google'      => true, 
            'compiler'    => true,
            'font-backup' => false,
            'font-size'   => true,
            'color'       => true,
            'subsets'     => false,
            'line-height' => false,
            'text-align'  => false,
            'units'       =>'px',
            'subtitle'    => __('Typography option with each property can be called individually.', 'Radix'),
            'default'     => array(
                'google'        => true,
                'font-weight'   => '300', 
                'font-family'   => 'Open Sans',
                'font-size'     => '',
                'color'     => '',
                ),
            'preview' => array(
                'always_display'=> true,
                'font-size'     => '14px',
                'text'          => 'We think that readibility is very important part of any WordPress theme. This is actually a rough example of how simple paragpraph of text will look like on your website so you have a simple preview here.'
                )
            ),

        array(
            'id'        => 'Heading_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Heading Style</h4>'),
            ),
        array(
            'id'          => 'h1_font',
            'type'        => 'typography', 
            'title'       => __('H1 font', 'Radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H1 tag font properties.', 'Radix'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '36px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h2_font',
            'type'        => 'typography', 
            'title'       => __('H2 font', 'Radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H2 tag font properties.', 'Radix'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '30px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h3_font',
            'type'        => 'typography', 
            'title'       => __('H3 font', 'Radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H3 tag font properties.', 'Radix'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '24px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h4_font',
            'type'        => 'typography', 
            'title'       => __('H4 font', 'Radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H4 tag font properties.', 'Radix'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '18px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h5_font',
            'type'        => 'typography', 
            'title'       => __('H5 font', 'Radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H5 tag font properties.', 'Radix'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '14px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'          => 'h6_font',
            'type'        => 'typography', 
            'title'       => __('H6 font', 'Radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H6 tag font properties.', 'Radix'),
            'default'     => array(
                'google'      => true,
                'font-weight'  => '300',
                'font-family' => 'Open Sans',
                'font-size' => '',
                ),
            'preview' => array(
                'always_display' => true,
                'font-size' => '12px',
                'text' => 'There is no good blog without great readability'
                )

            ),
        array(
            'id'            => 'nav_font',
            'type'          => 'typography', 
            'title'         => __('Navigation font', 'Radix'),
            'google'        => true, 
            'compiler'      => true,
            'font-backup'   => false,
            'font-size'     => true,
            'color'         => false,
            'line-height'   => false,
            'text-align'    => false,
            'subsets'       => false,
            'units'         =>'px',
            'subtitle'      => __('Typography option with each property can be called individually.', 'Radix'),
            'default'       => array(
                'google'        => true,
                'font-weight'   => '300', 
                'font-family'   => 'Open Sans',
                'font-size' => '',
                ),

            'preview' => array(
                'always_display' => true,
                'font-size'      => '14px',
                'text'           => 'Home &nbsp;&nbsp;About &nbsp;&nbsp;Blog &nbsp;&nbsp;Contact'
                )

            ),                
    )
);

/* Social */
$this->sections[] = array(
    'icon' => 'el el-icon-group',
    'icon_class' => 'el el-icon-large',
    'title' => __('Social Networks', 'Radix'),
    'desc'     => __('Manage your social settings', 'Radix'),
    'fields' => array(
        array(
            'id'        => 'header_socials',
            'type'      => 'switch',
            'title'     => __('Show header social Icons', 'Radix'),
            'subtitle'  => __('Check if you want to remove header social icons.', 'Radix'),
            'desc'      => __('Note: You can set your social links in socials section.', 'Radix'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_header_socials',
            'type'      => 'color',
            'title'     => __('Header socials icons color.', 'Radix'),
            'subtitle'  => __('Change header socials icons color.', 'Radix'),
            'transparent' => false,
            'required'  => array('header_socials', '=', true),
            'default'   => '#666666'
            ),
        array(
            'id'    => 'info_warning',
            'icon'  => 'el el-info-circle',
            'type'  => 'info',
            'title' => __('NOTE!', 'Radix'),
            'style' => 'warning',
            'required'  => array('header_socials', '=', true),
            'desc'  => __('If you leave any field empty, icon will not show.<br> Please note that these icons are used for footer social bar as well.', 'Radix')
            ),     
        array(
            'id'        =>'facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', 'Radix'), 
            'subtitle'  => __('Insert your Facebook fanpage here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', 'Radix'), 
            'subtitle'  => __('Insert your Twitter URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'dribbble',
            'type'      => 'text',      
            'title'     => __('Dribbble', 'Radix'), 
            'subtitle'  => __('Insert your Dribbble URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', 'Radix'), 
            'subtitle'  => __('Insert your Google Plus URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'pinterest',
            'type'      => 'text',      
            'title'     => __('Pinterest', 'Radix'), 
            'subtitle'  => __('Insert your Pinterest URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'flickr',
            'type'      => 'text',      
            'title'     => __('Flickr', 'Radix'), 
            'subtitle'  => __('Insert your Flickr URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'instagram',
            'type'      => 'text',      
            'title'     => __('Instagram', 'Radix'), 
            'subtitle'  => __('Insert your Instagram URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'vimeo',
            'type'      => 'text',      
            'title'     => __('Vimeo', 'Radix'), 
            'subtitle'  => __('Insert your Vimeo URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'rss',
            'type'      => 'text',      
            'title'     => __('Rss', 'Radix'), 
            'subtitle'  => __('Insert your Rss URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),                                                    
        array(
            'id'        =>'linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', 'Radix'), 
            'subtitle'  => __('Insert your Linkedin URL here.', 'Radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
    )
);

/* Advanced options */
$this->sections[] = array(
    'icon' => 'el el-icon-cogs',
    'icon_class' => 'el el-icon-large',
    'title' => __('Advanced Options', 'Radix'),
    'desc'     => __('Advanced options for avanced users here', 'Radix'),
    'fields' => array(
        array(
            'id'        => 'additional_codes',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Custom Codes</h4>'),
            ),
        array(
            'id'       => 'custom_css',
            'type'     => 'ace_editor',
            'title'    => __('Additional CSS', 'Radix'),
            'subtitle' => __('Use this field to write or paste CSS code and modify default theme styling', 'Radix'),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'default' => ".example {\nmargin: 0 auto;\n}"
            ),
        array(
            'id'       => 'custom_js',
            'type'     => 'ace_editor',
            'title'    => __('Additional JavaScript', 'Radix'),
            'subtitle' => __('Use this field to write or paste additional JavaScript code to this theme', 'Radix'),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
            'default' => "jQuery(document).ready(function(){\n\n});"
            ),
    )
);

/* maintenance */
$this->sections[] = array(
    'icon'      => 'el el-icon-warning-sign',
    'title'     => __('Maintenance Mode', 'Radix'),
    'desc'      => __('Basic maintenance mode', 'Radix'),
    'fields'    => array(
        array(
            'id'        => 'maintenance_mode',
            'type'      => 'switch',
            'title'     => __('Maintenance mode', 'Radix'),
            'subtitle'  => __('Enable maintenance mode.', 'Radix'),
             'desc'  => __('Check if you want to enable the default wordpress maintenance mode.', 'Radix'),
            'default'   => false,
            ),
        )
);


?>