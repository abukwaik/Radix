<?php
/**
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 */

/* General */
$this->sections[] = array(
    'icon'      => 'el el-icon-cog',
    'title'     => __('General', RTD),
    'fields'    => array(
        array(
            'id'    => 'info_success',
            'type'  => 'info',
            'style' => 'success',
            'title' => __('Welcome to Radix Theme Option Panel', RTD),
            'icon'  => 'el el-icon-smiley',
            'desc'  => __( 'From here you can config your theme in the way you like.', RTD)
            ),
        array(
            'id' => 'favicon',
            'type' => 'media',
            'url' => true,
            'title' => __('Favicon', RTD), 
            'subtitle' => __('Upload your favicon here', RTD),
            'desc' => __('Should be 16 x 16px Supported formats: .ico .gif .png', RTD),
            'default'   => ''
            ),

        array(
            'id' => 'apple_touch_icon',
            'type' => 'media',
            'url' => true,
            'title' => __('Apple Touch Icon', RTD), 
            'subtitle' => __('Upload icon for the Apple touch', RTD),
            'desc' => __('Size: 57 x 57px Supported formats: .ico .gif .png', RTD),
            'default'   => ''
            ),

        array(
            'id'        => 'scroll_to_top',
            'type'      => 'switch',
            'title'     => __('Scroll to top button', RTD),
            'subtitle'  => __('Check if you want to disable scroll to top button', RTD),
            'default'   => true
            ),
        array(
            'id'       => 'ga',
            'type'     => 'ace_editor',
            'title'    => __('Tracking Code', RTD),
            'subtitle' => __('Paste your google analytics tracking code or any other javascript related tracking code', RTD),
            'desc'  => __( 'This will be placed into the footer.', RTD),
            'mode'     => 'text',
            'theme'    => 'monokai',
            'default'  => ''
            )
    )
);

