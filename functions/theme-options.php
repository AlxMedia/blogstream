<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'blogstream', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'Get PRO', 'blogstream' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'Get Blogstream Pro', 'blogstream' ),
	'button_url'  => 'https://alx.media/themes/blogstreampro/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'blogstream' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'blogstream' ),
	'button_url'  => 'https://wordpress.org/support/theme/blogstream/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'blogstream' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'blogstream' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'blogstream' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'blogstream' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'blogstream' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'blogstream' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'blogstream' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'blogstream' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'blogstream' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'blogstream' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'blogstream' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'blogstream' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'blogstream' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'blogstream' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'blogstream' ),
	'description'	=> esc_html__( 'Your blog heading', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'blogstream' ),
	'description'	=> esc_html__( 'Your blog subheading', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Post Formats
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-formats-enable',
	'label'			=> esc_html__( 'Enable Post Formats', 'blogstream' ),
	'description'	=> esc_html__( 'Show post formats instead of featured images on home, archive and search. Use image post format to still display featured images.', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Use Excerpts
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'excerpt-enable',
	'label'			=> esc_html__( 'Enable Excerpts', 'blogstream' ),
	'description'	=> esc_html__( 'Show excerpt instead of full post', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Excerpt Length
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'blogstream' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'blogstream' ),
	'description'	=> esc_html__( '2 columns of widgets', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'blogstream' ),
	'description'	=> esc_html__( '2 columns of widgets', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'blogstream' ),
	'description'	=> esc_html__( 'Comment count on bubbles', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'blogstream' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'blogstream' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'blogstream' ),
		'categories'=> esc_html__( 'Related by categories', 'blogstream' ),
		'tags'		=> esc_html__( 'Related by tags', 'blogstream' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'blogstream' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'blogstream' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'blogstream' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'blogstream' ),
		'content'	=> esc_html__( 'Below content', 'blogstream' ),
	),
) );
// Header: Search
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'blogstream' ),
	'description'	=> esc_html__( 'Header search button', 'blogstream' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'blogstream' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'blogstream' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'blogstream' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'blogstream' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'blogstream' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'blogstream' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'blogstream' ),
	'description'	=> esc_html__( 'A short description of you', 'blogstream' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'blogstream' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'blogstream' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'blogstream' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'blogstream' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'blogstream' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'blogstream' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'blogstream' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'blogstream' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'blogstream' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'blogstream' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'blogstream' ),
	'description'	=> esc_html__( 'Footer credit text', 'blogstream' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'blogstream' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'blogstream' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'blogstream' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'blogstream' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'blogstream' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'blogstream' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'blogstream' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'blogstream' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'blogstream' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'blogstream' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'blogstream' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'blogstream' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'blogstream' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'blogstream' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'blogstream' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'blogstream' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function blogstream_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'blogstream_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'blogstream' ),
		'description'	=> esc_html__( '(is_home) Primary', 'blogstream' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogstream' ),
	) );
	Kirki::add_field( 'blogstream_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'blogstream' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'blogstream' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogstream' ),
	) );
	Kirki::add_field( 'blogstream_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'blogstream' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'blogstream' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogstream' ),
	) );
	Kirki::add_field( 'blogstream_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'blogstream' ),
		'description'	=> esc_html__( '(is_category) Primary', 'blogstream' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogstream' ),
	) );
	Kirki::add_field( 'blogstream_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'blogstream' ),
		'description'	=> esc_html__( '(is_search) Primary', 'blogstream' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogstream' ),
	) );
	Kirki::add_field( 'blogstream_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'blogstream' ),
		'description'	=> esc_html__( '(is_404) Primary', 'blogstream' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogstream' ),
	) );
	Kirki::add_field( 'blogstream_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'blogstream' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'blogstream' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'blogstream' ),
	) );
	
 } 
add_action( 'init', 'blogstream_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'blogstream' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'blogstream' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'blogstream' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'blogstream' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'blogstream' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'blogstream' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'blogstream' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'blogstream' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'blogstream' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'blogstream' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'blogstream' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'blogstream' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'blogstream' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'blogstream' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'blogstream' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'blogstream' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'blogstream' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'blogstream' ),
	'description'	=> esc_html__( 'Select font for the theme', 'blogstream' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'blogstream' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'blogstream' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'blogstream' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'blogstream' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'blogstream' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'blogstream' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'blogstream' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'blogstream' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'blogstream' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'blogstream' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'blogstream' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'blogstream' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'blogstream' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'blogstream' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'blogstream' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'blogstream' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'blogstream' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'blogstream' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'blogstream' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'blogstream' ),
		'arial'					=> esc_html__( 'Arial', 'blogstream' ),
		'georgia'				=> esc_html__( 'Georgia', 'blogstream' ),
		'verdana'				=> esc_html__( 'Verdana', 'blogstream' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'blogstream' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'blogstream' ),
	'description'	=> esc_html__( 'Max-width of the container. Use default for full width.', 'blogstream' ),
	'section'		=> 'styling',
	'default'		=> '1080',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'blogstream' ),
	'description'	=> esc_html__( 'Max-width of the website content', 'blogstream' ),
	'section'		=> 'styling',
	'default'		=> '740',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Accent Color
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'blogstream' ),
	'section'		=> 'styling',
	'default'		=> '#3b61eb',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'blogstream_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'blogstream' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'blogstream' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
