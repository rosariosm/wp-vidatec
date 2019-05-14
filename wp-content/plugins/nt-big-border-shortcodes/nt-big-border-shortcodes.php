<?php

/*
Plugin Name: BIG Border Shortcodes
Plugin URI: http://themeforest.net/user/Ninetheme
Description: Shortcodes for Ninetheme WordPress Themes - BIG border Version
Version: 1.1.7
Author: Ninetheme
Author URI: http://themeforest.net/user/Ninetheme
*/


function nt_big_border_register_cpts() {

	/**
	 * Post Type: Portfolio.
	 */

	$labels = array(
		"name" => __( "Portfolio", "custom-post-type-ui" ),
		"singular_name" => __( "Portfolio", "custom-post-type-ui" ),
		"menu_name" => __( "Portfolio", "custom-post-type-ui" ),
		"all_items" => __( "All Portfolio", "custom-post-type-ui" ),
		"add_new" => __( "Add New", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Item", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Portfolio", "custom-post-type-ui" ),
		"new_item" => __( "New Portfolio", "custom-post-type-ui" ),
		"view_item" => __( "View Portfolio", "custom-post-type-ui" ),
		"view_items" => __( "View Items", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Portfolio", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ),
		"taxonomies" => array( "post_tag", "portfolio_category" ),
	);

	register_post_type( "portfolio", $args );

	/**
	 * Post Type: Price Table.
	 */

	$labels = array(
		"name" => __( "Price Table", "custom-post-type-ui" ),
		"singular_name" => __( "Price Table", "custom-post-type-ui" ),
		"menu_name" => __( "Price Table", "custom-post-type-ui" ),
		"all_items" => __( "All Price", "custom-post-type-ui" ),
		"add_new" => __( "Add New", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Item", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Price Item", "custom-post-type-ui" ),
		"new_item" => __( "New Price Item", "custom-post-type-ui" ),
		"view_item" => __( "View Price Item", "custom-post-type-ui" ),
		"view_items" => __( "View Items", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Price Table", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "price", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ),
		"taxonomies" => array( "post_tag", "price_category" ),
	);

	register_post_type( "price", $args );
}

add_action( 'init', 'nt_big_border_register_cpts' );


function nt_big_border_register_taxes() {

	/**
	 * Taxonomy: Portfolio Category.
	 */

	$labels = array(
		"name" => __( "Portfolio Category", "custom-post-type-ui" ),
		"singular_name" => __( "Portfolio Categories", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Portfolio Category", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'portfolio_category', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "portfolio_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		);
	register_taxonomy( "portfolio_category", array( "portfolio" ), $args );

	/**
	 * Taxonomy: Price Category.
	 */

	$labels = array(
		"name" => __( "Price Category", "custom-post-type-ui" ),
		"singular_name" => __( "Price Categories", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Price Category", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'price_category', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "price_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		);
	register_taxonomy( "price_category", array( "price" ), $args );
}
add_action( 'init', 'nt_big_border_register_taxes' );





/*-----------------------------------------------------------------------------------*/
/*	COVER BIG BORDER
/*-----------------------------------------------------------------------------------*/

require_once plugin_dir_path(__FILE__) . 'aq_resizer.php';

function nt_big_border_cover_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'        => '',
		'scroll_id'        	=> '',
		'css'               => '',
		'link'              => '',
		'headline1'         => '',
		'headline2'         => '',
		'headline3'         => '',
		'headline4'         => '',
		'bg_img'      		=> '',
		'c_1'      		=> '',
		'c_2'      		=> '',
		'c_3'      		=> '',
		'c_4'      		=> '',
		'c_5'      		=> '',
		'c_6'      		=> '',
		'c_7'      		=> '',
		'heading'          	=> '',
		'heading2'         	=> '',
		'heading3'         	=> '',
		'description'		=> ''
    ), $atts) );

	wp_enqueue_script( 'nt-big-border-particle-ground');
	wp_enqueue_script( 'nt-big-border-animated-headline');
	wp_enqueue_style( 'nt-big-border-animated-headline');

   $css_class 		= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
   $id 			= ($section_id != '') ? ' id="'. esc_attr($section_id) . '" ' : '';
   $s_id 			= ($scroll_id != '') ? ' href="'. esc_attr($scroll_id) . '" ' : '#about';
   $img_url 		= wp_get_attachment_url( $bg_img,'full' );

	$link = ( $link == '||' ) ? '' : $link;
	$link = vc_build_link( $link );
	$a_href = $link['url'];
	$a_title = $link['title'];
	$a_target = $link['target'];

	$link_a_target 	= ($a_target != '') ? 'target="'. esc_attr($a_target) . '" ' : '';
	$link_a_title 	= ($a_title != '')   ? ''. esc_html($a_title) . '' : '';
	$link_a_href 	= ($a_href != '')   ? 'href="'. esc_url($a_href) . '" ' : '';
	$bg_img_url 	= ($img_url != '')  ? 'style="background-image: '. esc_url($img_url) . ';"' : '';

	$out = ''; // start
	$out .= '<div class="template-cover template-cover-style-2 js-full-height section-class-scroll '. esc_attr($css_class) . '" '.$id.' data-stellar-background-ratio="0.5" data-next="yes">';

        /*TODO: FIX SCROLL TO ID
		if ( $scroll_id !=''){
		$out .= '<span class="scroll-btn wow" data-wow-duration="1s" data-wow-delay="1.4s">';
			$out .= '<a '. $s_id .'>';
				$out .= '<span class="mouse"><span></span></span>';
			$out .= '</a>';
		$out .= '</span>';
		}*/

		$out .= '<style>';
         $out .= ' .hero-headline span { color: '. $c_1 .' ;}';
         $out .= ' .cover-text-lead-off { color: '. $c_2 .' ;}';
         $out .= ' .template-cover .template-cover-text .cover-text-sublead { color: '. $c_3 .' ;}';
         $out .= ' .cover-text-lead-off .color-third { color: '. $c_7 .' ;}';
         $out .= ' .template-cover .template-cover-text .btn-outline { color: '. $c_4 .' ; border-color: '. $c_5 .' ; background-color: '. $c_6 .' ;  }';
		$out .= '</style>';

		$out .= '<div class="template-overlay"></div>'; // overlay

		$out .= '<div class="template-cover-text">';
			$out .= '<div class="container">';
				$out .= '<div class="row">';
					$out .= '<div class="col-lg-push-6 col-md-push-4 col-sm-push-0 col-md-6 full-height js-full-height">';
						$out .= '<div class="template-cover-intro">';

							$out .= '<h2 class="cd-headline hero-headline letters rotate-3">';
								$out .= '<span class="cd-words-wrapper"><b class="is-visible">'. $headline1 .'</b><b>'. $headline2 .'</b><b>'. $headline3 .'</b><b>'. $headline4 .'</b></span>';
							$out .= '</h2>';

							/*$out .= '<h2 class="cover-text-lead-off wow" data-wow-duration="1s" data-wow-delay=".5s">';
								$out .= '<span class="relative fifth-border colored-lable-2 wow color-white" data-wow-duration="1s" data-wow-delay=".5s">'. $heading .'<span class="tape-white color-white"></span></span>';
								$out .= '<span class="relative fifth-border colored-lable-2 wow fadeInUp  color-third" data-wow-duration="1.2s" data-wow-delay=".6s">'. $heading2 .'<span class="tape-white color-white"></span></span>';
								$out .= '<span class="relative fifth-border colored-lable-2 wow fadeInUp  color-white" data-wow-duration="1.4s" data-wow-delay=".7s">'. $heading3 .'</span>';
							$out .= '</h2>';*/
							$out .= '<h2 class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s">'. $description .'</h2>';
							if ( $a_title !=''){
								$out .= '<p class="wow" data-wow-duration="1s" data-wow-delay="1.1s"><a '. $link_a_href . ' '. $link_a_target .' class="btn btn-primary btn-outline btn-lg">'. esc_html($link_a_title) . '</a></p>';
							}

						$out .= '</div>';
					$out .= '</div>';
				$out .= '</div>';
			$out .= '</div>';
		$out .= '</div>';

	$out .= '</div>'; // end section

	return $out;
}
add_shortcode('nt_big_border_cover', 'nt_big_border_cover_vc');