/* Header */
$this->sections[] = array(
    'icon'      => 'el el-icon-user',
    'title'     => __('Header', RTD),
    'desc'      => __('These are options to modify and style your header area', RTD),
    'fields'    => array(
        array(
            'id'        => 'logo',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Logo', RTD),
            'subtitle'  => __('Upload your logo image here, or leave empty to show website title instead', RTD),
            'desc'      => __('Note: Allowed extensions are .jpg, .png and .gif', RTD),
            'default'   => ''
            ),
        array(
            'id'        =>'logo_width',
            'type'      => 'slider',       
            'title'     => __('Logo Width', RTD), 
            'subtitle'  => __('Specify your logo width.', RTD),
            'validate'  => 'numeric',
            "min"       => "50",
            "step"      => "1",
            "max"       => "300",
            'default'   => "110"          
            ),
        array(
            'id'        =>'logo_height',
            'type'      => 'slider',       
            'title'     => __('Logo Height', RTD), 
            'subtitle'  => __('Specify your logo height.', RTD),
            'validate'  => 'numeric',
            "min"       => "10",
            "step"      => "1",
            "max"       => "300",
            'default'   => "30"          
            ),    
        array(
            'id'        => 'header_description',
            'type'      => 'switch',
            'title'     => __('Display site description', RTD),
            'subtitle'  => __('Check if you want to display site description.', RTD),
            'desc'      => __('Note: It will apply only if You remove logo image. You can change your site description inside <a href="' . admin_url('options-general.php') . '">Settings / General</a>', RTD),
            'default'   => false,
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
            'title'     => __('Sticky Menu', RTD),
            'subtitle'  => __('Check if you want to disable sticky navigation.', RTD),
            'default'   => true,
            ),
        array(
            'id'        => 'color_nav_bg',
            'type'      => 'color',
            'title'     => __('Menu Background color', RTD),
            'subtitle'  => __('Specify menu background color', RTD),
            'transparent' => false,
            'default'   => '#757399'
            ), 
        array(
            'id'        => 'color_nav_a',
            'type'      => 'color',
            'title'     => __('Menu Link color', RTD),
            'subtitle'  => __('Specify menu link color', RTD),
            'transparent' => false,
            'default'   => '#fff'
            ), 
        array(
            'id'        => 'navbar_search',
            'type'      => 'switch',
            'title'     => __('Show Menu Search', RTD),
            'subtitle'  => __('Check if you want to disable search from nav menu.', RTD),
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
            'title'     => __('Show Top Header Area', RTD),
            'subtitle'  => __('Check if you want to remove top bar.', RTD),
            'default'   => true,
            ),                 
        array(
            'id'        =>'phone_text',
            'type'      => 'text',      
            'title'     => __('Header Phone Number', RTD), 
            'subtitle'  => __('Insert your phone number here.', RTD),
            'desc'      => __('Leave it empty to hide it.', RTD),
            'required'  => array('hide_top_header', '=', true),
            'default'   => "1-800-987-654"          
            ),
        array(
            'id'        =>'email_text',
            'type'      => 'text',      
            'title'     => __('Header Email Address', RTD), 
            'subtitle'  => __('Insert your email address here.', RTD),
            'desc'      => __('Leave it empty to hide it.', RTD),
            'default'   => "info@Radix.com",
            'required' => array('hide_top_header', '=', true),
            'validate'  => 'email'
            ),
        array(
            'id'        =>'url_text',
            'type'      => 'text',      
            'title'     => __('Custom Header Link', RTD), 
            'subtitle'  => __('Insert your custom link here.', RTD),
            'desc'      => __('Leave it empty to hide it.', RTD),
            'required'  => array('hide_top_header', '=', true),
            'default'   => 'custom link'
            ),
        array(
            'id'        => 'color_header_bg',
            'type'      => 'color',
            'title'     => __('Header Background color', RTD),
            'subtitle'  => __('Specify header background color', RTD),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#eee'
            ),                                                                       
        array(
            'id'        => 'a_color_header_txt',
            'type'      => 'color',
            'title'     => __('Top Header links color', RTD),
            'subtitle'  => __('Change the top header links color.', RTD),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#212121'
            ),
        array(
            'id'        => 'a_color_header_hov',
            'type'      => 'color',
            'title'     => __('Top Header links hover color', RTD),
            'subtitle'  => __('Change the top header links hover color.', RTD),
            'transparent' => false,
            'required'  => array('hide_top_header', '=', true),
            'default'   => '#75729a'
            ),
        array(
            'id'    => 'info_warning',
            'icon'  => 'el el-info-circle',
            'type'  => 'info',
            'title' => __('NOTE!', RTD),
            'style' => 'warning',
            'desc'  => __('Header Social settings are under <strong>Socials Networks Section</strong>', RTD) 
            ),                                  
        )
);

