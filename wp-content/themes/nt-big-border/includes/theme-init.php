<?php
/**
 *
 * @package WordPress
 * @subpackage nt_big_border
 * @since nt_big_border 1.0
 *
**/

/*************************************************
## Google Font
*************************************************/

if ( ! function_exists( 'nt_big_border_fonts_url' ) ) :
function nt_big_border_fonts_url() {
	$fonts_url = '';

	$merriweather 	= 	_x( 'on', 'Merriweather font: on or off', 	'nt-big-border' );
	$montserrat 	= 	_x( 'on', 'Montserrat font: on or off', 	'nt-big-border' );
	$open_sans 		= 	_x( 'on', 'Open+Sans font: on or off', 		'nt-big-border' );

	if ( 'off' !== $merriweather || 'off' !== $montserrat || 'off' !== $open_sans  ) {
		$font_families = array();

		if ( 'off' !== $merriweather )
			$font_families[] = 'Merriweather:300,300i,400,700';

		if ( 'off' !== $montserrat )
			$font_families[] = 'Montserrat:400,700';

		if ( 'off' !== $open_sans )
			$font_families[] = 'Open+Sans:300,300i,400,700,700i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}
endif;

/*************************************************
## Styles and Scripts
*************************************************/


function nt_big_border_scripts() {

	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	// magnific popup styles
	wp_enqueue_style( 'nt-big-border-reset',				get_template_directory_uri() . '/css/reset.css', false, '1.0');
	// animate css library
	wp_enqueue_style( 'animate',							get_template_directory_uri() . '/css/animate.css', false, '1.0');
	// icomoon icon library
	wp_enqueue_style( 'icomoon',							get_template_directory_uri() . '/css/icomoon.css', false, '1.0');
	wp_enqueue_style( 'icomoon-free',							get_template_directory_uri() . '/css/icomoon-free.css', false, '1.0');
	// magnific popup styles
	wp_enqueue_style( 'magnific-popup',						get_template_directory_uri() . '/css/magnific-popup.css', false, '1.0');
	// owl carousel style and default theme
	wp_enqueue_style( 'owl-carousel',						get_template_directory_uri() . '/css/owl.carousel.min.css', false, '1.0');
	wp_enqueue_style( 'owl-carousel-theme',					get_template_directory_uri() . '/css/owl.theme.default.min.css', false, '1.0');
	// twitter Bootstrap framework
	wp_enqueue_style( 'bootstrap',							get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.0');
	// font awesome icon library
	wp_enqueue_style( 'font-awesome',						get_template_directory_uri() . '/css/font-awesome.min.css', false, '1.0');
	// timeline section styles
	wp_enqueue_style( 'nt-big-border-timeline',				get_template_directory_uri() . '/css/timeline.css', false, '1.0');
	// animated headline styles
	wp_enqueue_style( 'nt-big-border-animated-headline',	get_template_directory_uri() . '/css/animated-headline.css', false, '1.0');
	// contact popup
	wp_enqueue_style( 'nt-big-border-contact-popup',		get_template_directory_uri() . '/css/contact-popup.css', false, '1.0');
	// general css file
	wp_enqueue_style( 'nt-big-border-main-style',			get_template_directory_uri() . '/css/main-style.css', false, '1.0');
	// visual composer css for homepage
	wp_enqueue_style( 'nt-big-border-vc', 					get_template_directory_uri() . '/css/visual-composer.css', false, '1.0');
	// flexslider css file for blog post
	wp_enqueue_style( 'nt-big-border-custom-flexslider',  	get_template_directory_uri() . '/js/flexslider/flexslider.css', false, '1.0');
	// wordpress css file for blog post
	wp_enqueue_style( 'nt-big-border-wordpress',  			get_template_directory_uri() . '/css/wordpress.css', false, '1.0');
	// update css file
	wp_enqueue_style( 'nt-big-border-update',  				get_template_directory_uri() . '/css/update.css', false, '1.0');
	wp_enqueue_style( 'nt-big-border-woocommerce',  		get_template_directory_uri() . '/css/woocommerce.css', false, '1.0');
	// theme default google webfont loader
	wp_enqueue_style( 'nt-big-border-fonts-load',  			nt_big_border_fonts_url(), array(), '1.0.0' );

	// custom css
	wp_enqueue_style( 'nt-big-border-custom-style', 		get_stylesheet_uri() );
	wp_enqueue_style( 'style',							 	get_stylesheet_uri() );

	wp_enqueue_script( 'easing', 							get_template_directory_uri() .  '/js/jquery.easing.1.3.js', 		array('jquery'), '1.0', true);
	wp_enqueue_script( 'bootstrap', 						get_template_directory_uri() .  '/js/bootstrap.min.js', 			array('jquery'), '1.0', true);
	wp_enqueue_script( 'waypoints', 						get_template_directory_uri() .  '/js/jquery.waypoints.min.js', 		array('jquery'), '1.0', true);
	wp_enqueue_script( 'owl-carousel', 						get_template_directory_uri() .  '/js/owl.carousel.min.js', 			array('jquery'), '1.0', true);
	wp_enqueue_script( 'stellar', 							get_template_directory_uri() .  '/js/jquery.stellar.min.js', 		array('jquery'), '1.0', true);
	wp_enqueue_script( 'equalize', 							get_template_directory_uri() .  '/js/equalize.min.js', 				array('jquery'), '1.0', true);
	wp_enqueue_script( 'countTo', 							get_template_directory_uri() .  '/js/jquery.countTo.js', 			array('jquery'), '1.0', true);
	wp_enqueue_script( 'nt-big-border-timeline', 			get_template_directory_uri() .  '/js/timeline.js', 					array('jquery'), '1.0', true);
	wp_enqueue_script( 'wow', 								get_template_directory_uri() .  '/js/wow.min.js', 					array('jquery'), '1.0', true);
	wp_register_script('nt-big-border-animated-headline', 	get_template_directory_uri() .  '/js/animated-headline.js', 		array('jquery'), '1.0', true);
	wp_register_script('nt-big-border-particle-ground', 	get_template_directory_uri() .  '/js/jquery.particleground.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script( 'velocity', 							get_template_directory_uri() .  '/js/velocity.min.js', 				array('jquery'), '1.0', true);
	wp_enqueue_script( 'nt-big-border-main-settings', 		get_template_directory_uri() .  '/js/main-settings.js', 			array('jquery'), '1.0', true);
	wp_enqueue_script( 'magnific-popup', 	 				get_template_directory_uri() .  '/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script( 'matchHeight', 	 					get_template_directory_uri() .  '/js/jquery.matchHeight.js', 		array('jquery'), '1.0', true);
	wp_enqueue_script( 'smooth-scroll', 	 				get_template_directory_uri() .  '/js/smooth-scroll.polyfills.min.js', array('jquery'), '1.0', true);

	// WP default scripts for theme
	wp_register_script('nt-big-border-custom-flexslider', 	get_template_directory_uri() .  '/js/jquery.flexslider.js', 		array('jquery'), '1.0', true);
	wp_register_script('fitvids', 	 						get_template_directory_uri() .  '/js/jquery.fitvids.js', 			array('jquery'), '1.0', true);
	wp_register_script('nt-big-border-blog-settings', 		get_template_directory_uri() .  '/js/blog-settings.js', 			array('jquery'), '1.0', true);

	wp_enqueue_script( 'modernizr', 						get_template_directory_uri()  .  '/js/modernizr.js', 			array('jquery'), '2.7.1', false );

	wp_enqueue_script( 'respond', 							get_template_directory_uri()  .  '/js/respond.min.js', 				array('jquery'), '1.4.2', false );
	wp_script_add_data('respond', 							'conditional', 'lt IE 9' );

}

add_action( 'wp_enqueue_scripts', 'nt_big_border_scripts' );

/*************************************************
## Admin style and scripts
*************************************************/

function nt_big_border_admin_style() {

	// Update CSS within in Admin
	wp_enqueue_style('nt-big-border-custom-admin', 	get_template_directory_uri().'/css/admin.css');
	wp_enqueue_script('nt-big-border-custom-admin', get_template_directory_uri() . '/js/jquery.custom.admin.js');

}
add_action('admin_enqueue_scripts', 'nt_big_border_admin_style');


/*************************************************
## Theme option & Metaboxes & shortcodes
*************************************************/

	// theme homepage visual composer shortcodes settings
	if(function_exists('vc_set_as_theme')) {
		require_once get_template_directory() . '/includes/visual-shortcodes.php';
	}

	// Metabox plugin check
	if ( ! function_exists( 'rwmb_meta' ) ) {
		function rwmb_meta( $key, $args = '', $post_id = null ) {
			return false;
		}
	}
	// Theme post and page meta plugin for customization and more features
	require_once get_template_directory() . '/includes/page-metaboxes.php';

	// Theme css setting file
	require_once get_template_directory() . '/includes/custom-style.php';

	// Theme navigation and pagination options
	require_once get_template_directory() . '/includes/template-tags.php';

	// Theme parts
	require_once get_template_directory() . '/includes/template-parts.php';

	// TGM plugin activation
	require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';


	// Option tree controllers
	if ( ! class_exists( 'OT_Loader' )){

		function ot_get_option() {
			return false;
		}

	}

	// add filter for  options panel loader
	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_new_layout', '__return_false' );

	// Theme options admin panel setings file
	include_once get_template_directory() . '/includes/theme-options.php';

	// Theme customize css setting file
	require_once get_template_directory() . '/includes/custom-style.php';



/*************************************************
## Theme Setup
*************************************************/

if ( ! isset( $content_width ) ) $content_width = 960;

function nt_big_border_theme_setup() {

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, icons, and column width.
	*/
	add_editor_style ( 'custom-editor-style.css' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'html5', array( 'search-form' ) );

	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('gallery', 'quote', 'video', 'audio'));

	// add_post_type_support( 'portfolio', 'post-formats' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'nt-big-border', get_template_directory() . '/languages' );

	register_nav_menus( array(
		'primary' 			=> 	esc_html__( 'Primary Menu', 'nt-big-border' ),
		'primary-menu-2' 	=> 	esc_html__( 'Secondary Header Menu', 'nt-big-border' ),
	) );

}
add_action( 'after_setup_theme', 'nt_big_border_theme_setup' );

/*************************************************
## HTML5 SEARCH FORM
*************************************************/

function nt_big_border_custom_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
		<input type="text" value="' . get_search_query() . '" placeholder="'. esc_attr__( 'Search', 'nt-big-border' ) .'" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search','nt-big-border' ) .'" />
    </div>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'nt_big_border_custom_search_form' );

/*************************************************
## Widget columns
*************************************************/

function nt_big_border_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Blog Sidebar', 'nt-big-border' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'These are widgets for the Blog page.','nt-big-border' ),
		'before_widget' => '<div class="widget  %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title"><span>',
		'after_title' => '</span></h4>'
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Woo Single Sidebar', 'nt-big-border' ),
		'id' => 'shop-single-page-sidebar',
		'description' => esc_html__( 'These are widgets for the Blog page.','nt-big-border' ),
		'before_widget' => '<div class="widget  %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title"><span>',
		'after_title' => '</span></h4>'
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Woo Shop Page Sidebar', 'nt-big-border' ),
		'id' => 'shop-page-sidebar',
		'description' => esc_html__( 'These are widgets for the Blog page.','nt-big-border' ),
		'before_widget' => '<div class="widget  %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title"><span>',
		'after_title' => '</span></h4>'
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer widgetize area', 'nt-big-border' ),
		'id' => 'nt-big-border-footer-widgetize',
		'description' => esc_html__( 'Theme footer widgetize area','nt-big-border' ),
		'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-head">',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer', 'nt-big-border' ),
		'id' => 'nt-big-border-footer',
		'description' => esc_html__( 'Theme footer default area','nt-big-border' ),
		'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-head">',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer widget area 1', 'nt-big-border' ),
		'id' => 'nt_big_border_footer_widget1',
		'description' => esc_html__( 'Theme footer widget area first column.','nt-big-border' ),
		'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-head">',
		'after_title' => '</h3>'
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer widget area 2', 'nt-big-border' ),
		'id' => 'nt_big_border_footer_widget2',
		'description' => esc_html__( 'Theme footer widget area second column.','nt-big-border' ),
		'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-head">',
		'after_title' => '</h3>'
	) );

}
add_action( 'widgets_init', 'nt_big_border_widgets_init' );


