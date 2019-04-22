<?php

/*-----------------------------------------------------------------------------------*/
/*	Shortcode Filter
/*-----------------------------------------------------------------------------------*/

vc_set_as_theme( $disable_updater = false );
vc_is_updater_disabled();


/*-----------------------------------------------------------------------------------*/
/*	COVER
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'nt_big_border_cover_integrateWithVC' );
function nt_big_border_cover_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Home cover", "nt-big-border" ),
		"base" 	   => "nt_big_border_cover",
		"category"   => esc_html__( "Big border", "nt-big-border"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-big-border' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add your section ID", "nt-big-border"),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Scroll button ID', 'nt-big-border' ),
				'param_name'    => 'scroll_id',
				'description'   => esc_html__("Add your section scoll button ID or leave blank if you want to hide it.", "nt-big-border"),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Content area column', 'nt-big-border' ),
				'param_name'    => 'column',
				'description'   => esc_html__("You can control with 1-12 numbers. Default : 6", "nt-big-border"),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-big-border' ),
				'param_name'    => 'description',
				'description'   => esc_html__("Add your description", "nt-big-border"),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading first', 'nt-big-border' ),
				'param_name'    => 'heading',
				'description'   => esc_html__("Add your heading", "nt-big-border"),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading second', 'nt-big-border' ),
				'param_name'    => 'heading2',
				'description'   => esc_html__("Add your heading", "nt-big-border"),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading third', 'nt-big-border' ),
				'param_name'    => 'heading3',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Headline 1', 'nt-big-border' ),
				'param_name'    => 'headline1',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Headline 2', 'nt-big-border' ),
				'param_name'    => 'headline2',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Headline 3', 'nt-big-border' ),
				'param_name'    => 'headline3',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Headline 4', 'nt-big-border' ),
				'param_name'    => 'headline4',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button (Link)', 'nt-big-border' ),
				'param_name'    => 'link',
				'description'   => esc_html__('Add custom link.', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Push for desktop', 'nt-big-border' ),
				'param_name'    => 'push_lg',
				"description"   => esc_html__("You can control with 1-12 numbers. Default : 6", "nt-big-border"),
				'group' 	    => esc_html__('Responsive Push', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Push for laptop', 'nt-big-border' ),
				'param_name'    => 'push_md',
				"description"   => esc_html__("You can control with 1-12 numbers. Default : 4", "nt-big-border"),
				'group' 	    => esc_html__('Responsive Push', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Push for mobile', 'nt-big-border' ),
				'param_name'    => 'push_sm',
				"description"   => esc_html__("You can control with 1-12 numbers. Default : 0", "nt-big-border"),
				'group' 	    => esc_html__('Responsive Push', 'nt-big-border' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Animated Heading color', 'nt-big-border' ),
				'param_name'    => 'c_1',
				"description"   => esc_html__("Change color", "nt-big-border"),
				'group' 	    => esc_html__('Design', 'nt-big-border' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-big-border' ),
				'param_name'    => 'c_2',
				"description"   => esc_html__("Change color", "nt-big-border"),
				'group' 	    => esc_html__('Design', 'nt-big-border' ),
			),
         array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('heading colored second item color', 'nt-big-border' ),
				'param_name'    => 'c_7',
				"description"   => esc_html__("Change color", "nt-big-border"),
				'group' 	    => esc_html__('Design', 'nt-big-border' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Description color', 'nt-big-border' ),
				'param_name'    => 'c_3',
				"description"   => esc_html__("Change color", "nt-big-border"),
				'group' 	    => esc_html__('Design', 'nt-big-border' ),
      	),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Button text color', 'nt-big-border' ),
				'param_name'    => 'c_4',
				"description"   => esc_html__("Change color", "nt-big-border"),
				'group' 	    => esc_html__('Design', 'nt-big-border' ),
      	),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Button border color', 'nt-big-border' ),
				'param_name'    => 'c_5',
				"description"   => esc_html__("Change color", "nt-big-border"),
				'group' 	    => esc_html__('Design', 'nt-big-border' ),
      	),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Button background color', 'nt-big-border' ),
				'param_name'    => 'c_6',
				"description"   => esc_html__("Change color", "nt-big-border"),
				'group' 	    => esc_html__('Design', 'nt-big-border' ),
			),

			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Css', 'nt-big-border' ),
				'param_name'    => 'css',
				'group' 	    => esc_html__('Background', 'nt-big-border' ),
			),
		),
   ));
} class WPBakeryShortCode_nt_big_border_cover extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	ABOUT
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'nt_big_border_about_integrateWithVC' );
function nt_big_border_about_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Home about", "nt-big-border" ),
		"base" 	   => "nt_big_border_about",
		"category"   => esc_html__( "Big border", "nt-big-border"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-big-border' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID. Default ID for this section is = about", "nt-big-border"),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Label', 'nt-big-border' ),
				'param_name'    => 'label1',
				'description'   => esc_html__("Add your Label", "nt-big-border"),
				'group' 	    => esc_html__('Left Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading ', 'nt-big-border' ),
				'param_name'    => 'heading1',
				'description'   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Left Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('description', 'nt-big-border' ),
				'param_name'    => 'description1',
				'description'   => esc_html__("Add your description", "nt-big-border"),
				'group' 	    => esc_html__('Left Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading 1', 'nt-big-border' ),
				'param_name'    => 'heading2',
				'description'   => esc_html__("Add your Label", "nt-big-border"),
				'group' 	    => esc_html__('Center Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading 2', 'nt-big-border' ),
				'param_name'    => 'heading3',
				'description'   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Center Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('description', 'nt-big-border' ),
				'param_name'    => 'description2',
				'description'   => esc_html__("Add your description", "nt-big-border"),
				'group' 	    => esc_html__('Center Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('description', 'nt-big-border' ),
				'param_name'    => 'description3',
				'description'   => esc_html__("Add your description", "nt-big-border"),
				'group' 	    => esc_html__('Center Column', 'nt-big-border' ),
			),

			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Label', 'nt-big-border' ),
				'param_name'    => 'label4',
				'description'   => esc_html__("Add your Label", "nt-big-border"),
				'group' 	    => esc_html__('Right Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading', 'nt-big-border' ),
				'param_name'    => 'heading4',
				'description'   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Right Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('description', 'nt-big-border' ),
				'param_name'    => 'description4',
				'description'   => esc_html__("Add your description", "nt-big-border"),
				'group' 	    => esc_html__('Right Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section Heading', 'nt-big-border' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Headline 1', 'nt-big-border' ),
				'param_name'    => 'headline1',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Headline 2', 'nt-big-border' ),
				'param_name'    => 'headline2',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Headline 3', 'nt-big-border' ),
				'param_name'    => 'headline3',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Headline 4', 'nt-big-border' ),
				'param_name'    => 'headline4',
				"description"   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Animated', 'nt-big-border' ),
			),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Heading first color', 'nt-big-border' ),
            'param_name'    => 'c_1',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Heading second animated words color', 'nt-big-border' ),
            'param_name'    => 'c_2',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1 label text color', 'nt-big-border' ),
            'param_name'    => 'c_3',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1 label border color', 'nt-big-border' ),
            'param_name'    => 'c_4',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1 label background color', 'nt-big-border' ),
            'param_name'    => 'c_5',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1 text color', 'nt-big-border' ),
            'param_name'    => 'c_6',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1  border color', 'nt-big-border' ),
            'param_name'    => 'c_7',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1  background color', 'nt-big-border' ),
            'param_name'    => 'c_8',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 2 text color', 'nt-big-border' ),
            'param_name'    => 'c_9',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 2  border color', 'nt-big-border' ),
            'param_name'    => 'c_10',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 2  background color', 'nt-big-border' ),
            'param_name'    => 'c_11',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 3 text color', 'nt-big-border' ),
            'param_name'    => 'c_12',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 3  border color', 'nt-big-border' ),
            'param_name'    => 'c_13',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 3  background color', 'nt-big-border' ),
            'param_name'    => 'c_14',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 4 label text color', 'nt-big-border' ),
            'param_name'    => 'c_15',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 4 label border color', 'nt-big-border' ),
            'param_name'    => 'c_16',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 4 label background color', 'nt-big-border' ),
            'param_name'    => 'c_17',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 4 text color', 'nt-big-border' ),
            'param_name'    => 'c_18',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 4  border color', 'nt-big-border' ),
            'param_name'    => 'c_19',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 4  background color', 'nt-big-border' ),
            'param_name'    => 'c_20',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),


			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Css', 'nt-big-border' ),
				'param_name'    => 'css',
				'group' 	    => esc_html__('Background options', 'nt-big-border' ),
			),
		),
   ));
} class WPBakeryShortCode_nt_big_border_about extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	ABOUT
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'nt_big_border_about_2_integrateWithVC' );
function nt_big_border_about_2_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Home about 2", "nt-big-border" ),
		"base" 	   => "nt_big_border_about_2",
		"category"   => esc_html__( "Big border", "nt-big-border"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-big-border' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID. Default ID for this section is = about", "nt-big-border"),
			),
			array(
				'type'          => 'attach_image',
				'heading'       => esc_html__('Column background image', 'nt-big-border' ),
				'param_name'    => 'bg_img',
				"description"   => esc_html__("Add/select an image", "nt-big-border"),
				'group' 	    => esc_html__('Left Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Label', 'nt-big-border' ),
				'param_name'    => 'label',
				'description'   => esc_html__("Add your Label", "nt-big-border"),
				'group' 	    => esc_html__('Left Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading ', 'nt-big-border' ),
				'param_name'    => 'heading1',
				'description'   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Left Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('description', 'nt-big-border' ),
				'param_name'    => 'description1',
				'description'   => esc_html__("Add your description", "nt-big-border"),
				'group' 	    => esc_html__('Left Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'attach_image',
				'heading'       => esc_html__('Column background image', 'nt-big-border' ),
				'param_name'    => 'bg_img_2',
				"description"   => esc_html__("Add/select an image", "nt-big-border"),
				'group' 	    => esc_html__('Right Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Heading ', 'nt-big-border' ),
				'param_name'    => 'heading2',
				'description'   => esc_html__("Add your heading", "nt-big-border"),
				'group' 	    => esc_html__('Right Column', 'nt-big-border' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('description', 'nt-big-border' ),
				'param_name'    => 'description2',
				'description'   => esc_html__("Add your description", "nt-big-border"),
				'group' 	    => esc_html__('Right Column', 'nt-big-border' ),
			),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1 label text color', 'nt-big-border' ),
            'param_name'    => 'c_3',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1 label border color', 'nt-big-border' ),
            'param_name'    => 'c_4',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1 label background color', 'nt-big-border' ),
            'param_name'    => 'c_5',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1 text color', 'nt-big-border' ),
            'param_name'    => 'c_6',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1  border color', 'nt-big-border' ),
            'param_name'    => 'c_7',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 1  background color', 'nt-big-border' ),
            'param_name'    => 'c_8',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 2 text color', 'nt-big-border' ),
            'param_name'    => 'c_9',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 2  border color', 'nt-big-border' ),
            'param_name'    => 'c_10',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Box 2  background color', 'nt-big-border' ),
            'param_name'    => 'c_11',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Css', 'nt-big-border' ),
				'param_name'    => 'css',
				'group' 	    => esc_html__('Background options', 'nt-big-border' ),
			),
		),
   ));
} class WPBakeryShortCode_nt_big_border_about_2 extends WPBakeryShortCode {}



/*-----------------------------------------------------------------------------------*/
/*	portfolio 1
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_portfolio_integrateWithVC' );
function nt_big_border_portfolio_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Portfolio", "nt-big-border" ),
		"base" 	   => "nt_big_border_portfolio",
		"category"   => esc_html__( "Big border", "nt-big-border"),
		"params"     => array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__('heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add Your heading", "nt-big-border")
        ),
		array(
            'type'          => 'textarea',
            'heading'       => esc_html__('Description', 'nt-big-border' ),
            'param_name'    => 'description',
            "description"   => esc_html__("Add Your heading", "nt-big-border")
        ),
		array(
			'type'          => 'vc_link',
			'heading'       => esc_html__('URL (Link)', 'nt-big-border' ),
			'param_name'    => 'link',
			'description'   => esc_html__('Add custom link.', 'nt-big-border' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__('Portfolio item structure', 'nt-big-border'),
			'param_name'  => 'type',
			'description' => esc_html__('You can use custom or portfolio post type', 'nt-big-border'),
			'value'       => array(
				esc_html__('Select type', 'nt-big-border')	=> '',
				esc_html__('Custom items', 	'nt-big-border')	=> '1',
				esc_html__('Portfolio posts', 'nt-big-border')	=> '2',
			),
		),
		array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Post Count', 'nt-big-border' ),
            'param_name'  => 'posts',
			'group'       => esc_html__('Post Options', 'nt-big-border'),
            'description' => esc_html__('You can control with number your portfolio post.', 'nt-big-border'),
        ),
		array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Post excerpt size', 'nt-big-border' ),
            'param_name'  => 'excerpt_size',
			'group'       => esc_html__('Post excerpt size', 'nt-big-border'),
            'description' => esc_html__('You can control with number your portfolio post excerpt size', 'nt-big-border'),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Category', 'nt-big-border' ),
            'param_name'  => 'portfolio_category',
			'group'       => esc_html__('Post Options', 'nt-big-border'),
            'description' => esc_html__('Enter portfolio category or write all', 'nt-big-border'),
        ),

        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('order', 'nt-big-border' ),
            'param_name'  => 'order',
			'group'       => esc_html__('Post Options', 'nt-big-border'),
            'description' => esc_html__('Enter portfolio order. DESC or ASC', 'nt-big-border'),
        ),

        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('orderby', 'nt-big-border' ),
            'param_name'  => 'orderby',
			'group'       => esc_html__('Post Options', 'nt-big-border'),
            'description' => esc_html__('Enter portfolio orderby. Default is : date', 'nt-big-border'),
        ),
		array(
			'type'          => 'param_group',
			'heading'       => esc_html__('Portfolio list item', 'nt-big-border' ),
			'param_name'    => 'portfolio_items',
			'group' 	    => esc_html__('Items', 'nt-big-border' ),
			'params' 	    => array(
				array(
					"type" 		  	  => "attach_image",
					"heading" 	  	  => esc_html__("Item image", "nt-big-border"),
					"param_name"  	  => "item_img",
					"description" 	  => esc_html__("Add your image", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item heading ", "nt-big-border"),
					"param_name" 	  => "item_heading",
					"description" 	  => esc_html__("Add your item heading", "nt-big-border"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Item description", "nt-big-border"),
					"param_name" 	  => "item_desc",
					"description" 	  => esc_html__("Add your item description", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item animation delay. ", "nt-big-border"),
					"param_name" 	  => "item_delay",
					"description" 	  => esc_html__("Add your item delay number. Example : 0.1, 0.5, 1.2 and more", "nt-big-border"),
				),
			)
		),
      array(
         'type'          => 'colorpicker',
         'heading'       => esc_html__('Heading text color', 'nt-big-border' ),
         'param_name'    => 'c_6',
         "description"   => esc_html__("Change color", "nt-big-border"),
         'group' 	    => esc_html__('Design', 'nt-big-border' ),
      ),
      array(
         'type'          => 'colorpicker',
         'heading'       => esc_html__('Description text color', 'nt-big-border' ),
         'param_name'    => 'c_7',
         "description"   => esc_html__("Change color", "nt-big-border"),
         'group' 	    => esc_html__('Design', 'nt-big-border' ),
      ),
      array(
         'type'          => 'colorpicker',
         'heading'       => esc_html__('Button text color', 'nt-big-border' ),
         'param_name'    => 'c_3',
         "description"   => esc_html__("Change color", "nt-big-border"),
         'group' 	    => esc_html__('Design', 'nt-big-border' ),
      ),
      array(
         'type'          => 'colorpicker',
         'heading'       => esc_html__('Button background color', 'nt-big-border' ),
         'param_name'    => 'c_4',
         "description"   => esc_html__("Change color", "nt-big-border"),
         'group' 	    => esc_html__('Design', 'nt-big-border' ),
      ),
      array(
         'type'          => 'colorpicker',
         'heading'       => esc_html__('Button border color', 'nt-big-border' ),
         'param_name'    => 'c_5',
         "description"   => esc_html__("Change color", "nt-big-border"),
         'group' 	    => esc_html__('Design', 'nt-big-border' ),
      ),
		array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group'   => esc_html__('Background options', 'nt-big-border' ),
        ),
      ),
   ) );
} class WPBakeryShortCode_nt_big_border_portfolio extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	portfolio 2
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_portfolio_2_integrateWithVC' );
function nt_big_border_portfolio_2_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Portfolio Grid", "nt-big-border" ),
		"base" 	   => "nt_big_border_portfolio_2",
		"category"   => esc_html__( "Big border", "nt-big-border"),
		"params"     => array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__('heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add Your heading", "nt-big-border")
        ),
		array(
            'type'          => 'textarea',
            'heading'       => esc_html__('Description', 'nt-big-border' ),
            'param_name'    => 'description',
            "description"   => esc_html__("Add Your heading", "nt-big-border")
        ),
		array(
			'type'          => 'vc_link',
			'heading'       => esc_html__('URL (Link)', 'nt-big-border' ),
			'param_name'    => 'link',
			'description'   => esc_html__('Add custom link.', 'nt-big-border' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__('Portfolio item structure', 'nt-big-border'),
			'param_name'  => 'type',
			'description' => esc_html__('You can use custom or portfolio post type', 'nt-big-border'),
			'value'       => array(
				esc_html__('Select type', 'nt-big-border')		=> '',
				esc_html__('Custom items', 	'nt-big-border')	=> '1',
				esc_html__('Portfolio posts', 'nt-big-border')	=> '2',
			),
		),
		array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Column number', 'nt-big-border' ),
            'param_name'  => 'column',
			'group'       => esc_html__('Column Options', 'nt-big-border'),
            'description' => esc_html__('You can control with number your portfolio post columns. Default : 3', 'nt-big-border'),
        ),
		array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Post Count', 'nt-big-border' ),
            'param_name'  => 'posts',
			'group'       => esc_html__('Post Options', 'nt-big-border'),
            'description' => esc_html__('You can control with number your portfolio post.', 'nt-big-border'),
        ),
		array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Post excerpt size', 'nt-big-border' ),
            'param_name'  => 'excerpt_size',
			'group'       => esc_html__('Post excerpt size', 'nt-big-border'),
            'description' => esc_html__('You can control with number your portfolio post excerpt size', 'nt-big-border'),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Category', 'nt-big-border' ),
            'param_name'  => 'portfolio_category',
			'group'       => esc_html__('Post Options', 'nt-big-border'),
            'description' => esc_html__('Enter portfolio category or write all', 'nt-big-border'),
        ),

        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('order', 'nt-big-border' ),
            'param_name'  => 'order',
			'group'       => esc_html__('Post Options', 'nt-big-border'),
            'description' => esc_html__('Enter portfolio order. DESC or ASC', 'nt-big-border'),
        ),

        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('orderby', 'nt-big-border' ),
            'param_name'  => 'orderby',
			'group'       => esc_html__('Post Options', 'nt-big-border'),
            'description' => esc_html__('Enter portfolio orderby. Default is : date', 'nt-big-border'),
        ),
		array(
			'type'          => 'param_group',
			'heading'       => esc_html__('Portfolio list item', 'nt-big-border' ),
			'param_name'    => 'portfolio_items',
			'group' 	    => esc_html__('Items', 'nt-big-border' ),
			'params' 	    => array(
				array(
					"type" 		  	  => "attach_image",
					"heading" 	  	  => esc_html__("Item image", "nt-big-border"),
					"param_name"  	  => "item_img",
					"description" 	  => esc_html__("Add your image", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item heading ", "nt-big-border"),
					"param_name" 	  => "item_heading",
					"description" 	  => esc_html__("Add your item heading", "nt-big-border"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Item description", "nt-big-border"),
					"param_name" 	  => "item_desc",
					"description" 	  => esc_html__("Add your item description", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item animation delay. ", "nt-big-border"),
					"param_name" 	  => "item_delay",
					"description" 	  => esc_html__("Add your item delay number. Example : 0.1, 0.5, 1.2 and more", "nt-big-border"),
				),
			)
		),
		array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group'   => esc_html__('Background options', 'nt-big-border' ),
        ),
      ),
   ) );
} class WPBakeryShortCode_nt_big_border_portfolio_2 extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	portfolio 2
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_team_integrateWithVC' );
function nt_big_border_team_integrateWithVC() {
   vc_map( array(
		"name" 	   	=> esc_html__( "Team", "nt-big-border" ),
		"base" 	   	=> "nt_big_border_team",
		"category"  => esc_html__( "Big border", "nt-big-border"),
		"params"    => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-big-border' ),
				'param_name'    => 'section_id',
				"description"   => esc_html__("Add Your Section ID", "nt-big-border"),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Heading layout', 'nt-big-border'),
				'param_name'  => 'heading_type',
				'description' => esc_html__('Theme included 3 type team grid', 'nt-big-border'),
				'value'       => array(
					esc_html__('Select type', 'nt-big-border')		=> '',
					esc_html__('Layout 1', 	'nt-big-border')		=> '1',
					esc_html__('Layout 2', 	'nt-big-border')		=> '2',
				),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('heading', 'nt-big-border' ),
				'param_name'    => 'heading',
				"description"   => esc_html__("Add Your heading", "nt-big-border")
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-big-border' ),
				'param_name'    => 'description',
				"description"   => esc_html__("Add Your heading", "nt-big-border")
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('URL (Link)', 'nt-big-border' ),
				'param_name'    => 'link',
				'description'   => esc_html__('Add custom link.', 'nt-big-border' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Team item structure', 'nt-big-border'),
				'param_name'  => 'type',
				'description' => esc_html__('Theme included 3 type team grid', 'nt-big-border'),
				'value'       => array(
					esc_html__('Select type', 'nt-big-border')		=> '',
					esc_html__('Layout 1', 	'nt-big-border')		=> '1',
					esc_html__('Layout 2', 	'nt-big-border')		=> '2',
					esc_html__('Layout 3', 	'nt-big-border')		=> '3',
				),
			),
			array(
				'type'          => 'param_group',
				'heading'       => esc_html__('Team list item', 'nt-big-border' ),
				'param_name'    => 'team_items',
				'group' 	    => esc_html__('Items', 'nt-big-border' ),
				'params' 	    => array(
					array(
						"type" 		  	  => "attach_image",
						"heading" 	  	  => esc_html__("Item image", "nt-big-border"),
						"param_name"  	  => "item_img",
						"description" 	  => esc_html__("Add your image", "nt-big-border"),
					),
					array(
						"type" 			  => "textfield",
						"heading" 		  => esc_html__("Item heading ", "nt-big-border"),
						"param_name" 	  => "item_heading",
						"description" 	  => esc_html__("Add your item heading", "nt-big-border"),
					),
					array(
						"type" 			  => "textarea",
						"heading" 		  => esc_html__("Item description", "nt-big-border"),
						"param_name" 	  => "item_desc",
						"description" 	  => esc_html__("Add your item description", "nt-big-border"),
					),
					array(
						"type" 			  => "textfield",
						"heading" 		  => esc_html__("Item position", "nt-big-border"),
						"param_name" 	  => "item_position",
						"description" 	  => esc_html__("Add your item position.", "nt-big-border"),
					),
					array(
						"type" 			  => "textfield",
						"heading" 		  => esc_html__("Twitter url", "nt-big-border"),
						"param_name" 	  => "twitterurl",
						"description" 	  => esc_html__("Add your item twitter url.", "nt-big-border"),
					),
					array(
						"type" 			  => "textfield",
						"heading" 		  => esc_html__("Facecbook url", "nt-big-border"),
						"param_name" 	  => "facebookurl",
						"description" 	  => esc_html__("Add your item twitter url.", "nt-big-border"),
					),
					array(
						"type" 			  => "textfield",
						"heading" 		  => esc_html__("İnstagram url", "nt-big-border"),
						"param_name" 	  => "instagramurl",
						"description" 	  => esc_html__("Add your item twitter url.", "nt-big-border"),
					),
					array(
						"type" 			  => "textfield",
						"heading" 		  => esc_html__("Linkedin url", "nt-big-border"),
						"param_name" 	  => "linkedinurl",
						"description" 	  => esc_html__("Add your item twitter url.", "nt-big-border"),
					),
					array(
						"type" 			  => "textfield",
						"heading" 		  => esc_html__("Github url", "nt-big-border"),
						"param_name" 	  => "githuburl",
						"description" 	  => esc_html__("Add your item twitter url.", "nt-big-border"),
					),
				)
			),
      array(
      'type'          => 'colorpicker',
      'heading'       => esc_html__('Team hover background color', 'nt-big-border'),
      'param_name'    => 'bgcolor',
      'description'   => esc_html__('Change team hover background color.', 'nt-big-border'),
      'group'         => esc_html__('Custom Style', 'nt-big-border' ),
    ),
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Css', 'nt-big-border' ),
				'param_name'    => 'css',
				'group'   		=> esc_html__('Background options', 'nt-big-border' ),
			),
		),
   ) );
} class WPBakeryShortCode_nt_big_border_team extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	BLOG
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'nt_big_border_blog_integrateWithVC' );
function nt_big_border_blog_integrateWithVC() {
    vc_map( array(
      "name" 	   => esc_html__( "Blog posts", "nt-big-border" ),
      "base" 	   => "nt_big_border_blog",
	  "category"   => esc_html__( "Big border", "nt-big-border"),
      "params"     => array(
		 array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'Section heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add your section heading", "nt-big-border"),
        ),
        array(
            'type'          => 'textarea',
            'heading'       => esc_html__( 'Section description', 'nt-big-border' ),
            'param_name'    => 'description',
            "description"   => esc_html__("Add your section description", "nt-big-border"),
        ),
        array(
			'type'          => 'vc_link',
			'heading'       => esc_html__('URL (Link)', 'nt-big-border' ),
			'param_name'    => 'link',
			'description'   => esc_html__('Add custom link for section bottom button.', 'nt-big-border' ),
		),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'Post Count', 'nt-big-border' ),
            'param_name'    => 'posts',
            "description"   => esc_html__("You can control with number your post.", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'Category', 'nt-big-border' ),
            'param_name'    => 'categories',
            "description"   => esc_html__("Enter post category or write all", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'excerpt size', 'nt-big-border' ),
            'param_name'    => 'excerpt_size',
            "description"   => esc_html__("You can control with number your excerpt size of posts", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'order', 'nt-big-border' ),
            'param_name'    => 'order',
            "description"   => esc_html__("Enter post order. DESC or ASC", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'orderby', 'nt-big-border' ),
            'param_name'    => 'orderby',
            "description"   => esc_html__("Enter post orderby. Default is : date", "nt-big-border"),
        ),
        array(
            'type'          => 'css_editor',
            'heading'       => esc_html__( 'Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group'         => esc_html__( 'Background options', 'nt-big-border' ),
        ),
      )
   ) );
} class WPBakeryShortCode_nt_big_border_blog extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	FEATURES LEFT RIGHT
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_timeline_vc_integrateWithVC' );
function nt_big_border_timeline_vc_integrateWithVC() {
   vc_map( array(
		"name" 	 	  => esc_html__( "Timeline", "nt-big-border" ),
		"base" 	 	  => "nt_big_border_timeline_section",
		"category" 	  => esc_html__( "Big border", "nt-big-border"),
		"params"   	  => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-big-border' ),
				'param_name'    => 'section_id',
				"description"   => esc_html__("Add Your Section ID", "nt-big-border"),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__( 'Section heading', 'nt-big-border' ),
				'param_name'    => 'heading',
				"description"   => esc_html__("Add your section heading", "nt-big-border"),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__( 'Section description', 'nt-big-border' ),
				'param_name'    => 'description',
				"description"   => esc_html__("Add your section description", "nt-big-border"),
			),
			array(
				'type'          => 'param_group',
				'heading'       => esc_html__('Timeline items', 'nt-big-border' ),
				'param_name'    => 'timeline_item',
				'group' 	    => esc_html__('Timeline items', 'nt-big-border' ),
				'params' 	    => array(
					array(
						'type'        =>'checkbox',
						'param_name'    => 'item_selected',
						'heading'       => esc_html__( 'Active item?', 'nt-big-border' ),
						'description'   => esc_html__( 'You can just 1 item for active item', 'nt-big-border' ),
					),
					array(
						'type'          => 'textfield',
						'heading'       => esc_html__('Date', 'nt-big-border' ),
						'param_name'    => 'item_left_date',
						'description'   => esc_html__('Add a date. Example : 12/09/2002', 'nt-big-border' ),
					),
					array(
						'type'          => 'textfield',
						'heading'       => esc_html__('Top list date', 'nt-big-border' ),
						'param_name'    => 'item_left_date_mini',
						'description'   => esc_html__('Add a date. Example : 17 Jan', 'nt-big-border' ),
					),
					array(
						"type" 		    => "textfield",
						"heading" 	    => esc_html__("Item heading ", "nt-big-border"),
						"param_name"    => "item_left_heading",
						"description"   => esc_html__("Add your item heading", "nt-big-border"),
					),
					array(
						"type"   => "textfield",
						"heading"   => esc_html__("Item heading bottom date", "nt-big-border"),
						"param_name"   => "item_left_year",
						"description"   => esc_html__("Add your item heading. Example : January 16th, 2014 ", "nt-big-border"),
					),
					array(
						"type"   => "textarea",
						"heading"   => esc_html__("Item description", "nt-big-border"),
						"param_name"   => "item_left_desc",
						"description"   => esc_html__("Add your item description", "nt-big-border"),
					),
				)
			),
         array(
            'type'          => 'colorpicker',
            'heading'       => esc_html__('Timeline color', 'nt-big-border' ),
            'param_name'    => 'c_1',
            "description"   => esc_html__("Change color", "nt-big-border"),
            'group' 	    => esc_html__('Design', 'nt-big-border' ),
         ),
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Css', 'nt-big-border' ),
				'param_name'    => 'css',
				'group'   => esc_html__('Background options', 'nt-big-border' ),
			),
		),
   ) );
} class WPBakeryShortCode_nt_big_border_timeline_section extends WPBakeryShortCode {}



/*-----------------------------------------------------------------------------------*/
/*	FEATURES GRID
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_features_integrateWithVC' );
function nt_big_border_features_integrateWithVC() {
	vc_map( array(
	"name" 	 	  => esc_html__( "Features Grid", "nt-big-border" ),
	"base" 	 	  => "nt_big_border_features",
	"category" 	  => esc_html__( "Big border", "nt-big-border"),
	"params"   	  => array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add your heading", "nt-big-border")
        ),
		array(
			'type'          => 'textfield',
			'heading'       => esc_html__('Headline 1', 'nt-big-border' ),
			'param_name'    => 'headline1',
			"description"   => esc_html__("Add your heading", "nt-big-border"),
			'group' 	    => esc_html__('Animated', 'nt-big-border' ),
		),
		array(
			'type'          => 'textfield',
			'heading'       => esc_html__('Headline 2', 'nt-big-border' ),
			'param_name'    => 'headline2',
			"description"   => esc_html__("Add your heading", "nt-big-border"),
			'group' 	    => esc_html__('Animated', 'nt-big-border' ),
		),
		array(
			'type'          => 'textfield',
			'heading'       => esc_html__('Headline 3', 'nt-big-border' ),
			'param_name'    => 'headline3',
			"description"   => esc_html__("Add your heading", "nt-big-border"),
			'group' 	    => esc_html__('Animated', 'nt-big-border' ),
		),
		array(
			'type'          => 'textfield',
			'heading'       => esc_html__('Headline 4', 'nt-big-border' ),
			'param_name'    => 'headline4',
			"description"   => esc_html__("Add your heading", "nt-big-border"),
			'group' 	    => esc_html__('Animated', 'nt-big-border' ),
		),
		array(
			'type'          => 'param_group',
			'heading'       => esc_html__('List items', 'nt-big-border' ),
			'param_name'    => 'features_item',
			'group' 	    => esc_html__('Features items', 'nt-big-border' ),
			'params' 	    => array(
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item icon", "nt-big-border"),
					"param_name" 	  => "item_icon",
					"description" 	  => esc_html__("Add icon. Example : icon-ribbon, fa fa-pencil or another icon family classes", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item heading ", "nt-big-border"),
					"param_name" 	  => "item_heading",
					"description" 	  => esc_html__("Add your item heading", "nt-big-border"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Item description ", "nt-big-border"),
					"param_name" 	  => "item_desc",
					"description" 	  => esc_html__("Add your item description", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item animation delay. ", "nt-big-border"),
					"param_name" 	  => "item_delay",
					"description" 	  => esc_html__("Add your item delay number. Example : 0.1, 0.5, 1.2 and more", "nt-big-border"),
				),
			)
		),
		array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group'   => esc_html__('Background options', 'nt-big-border' ),
        ),
	),
	));
} class WPBakeryShortCode_nt_big_border_features extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	FEATURES GRID 2
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_features_grid_2_integrateWithVC' );
function nt_big_border_features_grid_2_integrateWithVC() {
	vc_map( array(
	"name" 	 	  => esc_html__( "Features Grid 2", "nt-big-border" ),
	"base" 	 	  => "nt_big_border_features_grid_2",
	"category" 	  => esc_html__( "Big border", "nt-big-border"),
	"params"   	  => array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add your heading", "nt-big-border")
        ),
		array(
            'type'          => 'textarea',
            'heading'       => esc_html__('Description', 'nt-big-border' ),
            'param_name'    => 'description',
            "description"   => esc_html__("Add your description", "nt-big-border")
        ),
		array(
			'type'          => 'param_group',
			'heading'       => esc_html__('List items', 'nt-big-border' ),
			'param_name'    => 'f_item_grid',
			'group' 	    => esc_html__('Features items', 'nt-big-border' ),
			'params' 	    => array(
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item icon", "nt-big-border"),
					"param_name" 	  => "item_icon",
					"description" 	  => esc_html__("Add icon. Example : icon-ribbon, fa fa-pencil or another icon family classes", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item heading ", "nt-big-border"),
					"param_name" 	  => "item_heading",
					"description" 	  => esc_html__("Add your item heading", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item mini heading ", "nt-big-border"),
					"param_name" 	  => "item_mini_heading",
					"description" 	  => esc_html__("Add your item mini heading", "nt-big-border"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Item description ", "nt-big-border"),
					"param_name" 	  => "item_desc",
					"description" 	  => esc_html__("Add your item description", "nt-big-border"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Item animation delay. ", "nt-big-border"),
					"param_name" 	  => "item_delay",
					"description" 	  => esc_html__("Add your item delay number. Example : 0.1, 0.5, 1.2 and more", "nt-big-border"),
				),
			)
		),
		array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group'   => esc_html__('Background options', 'nt-big-border' ),
        ),
	),
	));
} class WPBakeryShortCode_nt_big_border_features_grid_2 extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	PRICE TABLE
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'nt_big_border_price_table_integrateWithVC' );
function nt_big_border_price_table_integrateWithVC() {
vc_map( array(
	"name"          => esc_html__( "Price Table", "nt-big-border" ),
	"base"          => "nt_big_border_price_table",
	"icon"          => "icon-wpb-row",
	"category"      => esc_html__( "Big border", "nt-big-border"),
	"description"   => esc_html__("Frontpage price table section", "nt-big-border"),
	"params"        => array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add your heading", "nt-big-border"),
        ),

		array(
            'type'          => 'textarea',
            'heading'       => esc_html__('Description', 'nt-big-border' ),
            'param_name'    => 'description',
            "description"   => esc_html__("Add your description", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Price Table Count', 'nt-big-border' ),
            'param_name'    => 'post_number',
            "description"   => esc_html__("You can control with number your price tables.Please enter a number", "nt-big-border"),
        ),
        array(
            'type' 			=> 'textfield',
            'heading'       => esc_html__('Category', 'nt-big-border' ),
            'param_name'    => 'categories',
            "description"   => esc_html__("Enter Price table category or write all", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__('order', 'nt-big-border' ),
            'param_name'    => 'order',
            "description"   => esc_html__("Enter Price table order. DESC or ASC", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__('orderby', 'nt-big-border' ),
            'param_name'    => 'orderby',
            "description"   => esc_html__("Enter Price table orderby. Default is : date", "nt-big-border"),
        ),

         array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group' 	    => esc_html__('Background options', 'nt-big-border' ),
        ),
    ),
));
} class WPBakeryShortCode_nt_big_border_price_table extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	FEATURES GRID 3
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_features_grid_3_integrateWithVC' );
function nt_big_border_features_grid_3_integrateWithVC() {
	vc_map( array(
	"name" 	 	  => esc_html__( "Features Grid 3", "nt-big-border" ),
	"base" 	 	  => "nt_big_border_features_grid_3",
	"category" 	  => esc_html__( "Big border", "nt-big-border"),
	"params"   	  => array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add your heading", "nt-big-border")
        ),
		array(
            'type'          => 'textarea',
            'heading'       => esc_html__('Description', 'nt-big-border' ),
            'param_name'    => 'description',
            "description"   => esc_html__("Add your description", "nt-big-border")
        ),
		array(
			'type'          => 'param_group',
			'heading'       => esc_html__('List items', 'nt-big-border' ),
			'param_name'    => 'f_2_item_grid',
			'group' 	    => esc_html__('Features items', 'nt-big-border' ),
			'params' 	    => array(
				array(
					'type'          	=> 'attach_image',
					'heading'       	=> esc_html__('Item image', 'nt-big-border' ),
					'param_name'    	=> 'item_img',
					"description"   	=> esc_html__("Add/select an image", "nt-big-border"),
				),
				array(
					"type" 				=> "textfield",
					"heading" 		  	=> esc_html__("Item heading ", "nt-big-border"),
					"param_name" 	  	=> "item_heading",
					"description" 	  	=> esc_html__("Add your item heading", "nt-big-border"),
				),
				array(
					"type" 			  	=> "textarea",
					"heading" 		  	=> esc_html__("Item description ", "nt-big-border"),
					"param_name" 	  	=> "item_desc",
					"description" 	  	=> esc_html__("Add your item description", "nt-big-border"),
				),
				array(
					'type'          	=> 'vc_link',
					'heading'       	=> esc_html__('Button (Link)', 'nt-big-border' ),
					'param_name'    	=> 'link',
					'description'   	=> esc_html__('Add custom link.', 'nt-big-border' ),
				),
				array(
					"type" 			  	=> "textfield",
					"heading" 		  	=> esc_html__("Item animation delay. ", "nt-big-border"),
					"param_name" 	  	=> "item_delay",
					"description" 	  	=> esc_html__("Add your item delay number. Example : 0.1, 0.5, 1.2 and more", "nt-big-border"),
				),
			)
		),
		array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group'   => esc_html__('Background options', 'nt-big-border' ),
        ),
	),
	));
} class WPBakeryShortCode_nt_big_border_features_grid_3 extends WPBakeryShortCode {}



/*-----------------------------------------------------------------------------------*/
/*	counter
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_counter_integrateWithVC' );
function nt_big_border_counter_integrateWithVC() {
	vc_map( array(
	"name" 	 	  => esc_html__( "Counter", "nt-big-border" ),
	"base" 	 	  => "nt_big_border_counter",
	"category" 	  => esc_html__( "Big border", "nt-big-border"),
	"params"   	  => array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
		array(
			'type'          => 'param_group',
			'heading'       => esc_html__('List items', 'nt-big-border' ),
			'param_name'    => 'counter_items',
			'group' 	    => esc_html__('Counter items', 'nt-big-border' ),
			'params' 	    => array(
				array(
					"type" 			  	=> "textfield",
					"heading" 		  	=> esc_html__("Item icon", "nt-big-border"),
					"param_name" 	  	=> "item_icon",
					"description" 	  	=> esc_html__("Add icon. Example : icon-ribbon, fa fa-pencil or another icon family classes", "nt-big-border"),
				),
				array(
					"type" 				=> "textfield",
					"heading" 		  	=> esc_html__("Item heading ", "nt-big-border"),
					"param_name" 	  	=> "item_heading",
					"description" 	  	=> esc_html__("Add your item heading", "nt-big-border"),
				),
				array(
					"type" 				=> "textfield",
					"heading" 		  	=> esc_html__("Item data from", "nt-big-border"),
					"param_name" 	  	=> "item_data_from",
					"description" 	  	=> esc_html__("Add your number, Example : 0 - 10 - 24 and other ", "nt-big-border"),
				),
				array(
					"type" 				=> "textfield",
					"heading" 		  	=> esc_html__("Item data to", "nt-big-border"),
					"param_name" 	  	=> "item_data_to",
					"description" 	  	=> esc_html__("Add your number, Example : 110 - 1110 - 1124 and other ", "nt-big-border"),
				),
				array(
					"type" 				=> "textfield",
					"heading" 		  	=> esc_html__("Item data speed", "nt-big-border"),
					"param_name" 	  	=> "item_data_speed",
					"description" 	  	=> esc_html__("Add your speed number, Example : 5000 - 10000 - 2500 and other ", "nt-big-border"),
				),
				array(
					"type" 			  	=> "textfield",
					"heading" 		  	=> esc_html__("Item animation delay. ", "nt-big-border"),
					"param_name" 	  	=> "item_delay",
					"description" 	  	=> esc_html__("Add your item delay number. Example : 0.1, 0.5, 1.2 and other", "nt-big-border"),
				),
			)
		),
		array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group'   		=> esc_html__('Background options', 'nt-big-border' ),
        ),
	),
	));
} class WPBakeryShortCode_nt_big_border_counter extends WPBakeryShortCode {}




/*-----------------------------------------------------------------------------------*/
/*	counter
/*-----------------------------------------------------------------------------------*/