/* Body */
$this->sections[] = array(
    'icon'      => 'el el-icon-screen',
    'title'     => __('Body', RTD),
    'desc'      => __('These are options to modify and style your body area', RTD),
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
            'title'     => __('Show page title Area', RTD),
            'subtitle'  => __('Check if you want to remove the page title area including breadcrumbs.', RTD),
            'desc'      => __('Note: You can hide breadcrumbs separately.', RTD),
            'default'   => true,
            ),
        array(
            'id'        => 'sub_header_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Custom background', RTD),
            'subtitle'  => __('Choose background image for page title area.', RTD),
            'default'   => array('url' => RADIX_IMG_URI .'/bg-section.jpg'),
            'required'  => array('hide_sub_header', '=', true),
            ),                          
        array(
            'id'        => 'sub_header_bg_color',
            'type'      => 'color',
            'title'     => __('Background color', RTD),
            'subtitle'  => __('If there is no Background image, specify the sub header background color', RTD),
            'transparent' => false,
            'desc'      => __('The default value is #615e95.', RTD),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => '#644c80'
            ),
        array(
            'id'        => 'color_sub_header_txt',
            'type'      => 'color',
            'title'     => __('Text Color', RTD),
            'subtitle'  => __('Change the default text color.', RTD),
            'desc'      => __('Note: this will be applied on breadcrumbs text color too.', RTD),
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
            'id'        => 'hide_breadcrumb',
            'type'      => 'switch',
            'title'     => __('Show Breadcrumb ', RTD),
            'subtitle'  => __('Check if you want to remove breadcrumb from pages', RTD),
            'required'  => array('hide_sub_header', '=', true),
            'default'   => true
            ),        
        array(
            'id'        => 'color_breadcrumbs_txt_a',
            'type'      => 'color',
            'title'     => __('Breadcrumbs Link Color', RTD),
            'subtitle'  => __('Change the default breadcrumbs link color.', RTD),
            'transparent' => false,
            'required'  => array('hide_breadcrumb', '=', true),
            'default'   => ''
            ),
        array(
            'id'        => 'color_breadcrumbs_txt_a_hover',
            'type'      => 'color',
            'title'     => __('Breadcrumbs Link Hover Color', RTD),
            'subtitle'  => __('Change the default breadcrumbs link hover color.', RTD),
            'transparent' => false,
            'required'  => array('hide_breadcrumb', '=', true),
            'default'   => ''
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
            'title'     => __('Comments on pages', RTD),
            'subtitle'  => __('turn off comments on pages', RTD),
            'default'   => true
            ),                    
        array(
            'id'        => 'body_bg_img',
            'type'      => 'media',
            'url'       => true,
            'title'     => __('Body background Image', RTD),
            'subtitle'  => __('Choose body background pattern or image.', RTD),
            'default'   => array('url' => ''),
            ),
        array(
            'id'        => 'body_bg_style',
            'type'      => 'background',
            'background-image' => false,
            'title'     => __( 'Background Style', RTD ), 
            'subtitle'  => __( 'Select your body background style.', RTD ),
            'transparent' => false,
            'preview' => false,
            'default'  => array(
                'background-color' => '#f9f9f9')
            ),
        array(
            'id' => 'color_a_text',
            'type' => 'color',
            'title' => __('a link color', RTD),
            'subtitle' => __('Color for all links', RTD),
            'transparent' => false,
            'default' => '#75729a'
            ),         
        array(
            'id' => 'color_a_hov',
            'type' => 'color',
            'title' => __('a link color hover', RTD),
            'subtitle' => __('Hover color for all links', RTD),
            'transparent' => false,
            'default' => '#b2afe8'
            ),                

    )
);

/* Content */
$this->sections[] = array(
    'icon'      => 'el el-icon-blogger',
    'title'     => __('Blog', RTD),
    'desc'     => __('These are options to modify and style your main content area only', RTD),
    'fields'    => array(
        array(
            'id'        =>'excerpt_length_count',
            'type'      => 'slider',       
            'title'     => __('Excerpt Length Limits', RTD), 
            'subtitle'  => __('Enter the number of excerpt length limit to display.', RTD),
            'validate'  => 'numeric',
            "min"       => "5",
            "step"      => "5",
            "max"       => "100",
            'default'   => "55"          
            ), 
        array(
            'id'        => 'post_navigation',
            'type'      => 'switch',
            'title'     => __('Show post navigation', RTD),
            'subtitle'  => __('Check if you want to remove post navigation on single post', RTD),
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
            'title' => __('Background color', RTD),
            'subtitle' => __('Specify content area background color', RTD),
            'transparent' => false,
            'default' => '#ffffff',
            ),
        array(
            'id' => 'color_content_txt_h',
            'type' => 'color',
            'title' => __('Post title color', RTD),
            'subtitle' => __('This color will apply to post title heading, which is (H2) by default.', RTD),
            'transparent' => false,
            'default' => '#212121'
            ),       
        array(
            'id' => 'color_content_txt',
            'type' => 'color',
            'title' => __('Content text color', RTD),
            'subtitle' => __('This color will apply to text color in the content area only', RTD),
            'transparent' => false,
            'default' => '#212121'
            ),
        array(
            'id' => 'color_content_meta',
            'type' => 'color',
            'title' => __('Meta text color', RTD),
            'subtitle' => __('This color will apply to your meta data (secondary text)', RTD),
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
            'title'     => __('Enable author Bio', RTD),
            'subtitle'  => __('Enable / Disable author box', RTD),
            'default'   => true,
            ),  
        array(
            'id' => 'author_bg_color',
            'type' => 'color',
            'title' => __('Background color', RTD),
            'subtitle' => __('Specify content area background color', RTD),
            'transparent' => false,
            'required'  => array('blog_author_bio', '=', true),
            'default' => '#362336',
            ),
        array(
            'id' => 'author_txt_color',
            'type' => 'color',
            'title' => __('Content text color', RTD),
            'subtitle' => __('This color will apply to text color in the content area only', RTD),
            'transparent' => false,
            'required'  => array('blog_author_bio', '=', true),
            'default' => '#fff'
            ),      
        array(
            'id'        => 'author_socials',
            'type'      => 'switch',
            'title'     => __('Author Social Share', RTD),
            'subtitle'  => __('Check if you want to remove social share from author box', RTD),
            'required'  => array('blog_author_bio', '=', true),
            'default'   => true,
            ),
        array(
            'id'        =>'author_socials_text',
            'type'      => 'text',      
            'title'     => __('Author Social Text', RTD), 
            'subtitle'  => __('Change post social text here.', RTD),
            'required'  => array('author_socials', '=', true),
            'desc'      => 'Leave it empty to hide it.',
            'default'   => "Follow me"          
            ), 
        array(
            'id'        =>'author_facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', RTD), 
            'subtitle'  => __('Insert your Facebook fanpage here.', RTD),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'author_twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', RTD), 
            'subtitle'  => __('Insert your Twitter URL here.', RTD),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'author_linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', RTD), 
            'subtitle'  => __('Insert your Linkedin URL here.', RTD),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'author_google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', RTD), 
            'subtitle'  => __('Insert your Google Plus URL here.', RTD),
            'desc'      => 'Leave it empty to hide it.',
            'required'  => array('author_socials', '=', true),
            'default'   => "#"
            ),
    )
);