/*-----------------------------------------------------------------------------------*/
/*	ABOUT 1 BIG BORDER
/*-----------------------------------------------------------------------------------*/

function nt_big_border_about_1_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'        => '',
		'css'               => '',
		'link'              => '',
		'headline1'         => '',
		'headline2'         => '',
		'headline3'         => '',
		'headline4'         => '',
		'bg_img'      		=> '',
		'label1'          	=> '',
		'label4'          	=> '',
		'heading1'          => '',
		'heading2'          => '',
		'heading3'          => '',
		'heading4'          => '',
		'section_heading'   => '',
		'heading2'         	=> '',
		'heading3'         	=> '',
		'description'		=> '',
		'description1'		=> '',
		'description2'		=> '',
		'description3'		=> '',
		'description4'		=> '',
		'c_1'		=> '',
		'c_2'		=> '',
		'c_3'		=> '',
		'c_4'		=> '',
		'c_5'		=> '',
		'c_6'		=> '',
		'c_7'		=> '',
		'c_8'		=> '',
		'c_9'		=> '',
		'c_10'		=> '',
		'c_11'		=> '',
		'c_12'		=> '',
		'c_13'		=> '',
		'c_14'		=> '',
		'c_15'		=> '',
		'c_16'		=> '',
		'c_17'		=> '',
		'c_18'		=> '',
		'c_19'		=> '',
		'c_20'		=> '',
    ), $atts) );

	wp_enqueue_script( 'nt-big-border-animated-headline');
	wp_enqueue_style( 'nt-big-border-animated-headline');

    $css_class 		= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 			= ($section_id != '') ? ' id="'. esc_attr($section_id) . '" ' : '';
	$img_url 		= wp_get_attachment_url( $bg_img,'full' );

	$out = ''; // start

   		$out .= '<style>';
            $out .= ' .template-project-style-2 .cd-headline span.section-heading{ color: '. $c_1 .' ;   }';
            $out .= ' .template-project-style-2 .cd-words-wrapper b { color: '. $c_2 .'; }';
            $out .= ' .template-project-style-2 .box1 .colored-lable { color: '. $c_3 .'; border-color: '. $c_4 .';  background-color: '. $c_5 .'; }';
            $out .= ' .template-project-style-2 .box1 { color: '. $c_6 .'; border-color: '. $c_7 .';  background-color: '. $c_8 .'; }';
            $out .= ' .template-project-style-2 .box2 { color: '. $c_9 .'; border-color: '. $c_10 .';  background-color: '. $c_11 .'; }';
            $out .= ' .template-project-style-2 .box3 { color: '. $c_12 .'; border-color: '. $c_13 .';  background-color: '. $c_14 .'; }';
            $out .= ' .template-project-style-2 .box4 .colored-lable { color: '. $c_15 .'; border-color: '. $c_16 .';  background-color: '. $c_17 .'; }';
            $out .= ' .template-project-style-2 .box4 { color: '. $c_18 .'; border-color: '. $c_19 .';  background-color: '. $c_20 .'; }';
   		$out .= '</style>';

	$out .= '<div id="about" class="template-project-style-2 section-class-scroll">';
		$out .= '<div class="container">';
			$out .= '<div class="row">';
			if( $section_heading !='' ) {
				$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
					$out .= '<h2 class="cd-headline slide">';
						$out .= '<span class="section-heading">'. $section_heading .'  </span>';
						$out .= '<span class="cd-words-wrapper"><b class="is-visible">'. $headline1 .'</b><b>'. $headline2 .'</b><b>'. $headline3 .'</b><b>'. $headline4 .'</b></span>';
					$out .= '</h2>';
				$out .= '</div>';
			}

			if( $heading1 !='' ) {
				$out .= '<div class="col-md-4">';
					$out .= '<div class="fifth-border color-fourth box1 colored-boxes lg-margin-b-30 border-radius-off">';
						/*$out .= '<span class="colored-lable wow absolute color-white bg-color-second" data-wow-duration="1s" data-wow-delay=".5s">'. $label1 .'</span>';*/
						$out .= '<h3 class="template-heading wow" data-wow-duration="1s" data-wow-delay=".5s">'. $heading1 .'</h3>';
						$out .= '<p>'. $description1 .'</p>';
					$out .= '</div>';
				$out .= '</div>';
			}
			if( $heading2 !='' ) {
				$out .= '<div class="col-md-4">';
					$out .= '<div class="fifth-border color-white box2 border-color-blue  colored-boxes bg-color-blue lg-margin-b-30 border-radius-off">';
						$out .= '<h3 class="template-heading wow color-white" data-wow-duration="1s" data-wow-delay=".3s">'. $heading2 .'</h3>';
						$out .= '<p>'. $description2 .'</p>';
					$out .= '</div>';
					$out .= '<div class="fifth-border color-white box3 border-color-green  colored-boxes bg-color-green lg-margin-b-30 border-radius-off">';
						$out .= '<h3 class="template-heading wow color-white" data-wow-duration="1s" data-wow-delay=".3s">'. $heading3 .'</h3>';
							$out .= '<p>'. $description3 .'</p>';
					$out .= '</div>';
				$out .= '</div>';
			}
			if( $heading4 !='' ) {
				$out .= '<div class="col-md-4">';
					$out .= '<div class="fifth-border color-fourth box4 colored-boxes lg-margin-b-30 border-radius-off">';
						/*$out .= '<span class="colored-lable wow absolute color-white bg-color-second" data-wow-duration="1s" data-wow-delay=".5s">'. $label4 .'</span>';*/
						$out .= '<h3 class="template-heading wow" data-wow-duration="1s" data-wow-delay=".5s">'. $heading4 .'</h3>';
						$out .= '<p>'. $description4 .'</p>';
					$out .= '</div>';
				$out .= '</div>';
			}
			$out .= '</div>';
		$out .= '</div>';
	$out .= '</div>';
	return $out;
}
add_shortcode('nt_big_border_about', 'nt_big_border_about_1_vc');

/*-----------------------------------------------------------------------------------*/
/*	ABOUT 2 BIG BORDER
/*-----------------------------------------------------------------------------------*/