add_action( 'vc_before_init', 'nt_big_border_testimonial_integrateWithVC' );
function nt_big_border_testimonial_integrateWithVC() {
	vc_map( array(
	"name" 	 	  => esc_html__( "Testimonial", "nt-big-border" ),
	"base" 	 	  => "nt_big_border_testimonial",
	"category" 	  => esc_html__( "Big border", "nt-big-border"),
	"params"   	  => array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add your heading", "nt-big-border")
        ),
		array(
            'type'          => 'textarea',
            'heading'       => esc_html__('Description', 'nt-big-border' ),
            'param_name'    => 'description',
            "description"   => esc_html__("Add your description", "nt-big-border")
        ),
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Left column heading', 'nt-big-border' ),
            'param_name'    => 'left_heading',
            "description"   => esc_html__("Add your heading", "nt-big-border"),
			'group' 	    => esc_html__('Left column', 'nt-big-border' ),
        ),
		array(
            'type'          => 'textarea',
            'heading'       => esc_html__('Left column description', 'nt-big-border' ),
            'param_name'    => 'left_description',
            "description"   => esc_html__("Add your description", "nt-big-border"),
			'group' 	    => esc_html__('Left column', 'nt-big-border' ),
        ),
		array(
			'type'          => 'param_group',
			'heading'       => esc_html__('List items', 'nt-big-border' ),
			'param_name'    => 'testi_items',
			'group' 	    => esc_html__('List items', 'nt-big-border' ),
			'params' 	    => array(
				array(
					"type" 		  	  => "attach_image",
					"heading" 	  	  => esc_html__("Item image", "nt-big-border"),
					"param_name"  	  => "item_img",
					"description" 	  => esc_html__("Add your image", "nt-big-border"),
				),
				array(
					"type" 				=> "textfield",
					"heading" 		  	=> esc_html__("Item heading ", "nt-big-border"),
					"param_name" 	  	=> "item_heading",
					"description" 	  	=> esc_html__("Add your item heading", "nt-big-border"),
				),
				array(
					"type" 				=> "textfield",
					"heading" 		  	=> esc_html__("Item company ", "nt-big-border"),
					"param_name" 	  	=> "item_company",
					"description" 	  	=> esc_html__("Add your item heading", "nt-big-border"),
				),
				array(
					"type" 				=> "textarea",
					"heading" 		  	=> esc_html__("Item description ", "nt-big-border"),
					"param_name" 	  	=> "item_desc",
					"description" 	  	=> esc_html__("Add your item description", "nt-big-border"),
				),
				array(
					"type" 			  	=> "textfield",
					"heading" 		  	=> esc_html__("Item animation delay. ", "nt-big-border"),
					"param_name" 	  	=> "item_delay",
					"description" 	  	=> esc_html__("Add your item delay number. Example : 0.1, 0.5, 1.2 and other", "nt-big-border"),
				),
			)
		),
		array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group'   		=> esc_html__('Background options', 'nt-big-border' ),
        ),
	),
	));
} class WPBakeryShortCode_nt_big_border_testimonial extends WPBakeryShortCode {}