/* Sidebar */
$this->sections[] = array(
    'icon'      => 'el el-icon-lines',
    'title'     => __('Sidebar', RTD),
    'desc'      => __('These are global styling settings for the sidebar area', RTD),
    'fields'    => array(
        array(
            'id' => 'color_sidebar_bg',
            'type' => 'color',
            'title' => __('Background color', RTD),
            'subtitle' => __('Specify sidebar background color', RTD),
            'transparent' => false,
            'default' => '#ffffff',
            ),
        array(
            'id' => 'color_sidebar_txt_h',
            'type' => 'color',
            'title' => __('Sidebar titles color', RTD),
            'subtitle' => __('This color will apply to your sidebar titles.', RTD),
            'transparent' => false,
            'default' => '#212121'
            ),
        array(
            'id' => 'color_sidebar_txt',
            'type' => 'color',
            'title' => __('a links color', RTD),
            'subtitle' => __('This color will apply to sidebar links.', RTD),
            'transparent' => false,
            'default' => '#75729a'
            ),       
        array(
            'id' => 'color_sidebar_txt_hov',
            'type' => 'color',
            'title' => __('a links color hover', RTD),
            'subtitle' => __('This color will apply to sidebar links hover.', RTD),
            'transparent' => false,
            'default' => '#b2afe8'
            ),
    )
);