function nt_big_border_about_2_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'        => '',
		'css'               => '',
		'bg_img'      		=> '',
		'bg_img_2'      	=> '',
		'label'          	=> '',
		'heading1'          => '',
		'heading2'          => '',
		'description2'		=> '',
		'description1'		=> '',
      'c_3'		=> '',
		'c_4'		=> '',
		'c_5'		=> '',
		'c_6'		=> '',
		'c_7'		=> '',
		'c_8'		=> '',
		'c_9'		=> '',
		'c_10'		=> '',
		'c_11'		=> '',
    ), $atts) );

	wp_enqueue_script( 'nt-big-border-animated-headline');
	wp_enqueue_style( 'nt-big-border-animated-headline');

    $css_class 		= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 			= ($section_id != '') ? ' id="'. esc_attr($section_id) . '" ' : '';
	$img_url 		= wp_get_attachment_url( $bg_img,'full' );
	$img_url_2 		= wp_get_attachment_url( $bg_img_2,'full' );
	$bg_img_url 	= ($img_url != '')    ? 'style="background-image: url('. esc_url($img_url) . ');"' : '';
	$bg_img_url_2 	= ($img_url_2 != '')  ? 'style="background-position: 96%; background-image: url('. esc_url($img_url_2) . ');"' : '';

	$out = ''; // start

   $out .= '<style>';

      $out .= ' .template-project-style-2 .box5 .colored-lable-inner { color: '. $c_3 .'; border-color: '. $c_4 .';  background-color: '. $c_5 .'; }';
      $out .= ' .template-project-style-2 .box5 .bg-color-blue { color: '. $c_6 .'; border-color: '. $c_7 .';  background-color: '. $c_8 .'; }';
      $out .= ' .template-project-style-2 .box6 .bg-color-fifth { color: '. $c_9 .'; border-color: '. $c_10 .';  background-color: '. $c_11 .'; }';

   $out .= '</style>';

	$out .= '<div class="template-project-style-2 section-class-scroll">';
		$out .= '<div class="container">';
			$out .= '<div class="row">';

				$out .= '<div class="col-lg-8 col-md-12 box5 outer">';
					$out .= '<div class="col-md-6 inside  color-second colored-boxes md-margin-b-30 border-radius-off padding-off ouhgter-height" '. $bg_img_url .'></div>';
					/*$out .= '<span class="colored-lable-inner wow hvr-grow absolute color-white bg-color-blue" data-wow-duration="1s" data-wow-delay=".5s">'. $label .'</span>';*/
					$out .= '<div class="col-md-6 inside color-white colored-boxes  border-radius-off bg-color-blue">';
						$out .= '<h3 class="template-heading wow color-white" data-wow-duration="1s" data-wow-delay=".5s">'. $heading1 .'</h3>';
						$out .= '<p>'. $description1 .'</p>';
					$out .= '</div>';

				$out .= '</div>';
				$out .= '<div class="col-lg-4 col-md-12 box6 relative">';
					$out .= '<div class="relative  color-white border-color-first  colored-boxes bg-color-fifth  border-radius-off" '. $bg_img_url_2 .'>';
						$out .= '<h3 class="template-heading wow color-white relative" data-wow-duration="1s" data-wow-delay=".3s">'. $heading2 .'</h3>';
						$out .= '<p class="wow relative animated" data-wow-duration="1s" data-wow-delay="1s">'. $description2 .'</p>';
						$out .= '<div class="overlay"></div>';
					$out .= '</div>';
				$out .= '</div>';

			$out .= '</div>';
		$out .= '</div>';
	$out .= '</div>';

	return $out;
}
add_shortcode('nt_big_border_about_2', 'nt_big_border_about_2_vc');


/*-----------------------------------------------------------------------------------*/
/*	portfolio 1
/*-----------------------------------------------------------------------------------*/
function nt_big_border_portfolio_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'           	=> '',
		'css'                  	=> '',
		'link'                  => '',
		'heading'              	=> '',
		'description'          	=> '',
		'type'          		=> '1',
		'portfolio_items'    	=> '',
		'posts'             	=> '3',
		'order'             	=> 'DESC',
		'orderby'           	=> 'date',
		'portfolio_category'	=> 'all',
		'excerpt_size'   		=> '135',
		'item_img'    			=> '',
		'item_delay'            => '',
		'item_heading'          => '',
		'item_desc'             => '',
      'c_3'		=> '',
		'c_4'		=> '',
		'c_5'		=> '',
		'c_6'		=> '',
		'c_7'		=> '',
    ), $atts) );

	$portfolio_items 	= (array) vc_param_group_parse_atts($portfolio_items);
    $css_class 			= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 				= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';

	$link 				= ( $link == '||' ) ? '' : $link;
	$link 				= vc_build_link( $link );
	$a_href 			= $link['url'];
	$a_title 			= $link['title'];
	$a_target 			= $link['target'];

	$link_a_target 		= ($a_target != '') ? 'target="'. esc_attr($a_target) . '" ' : '';
	$link_a_href 		= ($a_href != '')   ? 'href="'. esc_url($a_href) . '" ' : '';
	$link_a_title 		= ($a_title != '')   ? ''. esc_html($a_title) . '' : '';


	$args = array(
		'post_type'			=> 'portfolio',
		'posts_per_page'	=> $posts,
		'order' 			=> $order,
		'orderby'			=> $orderby,
		'post_status' 		=> 'publish'
	);

    if($portfolio_category != 'all'){
    	$str = $portfolio_category;
    	$arr = explode(',', $str);
		$args['tax_query'][] = array( 'taxonomy' => 'portfolio_category', 'field' => 'slug', 'terms' => $arr );
	}

	$out = ''; // start shortcode

   $out .= '<style>';

      $out .= ' .portfolio-shortcode .btn-success { color: '. $c_3 .'; border-color: '. $c_4 .';  background-color: '. $c_5 .'; }';
      $out .= ' .portfolio-shortcode .template-heading { color: '. $c_6 .'; }';
      $out .= ' .portfolio-shortcode .bp-desc { color: '. $c_7 .';  }';

   $out .= '</style>';

	$out .= '<div '. $id .' class="template-project-style-2 portfolio-shortcode section-class-scroll '. esc_attr($css_class) . '">';
		$out .= '<div class="container">';
			$out .= '<div class="row p-b">';
				$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
					$out .= '<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">'. $heading .'</h2>';
					$out .= '<p class="wow p-desc" data-wow-duration="1s" data-wow-delay=".8s">'. $description .'</p>';
					if ( $a_title !=''){ $out .= '<p class="wow" data-wow-duration="1s" data-wow-delay="1.1s"><a '. $link_a_href . ' '. $link_a_target .' class="btn btn-success btn-lg">'. $link_a_title . '</a></p>'; }
				$out .= '</div>';
			$out .= '</div>';
		$out .= '</div>';

		$out .= '<div class="template-projects">';
			$out .= '<ul>';

			if( $type == '1' || $type == '' ){
				// item start
				foreach ( $portfolio_items as $p ) {

					$delay 		= (isset($p['item_delay']) != '') ? 'data-wow-delay="'. isset($p['item_delay']) .'s"' : '0.7s';
					$img_url 	= wp_get_attachment_url( $p['item_img'],'full' );
					$image 		= nt_big_border_aq_resize( $img_url, 1200, 200, true, true, true );
					$bg_img_url = ($image != '')  ? 'style="background-image: url('. esc_url($image) . ');"' : '';

					$out .= '<li class="wow fadeInUp" '. $bg_img_url .' data-wow-duration="1s" '.$delay.'>';
						$out .= '<a href="'. get_permalink().'">';
							$out .= '<div class="template-overlay"></div>';
							$out .= '<div class="container">';
								$out .= '<div class="template-text">';
									$out .= '<div class="template-text-inner">';
										$out .= '<div class="row">';
											 if ( isset( $p['item_heading'] ) !='' ){ $out .= '<div class="col-md-6"><h3>'.$p['item_heading'].'</h3></div>'; }
											 if ( isset( $p['item_desc'] ) !='' ){ $out .= '<div class="col-md-6"><p>'.$p['item_desc'].'</p></div>'; }
										$out .= '</div>';
									$out .= '</div>';
								$out .= '</div>';
							$out .= '</div>';
						$out .= '</a>';
					$out .= '</li>';

				}
			} else {
					// item start
					$nt_big_border_port_query = new WP_Query($args);
					if( $nt_big_border_port_query->have_posts() ) :
					while ( $nt_big_border_port_query->have_posts() ) :
					$nt_big_border_port_query->the_post();

					$thumb 			= get_post_thumbnail_id();
					$img_url 		= wp_get_attachment_url( $thumb,'full' );
					$image 			= nt_big_border_aq_resize( $img_url, 1200, 200, true, true, true );
					$bg_img_url 	= ($image != '')  ? 'style="background-image: url('. esc_url($image) . ');"' : '';

					$out .= '<li class="wow fadeInUp" '. $bg_img_url .' data-wow-duration="1s">';
						$out .= '<a href="'. get_permalink().'">';
							$out .= '<div class="template-overlay"></div>';
							$out .= '<div class="container">';
								$out .= '<div class="template-text">';
									$out .= '<div class="template-text-inner">';
										$out .= '<div class="row">';
											$out .= '<div class="col-md-6"><h3>'.get_the_title().'</h3></div>';
											$out .= '<div class="col-md-6"><p>' . substr(get_the_excerpt(), 0, $excerpt_size) . '</p></div>';
										$out .= '</div>';
									$out .= '</div>';
								$out .= '</div>';
							$out .= '</div>';
						$out .= '</a>';
					$out .= '</li>';

				endwhile;
				endif;
				wp_reset_postdata();
			}

			$out .= '</ul>';
		$out .= '</div>';

	$out .= '</div>';

 return $out;
}
add_shortcode('nt_big_border_portfolio', 'nt_big_border_portfolio_vc');


