<?php
/**
 * @package Radix
 * @since Radix 1.0
 */

/* General */
$this->sections[] = array(
    'icon'      => 'el el-icon-cog',
    'title'     => __('General', 'radix'),
    'fields'    => array(
        array(
            'id'    => 'info_success',
            'type'  => 'info',
            'style' => 'success',
            'title' => __('Welcome to Radix Theme Option Panel', 'radix'),
            'icon'  => 'el el-icon-smiley',
            'desc'  => __( 'From here you can config your theme in the way you like.', 'radix')
            ),
        array(
            'id' => 'favicon',
            'type' => 'media',
            'url' => true,
            'title' => __('Favicon', 'radix'), 
            'subtitle' => __('Upload your favicon here', 'radix'),
            'desc' => __('Should be 16 x 16px Supported formats: .ico .gif .png', 'radix'),
            'default'   => ''
            ),

        array(
            'id' => 'apple_touch_icon',
            'type' => 'media',
            'url' => true,
            'title' => __('Apple Touch Icon', 'radix'), 
            'subtitle' => __('Upload icon for the Apple touch', 'radix'),
            'desc' => __('Size: 57 x 57px Supported formats: .ico .gif .png', 'radix'),
            'default'   => ''
            ),

        array(
            'id'        => 'scroll_to_top',
            'type'      => 'switch',
            'title'     => __('Scroll to top button', 'radix'),
            'subtitle'  => __('Check if you want to disable scroll to top button', 'radix'),
            'default'   => true
            ),
    )
);