/* Footer */
$this->sections[] = array(
    'icon'      => 'el el-icon-bookmark',
    'title'     => __('Footer', RTD),
    'desc'      => __('Manage settings for footer area', RTD),
    'fields'    => array(

         array(
            'id'        => 'footer_display',
            'type'      => 'switch',
            'switch'    => true,
            'title'     => __('Enable Footer Widgets', RTD),
            'subtitle'  => __('Check if you want to disable footer widgets area.', RTD),
            'default'   => true
            ),
        array(
            'id'        => 'footer_col',
            'type'      => 'image_select',
            'compiler'  => true,
            'title'     => __('Footer Widget Columns', RTD),
            'subtitle'  => __('Choose columns you want for your footer widgets.', RTD),
            'desc'      => __('You can manage footer area content in <a href="' . admin_url('widgets.php') . '">Apperance / Widgets</a> settings.', RTD),
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
            'title'     => __('Background color', RTD),
            'subtitle'  => __('Specify the footer background color', RTD),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#222222',
            ),
        array(
            'id'        => 'color_footer_txt_h',
            'type'      => 'color',
            'title'     => __('Footer titles color', RTD),
            'subtitle'  => __('This color will apply to your footer titles.', RTD),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#fff'
            ),
        array(
            'id'        => 'color_footer_txt',
            'type'      => 'color',
            'title'     => __('Footer Text color', RTD),
            'subtitle'  => __('This color will apply to footer text.', RTD),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#999'
            ),      
        array(
            'id'        => 'color_footer_txt_a',
            'type'      => 'color',
            'title'     => __('Footer a links color', RTD),
            'subtitle'  => __('This color will apply to footer links.', RTD),
            'transparent' => false,
            'required' => array('footer_display', '=', true),
            'default'   => '#999'
            ),       
        array(
            'id'        => 'color_footer_txt_hov',
            'type'      => 'color',
            'title'     => __('Footer a links color hover', RTD),
            'subtitle'  => __('This color will apply to footer links hover.', RTD),
            'transparent' => false,
            'required'  => array('footer_display', '=', true),
            'default'   => '#b2afe8'
            ),
         array(
            'id'        => 'enable_footer_social',
            'type'      => 'switch',
            'title'     => __('Enable Footer Socials', RTD),
            'subtitle'  => __('Check if you want to hide footer socials bar',RTD),
            'default'   => true
            ),
        array(
            'id'        =>'footer_socials_text',
            'type'      => 'text',      
            'title'     => __('Footer Social Text', RTD), 
            'subtitle'  => __('Change post social text here.', RTD),
            'required'  => array('footer_display', '=', true),
            'default'   => "Follow us: "          
            ),
         array(
            'id'        => 'enable_copyright',
            'type'      => 'switch',
            'title'     => __('Enable Copyright', RTD),
            'subtitle'  => __('Check if you want to include copyright area below footer',RTD),
            'default'   => true
            ),
         array(
            'id'        => 'enable_footer_menu',
            'type'      => 'switch',
            'title'     => __('Enable Footer Menu', RTD),
            'subtitle'  => __('Check if you want to show footer menu inside copyright area', RTD),
            'desc'  => __('Note: you need to set footer menu inside <a href="' . admin_url('nav-menus.php') . '">Apperance / Menu</a>', RTD),
            'default'   => true,
            )

    )
);