/*-----------------------------------------------------------------------------------*/
/*	portfolio 2
/*-----------------------------------------------------------------------------------*/
function nt_big_border_portfolio_vc_2( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'           	=> '',
		'css'                  	=> '',
		'link'                  => '',
		'heading'              	=> '',
		'description'          	=> '',
		'type'          		=> '1',
		'portfolio_items'    	=> '',
		'column'             	=> '3',
		'posts'             	=> '3',
		'order'             	=> 'DESC',
		'orderby'           	=> 'date',
		'portfolio_category'	=> 'all',
		'excerpt_size'   		=> '135',
		'item_img'    			=> '',
		'item_delay'            => '',
		'item_heading'          => '',
		'item_desc'             => ''
    ), $atts) );

	$portfolio_items 	= (array) vc_param_group_parse_atts($portfolio_items);
    $css_class 			= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 				= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';

	$link 				= ( $link == '||' ) ? '' : $link;
	$link 				= vc_build_link( $link );
	$a_href 			= $link['url'];
	$a_title 			= $link['title'];
	$a_target 			= $link['target'];

	$link_a_target 		= ($a_target != '') ? 'target="'. esc_attr($a_target) . '" ' : '';
	$link_a_href 		= ($a_href != '')   ? 'href="'. esc_url($a_href) . '" ' : '';
	$link_a_title 		= ($a_title != '')   ? ''. esc_html($a_title) . '' : '';


	$args = array(
		'post_type'			=> 'portfolio',
		'posts_per_page'	=> $posts,
		'order' 			=> $order,
		'orderby'			=> $orderby,
		'post_status' 		=> 'publish'
	);

    if($portfolio_category != 'all'){
    	$str = $portfolio_category;
    	$arr = explode(',', $str);
		$args['tax_query'][] = array( 'taxonomy' => 'portfolio_category', 'field' => 'slug', 'terms' => $arr );
	}

    $out = '';
      $out .= '<div '. $id .' class="template-project-style-3 '. esc_attr($css_class) . '">';
         $out .= '<div class="container">';
            $out .= '<div class="row p-b">';

				if ( $heading !=''){
					$out .= '<div class="col-md-12"><h2 class="template-heading">'. $heading .'</h2></div>';
				}

				if ( $description !=''){
					$out .= '<div class="col-md-8">';
						$out .= '<p>'. $description .'</p>';
					$out .= '</div>';
				}
				if ( $a_title !=''){
					$out .= '<div class="col-md-4 text-right">';
						$out .= '<p><a '. $link_a_href . ' '. $link_a_target .' class="btn btn-primary btn-lg">'. $link_a_title . '</a></p>';
					$out .= '</div>';
				}

            $out .= '</div>';

            $out .= '<div class="row">';


			if( $type == '1' || $type == '' ){
				// item start
				foreach ( $portfolio_items as $p ) {

				$delay 		= (isset($p['item_delay']) != '') ? 'data-wow-delay="'. isset($p['item_delay']) .'s"' : '0.7s';

				$img_url 	= wp_get_attachment_url( $p['item_img'],'full' );
				$image 		= nt_big_border_aq_resize( $img_url, 262, 350, true, true, true );
				$bg_img_url = ($image != '')  ? 'style="background-image: url('. esc_url($image) . ');"' : '';
				$column_out 	= ($column != '')  ? 'col-md-'. esc_attr($column) . '' : 'col-md-3';

				$out .= '<div class="'. $column_out .' col-sm-6 col-xs-6 col-xxs-12">';
                  $out .= '<a href="'. get_permalink().'" class="template-project-item" '. $bg_img_url .'>';
                     $out .= '<img src="'. $image .'" alt="Image" class="img-responsive sr-only">';
                     $out .= '<div class="template-overlay"></div>';
                     $out .= '<div class="template-text">';
                         if ( isset( $p['item_heading'] ) !='' ){ $out .= '<h3>'.$p['item_heading'].'</h3>'; }
                         if ( isset( $p['item_desc'] ) !='' ){ $out .= '<p>'.$p['item_desc'].'</p>'; }
                     $out .= '</div>';
                  $out .= '</a>';
				$out .= '</div>';

				}
			} else {
				// item start
				$nt_big_border_port_query = new WP_Query($args);
				if( $nt_big_border_port_query->have_posts() ) :
				while ( $nt_big_border_port_query->have_posts() ) :
				$nt_big_border_port_query->the_post();

				$thumb 			= get_post_thumbnail_id();
				$img_url 		= wp_get_attachment_url( $thumb,'full' );
				$image 			= nt_big_border_aq_resize( $img_url, 262, 350, true, true, true );
				$bg_img_url 	= ($image != '')  ? 'style="background-image: url('. esc_url($image) . ');"' : '';
				$column_out 	= ($column != '')  ? 'col-md-'. esc_attr($column) . '' : 'col-md-3';

				$out .= '<div class="'. $column_out .' col-sm-6 col-xs-6 col-xxs-12">';
                  $out .= '<a href="'. get_permalink().'" class="template-project-item" '. $bg_img_url .'>';
                     $out .= '<img src="'. $image .'" alt="Image" class="img-responsive sr-only">';
                     $out .= '<div class="template-overlay"></div>';
                     $out .= '<div class="template-text">';
                        $out .= '<h3>'.get_the_title().'</h3>';
                        $out .= '<p>' . substr(get_the_excerpt(), 0, $excerpt_size) . '</p>';
                     $out .= '</div>';
                  $out .= '</a>';
				$out .= '</div>';

				endwhile;
				endif;
				wp_reset_postdata();
			}

            $out .= '</div>';
		$out .= '</div>';
	$out .= '</div>';



 return $out;
}
add_shortcode('nt_big_border_portfolio_2', 'nt_big_border_portfolio_vc_2');