/*************************************************
## Include the TGM_Plugin_Activation class.
*************************************************/

function nt_big_border_register_required_plugins() {

    $url = 'https://ninetheme.com/documentation';

    $plugins = array(

		array(
			'name' => esc_html__('Breadcrumb NavXT', "nt-big-border"),
			'slug' => 'breadcrumb-navxt',
		),
		array(
			'name' => esc_html__('Contact Form 7', "nt-big-border"),
			'slug' => 'contact-form-7',
		),
		array(
			'name' => esc_html__('Meta Box', "nt-big-border"),
			'slug' => 'meta-box',
			'required' => true,
		),
		array(
			'name' => esc_html__('Metabox Show/Hide', "nt-big-border"),
			'slug' => 'meta-box-show-hide',
			'source' => $url . '/plugins/meta-box-show-hide.zip',
			'required' => true,
		),
		array(
			'name' => esc_html__('Metabox Tabs', "nt-big-border"),
			'slug' => 'meta-box-tabs',
			'source' => $url . '/plugins/meta-box-tabs.zip',
			'required' => true,
		),
		array(
			'name' => esc_html__('Theme Options Panel', "nt-big-border"),
			'slug' => 'option-tree',
			'source' => $url . '/plugins/option-tree.zip',
			'required' => true,
		),
		array(
			'name' => esc_html__('Envato Auto Update Theme', "nt-big-border"),
			'slug' => 'envato-market-update-theme',
			'source' => $url . '/plugins/envato-market-update-theme.zip',
			'required'=> false,
		),
		array(
			'name' => esc_html__('Visual Composer', "nt-big-border"),
			'slug' => 'visual_composer',
			'source' => $url . '/plugins/visual_composer.zip',
			'required' => true,
		),
		array(
			'name' => esc_html__('Revolution Slider', "nt-big-border"),
			'slug' => 'revolution_slider',
			'source' => $url . '/plugins/revolution_slider.zip',
			'required' => false,
		),
		array(
			'name' => esc_html__('Metabox Tabs', "nt-big-border"),
			'slug' => 'meta-box-tabs',
			'source' => $url . '/plugins/meta-box-tabs.zip',
			'required' => true,
		),
		array(
			'name' => esc_html__('NT Big Border Shortcodes', "nt-big-border"),
			'slug' => 'nt-big-border-shortcodes',
			'source' => get_template_directory(). '/plugins/nt-big-border-shortcodes.zip',
			'required' => true,
			'version' => '1.1.7',
		),
	);

	$config = array(
		'id' => 'tgmpa',
		'default_path' => '',
		'menu' => 'tgmpa-install-plugins',
		'has_notices' => true,
		'dismissable' => true,
		'dismiss_msg' => '',
		'is_automatic' => true,
		'message' => '',
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'nt_big_border_register_required_plugins' );


/*************************************************
## Register Menu
*************************************************/

class Nt_Big_Border_Wp_Bootstrap_Navwalker extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\"sub-menu dropdown-menu\">\n";
	}

	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		/**
		 * Dividers, Headers or Disabled
		 */
		if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider item-has-children">';
		} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider item-has-children">';
		} else if ( strcasecmp( $item->attr_title, 'dropdown-header item-has-children') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="dropdown-header item-has-children">' . esc_attr( $item->title );
		} else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
			$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
		} else {

			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

			if ( $args->has_children )
				$class_names .= 'sub item-has-children';

			if ( in_array( 'current-menu-item', $classes ) )
				$class_names .= ' active';

			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names .'>';

			$atts = array();
			$atts['title']  = ! empty( $item->title )	? $item->title	: '';
			$atts['target'] = ! empty( $item->target )	? $item->target	: '';
			$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';

			// If item has_children add atts to a.
			if ( $args->has_children && $depth === 0 ) {
				$atts['href']   		= $item->url;
				$atts['data-toggle']	= 'dropdown';
				$atts['class']			= 'dropdown-toggle';
			} else {
				$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$item_output = $args->before;

			/*
			 * Glyphicons
			 **/
			if ( ! empty( $item->attr_title ) )
				$item_output .= '<a'. $attributes .'><span class=" ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
			else
				$item_output .= '<a'. $attributes .'>';

			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

	/**
	 * Traverse elements to create list from elements.
	 **/
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

	/**
	 * Menu Fallback
	 **/
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {

			extract( $args );

			$fb_output = null;

			if ( $container ) {
				$fb_output = '<' . $container;

				if ( $container_id )
					$fb_output .= ' id="' . $container_id . '"';

				if ( $container_class )
					$fb_output .= ' class="' . $container_class . '"';

				$fb_output .= '>';
			}

			$fb_output .= '<ul';

			if ( $menu_id )
				$fb_output .= ' id="' . $menu_id . '"';

			if ( $menu_class )
				$fb_output .= ' class="' . $menu_class . '"';

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">' . esc_html__('Add a menu','nt-big-border') .'</a></li>';
			$fb_output .= '</ul>';

			if ( $container )
				$fb_output .= '</' . $container . '>';

			echo wp_kses($fb_output,nt_big_border_allowed_html());
		}
	}
}