/* Typography */
$this->sections[] = array(
    'icon'      => 'el el-icon-font',
    'title'     => __('Typography', RTD),
    'desc'     => __('Manage fonts and typography settings', RTD),
    'fields'    => array(

        array(
            'id'          => 'main_font',
            'type'        => 'typography', 
            'title'       => __('Main text font', RTD),
            'google'      => true, 
            'compiler'    => true,
            'font-backup' => false,
            'font-size'   => true,
            'color'       => true,
            'subsets'     => false,
            'line-height' => false,
            'text-align'  => false,
            'units'       =>'px',
            'subtitle'    => __('Typography option with each property can be called individually.', RTD),
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
            'title'       => __('H1 font', RTD),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H1 tag font properties.', RTD),
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
            'title'       => __('H2 font', RTD),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H2 tag font properties.', RTD),
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
            'title'       => __('H3 font', RTD),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H3 tag font properties.', RTD),
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
            'title'       => __('H4 font', RTD),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H4 tag font properties.', RTD),
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
            'title'       => __('H5 font', RTD),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H5 tag font properties.', RTD),
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
            'title'       => __('H6 font', RTD),
            'google'      => true, 
            'font-backup' => false,
            'font-size'   => true,
            'color'       => false,
            'line-height' => false,
            'text-align'  => false,
            'subsets'     => false,
            'units'       =>'px',
            'subtitle'    => __('Specify the H6 tag font properties.', RTD),
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
            'title'         => __('Navigation font', RTD),
            'google'        => true, 
            'compiler'      => true,
            'font-backup'   => false,
            'font-size'     => true,
            'color'         => false,
            'line-height'   => false,
            'text-align'    => false,
            'subsets'       => false,
            'units'         =>'px',
            'subtitle'      => __('Typography option with each property can be called individually.', RTD),
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
    'title' => __('Social Networks', RTD),
    'desc'     => __('Manage your social settings', RTD),
    'fields' => array(
        array(
            'id'        => 'header_socials',
            'type'      => 'switch',
            'title'     => __('Show header social Icons', RTD),
            'subtitle'  => __('Check if you want to remove header social icons.', RTD),
            'desc'      => __('Note: You can set your social links in socials section.', RTD),
            'default'   => true,
            ),
        array(
            'id'        => 'color_header_socials',
            'type'      => 'color',
            'title'     => __('Header socials icons color.', RTD),
            'subtitle'  => __('Change header socials icons color.', RTD),
            'transparent' => false,
            'required'  => array('header_socials', '=', true),
            'default'   => '#666666'
            ),
        array(
            'id'    => 'info_warning',
            'icon'  => 'el el-info-circle',
            'type'  => 'info',
            'title' => __('NOTE!', RTD),
            'style' => 'warning',
            'required'  => array('header_socials', '=', true),
            'desc'  => __('If you leave any field empty, icon will not show.<br> Please note that these icons are used for footer social bar as well.', RTD)
            ),     
        array(
            'id'        =>'facebook',
            'type'      => 'text',      
            'title'     => __('Facebook', RTD), 
            'subtitle'  => __('Insert your Facebook fanpage here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'twitter',
            'type'      => 'text',      
            'title'     => __('Twitter', RTD), 
            'subtitle'  => __('Insert your Twitter URL here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'dribbble',
            'type'      => 'text',      
            'title'     => __('Dribbble', RTD), 
            'subtitle'  => __('Insert your Dribbble URL here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),  
        array(
            'id'        =>'google_plus',
            'type'      => 'text',      
            'title'     => __('Google Plus', RTD), 
            'subtitle'  => __('Insert your Google Plus URL here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'pinterest',
            'type'      => 'text',      
            'title'     => __('Pinterest', RTD), 
            'subtitle'  => __('Insert your Pinterest URL here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
        array(
            'id'        =>'flickr',
            'type'      => 'text',      
            'title'     => __('Flickr', RTD), 
            'subtitle'  => __('Insert your Flickr URL here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'instagram',
            'type'      => 'text',      
            'title'     => __('Instagram', RTD), 
            'subtitle'  => __('Insert your Instagram URL here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'vimeo',
            'type'      => 'text',      
            'title'     => __('Vimeo', RTD), 
            'subtitle'  => __('Insert your Vimeo URL here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),
         array(
            'id'        =>'rss',
            'type'      => 'text',      
            'title'     => __('Rss', RTD), 
            'subtitle'  => __('Insert your Rss URL here.', RTD),
            'desc'      => "",
            'required'  => array('header_socials', '=', true),
            'default'   => "#"
            ),                                                    
        array(
            'id'        =>'linkedin',
            'type'      => 'text',      
            'title'     => __('Linkedin', RTD), 
            'subtitle'  => __('Insert your Linkedin URL here.', RTD),
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
    'title' => __('Advanced Options', RTD),
    'desc'     => __('Advanced options for avanced users here', RTD),
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
            'title'    => __('Additional CSS', RTD),
            'subtitle' => __('Use this field to write or paste CSS code and modify default theme styling', RTD),
            'mode'     => 'css',
            'theme'    => 'monokai',
            'default' => ".example {\nmargin: 0 auto;\n}"
            ),
        array(
            'id'       => 'custom_js',
            'type'     => 'ace_editor',
            'title'    => __('Additional JavaScript', RTD),
            'subtitle' => __('Use this field to write or paste additional JavaScript code to this theme', RTD),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
            'default' => "jQuery(document).ready(function(){\n\n});"
            ),
    )
);

/* maintenance */
$this->sections[] = array(
    'icon'      => 'el el-icon-warning-sign',
    'title'     => __('Maintenance Mode', RTD),
    'desc'      => __('Basic maintenance mode', RTD),
    'fields'    => array(
        array(
            'id'        => 'maintenance_mode',
            'type'      => 'switch',
            'title'     => __('Maintenance mode', RTD),
            'subtitle'  => __('Enable maintenance mode.', RTD),
             'desc'  => __('Check if you want to enable the default wordpress maintenance mode.', RTD),
            'default'   => false,
            ),
        )
);


?>