/*-----------------------------------------------------------------------------------*/
/*	team
/*-----------------------------------------------------------------------------------*/
function nt_big_border_team_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'           	=> '',
		'css'                  	=> '',
		'link'                  => '',
		'heading_type'          => '1',
		'heading'              	=> '',
		'description'          	=> '',
		'type'          		=> '1',
		'team_items'    		=> '',
		'item_position'    		=> '',
		'facebook'    			=> '',
		'facebookurl'    		=> '',
		'instagram'    			=> '',
		'instagramurl'    		=> '',
		'twitter'    			=> '',
		'twitterurl'    		=> '',
		'github'    			=> '',
		'githuburl'    			=> '',
		'linkedin'    			=> '',
		'linkedinurl'    		=> '',
		'item_img'    			=> '',
		'item_delay'            => '',
		'item_heading'          => '',
		'item_desc'             => '',
		'bgcolor'             => ''
    ), $atts) );

	$team_items 		= (array) vc_param_group_parse_atts($team_items);
    $css_class 			= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 				= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';
    $type_out 			= ($type != '') ? 'template-team-style-'. esc_attr($type) . '' : 'template-team-style-1';

	$link 				= ( $link == '||' ) ? '' : $link;
	$link 				= vc_build_link( $link );
	$a_href 			= $link['url'];
	$a_title 			= $link['title'];
	$a_target 			= $link['target'];

	$link_a_target 		= ($a_target != '') ? 'target="'. esc_attr($a_target) . '" ' : '';
	$link_a_href 		= ($a_href != '')   ? 'href="'. esc_url($a_href) . '" ' : '';
	$link_a_title 		= ($a_title != '')   ? ''. esc_html($a_title) . '' : '';

    $out = '';
      $out .= '<div '. $id .' class="'. $type_out . ' '. esc_attr($css_class) . '">';
         $out .= '<div class="container">';


            $out .= '<div class="row p-b">';

				// heading 1
				if ( $heading_type !='' || $heading_type =='1'){
					if ( $heading !=''){
						$out .= '<div class="col-md-12"><h2 class="template-heading">'. $heading .'</h2></div>';
					}

					if ( $description !=''){
						$out .= '<div class="col-md-8">';
							$out .= '<p>'. $description .'</p>';
						$out .= '</div>';
					}
					if ( $a_title !=''){
						$out .= '<div class="col-md-4 text-right">';
							$out .= '<p><a '. $link_a_href . ' '. $link_a_target .' class="btn btn-primary btn-lg">'. $link_a_title . '</a></p>';
						$out .= '</div>';
					}
				}

				// heading 2
				if (  $heading_type =='2'){
					$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
						if ( $heading !=''){  $out .= '<h2 class="template-heading">'. $heading .'</h2>'; }
						if ( $description !=''){  $out .= '<p>'. $description .'</p>'; }
					$out .= '</div>';
				}

            $out .= '</div>';

            $out .= '<div class="row">';

			if( $type == '1' || $type == '' ){
				// item start
				foreach ( $team_items as $p ) {

				$delay 		= (isset($p['item_delay']) != '') ? 'data-wow-delay="'. isset($p['item_delay']) .'s"' : '0.7s';
				$img_url 	= wp_get_attachment_url( $p['item_img'],'full' );
				$bg_img_url = ($img_url != '')  ? 'style="background-image: url('. esc_url($img_url) . ');"' : '';

				$out .= '<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">';
                  $out .= '<a href="" class="template-person" '. $bg_img_url .'>';
                     $out .= '<img src="'. $img_url .'" alt="Image" class="img-responsive sr-only">';

                      $bg_color         = ( $bgcolor    !='' ) ? ' background:'.esc_attr( $bgcolor ).'!important;' : '';
                      $overlaystyle     = ( $bg_color   !=''  ) ? ' style="'.$bg_color.'"' : '';

                     $out .= '<div '.$overlaystyle.' class="template-overlay" ></div>';
                     $out .= '<div class="template-text">';
                         if ( isset( $p['item_heading'] ) !='' ){ $out .= '<h3>'.$p['item_heading'].'</h3>'; }
                         if ( isset( $p['item_desc'] ) !='' ){ $out .= '<p>'.$p['item_desc'].'</p>'; }
                     $out .= '</div>';
                  $out .= '</a>';
				$out .= '</div>';

				}
			}

			if( $type == '2' || $type == '3' ){
				// item start
				foreach ( $team_items as $p ) {

					$img_url 	= wp_get_attachment_url( $p['item_img'],'full' );

					$out .= '<div class="col-md-4 text-center">';
						$out .= '<div class="person">';
							$out .= '<img src="'. $img_url .'" class="img-responsive img-rounded" alt="Person">';
							if ( isset( $p['item_heading'] ) !='' )	{ $out .= '<h3 class="name">'.$p['item_heading'].'</h3>'; }
							if ( isset( $p['item_position'] ) !='' ){ $out .= '<div class="position">'.$p['item_position'].'</div>'; }
							if ( isset( $p['item_desc'] ) !='' )	{ $out .= '<p>'.$p['item_desc'].'</p>'; }
							$out .= '<ul class="social social-circle">';
								if ( isset( $p['twitterurl'] ) !='' )	{  $out .= '<li><a href="'.$p['twitterurl'].'"><i class="icon-twitter"></i></a></li>'; }
								if ( isset( $p['linkedinurl'] ) !='' )	{  $out .= '<li><a href="'.$p['linkedinurl'].'"><i class="icon-linkedin"></i></a></li>'; }
								if ( isset( $p['instagramurl'] ) !='' ) {  $out .= '<li><a href="'.$p['instagramurl'].'"><i class="icon-instagram"></i></a></li>'; }
								if ( isset( $p['githuburl'] ) !='' )	{  $out .= '<li><a href="'.$p['githuburl'].'"><i class="icon-github"></i></a></li>'; }
								if ( isset( $p['facebookurl'] ) !='' )	{  $out .= '<li><a href="'.$p['facebookurl'].'"><i class="icon-facebook"></i></a></li>';}
							$out .= '</ul>';
						$out .= '</div>';
					$out .= '</div>';

				}
			}


            $out .= '</div>';
		$out .= '</div>';
	$out .= '</div>';



 return $out;
}
add_shortcode('nt_big_border_team', 'nt_big_border_team_vc');

/*-----------------------------------------------------------------------------------*/
/*	LATEST BLOG
/*-----------------------------------------------------------------------------------*/
function nt_big_border_blog_vc($atts){
	extract(shortcode_atts(array(
       	'css'            	=> '',
       	'section_id'        => '',
       	'heading'    		=> '',
       	'description'    	=> '',
       	'posts'          	=> '2',
       	'categories'     	=> 'all',
       	'order'     		=> 'DESC',
       	'orderby'     		=> 'date',
		'excerpt_size'   	=> '50',
		'link'   	    	=> ''
    ), $atts));

	$link = ( $link == '||' ) ? '' : $link;
	$link = vc_build_link( $link );
	$a_href = $link['url'];
	$a_title = $link['title'];
	$a_target = $link['target'];

	$link_a_target 	= ($a_target != '') ? 'target="'. esc_attr($a_target) . '" ' : '';
	$link_a_href 	= ($a_href != '')   ? 'href="'. esc_attr($a_href) . '" ' : '';
	$link_a_title 	= ($a_title != '')   ? ''. esc_html($a_title) . '' : '';

    global $post;
	$nt_big_border_args = array(
		'post_type'         => 'post',
		'posts_per_page'    => $posts,
		'order'             => $order,
		'orderby'           => $orderby,
		'post_status'       => 'publish'
    );
    if($categories != 'all'){
    	$str = $categories;
    	$arr = explode(',', $str);
		$nt_big_border_args['tax_query'][] = array(
			'taxonomy' 	    => 'category',
			'field' 	    => 'slug',
			'terms' 	    => $arr
		);
	}

	query_posts( $nt_big_border_args );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
	$id = ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';

	$out = '';

	$out .= '<div '. $id .' class="template-blog-style-1 section-class-scroll '. esc_attr($css_class) . '">';
		$out .= '<div class="container">';

			$out .= '<div class="row p-b">';
				$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
					$out .= '<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">'. $heading .'</h2>';
					$out .= '<p class="wow" data-wow-duration="1s" data-wow-delay=".8s">'. $description .'</p>';
				$out .= '</div>';
			$out .= '</div>';

			$out .= '<div class="row p-b">';

				$nt_big_border_blog_query = new WP_Query($nt_big_border_args);
				if( $nt_big_border_blog_query->have_posts() ) :
				while ($nt_big_border_blog_query->have_posts()) : $nt_big_border_blog_query->the_post();

				$post_format_string = ( get_post_format() ? get_post_format_string( get_post_format() ) : 'Standard' );


					$thumb 			= get_post_thumbnail_id();
					$img_url 		= wp_get_attachment_url( $thumb,'full' );
					$image 			= nt_big_border_aq_resize( $img_url, 650, 296, true, true, true );

					$out .= '<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">';
						$out .= '<div class="template-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".1s">';

							if ( $image !=''){
							$out .= '<div class="template-post-image">';
								$out .= '<div class="template-overlay"></div>';
								$out .= '<div class="template-category"><a href="'. get_permalink().'">'. $post_format_string.'</a></div>';
								$out .= '<img src="'. $image . '" alt="' . get_the_title() . '" class="img-responsive">';
							$out .= '</div>';
							}

							$out .= '<div class="template-post-text">';
								$out .= '<h3><a href="'. get_permalink().'">' . get_the_title() . '</a></h3>';
								$out .= '<p>' . substr(get_the_excerpt(), 0, $excerpt_size) . '</p>';
							$out .= '</div>';

							$out .= '<div class="template-post-meta">';
								$out .= '<a href="'. get_comments_link(). '"><i class="icon-chat"></i> '. get_comments_number() .'</a>';
								$out .= '<a href="'. get_permalink().'"><i class="icon-clock2"></i> '.get_the_date().'</a>';
							$out .= '</div>';

						$out .= '</div>';
					$out .= '</div>';

				endwhile;
				endif;

			$out .= '</div>';

			if ( $a_title !=''){
				$out .= '<div class="row">';
					$out .= '<div class="col-md-4 col-md-offset-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">';
					$out .= '<a '. $link_a_href . ' '. $link_a_target .' class="btn btn-primary btn-lg">'. $link_a_title . '</a>';
					$out .= '</div>';
				$out .= '</div>';
			}

		$out .= '</div>';
	$out .= '</div>';

    wp_reset_query();
	return $out;
} add_shortcode('nt_big_border_blog', 'nt_big_border_blog_vc');