/* Header */
$this->sections[] = array(
    'icon'      => 'el el-icon-user',
    'title'     => __('Header', 'radix'),
    'desc'      => __('These are options to modify and style your header area', 'radix'),
    'fields'    => array(
        array(
            'id'        => 'logo',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Logo', 'radix'),
            'subtitle'  => __('Upload your logo image here, or leave empty to show website title instead', 'radix'),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', 'radix'),
            'default'   => ''
            ),
        array(
            'id'        =>'logo_width',
            'type'      => 'slider',       
            'title'     => __('Logo Width', 'radix'), 
            'subtitle'  => __('Specify your logo width.', 'radix'),
            'validate'  => 'numeric',
            "min"       => "50",
            "step"      => "1",
            "max"       => "300",
            'default'   => "91"          
            ),
        array(
            'id'        =>'logo_height',
            'type'      => 'slider',       
            'title'     => __('Logo Height', 'radix'), 
            'subtitle'  => __('Specify your logo height.', 'radix'),
            'validate'  => 'numeric',
            "min"       => "10",
            "step"      => "1",
            "max"       => "300",
            'default'   => "24"          
            ),    
        array(
            'id'        => 'header_description',
            'type'      => 'switch',
            'title'     => __('Display site description', 'radix'),
            'subtitle'  => __('Check if you want to display site description.', 'radix'),
            'desc'      => __('Note: It will apply only if You remove logo image. You can change your site description inside <a href="' . admin_url('options-general.php') . '">Settings / General</a>', 'radix'),
            'default'   => false,
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
            'title'     => __('Show Top Header Area', 'radix'),
            'subtitle'  => __('Check if you want to remove top bar.', 'radix'),
            'default'   => true,
            ),
        array(
            'id'        => 'contact_header_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'required'  => array('hide_top_header', '=', true),
            'raw'       => __('<h4 style="margin: 3px;">Contact Header</h4>'),
            ),
        array(
            'id'        => 'header_contacts',
            'type'      => 'switch',
            'title'     => __('Show Contact Header', 'radix'),
            'subtitle'  => __('Check if you want to remove top bar content area.', 'radix'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => true,
            ),             
        array(
            'id'        =>'phone_text',
            'type'      => 'text',      
            'title'     => __('Phone Number', 'radix'), 
            'subtitle'  => __('Insert phone number here.', 'radix'),
            'desc'      => __('Leave it empty to hide it.', 'radix'),
            'required'  => array('header_contacts', '=', true),
            'default'   => "1-800-987-654"          
            ),
        array(
            'id'        =>'email_text',
            'type'      => 'text',      
            'title'     => __('Email Address', 'radix'), 
            'subtitle'  => __('Insert email address here.', 'radix'),
            'desc'      => __('Leave it empty to hide it.', 'radix'),
            'default'   => "info@radix.com",
            'required' => array('header_contacts', '=', true),
            'validate'  => 'email'
            ),
        array(
            'id'        =>'custom_url',
            'type'      => 'text',      
            'title'     => __('Custom Header Link', 'radix'), 
            'subtitle'  => __('Insert your custom link here.', 'radix'),
            'desc'      => __('Leave it empty to hide it.', 'radix'),
            'required'  => array('header_contacts', '=', true),
            'default'   => '#'
            ),
        array(
            'id'        =>'custom_url_text',
            'type'      => 'text',      
            'title'     => __('Custom Header Link text', 'radix'), 
            'subtitle'  => __('Insert your custom link text here.', 'radix'),
            'required'  => array('header_contacts', '=', true),
            'default'   => 'custom link'
            ),
        array(
            'id'        => 'color_header_bg',
            'type'      => 'color',
            'title'     => __('Background color', 'radix'),
            'subtitle'  => __('Specify header background color', 'radix'),
            'transparent' => false,
            'required'  => array('header_contacts', '=', true),
            'default'   => '#f3f3f3'
            ),                                                                       
        array(
            'id'        => 'a_color_header_txt',
            'type'      => 'color',
            'title'     => __('links color', 'radix'),
            'subtitle'  => __('Change the top header links color.', 'radix'),
            'transparent' => false,
            'required'  => array('header_contacts', '=', true),
            'default'   => '#555'
            ),
        array(
            'id'        => 'a_color_header_hov',
            'type'      => 'color',
            'title'     => __('Left links hover color', 'radix'),
            'subtitle'  => __('Change the top header links hover color.', 'radix'),
            'transparent' => false,
            'required'  => array('header_contacts', '=', true),
            'default'   => '#48365c'
            ),
        array(
            'id'        => 'social_text_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'required'  => array('header_socials', '=', true),
            'raw'       => __('<h4 style="margin: 3px;">Social Header</h4>'),
            ),
        array(
            'id'        => 'header_socials',
            'type'      => 'switch',
            'title'     => __('Show Social Header', 'radix'),
            'subtitle'  => __('Check if you want to remove header social icons.', 'radix'),
            'required'  => array('hide_top_header', '=', true),
            'default'   => true,
            ),

        array(
            'id'        =>'facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', 'radix'), 
            'subtitle'  => __('Insert your Facebook fanpage here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', 'radix'), 
            'subtitle'  => __('Insert your Twitter URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'dribbble',
            'type'      => 'text',      
            'title'     => __('Dribbble', 'radix'), 
            'subtitle'  => __('Insert your Dribbble URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', 'radix'), 
            'subtitle'  => __('Insert your Google Plus URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'pinterest',
            'type'      => 'text',      
            'title'     => __('Pinterest', 'radix'), 
            'subtitle'  => __('Insert your Pinterest URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'flickr',
            'type'      => 'text',      
            'title'     => __('Flickr', 'radix'), 
            'subtitle'  => __('Insert your Flickr URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'instagram',
            'type'      => 'text',      
            'title'     => __('Instagram', 'radix'), 
            'subtitle'  => __('Insert your Instagram URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'vimeo',
            'type'      => 'text',      
            'title'     => __('Vimeo', 'radix'), 
            'subtitle'  => __('Insert your Vimeo URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'rss',
            'type'      => 'text',      
            'title'     => __('Rss', 'radix'), 
            'subtitle'  => __('Insert your Rss URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),                                                    
        array(
            'id'        =>'linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', 'radix'), 
            'subtitle'  => __('Insert your Linkedin URL here.', 'radix'),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),

        array(
            'id'        => 'nav_text_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Navigation Menu</h4>'),
            ),
        array(
            'id'        => 'sticky_header',
            'type'      => 'switch',
            'title'     => __('Sticky Menu', 'radix'),
            'subtitle'  => __('Check if you want to disable sticky navigation.', 'radix'),
            'default'   => true,
            ),
        array(
            'id'        => 'color_nav_bg',
            'type'      => 'color',
            'title'     => __('Background Color', 'radix'),
            'subtitle'  => __('Specify menu background color', 'radix'),
            'transparent' => false,
            'default'   => '#fff'
            ), 
        array(
            'id'        => 'color_nav_a',
            'type'      => 'color',
            'title'     => __('Link Color', 'radix'),
            'subtitle'  => __('Specify menu link color', 'radix'),
            'transparent' => false,
            'default'   => '#777'
            ), 
        array(
            'id'        => 'color_nav_a_hov',
            'type'      => 'color',
            'title'     => __('Link Hover Color', 'radix'),
            'subtitle'  => __('Specify menu link hover color', 'radix'),
            'transparent' => false,
            'default'   => '#48365c'
            ),
        array(
            'id'        => 'navbar_search',
            'type'      => 'switch',
            'title'     => __('Show Menu Search', 'radix'),
            'subtitle'  => __('Check if you want to disable search from nav menu.', 'radix'),
            'default'   => true,
            ),                                 
        )
);

/* Body */
$this->sections[] = array(
    'icon'      => 'el el-icon-screen',
    'title'     => __('Body', 'radix'),
    'desc'      => __('These are options to modify and style your body area', 'radix'),
    'fields'    => array(
        array(
            'id'        => 'sub_header_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Page Title Area</h4>'),
            ),
        array(
            'id'        => 'hide_sub_header',
            'type'      => 'switch',
            'title'     => __('Show page title Area', 'radix'),
            'subtitle'  => __('Check if you want to remove the page title area including breadcrumbs.', 'radix'),
            'desc'      => __('Note: You can hide breadcrumbs separately.', 'radix'),
            'default'   => true,
            ),
        array(
            'id'        => 'sub_header_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Custom background', 'radix'),
            'subtitle'  => __('Choose background image for page title area.', 'radix'),
            'default'   => '',
            'required'  => array('hide_sub_header', '=', true),
            ),                          
        array(
            'id'        => 'sub_header_bg_color',
            'type'      => 'color',
            'title'     => __('Background color', 'radix'),
            'subtitle'  => __('If there is no Background image, specify the sub header background color', 'radix'),
            'transparent' => false,
            'desc'      => __('The default value is #3a394d.', 'radix'),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#48365c'
            ),
        array(
            'id'        => 'color_sub_header_txt',
            'type'      => 'color',
            'title'     => __('Text Color', 'radix'),
            'subtitle'  => __('Change the default text color.', 'radix'),
            'desc'      => __('Note: this will be applied on breadcrumbs text color too.', 'radix'),
            'transparent' => false,
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#fff'
            ),
        array(
            'id'        => 'breadcrumb_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Breadcrumbs</h4>'),
            ),
        array(
            'id'        => 'hide_page_title',
            'type'      => 'switch',
            'title'     => __('Show Page title ', 'radix'),
            'subtitle'  => __('Check if you want to page title from the sup header', 'radix'),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => true
            ),  
        array(
            'id'        => 'hide_breadcrumb',
            'type'      => 'switch',
            'title'     => __('Show Breadcrumb ', 'radix'),
            'subtitle'  => __('Check if you want to remove breadcrumb from pages', 'radix'),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => true
            ),        
        array(
            'id'        => 'color_breadcrumbs_txt_a',
            'type'      => 'color',
            'title'     => __('Breadcrumbs Link Color', 'radix'),
            'subtitle'  => __('Change the default breadcrumbs link color.', 'radix'),
            'transparent' => false,
            'required'  => array('hide_breadcrumb', '=', true),
            'default'   => '#bab8cc'
            ),
        array(
            'id'        => 'color_breadcrumbs_txt_a_hover',
            'type'      => 'color',
            'title'     => __('Breadcrumbs Link Hover Color', 'radix'),
            'subtitle'  => __('Change the default breadcrumbs link hover color.', 'radix'),
            'transparent' => false,
            'required'  => array('hide_breadcrumb', '=', true),
            'default'   => '#d5d4e0'
            ),
        array(
            'id'        => 'body_style_section',
            'icon'      => true,
            'type'      => 'info',
            'style'     => 'info',
            'raw'       => __('<h4 style="margin: 3px;">Body Area</h4>'),
            ), 
        array(
            'id'        => 'comments_on_pages',
            'type'      => 'switch',
            'title'     => __('Comments on pages', 'radix'),
            'subtitle'  => __('turn off comments on pages', 'radix'),
            'default'   => true
            ),                    
        array(
            'id'        => 'body_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Body background Image', 'radix'),
            'subtitle'  => __('Choose body background pattern or image.', 'radix'),
            'default'   => array('url' => ''),
            ),
        array(
            'id'        => 'body_bg_style',
            'type'      => 'background',
            'background-image' => false,
            'title'     => __( 'Background Style', 'radix' ), 
            'subtitle'  => __( 'Select your body background style.', 'radix' ),
            'transparent' => false,
            'preview' => false,
            'default'  => array(
                'background-color' => '#f9f9f9')
            ),
        array(
            'id' => 'color_a_text',
            'type' => 'color',
            'title' => __('a link color', 'radix'),
            'subtitle' => __('Color for all links', 'radix'),
            'transparent' => false,
            'default' => '#48365c'
            ),         
        array(
            'id' => 'color_a_hov',
            'type' => 'color',
            'title' => __('a link color hover', 'radix'),
            'subtitle' => __('Hover color for all links', 'radix'),
            'transparent' => false,
            'default' => '#8877a3'
            ),                

    )
);

/* Content */
$this->sections[] = array(
    'icon'      => 'el el-icon-blogger',
    'title'     => __('Blog', 'radix'),
    'desc'     => __('These are options to modify and style your main content area only', 'radix'),
    'fields'    => array(
        array(
            'id'        =>'excerpt_length_count',
            'type'      => 'slider',       
            'title'     => __('Excerpt Length Limits', 'radix'), 
            'subtitle'  => __('Enter the number of excerpt length limit to display.', 'radix'),
            'validate'  => 'numeric',
            "min"       => "5",
            "step"      => "5",
            "max"       => "100",
            'default'   => "55"          
            ), 
        array(
            'id'        => 'post_navigation',
            'type'      => 'switch',
            'title'     => __('Show post navigation', 'radix'),
            'subtitle'  => __('Check if you want to remove post navigation on single post', 'radix'),
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
            'title' => __('Background color', 'radix'),
            'subtitle' => __('Specify content area background color', 'radix'),
            'transparent' => false,
            'default' => '#fff',
            ),
        array(
            'id' => 'color_content_txt_h',
            'type' => 'color',
            'title' => __('Post title color', 'radix'),
            'subtitle' => __('This color will apply to post title heading, which is (H2) by default.', 'radix'),
            'transparent' => false,
            'default' => '#222'
            ),       
        array(
            'id' => 'color_content_txt',
            'type' => 'color',
            'title' => __('Content text color', 'radix'),
            'subtitle' => __('This color will apply to text color in the content area only', 'radix'),
            'transparent' => false,
            'default' => '#222'
            ),
        array(
            'id' => 'color_content_meta',
            'type' => 'color',
            'title' => __('Meta text color', 'radix'),
            'subtitle' => __('This color will apply to your meta data (secondary text)', 'radix'),
            'transparent' => false,
            'default' => '#7a7a7a'
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
            'title'     => __('Enable author Bio', 'radix'),
            'subtitle'  => __('Enable / Disable author box', 'radix'),
            'default'   => true,
            ),  
        array(
            'id' => 'author_bg_color',
            'type' => 'color',
            'title' => __('Background color', 'radix'),
            'subtitle' => __('Specify content area background color', 'radix'),
            'transparent' => false,
            'required'  => array('blog_author_bio', '=', true),
            'default' => '#48365c',
            ),
        array(
            'id' => 'author_txt_color',
            'type' => 'color',
            'title' => __('Content text color', 'radix'),
            'subtitle' => __('This color will apply to text color in the content area only', 'radix'),
            'transparent' => false,
            'required'  => array('blog_author_bio', '=', true),
            'default' => '#fff'
            ),      
        array(
            'id'        => 'author_socials',
            'type'      => 'switch',
            'title'     => __('Author Social Share', 'radix'),
            'subtitle'  => __('Check if you want to remove social share from author box', 'radix'),
            'required'  => array('blog_author_bio', '=', true),
            'default'   => true,
            ),
        array(
            'id'        =>'author_socials_text',
            'type'      => 'text',      
            'title'     => __('Author Social Text', 'radix'), 
            'subtitle'  => __('Change post social text here.', 'radix'),
            'required'  => array('author_socials', '=', true),
            'desc'      => 'Leave it empty to hide it.',
            'default'   => "Follow me"          
            ), 
        array(
            'id'        =>'author_facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', 'radix'), 
            'subtitle'  => __('Insert your Facebook fanpage here.', 'radix'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'author_twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', 'radix'), 
            'subtitle'  => __('Insert your Twitter URL here.', 'radix'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'author_linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', 'radix'), 
            'subtitle'  => __('Insert your Linkedin URL here.', 'radix'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'author_google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', 'radix'), 
            'subtitle'  => __('Insert your Google Plus URL here.', 'radix'),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
    )
);

/* Sidebar */
$this->sections[] = array(
    'icon'      => 'el el-icon-lines',
    'title'     => __('Sidebar', 'radix'),
    'desc'      => __('These are global styling settings for the sidebar area', 'radix'),
    'fields'    => array(
        array(
            'id' => 'color_sidebar_bg',
            'type' => 'color',
            'title' => __('Background color', 'radix'),
            'subtitle' => __('Specify sidebar background color', 'radix'),
            'transparent' => false,
            'default' => '#fff',
            ),
        array(
            'id' => 'color_sidebar_txt_h',
            'type' => 'color',
            'title' => __('Sidebar titles color', 'radix'),
            'subtitle' => __('This color will apply to your sidebar titles.', 'radix'),
            'transparent' => false,
            'default' => '#222'
            ),
        array(
            'id' => 'color_sidebar_txt',
            'type' => 'color',
            'title' => __('a links color', 'radix'),
            'subtitle' => __('This color will apply to sidebar links.', 'radix'),
            'transparent' => false,
            'default' => '#48365c'
            ),       
        array(
            'id' => 'color_sidebar_txt_hov',
            'type' => 'color',
            'title' => __('a links color hover', 'radix'),
            'subtitle' => __('This color will apply to sidebar links hover.', 'radix'),
            'transparent' => false,
            'default' => '#8877a3'
            ),
    )
);

/* Footer */
$this->sections[] = array(
    'icon'      => 'el el-icon-bookmark',
    'title'     => __('Footer', 'radix'),
    'desc'      => __('Manage settings for footer area', 'radix'),
    'fields'    => array(

         array(
            'id'        => 'footer_display',
            'type'      => 'switch',
            'switch'    => true,
            'title'     => __('Enable Footer Widgets', 'radix'),
            'subtitle'  => __('Check if you want to disable footer widgets area.', 'radix'),
            'default'   => true
            ),
        array(
            'id'        => 'footer_col',
            'type'      => 'image_select',
            'compiler'  => true,
            'title'     => __('Footer Widget Columns', 'radix'),
            'subtitle'  => __('Choose columns you want for your footer widgets.', 'radix'),
            'desc'      => __('You can manage footer area content in <a href="' . admin_url('widgets.php') . '">Apperance / Widgets</a> settings.', 'radix'),
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
            'title'     => __('Background color', 'radix'),
            'subtitle'  => __('Specify the footer background color', 'radix'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#222',
            ),
        array(
            'id'        => 'color_footer_txt_h',
            'type'      => 'color',
            'title'     => __('Footer titles color', 'radix'),
            'subtitle'  => __('This color will apply to your footer titles.', 'radix'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#fff'
            ),
        array(
            'id'        => 'color_footer_txt',
            'type'      => 'color',
            'title'     => __('Footer Text color', 'radix'),
            'subtitle'  => __('This color will apply to footer text.', 'radix'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#bbb'
            ),      
        array(
            'id'        => 'color_footer_txt_a',
            'type'      => 'color',
            'title'     => __('Footer a links color', 'radix'),
            'subtitle'  => __('This color will apply to footer links.', 'radix'),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#bab8cc'
            ),       
        array(
            'id'        => 'color_footer_txt_hov',
            'type'      => 'color',
            'title'     => __('Footer a links color hover', 'radix'),
            'subtitle'  => __('This color will apply to footer links hover.', 'radix'),
            'transparent' => false,
            'required'  => array('footer_display', '=', true),
            'default'   => '#d5d4e0'
            ),
         array(
            'id'        => 'enable_footer_social',
            'type'      => 'switch',
            'title'     => __('Enable Footer Socials', 'radix'),
            'subtitle'  => __('Check if you want to hide footer socials bar','radix'),
            'default'   => true
            ),
        array(
            'id'        =>'footer_socials_text',
            'type'      => 'text',      
            'title'     => __('Footer Social Text', 'radix'), 
            'subtitle'  => __('Change post social text here.', 'radix'),
            'required'  => array('footer_display', '=', true),
            'default'   => "Follow us: "          
            ),
         array(
            'id'        => 'enable_copyright',
            'type'      => 'switch',
            'title'     => __('Enable Copyright', 'radix'),
            'subtitle'  => __('Check if you want to include copyright area below footer','radix'),
            'default'   => true
            ),
         array(
            'id'        => 'enable_footer_menu',
            'type'      => 'switch',
            'title'     => __('Enable Footer Menu', 'radix'),
            'subtitle'  => __('Check if you want to show footer menu inside copyright area', 'radix'),
            'desc'  => __('Note: you need to set footer menu inside <a href="' . admin_url('nav-menus.php') . '">Apperance / Menu</a>', 'radix'),
            'default'   => true,
            )

    )
);

/* Typography */
$this->sections[] = array(
    'icon'      => 'el el-icon-font',
    'title'     => __('Typography', 'radix'),
    'desc'     => __('Manage fonts and typography settings', 'radix'),
    'fields'    => array(

        array(
            'id'          => 'main_font',
            'type'        => 'typography', 
            'title'       => __('Main text font', 'radix'),
            'google'      => true, 
            'compiler'    => true,
            'font-backup' => false,
            'font-size'   => true,
            'color'       => true,
            'subsets'     => false,
            'line-height' => false,
            'text-align'  => false,
            'units'       =>'px',
            'subtitle'    => __('Typography option with each property can be called individually.', 'radix'),
            'default'     => array(
                'google'        => true,
                'font-weight'   => '400', 
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
            'title'       => __('H1 font', 'radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H1 tag font properties.', 'radix'),
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
            'title'       => __('H2 font', 'radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H2 tag font properties.', 'radix'),
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
            'title'       => __('H3 font', 'radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H3 tag font properties.', 'radix'),
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
            'title'       => __('H4 font', 'radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H4 tag font properties.', 'radix'),
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
            'title'       => __('H5 font', 'radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H5 tag font properties.', 'radix'),
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
            'title'       => __('H6 font', 'radix'),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H6 tag font properties.', 'radix'),
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
            'title'         => __('Navigation font', 'radix'),
            'google'        => true, 
            'compiler'      => true,
            'font-backup'   => false,
            'font-size'     => true,
            'color'         => false,
            'line-height'   => false,
            'text-align'    => false,
            'subsets'       => false,
            'units'         =>'px',
            'subtitle'      => __('Typography option with each property can be called individually.', 'radix'),
            'default'       => array(
                'google'        => true,
                'font-weight'   => '', 
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

/* Advanced options */
$this->sections[] = array(
    'icon' => 'el el-icon-cogs',
    'icon_class' => 'el el-icon-large',
    'title' => __('Advanced Options', 'radix'),
    'desc'     => __('Advanced options for avanced users here', 'radix'),
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
            'title'    => __('Additional CSS', 'radix'),
            'subtitle' => __('Use this field to write or paste CSS code and modify default theme styling', 'radix'),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'default' => ".example {\nmargin: 0 auto;\n}"
            ),
        array(
            'id'       => 'custom_js',
            'type'     => 'ace_editor',
            'title'    => __('Additional JavaScript', 'radix'),
            'subtitle' => __('Use this field to write or paste additional JavaScript code to this theme', 'radix'),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
            'default' => "(function($){\n/* standard on load code goes here with $ prefix */\n})(jQuery);"
            ),
    )
);

/* maintenance */
$this->sections[] = array(
    'icon'      => 'el el-icon-warning-sign',
    'title'     => __('Maintenance Mode', 'radix'),
    'desc'      => __('Basic maintenance mode', 'radix'),
    'fields'    => array(
        array(
            'id'        => 'maintenance_mode',
            'type'      => 'switch',
            'title'     => __('Maintenance mode', 'radix'),
            'subtitle'  => __('Enable maintenance mode.', 'radix'),
             'desc'  => __('Check if you want to enable the default wordpress maintenance mode.', 'radix'),
            'default'   => false,
            ),
        )
);


?>