/*************************************************
## nt_big_border Comment
*************************************************/

	if ( ! function_exists( 'nt_big_border_comment' ) ) :
	function nt_big_border_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
	case 'pingback' :
	case 'trackback' :
	?>

   <article class="post pingback">
   <p><?php esc_html_e( 'Pingback:', 'nt-big-border' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'nt-big-border' ), ' ' ); ?></p>
	  <?php
		break;
	   default :
	  ?>
        <div class="comments">
            <ul>
				<li class="comment">
					<span class="who">
						<?php echo get_avatar( $comment, 80 ); ?>
					</span>
					<div class="who-comment">
					<p class="name"><?php comment_author(); ?></p>
					<?php comment_text(); ?>
                    <?php edit_comment_link( esc_html__( 'Edit', 'nt-big-border' ), ' ' ); ?>
                    <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                    <span class="meta-data"><time class="comment-date" pubdate datetime="<?php comment_time( 'c' ); ?>"><?php comment_date(); ?> <?php esc_html_e( 'at', 'nt-big-border' ); ?> <?php comment_time(); ?></time></span>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'nt-big-border' ); ?></em>
					<?php endif; ?>
					</div>
				</li>
            </ul>
		</div>
	<?php
	break;
	endswitch;
	}
	endif;


	/*************************************************
	## OPTION TREE WEBFONTS API
	*************************************************/

	add_filter( 'ot_google_fonts_api_key', 'nt_big_border_change_ot_google_fonts_api_key' );

	function nt_big_border_change_ot_google_fonts_api_key( $key ) {
	  return "AIzaSyA2rMBHxvoyNhL8gTR2dITpGgXOdAiW6IQ";
	}



	/*************************************************
	## ADMIN NOTICES
	*************************************************/


	function nt_big_border_theme_activation_notice()
	{
	    global $current_user;

	    $user_id = $current_user->ID;

	    if (!get_user_meta($user_id, 'nt_big_border_theme_activation_notice')) {
	        ?>

			<div class="updated notice">
				<p>
					<?php
					echo sprintf(
						esc_html__('If you need help about demodata installation, please read docs and %s', 'nt-big-border'),
						'<a target="_blank" href="' . esc_url('https://ninetheme.com/contact/') . '">
						' . esc_html__('Contact', 'nt-big-border') . '
						</a> ' . esc_html__(' - ', 'nt-big-border') . ' <a href="?nt-big-border-ignore-notice">' . esc_html__('Dismiss', 'nt-big-border') . '</a>');
					?>
				</p>

		    </div>

	<?php
	    }
	}
	add_action('admin_notices', 'nt_big_border_theme_activation_notice');



	function nt_big_border_theme_activation_notice_ignore()
	{
	    global $current_user;

	    $user_id = $current_user->ID;

	    if (isset($_GET['nt-big-border-ignore-notice'])) {
	        add_user_meta($user_id, 'nt_big_border_theme_activation_notice', 'true', true);
	    }
	}
	add_action('admin_init', 'nt_big_border_theme_activation_notice_ignore');


/*************************************************
## SANITIZE MODIFIED VC-ELEMENTS OUTPUT
*************************************************/


if (!function_exists('nt_big_border_vc_sanitize_data')) {
    function nt_big_border_vc_sanitize_data($html_data)
    {
        return $html_data;
    }
}



/**********************************
## THEME ALLOWED HTML TAG
/**********************************/


if (! function_exists('nt_big_border_allowed_html')) {
    function nt_big_border_allowed_html()
    {
        $allowed_tags = array(
        'a' => array(
            'class' => array(),
            'href'  => array(),
            'rel' => array(),
            'title' => array(),
            'target' => array(),
        ),
        'abbr' => array(
            'title' => array(),
        ),
        'iframe' => array(
            'src' => array(),
        ),
        'b' => array(),
        'br' => array(),
        'blockquote' => array(
            'cite'  => array(),
        ),
        'cite' => array(
            'title' => array(),
        ),
        'code' => array(),
        'del' => array(
            'datetime' => array(),
            'title' => array(),
        ),
        'dd' => array(),
        'div' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'dl' => array(),
        'dt' => array(),
        'em' => array(),
        'h1' => array(),
        'h2' => array(),
        'h3' => array(),
        'h4' => array(),
        'h5' => array(),
        'h6' => array(),
        'i' => array(
            'class'  => array(),
        ),
        'img' => array(
            'alt'    => array(),
            'class'  => array(),
            'height' => array(),
            'src'    => array(),
            'width'  => array(),
        ),
        'li' => array(
            'class' => array(),
        ),
        'ol' => array(
            'class' => array(),
        ),
        'p' => array(
            'class' => array(),
        ),
        'q' => array(
            'cite' => array(),
            'title' => array(),
        ),
        'span' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'strike' => array(),
        'strong' => array(),
        'ul' => array(
            'class' => array(),
        ),
    );

        return $allowed_tags;
    }
}



/*************************************************
## THEME SETUP WIZARD
    https://github.com/richtabor/MerlinWP
*************************************************/


require_once get_parent_theme_file_path( '/includes/merlin/vendor/autoload.php' );
require_once get_parent_theme_file_path( '/includes/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/includes/demo-wizard-config.php' );

function big_border_merlin_local_import_files() {
    return array(
        array(

            'import_file_name'              => 'Demo Import',
            // xml data
            'local_import_file'             => get_parent_theme_file_path( 'includes/merlin/demodata/data.xml' ),
            // widget data
            'local_import_widget_file'      => get_parent_theme_file_path( 'includes/merlin/demodata/widgets.wie' ),
            // option tree -> theme options
            'local_import_option_tree_file' => get_parent_theme_file_path( '/includes/merlin/demodata/optiontree.txt' ),

            // revolution slider -> demodata
            'import_rev' => array(
                array(
                    'slider1' => trailingslashit( get_parent_theme_file_path() ) .  'includes/merlin/demodata/html5-video.zip',
                    'slider2' => trailingslashit( get_parent_theme_file_path() ) .  'includes/merlin/demodata/classicslider1.zip',
                    'slider3' => trailingslashit( get_parent_theme_file_path() ) .  'includes/merlin/demodata/news-hero7.zip',
                    'slider4' => trailingslashit( get_parent_theme_file_path() ) .  'includes/merlin/demodata/newslider2014.zip',
                    'slider4' => trailingslashit( get_parent_theme_file_path() ) .  'includes/merlin/demodata/vimeo-hero.zip',
                    'slider4' => trailingslashit( get_parent_theme_file_path() ) .  'includes/merlin/demodata/youtube-hero.zip'
                )
            )
        )
    );
}
add_filter( 'merlin_import_files', 'big_border_merlin_local_import_files' );


/**
 * Execute custom code after the whole import has finished.
 */
function big_border_merlin_after_import_setup() {

    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Header first menu', 'nav_menu' );
    $footer = get_term_by( 'name', 'Header second menu', 'nav_menu' );


    set_theme_mod(
        'nav_menu_locations', array(
            'primary' => $primary->term_id,
            'primary-menu-2' => $footer->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Homepage' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'merlin_after_all_import', 'big_border_merlin_after_import_setup' );


add_action('init', 'do_output_buffer'); function do_output_buffer() { ob_start(); }