/*-----------------------------------------------------------------------------------*/
/*	TIMELINE
/*-----------------------------------------------------------------------------------*/
function nt_big_border_timeline_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'           		=> '',
		'css'                  		=> '',
		'heading'                   => '',
		'description'               => '',
		'timeline_item'    			=> '',
		'item_selected'    			=> '',
		'item_left_heading'         => '',
		'item_left_desc'            => '',
		'item_left_date'           	=> '',
		'timeline_item_b'   		=> '',
		'icon_right_name'           => '',
		'item_left_date_mini'       => '',
		'item_left_year'           	=> '',
		'item_right_delay'          => '',
		'c_1'          => '',
    ), $atts) );

   $timeline_item_b 	= (array) vc_param_group_parse_atts($timeline_item_b);
   $timeline_item 		= (array) vc_param_group_parse_atts($timeline_item);
   $css_class 			= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
   $id 				= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';

	$out = '';


      $out .= '<style>';
         $out .= ' .no-touch .cd-horizontal-timeline .events a:hover::after,.no-touch .cd-timeline-navigation a:hover,.cd-horizontal-timeline .events a.older-event::after { border-color: '. $c_1 .';  background-color: '. $c_1 .'; }';
      $out .= '</style>';

		$out .= '<div '. $id .' class="cd-horizontal-timeline '. esc_attr($css_class) . '">';

			$out .= '<div class="container">';
				$out .= '<div class="row p-b">';
					$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
						$out .= '<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">'. $heading .'</h2>';
						$out .= '<p class="wow" data-wow-duration="1s" data-wow-delay=".8s">'. $description .'</p>';
					$out .= '</div>';
				$out .= '</div>';
			$out .= '</div>'; // container end

			$out .= '<div class="timeline">';
				$out .= '<div class="events-wrapper">';
					$out .= '<div class="events">';
						$out .= '<ol>';

							foreach ( $timeline_item as $t ) {

								$selected = (isset($t['item_selected']) == true) ? 'class="selected"' : '';
								$out .= '<li><a  href="#0" data-date="'. $t['item_left_date'] .'" '. $selected .'>'. $t['item_left_date_mini'] .'</a></li>';
							}

						$out .= '</ol>';

						$out .= '<span class="filling-line" aria-hidden="true"></span>';
					$out .= '</div> <!-- .events -->';
				$out .= '</div> <!-- .events-wrapper -->';


					$out .= '<ul class="cd-timeline-navigation">';
						$out .= '<li><a href="#0" class="prev inactive">Prev</a></li>';
						$out .= '<li><a href="#0" class="next">Next</a></li>';
					$out .= '</ul> <!-- .cd-timeline-navigation -->';

			$out .= '</div>'; // timeline end

			$out .= '<div class="events-content">';
				$out .= '<ol>';

					foreach ( $timeline_item as $t ) {

						$selected = (isset($t['item_selected']) == true) ? 'class="selected"' : '';

						$out .= '<li  '. $selected .' data-date="'. $t['item_left_date'] .'">';
							if ( isset( $t['item_left_heading'] ) !='' ){ $out .= '<h2>'.$t['item_left_heading'].'</h2>'; }
							if ( isset( $t['item_left_year'] ) !='' ){ $out .= '<em>'.$t['item_left_year'].'</em>'; }
							$out .= '<p>';
								if ( isset( $t['item_left_desc'] ) !='' ){$out .= ''.$t['item_left_desc'].''; }
							$out .= '</p>';
						$out .= '</li>';
					}

				$out .= '</ol>';
			$out .= '</div> <!-- .events-content -->';
		$out .= '</div>';

	return $out;
}
add_shortcode('nt_big_border_timeline_section', 'nt_big_border_timeline_vc');


/*-----------------------------------------------------------------------------------*/
/*	FEATURES
/*-----------------------------------------------------------------------------------*/


function nt_big_border_features_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'        => '',
		'css'               => '',
		'heading'           => '',
		'headline1'      	=> '',
		'headline2'      	=> '',
		'headline3'      	=> '',
		'headline4'      	=> '',
		'features_item'     => '',
		'item_delay'      	=> '',
		'item_icon'      	=> '',
		'item_desc'      	=> '',
		'item_heading'    	=> ''
    ), $atts) );

    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id = ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';
	$features_item = (array) vc_param_group_parse_atts($features_item);

	$out = '';

	$out .= '<div '. $id .' class="template-features-style-1 section-class-scroll '. esc_attr($css_class) . '" data-stellar-background-ratio="1" data-stellar-vertical-offset="0">';
		$out .= '<div class="template-overlay"></div>';
		$out .= '<div class="container" style="z-index: 3; position: relative;">';
			$out .= '<div class="row p-b">';
				$out .= '<div class="col-md-8 col-md-offset-2 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">';
				$out .= '<h2 class="cd-headline letters rotate-3">';
						$out .= '<span>'. $heading .'</span>';
						$out .= '<span class="cd-words-wrapper"><b class="is-visible">'. $headline1 .'</b><b>'. $headline2 .'</b><b>'. $headline3 .'</b><b>'. $headline4 .'</b></span>';
					$out .= '</h2>';
				$out .= '</div>';
			$out .= '</div>';
			$out .= '<div class="row">';
				$out .= '<div class="template-features">';

				foreach ( $features_item as $f ) {

					$delay = (isset($f['item_delay']) != '') ? 'data-wow-delay="'. isset($f['item_delay']) .'s"' : '';

					$out .= '<div class="template-feature matchheightclass wow fadeInUp" data-wow-duration="0.4s" '.$delay.'>';
						 if ( isset($f['item_icon'])){ $out .= '<div class="icon"><i class="'.$f['item_icon'].'"></i></div>'; }
						 if ( isset($f['item_heading'])){ $out .= '<h3>'.$f['item_heading'].'</h3>'; }
						 if ( isset($f['item_desc'])){ $out .= '<p>'.$f['item_desc'].'</p>'; }
					$out .= '</div>';
				}

				$out .= '</div>';
			$out .= '</div>';
		$out .= '</div>';
	$out .= '</div>';

	return $out;

} add_shortcode('nt_big_border_features', 'nt_big_border_features_vc');


/*-----------------------------------------------------------------------------------*/
/*	FEATURES GRID 2
/*-----------------------------------------------------------------------------------*/