/*-----------------------------------------------------------------------------------*/
/*	 HEADING
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'nt_big_border_heading_type_integrateWithVC' );
function nt_big_border_heading_type_integrateWithVC() {
vc_map( array(
	"name" 	   		=> esc_html__( "Heading", "nt-big-border" ),
	"base" 	   		=> "nt_big_border_heading_type",
	"category"   	=> esc_html__( "Big border", "nt-big-border"),
	"params"     	=> array(
		array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Section ID', 'nt-big-border' ),
            'param_name'    => 'section_id',
            "description"   => esc_html__("Add Your Section ID", "nt-big-border"),
        ),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__('Heading', 'nt-big-border' ),
            'param_name'    => 'heading',
            "description"   => esc_html__("Add your section heading", "nt-big-border"),
        ),
		array(
            'type'          => 'textarea',
            'heading'       => esc_html__('Description', 'nt-big-border' ),
            'param_name'    => 'description',
            "description"   => esc_html__("Add your description", "nt-big-border"),
        ),
        array(
            'type'          => 'css_editor',
            'heading'       => esc_html__('Css', 'nt-big-border' ),
            'param_name'    => 'css',
            'group' 	    => esc_html__('Background options', 'nt-big-border' ),
        ),
	), // end params
)); // end vc_map
} class WPBakeryShortCode_nt_big_border_heading_type extends WPBakeryShortCode {}


// Filter to replace default css class names for vc_row shortcode and vc_column
add_filter( 'vc_shortcodes_css_class', 'nt_big_border_custom_css_classes_for_vc_row_and_vc_column', 10, 2 );
function nt_big_border_custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
  if (  $tag == 'vc_row_inner' ) {
    $class_string = str_replace( 'vc_row-fluid', 'container bootstrap', $class_string ); // This will replace "vc_row-fluid" with "my_row-fluid"
  }
  return $class_string; // Important: you should always return modified or original $class_string
}