function nt_big_border_features_grid_2_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'        => '',
		'css'               => '',
		'heading'           => '',
		'description'       => '',
		'headline1'      	=> '',
		'headline2'      	=> '',
		'headline3'      	=> '',
		'headline4'      	=> '',
		'f_item_grid'     	=> '',
		'item_delay'      	=> '',
		'item_icon'      	=> '',
		'item_desc'      	=> '',
		'item_mini_heading' => '',
		'item_heading'    	=> ''
    ), $atts) );

    $css_class 		= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 			= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';
	$f_item_grid 	= (array) vc_param_group_parse_atts($f_item_grid);

	$out = ''; // start html
	$out .= '<div '. $id .' class="template-features-style-2 section-class-scroll '. esc_attr($css_class) . '">';
		$out .= '<div class="container">';

			$out .= '<div class="row p-b">';
				$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
					$out .= '<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">'. $heading .'</h2>';
					$out .= '<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">'. $description .'</p>';
				$out .= '</div>';
			$out .= '</div>';

			$out .= '<div class="row">';

				foreach ( $f_item_grid as $fig ) {

					$delay = (isset($fig['item_delay']) != '') ? 'data-wow-delay="'. isset($fig['item_delay']) .'s"' : '';

					$out .= '<div class="col-md-3 col-sm-6 col-xs-12 col-xxs-12 template-feature wow fadeInUp equalize matchheightclass" data-wow-duration="1s" '.$delay.'>';
						 if ( isset($fig['item_icon'])){  $out .= '<div class="template-icon"><i class="'.$fig['item_icon'].'"></i></div>'; }
						$out .= '<div class="template-desc">';
							 /*if ( isset($fig['item_heading'])){ $out .= '<h3>'.$fig['item_heading'].'<span> '.$fig['item_mini_heading'].'</span></h3>'; }*/
							 if ( isset($fig['item_heading'])){ $out .= '<h3>'.$fig['item_heading'].'</h3>'; }
							 if ( isset($fig['item_desc'])){ $out .= '<p>'.$fig['item_desc'].'</p>'; }
						$out .= '</div>	';
					$out .= '</div>';

				}

			$out .= '</div>';  // end row

		$out .= '</div>';
	$out .= '</div>';

	return $out;

} add_shortcode('nt_big_border_features_grid_2', 'nt_big_border_features_grid_2_vc');


/*-----------------------------------------------------------------------------------*/
/*	PRICE TABLE
/*-----------------------------------------------------------------------------------*/
function nt_big_border_pricing_vc($atts){
	extract(shortcode_atts(array(
		'section_id'		=> '',
		'css'				=> '',
		'heading'			=> '',
		'description'		=> '',
		'orderby'         	=> 'date',
		'order'           	=> 'DESC',
		'post_number'     	=> '4',
		'price_category'  	=> 'all',
		'link'   			=> ''
	), $atts));

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
	$id = ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';

    $out = '';
	$out .= '<div '.$id.' class="template-pricing-style-2 section-class-scroll'. esc_attr($css_class) . '">';
		$out .= '<div class="container">';

				$out .= '<div class="row p-b">';
					$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
						$out .= '<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">'. $heading . '</h2>';
						$out .= '<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">'. $description . '</p>';
					$out .= '</div>';
				$out .= '</div>';

			$out .= '<div class="row">';
				$out .= '<div class="pricing">';

					global $post;
					$args = array( 'post_type' => 'price',
						'posts_per_page' => $post_number,
						'order' 		 => $order,
						'orderby' 		 => $orderby,
						'post_status' 	 => 'publish'
					);

					if($price_category != 'all'){
						$str = $price_category;
						$arr = explode(',', $str);
						$args['tax_query'][] = array( 'taxonomy' => 'price_category', 'field' => 'slug', 'terms' => $arr );
					}

					// start items
					$nt_big_border_price_query = new WP_Query($args);
					if( $nt_big_border_price_query->have_posts() ) :
					while ($nt_big_border_price_query->have_posts()) : $nt_big_border_price_query->the_post();

						$price_categories 	= get_post_meta( get_the_ID(), 'nt_big_border_categories', true );
						$packname           = get_post_meta( get_the_ID(), 'nt_big_border_name', true );
						$packdesc           = get_post_meta( get_the_ID(), 'nt_big_border_description', true );
						$priceamount        = get_post_meta( get_the_ID(), 'nt_big_border_amount', true );
						$pricecurrency      = get_post_meta( get_the_ID(), 'nt_big_border_currency', true );
						$priceperiod        = get_post_meta( get_the_ID(), 'nt_big_border_period', true );
						$tablefeatures      = get_post_meta( get_the_ID(), 'nt_big_border_features_list', true );
						$btn_link           = get_post_meta( get_the_ID(), 'nt_big_border_btn_link', true );
						$btn_title          = get_post_meta( get_the_ID(), 'nt_big_border_btn_title', true );
						$btn_target    		= get_post_meta( get_the_ID(), 'nt_big_border_btn_target', true );
						$price_cat_ctrl 	= $price_categories ? $price_categories : '';
						$price_cat_ctrl_btn = ($price_categories == 'pricing-item--featured') ? 'btn-lg' : 'btn-outline ';


							$out .= '<div class="pricing-item '.esc_attr( $price_cat_ctrl ).' wow" data-wow-duration="1s" data-wow-delay="1.1s">';
								$out .= '<h3 class="pricing-title">'.esc_html( $packname ).'</h3>';
								$out .= '<p class="pricing-sentence">'.esc_html( $packdesc ).'</p>';
								$out .= '<div class="pricing-price"><span class="pricing-currency">'.esc_html( $pricecurrency ).'</span>'.esc_html( $priceamount ).'<span class="pricing-period">/ '.esc_html( $priceperiod ).'</span></div>';
								$out .= '<ul class="pricing-feature-list">';
									foreach ( $tablefeatures as $listitem ) {
										$out .= '<li class="pricing-feature">'.$listitem.'</li>';
									}
								$out .= '</ul>';
								$out .= '<a href="'. esc_url( $btn_link ) . '" target="'.esc_attr( $btn_target ).'" class="btn btn-success '.esc_attr( $price_cat_ctrl_btn ).'">'.esc_attr( $btn_title ).'</a>';
							$out .= '</div>';

					endwhile;
					endif;
					wp_reset_postdata(); // end items


					$out .= '</div>'; // end pricing
				$out .= '</div>'; // end row

			$out .= '</div>';
        $out .= '</div>';
	 return $out;
}
add_shortcode('nt_big_border_price_table', 'nt_big_border_pricing_vc');



/*-----------------------------------------------------------------------------------*/
/*	FEATURES GRID 2
/*-----------------------------------------------------------------------------------*/


function nt_big_border_features_grid_3_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'        => '',
		'css'               => '',
		'heading'           => '',
		'link'           => '',
		'description'       => '',
		'f_2_item_grid'     => '',
		'item_img'      	=> '',
		'item_delay'      	=> '',
		'item_desc'      	=> '',
		'item_mini_heading' => '',
		'item_heading'    	=> ''
    ), $atts) );

    $css_class 		= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 			= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';
	$f_2_item_grid 	= (array) vc_param_group_parse_atts($f_2_item_grid);

	$out = ''; // start html
	$out .= '<div '. $id .' class="template-content-style-6 section-class-scroll'. esc_attr($css_class) . '">';
		$out .= '<div class="container">';

			$out .= '<div class="row p-b text-center">';
				$out .= '<div class="col-md-6 col-md-offset-3">';
					$out .= '<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">'. $heading .'</h2>';
					$out .= '<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">'. $description .'</p>';
				$out .= '</div>';
			$out .= '</div>';

			$out .= '<div class="row">';

			// start item
			foreach ( $f_2_item_grid as $f2ig ) {

				if ( isset($f2ig['link'])){
					$link = ( $link == '||' ) ? '' : $link;
					$link = vc_build_link($f2ig['link']) ;
					$a_href = $link['url'];
					$a_title = $link['title'];
					$a_target = $link['target'];

					$link_a_target 	= ($a_target != '')  ? 'target="'. esc_attr($a_target) . '" ' : '';
					$link_a_title 	= ($a_title != '')   ? ''. esc_html($a_title) . '' : '';
					$link_a_href 	= ($a_href != '')    ? 'href="'. esc_url($a_href) . '" ' : '';
				}

				$delay 		= (isset($f2ig['item_delay']) != '') ? 'data-wow-delay="'. isset($f2ig['item_delay']) .'s"' : '';
				$img_url 	= wp_get_attachment_url( $f2ig['item_img'], 'full' );
				$image 		= nt_big_border_aq_resize( $img_url, 263, 175, true, true, true );

				$out .= '<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow matchheightclass" data-wow-duration="1s" '. $delay .'>';
					$out .= '<div class="link-block">';
						if ( isset($f2ig['item_img'])){ $out .= '<figure><img src="'. $image .'" alt="'. get_the_title() .'" class="img-responsive img-rounded"></figure>'; }
						if ( isset($f2ig['item_heading'])){ $out .= '<h3>'.$f2ig['item_heading'].'</h3>'; }
						if ( isset($f2ig['item_desc'])){ $out .= '<p>'.$f2ig['item_desc'].'</p>'; }
						if ( isset($f2ig['link'])){ $out .= '<p><a '. $link_a_target .' '. $link_a_href .' class="cta cta-stroke btn btn-primary btn-sm">'. $link_a_title .'</a></p>'; }
					$out .= '</div>';
				$out .= '</div>';
			}

			$out .= '</div>'; // end row

		$out .= '</div>'; // end container
	$out .= '</div>';

	return $out;

} add_shortcode('nt_big_border_features_grid_3', 'nt_big_border_features_grid_3_vc');



/*-----------------------------------------------------------------------------------*/
/*	COUNTER
/*-----------------------------------------------------------------------------------*/


function nt_big_border_counter_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'        => '',
		'css'               => '',
		'counter_items'    	=> '',
		'item_delay'      	=> '',
		'item_data_from'    => '',
		'item_data_speed'   => '',
		'item_data_to'    	=> '',
		'item_icon'      	=> '',
		'item_heading'    	=> ''
    ), $atts) );

    $css_class 		= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 			= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';
	$counter_items 	= (array) vc_param_group_parse_atts($counter_items);

	$out = ''; // start html
	$out .= '<div '. $id .' class="template-counter-style-2 section-class-scroll'. esc_attr($css_class) . '" data-stellar-background-ratio="1">';
		$out .= '<div class="template-overlay"></div>';
		$out .= '<div class="container">';
			$out .= '<div class="template-section-content-wrap">';
				$out .= '<div class="template-section-content">';

					$out .= '<div class="row">';

					// start item
					foreach ( $counter_items as $c_item ) {

						$delay 		= (isset($c_item['item_delay']) != '') 		? 'data-wow-delay="'. $c_item['item_delay'] .'s"' : 'data-wow-delay="1s';
						$from 		= (isset($c_item['item_data_from']) != '') 	? 'data-from="'. $c_item['item_data_from'] .'"' : '';
						$to 		= (isset($c_item['item_data_to']) != '') 	? 'data-to="'. $c_item['item_data_to'] .'"' : '';
						$speed 		= (isset($c_item['item_data_speed']) != '') ? 'data-speed="'. $c_item['item_data_speed'] .'"' : '';

						$out .= '<div class="col-md-4 text-center wow animated" data-wow-duration="1s" '. $delay .'>';
							$out .= '<div class="icon">';
								if ( isset($c_item['item_icon'])){   $out .= '<i class="'. $c_item['item_icon'] .'"></i>'; }
							$out .= '</div>';
							$out .= '<span class="template-counter js-counter" '. $from .' '. $to .' '. $speed .' data-refresh-interval="50"></span>';
							if ( isset($c_item['item_heading'])){  $out .= '<span class="template-counter-label">'.$c_item['item_heading'].'</span>'; }
						$out .= '</div>';
					}

					$out .= '</div>'; // end row

				$out .= '</div>';
			$out .= '</div>';
		$out .= '</div>';
	$out .= '</div>';

	return $out;

} add_shortcode('nt_big_border_counter', 'nt_big_border_counter_vc');


/*-----------------------------------------------------------------------------------*/
/*	testimonial
/*-----------------------------------------------------------------------------------*/


function nt_big_border_testimonial_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'        => '',
		'css'               => '',
		'heading'    		=> '',
		'left_heading'      => '',
		'description'    	=> '',
		'left_description'  => '',
		'counter_items'    	=> '',
		'testi_items'      	=> '',
		'item_img'    		=> '',
		'item_company'   	=> '',
		'item_desc'    		=> '',
		'item_heading'    	=> ''
    ), $atts) );

    $css_class 		= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 			= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';
	$testi_items 	= (array) vc_param_group_parse_atts($testi_items);

	$out = ''; // start html
	$out .= '<div '. $id .' class="template-testimonial-style-2 section-class-scroll'. esc_attr($css_class) . '">';
		$out .= '<div class="container">';

			$out .= '<div class="row p-b">';
				$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
					$out .= '<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">'. $heading .'</h2>';
					$out .= '<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">'. $description .'</p>';
				$out .= '</div>';
			$out .= '</div>';

			$out .= '<div class="row">';

				$out .= '<div class="col-md-4 col-sm-6 col-xs-12">';
					$out .= '<div class="template-testimonial-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">';
						$out .= '<div class="bg-gray quote-company center">';
							$out .= '<h2>"'. $left_heading .'"</h2>';
							$out .= '<span>'. $left_description .'</span>';
						$out .= '</div>';
					$out .= '</div>';
				$out .= '</div>';

				// start item
				foreach ( $testi_items as $ti ) {

					$delay 		= (isset($ti['item_delay']) != '') 		? 'data-wow-delay="'. $ti['item_delay'] .'s"' : '';
					$img_url 	= wp_get_attachment_url( $ti['item_img'], 'full' );

					$out .= '<div class="col-md-4 col-sm-6 col-xs-12">';
						$out .= '<div class="template-testimonial-item matchheightclass wow fadeInUp" data-wow-duration="1s" '. $delay .'>';

							$out .= '<div class="template-name">';
								if ( isset($ti['item_img'])){   $out .= '<img src="'. $img_url .'" alt="'. get_the_title() .'">'; }
								$out .= '<div class="template-meta">';
									if ( isset($ti['item_heading'])){ $out .= '<h3>'.$ti['item_heading'].'</h3>'; }
									if ( isset($ti['item_company'])){ $out .= '<span class="template-company">'.$ti['item_company'].'</span>'; }
								$out .= '</div>';
							$out .= '</div>';

							$out .= '<div class="template-text">';
								if ( isset($ti['item_desc'])){ $out .= '<p>'.$ti['item_desc'].'</p>'; }
							$out .= '</div>';

						$out .= '</div>';
					$out .= '</div>'; // item end
				}

			$out .= '</div>'; // end row

		$out .= '</div>	';
	$out .= '</div>';

	return $out;

} add_shortcode('nt_big_border_testimonial', 'nt_big_border_testimonial_vc');



/*-----------------------------------------------------------------------------------*/
/*	HEADING
/*-----------------------------------------------------------------------------------*/

function nt_big_border_heading_type_vc( $atts, $content = null ) {
    extract( shortcode_atts(array(
		'section_id'           	=> '',
		'css'                  	=> '',
		'heading'              	=> '',
		'description'          	=> ''
    ), $atts) );

    $css_class 	= apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ),  $atts );
    $id 		= ($section_id != '') ? 'id="'. esc_attr($section_id) . '"' : '';

	$out = '';
	$out .= '<div class="container">';
		$out .= '<div class="row p-b '. esc_attr($css_class) . '" '. $id .'>';
			$out .= '<div class="col-md-6 col-md-offset-3 text-center">';
				$out .= '<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">'. $heading .'</h2>';
				$out .= '<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">'. $description .'</p>';
			$out .= '</div>';
		$out .= '</div>';
	$out .= '</div>';

	return $out;
}
add_shortcode('nt_big_border_heading_type', 'nt_big_border_heading_type_vc');
