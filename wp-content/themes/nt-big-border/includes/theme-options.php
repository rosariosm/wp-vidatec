<?php

add_action( 'init', 'nt_big_border_custom_theme_options' );
function nt_big_border_custom_theme_options() {

	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
	return false;

	$nt_big_border_saved_settings = get_option( ot_settings_id(), array() );
	$nt_big_border_custom_settings = array(
		'contextual_help' => array(
			'sidebar' => ''
		),
		'sections' => array(
			array(
				'id' => 'generalcolor',
				'title' => esc_html__( 'General Color', 'nt-big-border' ),
			),
			array(
				'id' => 'backtotop',
				'title' => esc_html__( 'Back To Top', 'nt-big-border' ),
			),
			array(
				'id' => 'pre',
				'title' => esc_html__( 'Preloader', 'nt-big-border' ),
			),
			array(
				'id' => 'logo',
				'title' => esc_html__( 'Logo', 'nt-big-border' ),
			),
			array(
				'id' => 'navigation',
				'title' => esc_html__( 'Navigation', 'nt-big-border' ),
			),
			array(
				'id' => 'sidebars',
				'title' => esc_html__( 'Sidebars', 'nt-big-border' ),
			),
			array(
				'id' => 'sidebars_settings',
				'title' => esc_html__( 'Sidebar Colors', 'nt-big-border' ),
			),
			array(
				'id' => 'blog_page',
				'title' => esc_html__( 'Blog Page', 'nt-big-border' ),
			),
			array(
				'id' => 'post_color',
				'title' => esc_html__( 'Blog Post Colors', 'nt-big-border' ),
			),
			array(
				'id' => 'single_page',
				'title' => esc_html__( 'Single Page', 'nt-big-border' ),
			),
			array(
				'id' => 'archive_page',
				'title' => esc_html__( 'Archive Page', 'nt-big-border' ),
			),
			array(
				'id' => 'error_page',
				'title' => esc_html__( '404 Page', 'nt-big-border' ),
			),
			array(
				'id' => 'search_page',
				'title' => esc_html__( 'Search Page', 'nt-big-border' ),
			),
			array(
				'id' => 'breadcrubms',
				'title' => esc_html__( 'Breadcrubms', 'nt-big-border' ),
			),
			array(
				'id' => 'footer_widgetize',
				'title' => esc_html__( 'Footer Widgetize', 'nt-big-border' ),
			),
			array(
				'id' => 'copyright',
				'title' => esc_html__( 'Footer', 'nt-big-border' ),
			),
			array(
				'id'  => 'google_fonts',
				'title' => esc_html__('Google Fonts', 'nt-big-border' )
			),
			array(
				'id'  => 'typography',
				'title' => esc_html__('Typography', 'nt-big-border' )
			),
		), // sidebar end

		// options start
		'settings' => array(

			array(
				'id' => 'nt_big_border_theme_color_one',
				'label' => esc_html__( 'Theme general color 1', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'generalcolor'
			),
			array(
				'id' => 'nt_big_border_theme_color_two',
				'label' => esc_html__( 'Theme general color 2', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'generalcolor'
			),

			/**  BACK TO TOP SETTİNGS  **/
			array(
				'id' => 'nt_big_border_top_display',
				'label' => esc_html( 'Back to top display', 'nt-honshi' ),
				'desc' => sprintf( esc_html( 'Preloader display %s or %s.', 'nt-honshi' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'off',
				'type' => 'on-off',
				'section' => 'backtotop',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_top_class',
				'label' => esc_html__('Back to top class', 'nt-big-border' ),
				'desc' => esc_html__('Please add back to top class ', 'nt-big-border' ),
				'type' => 'text',
				'section' => 'backtotop'
			),
			array(
				'id' => 'nt_big_border_top_color',
				'label' => esc_html__( 'Back to top icon color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'backtotop'
			),
			array(
				'id' => 'nt_big_border_top_bgcolor',
				'label' => esc_html__( 'Backk to top bg color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'backtotop'
			),

			/**  PRELOADER  **/
			array(
				'id' => 'nt_big_border_pre',
				'label' => esc_html( 'Preloader', 'nt-honshi' ),
				'desc' => sprintf( esc_html( 'Preloader display %s or %s.', 'nt-honshi' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'pre',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_pre_type',
				'label' => esc_html('Preloader types', 'nt-honshi' ),
				'desc' => esc_html('Please choose a preloader type', 'nt-honshi' ),
				'std' => 'default',
				'type' => 'select',
				'section' => 'pre',
				'condition' => 'nt_big_border_pre:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'default',
						'label' => esc_html('Default', 'nt-honshi' ),
					),
					array(
						'value' => '01',
						'label' => esc_html('Type 1', 'nt-honshi' ),
					),
					array(
						'value' => '02',
						'label' => esc_html('Type 2', 'nt-honshi' ),
					),
					array(
						'value' => '03',
						'label' => esc_html('Type 3', 'nt-honshi' ),
					),
					array(
						'value' => '04',
						'label' => esc_html('Type 4', 'nt-honshi' ),
					),
					array(
						'value' => '05',
						'label' => esc_html('Type 5', 'nt-honshi' ),
					),
					array(
						'value' => '06',
						'label' => esc_html('Type 6', 'nt-honshi' ),
					),
					array(
						'value' => '07',
						'label' => esc_html('Type 7', 'nt-honshi' ),
					),
					array(
						'value' => '08',
						'label' => esc_html('Type 8', 'nt-honshi' ),
					),
					array(
						'value' => '09',
						'label' => esc_html('Type 9', 'nt-honshi' ),
					),
					array(
						'value' => '10',
						'label' => esc_html('Type 10', 'nt-honshi' ),
					),
					array(
						'value' => '11',
						'label' => esc_html('Type 11', 'nt-honshi' ),
					),
					array(
						'value' => '12',
						'label' => esc_html('Type 12', 'nt-honshi' ),
					),
				)
			),
			array(
				'id' => 'pre_bg',
				'label' => esc_html__( 'Preloader background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color for preloader background', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'pre',
				'condition' => 'nt_big_border_pre:is(on),nt_big_border_pre_type:not(default)',
				'operator' => 'and',
			),
			array(
				'id' => 'pre_spin',
				'label' => esc_html__( 'Preloader spin color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'pre',
				'condition' => 'nt_big_border_pre:is(on),nt_big_border_pre_type:not(default)',
				'operator' => 'and',
			),

			/**  LOGO OPTIONS  **/
			array(
				'id' => 'nt_big_border_logo_type',
				'label' => esc_html__('Logo Type', 'nt-big-border' ),
				'desc' => esc_html__('Choose logo type', 'nt-big-border' ),
				'std' => 'text',
				'type' => 'select',
				'section' => 'logo',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'img',
						'label' => esc_html__('Image Logo', 'nt-big-border' ),
					),
					array(
						'value' => 'text',
						'label' => esc_html__('Text Logo', 'nt-big-border' ),
					)
				)
			),
			array(
				'id' => 'nt_big_border_logoimg',
				'label' => esc_html__( 'Upload logo image', 'nt-big-border' ),
				'desc' => esc_html__( 'Upload logo image', 'nt-big-border' ),
				'type' => 'upload',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(img)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_logo_dimension',
				'label' => esc_html__( 'Logo dimension', 'nt-big-border' ),
				'desc' => esc_html__( 'Set your main logo dimension', 'nt-big-border' ),
				'type' => 'dimension',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(img)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_logoimg2',
				'label' => esc_html__( 'Upload logo 2 ( for sticky menu)', 'nt-big-border' ),
				'desc' => esc_html__( 'Upload your sticky menu logo', 'nt-big-border' ),
				'type' => 'upload',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(img)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_logo2_dimension',
				'label' => esc_html__( 'Logo 2 dimension', 'nt-big-border' ),
				'desc' => esc_html__( 'Set your sticky menu logo dimension', 'nt-big-border' ),
				'type' => 'dimension',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(img)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_textlogo',
				'label' => esc_html__('Text logo', 'nt-big-border' ),
				'desc' => esc_html__('Text logo', 'nt-big-border' ),
				'std' => 'Big border',
				'type' => 'text',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(text)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_logo_clr',
				'label' => esc_html__( 'Text logo color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(text)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_logo_text_font_s',
				'label' => esc_html__('Text logo font size', 'nt-big-border' ),
				'desc' => esc_html__('You can set your text logo height', 'nt-big-border' ),
				'std' => '21',
				'type' => 'numeric-slider',
				'min_max_step' => '0,150',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(text)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_slogo_clr',
				'label' => esc_html__( 'Sticky menu text logo color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(text)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_slogo_text_font_s',
				'label' => esc_html__('Text logo font size', 'nt-big-border' ),
				'desc' => esc_html__('You can set your text logo height', 'nt-big-border' ),
				'std' => '21',
				'type' => 'numeric-slider',
				'min_max_step' => '0,150',
				'section' => 'logo',
				'condition' => 'nt_big_border_logo_type:is(text)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_padding_logo',
				'label' => esc_html__( 'Logo padding', 'nt-big-border' ),
				'desc' => esc_html__( 'Logo padding', 'nt-big-border' ),
				'type' => 'spacing',
				'section' => 'logo',
			),
			array(
				'id' => 'nt_big_border_margin_logo',
				'label' => esc_html__( 'Logo margin', 'nt-big-border' ),
				'desc' => esc_html__( 'Logo margin', 'nt-big-border' ),
				'type' => 'spacing',
				'section' => 'logo',
			),

			/**  NAVIGATION SETTINGS.  **/
			// menu general tab
			array(
				'id' => 'nt_big_border_navigation_general_tab',
				'label' => esc_html__( 'Menu General', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_nav_alignment',
				'label' => esc_html__('Menu item horizontal alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select menu item position', 'nt-big-border' ),
				'std' => 'text-center',
				'type' => 'select',
				'section' => 'navigation',
				'choices' => array(
					array(
						'value' => 'text-left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'text-right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'text-center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_nav_content_position',
				'label' => esc_html__('Menu content vertical position', 'nt-big-border' ),
				'desc' => esc_html__('Select menu content vertical position', 'nt-big-border' ),
				'std' => 'content-center',
				'type' => 'select',
				'section' => 'navigation',
				'choices' => array(
					array(
						'value' => 'content-top',
						'label' => esc_html__( 'top', 'nt-big-border' )
					),
					array(
						'value' => 'content-bottom',
						'label' => esc_html__( 'bottom', 'nt-big-border' )
					),
					array(
						'value' => 'content-center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_nav_container',
				'label' => esc_html__('Menu container type', 'nt-big-border' ),
				'desc' => esc_html__('Select menu content vertical position', 'nt-big-border' ),
				'std' => 'container',
				'type' => 'select',
				'section' => 'navigation',
				'choices' => array(
					array(
						'value' => 'container',
						'label' => esc_html__( 'boxed', 'nt-big-border' )
					),
					array(
						'value' => 'container-fluid',
						'label' => esc_html__( 'fluid', 'nt-big-border' )
					)
				)
			),
			array(
				'id' => 'nt_big_border_nav_scroll_offset',
				'label' => esc_html__('Scroll offset', 'nt-big-border' ),
				'desc' => esc_html__('Set the scroll offset of menu when the menu is clicked.Default offset is static menu height.', 'nt-big-border' ),
				'std' => '50',
				'type' => 'numeric-slider',
				'min_max_step' => '0,200',
				'section' => 'navigation',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_nav_scroll_speed',
				'label' => esc_html__('Scroll speed', 'nt-big-border' ),
				'desc' => esc_html__('Set the scroll speed of menu when the menu is clicked.Default speed : 500.', 'nt-big-border' ),
				'std' => '500',
				'type' => 'numeric-slider',
				'min_max_step' => '0,1000',
				'section' => 'navigation',
				'operator' => 'and'
			),
			// static menu tab
			array(
				'id' => 'nt_big_border_navigation_tab',
				'label' => esc_html__( 'Static Menu', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_nav_bg',
				'label' => esc_html__( 'Navigation background color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_navitem',
				'label' => esc_html__( 'Theme navigation menu item color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_navitemhover',
				'label' => esc_html__( 'Theme navigation menu item hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_nav_menu_ifs',
				'label' => esc_html__('Menu item font-size', 'nt-big-border' ),
				'desc' => esc_html__('Navigation menu item font-size', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'navigation',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_nav_padt',
				'label' => esc_html__('Static menu padding top ( px )', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for sticky menu', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'std' => '20',
				'min_max_step' => '0,100',
				'section' => 'navigation',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_nav_padb',
				'label' => esc_html__('Static menu padding bottom ( px )', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for sticky menu', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'std' => '20',
				'min_max_step' => '0,100',
				'section' => 'navigation',
				'operator' => 'and'
			),
			// sticky menu tab
			array(
				'id' => 'big_border_sticky_navigation_tab',
				'label' => esc_html__( 'Sticky Menu', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_snav_visibility',
				'label' => esc_html__( 'Sticky menu visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable sticky menu with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'off',
				'type' => 'on-off',
				'section' => 'navigation',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_snav_bg',
				'label' => esc_html__( 'Sticky menu background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'std' => '#262626',
				'section' => 'navigation',
				'condition' => 'nt_big_border_snav_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_snavitem',
				'label' => esc_html__( 'Sticky menu item color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'std' => '#fff',
				'section' => 'navigation',
				'condition' => 'nt_big_border_snav_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_snavitemhover',
				'label' => esc_html__( 'Sticky menu item hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'navigation',
				'condition' => 'nt_big_border_snav_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_snav_padt',
				'label' => esc_html__('Sticky menu padding top ( px )', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for sticky menu', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'std' => '20',
				'min_max_step' => '0,100',
				'section' => 'navigation',
				'condition' => 'nt_big_border_snav_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_snav_padb',
				'label' => esc_html__('Sticky menu padding bottom ( px )', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for sticky menu', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'std' => '20',
				'min_max_step' => '0,100',
				'section' => 'navigation',
				'condition' => 'nt_big_border_snav_visibility:is(on)',
				'operator' => 'and'
			),
			// dropdown menu tab
			array(
				'id' => 'nt_big_border_navigation_dropdown_tab',
				'label' => esc_html__( 'Dropdown Submenu', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_dropdown_bg',
				'label' => esc_html__( 'Dropdown submenu background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_dropdown_item',
				'label' => esc_html__( 'Dropdown submenu item color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_dropdown_itemhover',
				'label' => esc_html__( 'Dropdown submenu item hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'navigation'
			),
			// mobile menu tab
			array(
				'id' => 'nt_big_border_mobile_menu_tab',
				'label' => esc_html__( 'Mobile Menu', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'navigation'
			),
			array(
				'id' => 'nt_big_border_mobile_menu_bg',
				'label' => esc_html__( 'Mobile menu background color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'navigation'
			),


			/**  SIDEBAR TYPE SETTINGS.  **/
			array(
				'id' => 'nt_big_border_bloglayout',
				'label' => esc_html__( 'Blog Layout', 'nt-big-border' ),
				'desc' => esc_html__( 'Choose blog page layout type', 'nt-big-border' ),
				'std' => 'right-sidebar',
				'type' => 'radio-image',
				'section' => 'sidebars',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_pagelayout',
				'label' => esc_html__( 'Default Page Layout', 'nt-big-border' ),
				'desc' => esc_html__( 'Choose default page layout type', 'nt-big-border' ),
				'std' => 'right-sidebar',
				'type' => 'radio-image',
				'section' => 'sidebars',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_searchlayout',
				'label' => esc_html__( 'Search page Layout', 'nt-big-border' ),
				'desc' => esc_html__( 'Choose search page layout type', 'nt-big-border' ),
				'std' => 'right-sidebar',
				'type' => 'radio-image',
				'section' => 'sidebars',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_postlayout',
				'label' => esc_html__( 'Blog single page layout', 'nt-big-border' ),
				'desc' => esc_html__( 'Choose post page layout type', 'nt-big-border' ),
				'std' => 'right-sidebar',
				'type' => 'radio-image',
				'section' => 'sidebars',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archivelayout',
				'label' => esc_html__( 'archive page layout', 'nt-big-border' ),
				'desc' => esc_html__( 'Choose archive page layout type', 'nt-big-border' ),
				'std' => 'right-sidebar',
				'type' => 'radio-image',
				'section' => 'sidebars',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_404layout',
				'label' => esc_html__( '404 page layout', 'nt-big-border' ),
				'desc' => esc_html__( 'Choose 404 page layout type', 'nt-big-border' ),
				'std' => 'right-sidebar',
				'type' => 'radio-image',
				'section' => 'sidebars',
				'operator' => 'and'
			),
			array(
				'id' => 'woosingle',
				'label' => esc_html__( 'Woocommerce single page layout', 'nt-big-border' ),
				'desc' => esc_html__( 'Choose Woocommerce single page layout type', 'nt-big-border' ),
				'std' => 'right-sidebar',
				'type' => 'radio-image',
				'section' => 'sidebars',
				'operator' => 'and'
			),
			array(
				'id' => 'woopage',
				'label' => esc_html__( 'Woocommerce  page layout', 'nt-big-border' ),
				'desc' => esc_html__( 'Choose 404 page layout type', 'nt-big-border' ),
				'std' => 'right-sidebar',
				'type' => 'radio-image',
				'section' => 'sidebars',
				'operator' => 'and'
			),


	  /**  SIDEBAR SETTINGS.  **/
	      array(
	        'id' => 'nt_big_border_sidebarwidgetareabgcolor',
	        'label' => esc_html__('Theme Sidebar widget area background color', 'nt-big-border' ),
	        'desc' => esc_html__('Please select color', 'nt-big-border' ),
	        'type' => 'colorpicker-opacity',
	        'section' => 'sidebars_settings',
	        'operator' => 'and'
		),
		    array(
				'id' => 'nt_big_border_sidebarwidgetareabgcolor',
				'label' => esc_html__( 'Theme Sidebar widget area background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'sidebars_settings'
			),
		    array(
				'id' => 'nt_big_border_sidebarwidgetgeneralcolor',
				'label' => esc_html__( 'Theme Sidebar widget general color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'sidebars_settings'
			),
			array(
				'id' => 'nt_big_border_sidebarwidgettitlecolor',
				'label' => esc_html__( 'Theme Sidebar widget title color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'sidebars_settings'
			),
	 		array(
				'id' => 'nt_big_border_sidebarlinkcolor',
				'label' => esc_html__( 'Theme Sidebar link title color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'sidebars_settings'
			),
	 		array(
				'id' => 'nt_big_border_sidebarlinkhovercolor',
				'label' => esc_html__( 'Theme Sidebar link title hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'sidebars_settings'
			),
	  		array(
				'id' => 'nt_big_border_sidebarsearchsubmittextcolor',
				'label' => esc_html__( 'Theme Sidebar search submit text color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'sidebars_settings'
			),
	      	array(
				'id' => 'nt_big_border_sidebarsearchsubmitbgcolor',
				'label' => esc_html__( 'Theme Sidebar search submit background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'sidebars_settings'
			),

			/**  POST SETTINGS.  **/
			array(
				'id' => 'nt_big_border_blogposttitlecolor',
				'label' => esc_html__( 'Blog Post Title color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogposttitlhoverecolor',
				'label' => esc_html__( 'Blog Post Title hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogmetacolor',
				'label' => esc_html__( 'Blog Post Meta Title color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogmetalinktextcolor',
				'label' => esc_html__( 'Blog Post Meta Link Text color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogmetalinkhovercolor',
				'label' => esc_html__( 'Blog Post Meta Link Text hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogmetalinktextbgcolor',
				'label' => esc_html__( 'Blog Post Meta Link Text background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogmetalinktextbghovercolor',
				'label' => esc_html__( 'Blog Post Meta Link Text background hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogpostparagraphcolor',
				'label' => esc_html__( 'Blog Post Paragraph color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogpostbuttonbgcolor',
				'label' => esc_html__( 'Blog Post button background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogpostbuttonbghovercolor',
				'label' => esc_html__( 'Blog Post button background hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogpostbuttontitlecolor',
				'label' => esc_html__( 'Blog Post button title color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogpostbuttontitlehovercolor',
				'label' => esc_html__( 'Blog Post button title hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogsharebgcolor',
				'label' => esc_html__( 'Blog Post Share Icon background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogsharebghovercolor',
				'label' => esc_html__( 'Blog Post Share Icon background hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogsharecolor',
				'label' => esc_html__( 'Blog Post Share Icon color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogsharehovercolor',
				'label' => esc_html__( 'Blog Post Share Icon hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogcommentformsubmitcolor',
				'label' => esc_html__( 'Single post comment button title color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogcommentformsubmithovercolor',
				'label' => esc_html__( 'Single post comment button title hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogcommentformsubmitbgcolor',
				'label' => esc_html__( 'Single post comment button background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_blogcommentformsubmitbghovercolor',
				'label' => esc_html__( 'Single post comment button background hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_pagertitlecolor',
				'label' => esc_html__( 'Pager button title color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_pagertitlehovercolor',
				'label' => esc_html__( 'Pager button title hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_pagerbgcolor',
				'label' => esc_html__( 'Pager button background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),
			array(
				'id' => 'nt_big_border_pagerbghovercolor',
				'label' => esc_html__( 'Pager button background hover color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'post_color'
			),

			/**  BLOG PAGE HERO SETTINGS.  **/
			array(
				'id' => 'nt_big_border_blog_herobg_tab',
				'label' => esc_html__( 'Blog Hero', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'blog_page'
			),
			array(
				'id' => 'nt_big_border_blog_hero_visibility',
				'label' => esc_html__( 'Blog hero visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable blog hero section with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'blog_page'
			),
			array(
				'id' => 'nt_big_border_blogpageheadbg',
				'label' =>  esc_html__( 'Blog hero section background image', 'nt-big-border' ),
				'desc' =>  esc_html__( 'You can upload your background image for blog page hero section.', 'nt-big-border' ),
				'type' => 'upload',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_blogheaderbgcolor',
				'label' => esc_html__( 'Hero section background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_blog_overlay_visibility',
				'label' => esc_html__( 'Hero overlay color visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable hero section background image overlay color with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_blog_hero_overlay',
				'label' => esc_html__( 'Hero overlay color', 'nt-big-border' ),
				'desc' => esc_html__( 'Set your custom overlay color for hero background image.Please make the color opaque to make the background image appear.', 'nt-big-border' ),
				'type' => 'colorpicker-opacity',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on),nt_big_border_blog_overlay_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_blog_hero_alignment',
				'label' => esc_html__('Hero text alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select hero text alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_blog_hero_content_position',
				'label' => esc_html__('Hero content position', 'nt-big-border' ),
				'desc' => esc_html__('Select hero content vertical position', 'nt-big-border' ),
				'std' => 'center',
				'type' => 'select',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'top',
						'label' => esc_html__( 'top', 'nt-big-border' )
					),
					array(
						'value' => 'bottom',
						'label' => esc_html__( 'bottom', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_blogheaderbgheight',
				'label' => esc_html__('Hero height', 'nt-big-border' ),
				'desc' => esc_html__('Set custom page hero height', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'std' => '65',
				'min_max_step' => '0,100',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_blogheaderpaddingtop',
				'label' => esc_html__('Hero padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for blog page hero section', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'min_max_step' => '0,1000',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_blogheaderpaddingbottom',
				'label' => esc_html__('Hero padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for blog page hero section', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and'
			),
			// blog page hero title tab
			array(
				'id' => 'nt_big_border_blog_title_tab',
				'label' => esc_html__( 'Heading', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'blog_page'
			),
			array(
				'id' => 'nt_big_border_disable_title',
				'label' => esc_html__( 'Blog heading visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'Blog page hero heading visibility %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_alt_title',
				'label' => esc_html__( 'Blog heading', 'nt-big-border' ),
				'desc' => esc_html__( 'Enter custom heading for blog page hero section', 'nt-big-border' ),
				'type' => 'text',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on),nt_big_border_disable_title:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_blogheadingcolor',
				'label' => esc_html__( 'Blog heading color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on),nt_big_border_disable_title:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_blog_heading_fontsize',
				'label' => esc_html__('Blog heading font size', 'nt-big-border' ),
				'desc' => esc_html__('Enter blog heading font size', 'nt-big-border' ),
				'std' => '40',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on),nt_big_border_disable_title:is(on)',
				'operator' => 'and'
			),
			// blog page hero subtitle tab
			array(
				'id' => 'nt_big_border_blog_subtitle_tab',
				'label' => esc_html__( 'Subtitle', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'blog_page'
			),
			array(
				'id' => 'nt_big_border_page_disable_sub',
				'label' => esc_html__( 'Blog subtitle visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'Heading visibility %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_subtitle',
				'label' => esc_html__( 'Blog subtitle', 'nt-big-border' ),
				'desc' => esc_html__( 'Enter custom description or slogan for blog page hero section', 'nt-big-border' ),
				'type' => 'textarea',
				'rows' => '15',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on),nt_big_border_disable_subtitle:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_blogheaderparagraphcolor',
				'label' => esc_html__( 'Blog page subtitle/slogan color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'blog_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on),nt_big_border_disable_subtitle:is(on)',
				'operator' => 'and'
			),
			// blog page content
			array(
				'id' => 'nt_big_border_blog_content_tab',
				'label' => esc_html__( 'Blog Content', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'blog_page'
			),
			array(
				'id' => 'nt_big_border_blog_content_alignment',
				'label' => esc_html__('Blog page content post text alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select blog page content text-alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'blog_page',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_blog_content_padt',
				'label' => esc_html__('Blog page content padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for blog page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'blog_page',
			),
			array(
				'id' => 'nt_big_border_blog_content_padb',
				'label' => esc_html__('Blog page content padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for blog page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'blog_page',
			),
			array(
				'id' => 'nt_big_border_blog_content_bgclr',
				'label' => esc_html__( 'Blog page content background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'blog_page',
			),

			/**  SINGLE HEADER SETTINGS.  **/
			array(
				'id' => 'nt_big_border_single_herobg_tab',
				'label' => esc_html__( 'Blog Hero', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'single_page'
			),
			array(
				'id' => 'nt_big_border_single_hero_visibility',
				'label' => esc_html__( 'Blog hero visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable blog hero section with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'single_page'
			),
			array(
				'id' => 'nt_big_border_single_hero_bg',
				'label' => esc_html__('Select single page hero bg image', 'nt-big-border' ),
				'std' => 'featured',
				'type' => 'select',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'featured',
						'label' => esc_html__( 'Featured image', 'nt-big-border' )
					),
					array(
						'value' => 'custom',
						'label' => esc_html__( 'Custom image', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_singlepageheadbg',
				'label' =>  esc_html__( 'Single hero section background image', 'nt-big-border' ),
				'desc' =>  esc_html__( 'You can upload your image for parallax header', 'nt-big-border' ),
				'type' => 'upload',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on),nt_big_border_single_hero_bg:is(custom)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_singleheaderbgcolor',
				'label' => esc_html__( 'Hero section background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_single_overlay_visibility',
				'label' => esc_html__( 'Hero overlay color visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable hero section background image overlay color with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_single_hero_overlay',
				'label' => esc_html__( 'Hero overlay color', 'nt-big-border' ),
				'desc' => esc_html__( 'Set your custom overlay color for hero background image.Please make the color opaque to make the background image appear.', 'nt-big-border' ),
				'type' => 'colorpicker-opacity',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on),nt_big_border_single_overlay_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_single_hero_alignment',
				'label' => esc_html__('Hero text alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select hero text alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_single_hero_content_position',
				'label' => esc_html__('Hero content position', 'nt-big-border' ),
				'desc' => esc_html__('Select hero content vertical position', 'nt-big-border' ),
				'std' => 'center',
				'type' => 'select',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'top',
						'label' => esc_html__( 'top', 'nt-big-border' )
					),
					array(
						'value' => 'bottom',
						'label' => esc_html__( 'bottom', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_singleheaderbgheight',
				'label' => esc_html__('Hero height', 'nt-big-border' ),
				'desc' => esc_html__('Set custom page hero height', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'std' => '65',
				'min_max_step' => '0,100',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_singleheaderpaddingtop',
				'label' => esc_html__('Hero padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for single page hero section', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'min_max_step' => '0,1000',
				'section' => 'single_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_singleheaderpaddingbottom',
				'label' => esc_html__('Hero padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for single page hero section', 'nt-big-border' ),
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'single_page',
				'condition' => 'nt_big_border_blog_hero_visibility:is(on)',
				'operator' => 'and'
			),
			// Single page hero post title tab
			array(
				'id' => 'nt_big_border_single_title_tab',
				'label' => esc_html__( 'Heading', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'single_page'
			),
			array(
				'id' => 'nt_big_border_single_disable_heading',
				'label' => esc_html__( 'Single page hero post title visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'Please select single page heading post title visibility %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_singleheadingcolor',
				'label' => esc_html__( 'Single page hero post title color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on),nt_big_border_single_disable_heading:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_single_heading_fontsize',
				'label' => esc_html__('Single page hero post title font size', 'nt-big-border' ),
				'desc' => esc_html__('Enter single page hero post title font size', 'nt-big-border' ),
				'std' => '40',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'single_page',
				'condition' => 'nt_big_border_single_hero_visibility:is(on),nt_big_border_single_disable_heading:is(on)',
				'operator' => 'and'
			),
			// single page content
			array(
				'id' => 'nt_big_border_single_content_tab',
				'label' => esc_html__( 'Single Content', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'single_page'
			),
			array(
				'id' => 'nt_big_border_single_content_alignment',
				'label' => esc_html__('Single post content alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select single page post content alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'single_page',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					)
				)
			),
			array(
				'id' => 'nt_big_border_single_content_padt',
				'label' => esc_html__('Single page content padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for single page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'single_page'
			),
			array(
				'id' => 'nt_big_border_single_content_padb',
				'label' => esc_html__('Single page content padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for single page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'single_page'
			),
			array(
				'id' => 'nt_big_border_single_content_bgclr',
				'label' => esc_html__( 'Single page content background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'single_page'
			),
			/**  ARCHIVE HEADER SETTINGS.  **/
			array(
				'id' => 'nt_big_border_archive_herobg_tab',
				'label' => esc_html__( 'Archive Hero', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'archive_page'
			),
			array(
				'id' => 'nt_big_border_archive_hero_visibility',
				'label' => esc_html__( 'Archive hero visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable hero section with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'archive_page',
			),
			array(
				'id' => 'nt_big_border_archivepageheadbg',
				'label' =>  esc_html__( 'Hero section background image', 'nt-big-border' ),
				'desc' =>  esc_html__( 'You can upload your image for parallax header', 'nt-big-border' ),
				'type' => 'upload',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archiveheaderbgcolor',
				'label' => esc_html__( 'Hero section background color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archive_overlay_visibility',
				'label' => esc_html__( 'Hero overlay color visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable hero section background image overlay color with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_archive_hero_overlay',
				'label' => esc_html__( 'Hero overlay color', 'nt-big-border' ),
				'desc' => esc_html__( 'Set your custom overlay color for hero background image.Please make the color opaque to make the background image appear.', 'nt-big-border' ),
				'type' => 'colorpicker-opacity',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on),nt_big_border_archive_overlay_visibility:is(on)',
				'operator' => 'and',
			),
			array(
				'id' => 'nt_big_border_archiveheaderbgheight',
				'label' => esc_html__('Hero section height', 'nt-big-border' ),
				'desc' => esc_html__('Set archive page hero section height.', 'nt-big-border' ),
				'std' => '65',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archive_hero_alignment',
				'label' => esc_html__('Hero text alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select hero text alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_archive_hero_content_position',
				'label' => esc_html__('Hero content position', 'nt-big-border' ),
				'desc' => esc_html__('Select hero content vertical position', 'nt-big-border' ),
				'std' => 'center',
				'type' => 'select',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'top',
						'label' => esc_html__( 'top', 'nt-big-border' )
					),
					array(
						'value' => 'bottom',
						'label' => esc_html__( 'bottom', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_archiveheaderpaddingtop',
				'label' => esc_html__('Hero padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for archive page hero section', 'nt-big-border' ),
				'std' => '250',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archiveheaderpaddingbottom',
				'label' => esc_html__('Hero padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for archive page hero section', 'nt-big-border' ),
				'std' => '200',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archive_heading_tab',
				'label' => esc_html__( 'Heading', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'archive_page'
			),
			array(
				'id' => 'nt_big_border_archive_heading_visibility',
				'label' => esc_html__( 'Archive heading visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable archive hero heading with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archive_heading',
				'label' => esc_html__( 'Archive heading', 'nt-big-border' ),
				'desc' => esc_html__( 'Enter your custom archive heading', 'nt-big-border' ),
				'std' => 'Our Archive',
				'type' => 'text',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on),nt_big_border_archive_heading_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archive_heading_fontsize',
				'label' => esc_html__('Archive heading font size', 'nt-big-border' ),
				'desc' => esc_html__('Set archive heading font size', 'nt-big-border' ),
				'std' => '40',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on),nt_big_border_archive_heading_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archiveheadingcolor',
				'label' => esc_html__( 'Archive heading color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on),nt_big_border_archive_heading_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archive_slogan_tab',
				'label' => esc_html__( 'Slogan', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'archive_page'
			),
			array(
				'id' => 'nt_big_border_archive_slogan_visibility',
				'label' => esc_html__( 'Archive slogan visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable archive hero slogan/subtitle with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archive_slogan',
				'label' => esc_html__( 'Archive slogan', 'nt-big-border' ),
				'desc' => esc_html__( 'Enter custom archive page hero slogan here,', 'nt-big-border' ),
				'std' => 'Welcome to your Archive. This is your all post. Edit or delete them, then start writing!',
				'type' => 'text',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on),nt_big_border_archive_slogan_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_archiveheaderparagraphcolor',
				'label' => esc_html__( 'Archive pages paragraph/slogan color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'archive_page',
				'condition' => 'nt_big_border_archive_hero_visibility:is(on),nt_big_border_archive_slogan_visibility:is(on)',
				'operator' => 'and'
			),
			// single page content tab
			array(
				'id' => 'nt_big_border_archive_content_tab',
				'label' => esc_html__( 'Archive Content', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'archive_page'
			),
			array(
				'id' => 'nt_big_border_archive_content_alignment',
				'label' => esc_html__('Archive page post content alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select archive page post content alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'archive_page',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_archive_content_padt',
				'label' => esc_html__('Archive page content padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for archive page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'archive_page',
			),
			array(
				'id' => 'nt_big_border_archive_content_padb',
				'label' => esc_html__('Archive page content padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for archive page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'archive_page'
			),
			array(
				'id' => 'nt_big_border_archive_content_bgclr',
				'label' => esc_html__( 'Archive page content background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'archive_page'
			),

			/**  404 PAGE HEADER SETTINGS.  **/
			array(
				'id' => 'nt_big_border_error_herobg_tab',
				'label' => esc_html__( '404 Hero', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'error_page'
			),
			array(
				'id' => 'nt_big_border_error_hero_visibility',
				'label' => esc_html__( '404 hero visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable hero section with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'error_page'
			),
			array(
				'id' => 'nt_big_border_errorpageheadbg',
				'label' =>  esc_html__( 'Hero section background image', 'nt-big-border' ),
				'desc' =>  esc_html__( 'You can upload your image for parallax header', 'nt-big-border' ),
				'type' => 'upload',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_errorheaderbgcolor',
				'label' => esc_html__( 'Hero section background color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_error_overlay_visibility',
				'label' => esc_html__( 'Hero overlay color visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable hero section background image overlay color with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_error_hero_overlay',
				'label' => esc_html__( 'Hero overlay color', 'nt-big-border' ),
				'desc' => esc_html__( 'Set your custom overlay color for hero background image.Please make the color opaque to make the background image appear.', 'nt-big-border' ),
				'type' => 'colorpicker-opacity',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on),nt_big_border_error_overlay_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_errorheaderbgheight',
				'label' => esc_html__('Hero section height', 'nt-big-border' ),
				'desc' => esc_html__('Set 404 page hero section height.', 'nt-big-border' ),
				'std' => '65',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_error_hero_alignment',
				'label' => esc_html__('Hero text alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select hero text alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_error_hero_content_position',
				'label' => esc_html__('Hero content position', 'nt-big-border' ),
				'desc' => esc_html__('Select hero content vertical position', 'nt-big-border' ),
				'std' => 'center',
				'type' => 'select',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'top',
						'label' => esc_html__( 'top', 'nt-big-border' )
					),
					array(
						'value' => 'bottom',
						'label' => esc_html__( 'bottom', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_errorheaderpaddingtop',
				'label' => esc_html__('Hero padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for 404 page hero section', 'nt-big-border' ),
				'std' => '250',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_errorheaderpaddingbottom',
				'label' => esc_html__('Hero padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for 404 page hero section', 'nt-big-border' ),
				'std' => '200',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and'
			),
			// error page heading tab
			array(
				'id' => 'nt_big_border_error_heading_tab',
				'label' => esc_html__( 'Heading', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'error_page'
			),
			array(
				'id' => 'nt_big_border_error_heading_visibility',
				'label' => esc_html__( '404 heading visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable 404 hero heading with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_error_heading',
				'label' => esc_html__( '404 heading', 'nt-big-border' ),
				'desc' => esc_html__( 'Enter your custom 404 heading', 'nt-big-border' ),
				'std' => '404 Page',
				'type' => 'text',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on),nt_big_border_error_heading_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_error_heading_fontsize',
				'label' => esc_html__('404 page heading font size', 'nt-big-border' ),
				'desc' => esc_html__('Enter 404 page heading font size', 'nt-big-border' ),
				'std' => '40',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on),nt_big_border_error_heading_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_errorheadingcolor',
				'label' => esc_html__( '404 page heading color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on),nt_big_border_error_heading_visibility:is(on)',
				'operator' => 'and'
			),
			// error page slogan tab
			array(
				'id' => 'nt_big_border_error_slogan_tab',
				'label' => esc_html__( 'Slogan', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'error_page'
			),
			array(
				'id' => 'nt_big_border_error_slogan_visibility',
				'label' => esc_html__( '404 slogan visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable 404 hero paragraph/slogan with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_error_slogan',
				'label' => esc_html__( '404 slogan', 'nt-big-border' ),
				'desc' => esc_html__( 'Enter custom 404 page hero slogan here.', 'nt-big-border' ),
				'std' => 'Oops! That page can not be found.',
				'type' => 'text',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on),nt_big_border_error_slogan_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_errorheaderparagraphcolor',
				'label' => esc_html__( '404 page paragraph/slogan color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'error_page',
				'condition' => 'nt_big_border_error_hero_visibility:is(on),nt_big_border_error_slogan_visibility:is(on)',
				'operator' => 'and'
			),
			// error page content tab
			array(
				'id' => 'nt_big_border_error_content_tab',
				'label' => esc_html__( '404 Content', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'error_page'
			),
			array(
				'id' => 'nt_big_border_error_content_alignment',
				'label' => esc_html__('404 page content text alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select 404 page content text alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'error_page',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_error_content_padt',
				'label' => esc_html__('404 page content padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for 404 page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'error_page'
			),
			array(
				'id' => 'nt_big_border_error_content_padb',
				'label' => esc_html__('404 page content padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for 404 page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'error_page'
			),
			array(
				'id' => 'nt_big_border_error_content_bgclr',
				'label' => esc_html__( '404 page content background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'error_page'
			),

			/**  SEARCH PAGE HEADER SETTINGS.  **/
			array(
				'id' => 'nt_big_border_search_herobg_tab',
				'label' => esc_html__( 'Search Hero', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'search_page'
			),
			array(
				'id' => 'nt_big_border_search_hero_visibility',
				'label' => esc_html__( 'Search hero visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable hero section with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'search_page'
			),
			array(
				'id' => 'nt_big_border_searchpageheadbg',
				'label' =>  esc_html__( 'Hero section background image', 'nt-big-border' ),
				'desc' =>  esc_html__( 'You can upload your image for parallax header', 'nt-big-border' ),
				'type' => 'upload',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_searchheaderbgcolor',
				'label' => esc_html__( 'Hero section background color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_search_overlay_visibility',
				'label' => esc_html__( 'Hero overlay color visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable hero section background image overlay color with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_search_hero_overlay',
				'label' => esc_html__( 'Hero overlay color', 'nt-big-border' ),
				'desc' => esc_html__( 'Set your custom overlay color for hero background image.Please make the color opaque to make the background image appear.', 'nt-big-border' ),
				'type' => 'colorpicker-opacity',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on),nt_big_border_search_overlay_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_searchheaderbgheight',
				'label' => esc_html__('Hero section height', 'nt-big-border' ),
				'desc' => esc_html__('Set search page hero section height.', 'nt-big-border' ),
				'std' => '65',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_search_hero_alignment',
				'label' => esc_html__('Hero text alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select hero text alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					)
				)
			),
			array(
				'id' => 'nt_big_border_search_hero_content_position',
				'label' => esc_html__('Hero content position', 'nt-big-border' ),
				'desc' => esc_html__('Select hero content vertically position', 'nt-big-border' ),
				'std' => 'center',
				'type' => 'select',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and',
				'choices' => array(
					array(
						'value' => 'top',
						'label' => esc_html__( 'top', 'nt-big-border' )
					),
					array(
						'value' => 'bottom',
						'label' => esc_html__( 'bottom', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					)
				)
			),
			array(
				'id' => 'nt_big_border_searchheaderpaddingtop',
				'label' => esc_html__('Hero padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for search page hero section', 'nt-big-border' ),
				'std' => '250',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_searchheaderpaddingbottom',
				'label' => esc_html__('Hero padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for search page hero section', 'nt-big-border' ),
				'std' => '200',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and'
			),
			// search page heading tab
			array(
				'id' => 'nt_big_border_search_heading_tab',
				'label' => esc_html__( 'Heading', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'search_page'
			),
			array(
				'id' => 'nt_big_border_search_heading_visibility',
				'label' => esc_html__( '404 heading visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable archive hero heading with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_search_heading',
				'label' => esc_html__( 'Search heading', 'nt-big-border' ),
				'desc' => esc_html__( 'Enter your custom search heading', 'nt-big-border' ),
				'std' => 'Search Page',
				'type' => 'text',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on),nt_big_border_search_heading_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_search_heading_fontsize',
				'label' => esc_html__('Search page heading font size', 'nt-big-border' ),
				'desc' => esc_html__('Enter search page heading font size', 'nt-big-border' ),
				'std' => '40',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on),nt_big_border_search_heading_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_searchheadingcolor',
				'label' => esc_html__( 'Search page heading color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on),nt_big_border_search_heading_visibility:is(on)',
				'operator' => 'and'
			),
			// search page slogan tab
			array(
				'id' => 'nt_big_border_search_slogan_tab',
				'label' => esc_html__( 'Slogan', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'search_page'
			),
			array(
				'id' => 'nt_big_border_search_slogan_visibility',
				'label' => esc_html__( 'Search slogan visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'You can enable or disable search hero paragraph/slogan with %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_search_slogan',
				'label' => esc_html__( 'Search slogan', 'nt-big-border' ),
				'desc' => esc_html__( 'Enter custom search page hero slogan here,', 'nt-big-border' ),
				'std' => 'Search completed',
				'type' => 'text',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on),nt_big_border_search_slogan_visibility:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_searchheaderparagraphcolor',
				'label' => esc_html__( 'Search page paragraph/slogan color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'search_page',
				'condition' => 'nt_big_border_search_hero_visibility:is(on),nt_big_border_search_slogan_visibility:is(on)',
				'operator' => 'and'
			),
			// search page content tab
			array(
				'id' => 'nt_big_border_search_content_tab',
				'label' => esc_html__( 'Search Content', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'search_page'
			),
			array(
				'id' => 'nt_big_border_search_content_alignment',
				'label' => esc_html__('Search page content text alignment', 'nt-big-border' ),
				'desc' => esc_html__('Select search page content text alignment', 'nt-big-border' ),
				'std' => 'left',
				'type' => 'select',
				'section' => 'search_page',
				'choices' => array(
					array(
						'value' => 'left',
						'label' => esc_html__( 'left', 'nt-big-border' )
					),
					array(
						'value' => 'right',
						'label' => esc_html__( 'right', 'nt-big-border' )
					),
					array(
						'value' => 'center',
						'label' => esc_html__( 'center', 'nt-big-border' )
					),
				)
			),
			array(
				'id' => 'nt_big_border_search_content_padt',
				'label' => esc_html__('Search page content padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for search page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'search_page'
			),
			array(
				'id' => 'nt_big_border_search_content_padb',
				'label' => esc_html__('Search page content padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for search page content', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'search_page'
			),
			array(
		 	   'id' => 'nt_big_border_search_content_bgclr',
		 	   'label' => esc_html__( 'Search page content background color', 'nt-big-border' ),
		 	   'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
		 	   'type' => 'colorpicker',
		 	   'section' => 'search_page'
		    ),

			/**  BREADCRUBMS SETTINGS.  **/
			array(
				'id' => 'nt_big_border_bread',
				'label' => esc_html__( 'Default and Fullwidth  Page breadcrubms visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'Breadcrubms visibility %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'breadcrubms',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_blogbreadcrubmscolor',
				'label' => esc_html__( 'Blog Pages Breadcrubms color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'breadcrubms'
			),
			array(
				'id' => 'nt_big_border_blogbreadcrubmshovercolor',
				'label' => esc_html__( 'Blog Pages Breadcrubms hover color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'breadcrubms'
			),
			array(
				'id' => 'nt_big_border_blogbreadcrubmscurrentcolor',
				'label' => esc_html__( 'Blog Pages Breadcrubms current page text color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'breadcrubms'
			),
			array(
				'id' => 'nt_big_border_bread_f_s',
				'label' => esc_html__('Breadcrubms font size', 'nt-big-border' ),
				'desc' => esc_html__('Blog/Pages Header Breadcrubms font size', 'nt-big-border' ),
				'std' => '16',
				'type' => 'numeric-slider',
				'min_max_step' => '0,100',
				'section' => 'breadcrubms',
				'operator' => 'and'
			),


			/**  FOOTER SETTINGS.  **/
			array(
				'id' => 'nt_big_border_widgetize',
				'label' => esc_html__( 'Footer top widgetize area section', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'Choose footer widgetize section %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'off',
				'type' => 'on-off',
				'section' => 'footer_widgetize',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_fw_bg',
				'label' => esc_html__( 'Footer top widgetize area background color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'footer_widgetize',
				'condition' => 'nt_big_border_widgetize:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_fw_pt',
				'label' => esc_html__('Footer top widgetize padding top', 'nt-big-border' ),
				'desc' => esc_html__('Set custom top spacing for footer widgetize area section', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'footer_widgetize',
				'condition' => 'nt_big_border_widgetize:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_fw_pb',
				'label' => esc_html__('Footer top widgetize padding bottom', 'nt-big-border' ),
				'desc' => esc_html__('Set custom bottom spacing for footer widgetize area section', 'nt-big-border' ),
				'std' => '80',
				'type' => 'numeric-slider',
				'min_max_step' => '0,500',
				'section' => 'footer_widgetize',
				'condition' => 'nt_big_border_widgetize:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_fw_h',
				'label' => esc_html__( 'Widget heading color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'footer_widgetize',
				'condition' => 'nt_big_border_widgetize:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_fw_a',
				'label' => esc_html__( 'Widget link color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'footer_widgetize',
				'condition' => 'nt_big_border_widgetize:is(on)',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_fw_ahvr',
				'label' => esc_html__( 'Widget hover link color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'footer_widgetize',
				'condition' => 'nt_big_border_widgetize:is(on)',
				'operator' => 'and'
			),
			/**  FOOTER COLOR SETTINGS.  **/
			array(
				'id' => 'nt_big_border_copyright_tab',
				'label' => esc_html__( 'Footer', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'copyright'
			),
			array(
				'id' => 'nt_big_border_footer_default',
				'label' => esc_html__( 'Footer section visibility', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'Choose default footer section %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'copyright',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_copyright_visibility',
				'label' => esc_html__( 'Footer powered section', 'nt-big-border' ),
				'desc' => sprintf( esc_html__( 'Choose footer powered section %s or %s.', 'nt-big-border' ), '<code>on</code>', '<code>off</code>' ),
				'std' => 'on',
				'type' => 'on-off',
				'section' => 'copyright',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_copyright',
				'label' => 'Footer copyright',
				'std' => 'Launch beautiful, responsive websites faster with themes',
				'rows' => '10',
				'type' => 'textarea',
				'section' => 'copyright'
			),
			// footer copyright color
			array(
				'id' => 'nt_big_border_copyright_color_tab',
				'label' => esc_html__( 'Footer Color', 'nt-big-border' ),
				'type' => 'tab',
				'section' => 'copyright'
			),
			array(
				'id' => 'nt_big_border_footerbgcolor',
				'label' => esc_html__( 'Footer background color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'copyright'
			),
			array(
				'id' => 'nt_big_border_footer_p_c',
				'label' => esc_html__( 'Footer copyright text color ', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'copyright'
			),
			array(
				'id' => 'nt_big_border_footer_h_c',
				'label' => esc_html__( 'Footer widget heading color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'copyright'
			),
			array(
				'id' => 'nt_big_border_footer_t_c',
				'label' => esc_html__( 'Footer general text color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'copyright'
			),
			array(
				'id' => 'nt_big_border_footer_a_c',
				'label' => esc_html__( 'Footer general a( link/URL ) color', 'nt-big-border' ),
				'desc' => esc_html__( 'Please select color', 'nt-big-border' ),
				'type' => 'colorpicker',
				'section' => 'copyright'
			),

			//GOOGLE FONTS  SETTINGS.
			array(
				'id' => 'body_google_fonts',
				'label' => esc_html__( 'Google Fonts', 'nt-big-border'  ),
				'desc' => esc_html__( 'Add Google Font and after the save settings follow these steps Dashbont-nt-big-border > Appearance > Theme Options > Typography', 'nt-big-border' ),
				'type' => 'google-fonts',
				'section' => 'google_fonts',
				'operator' => 'and'
			),
			//TYPOGRAPHY  SETTINGS.
			array(
				'id' => 'nt_big_border_typgrph',
				'label' => esc_html__( 'Typography', 'nt-big-border' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'nt-big-border' ),
				'type' => 'typography',
				'section' => 'typography',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_typgrph1',
				'label' => esc_html__( 'Typography h1', 'nt-big-border' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'nt-big-border' ),
				'type' => 'typography',
				'section' => 'typography',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_typgrph2',
				'label' => esc_html__( 'Typography h2', 'nt-big-border' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'nt-big-border' ),
				'type' => 'typography',
				'section' => 'typography',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_typgrph3',
				'label' => esc_html__( 'Typography h3', 'nt-big-border' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'nt-big-border' ),
				'type' => 'typography',
				'section' => 'typography',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_typgrph4',
				'label' => esc_html__( 'Typography h4', 'nt-big-border' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'nt-big-border' ),
				'type' => 'typography',
				'section' => 'typography',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_typgrph5',
				'label' => esc_html__( 'Typography h5', 'nt-big-border' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'nt-big-border' ),
				'type' => 'typography',
				'section' => 'typography',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_typgrph6',
				'label' => esc_html__( 'Typography h6', 'nt-big-border' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'nt-big-border' ),
				'type' => 'typography',
				'section' => 'typography',
				'operator' => 'and'
			),
			array(
				'id' => 'nt_big_border_typgrph7',
				'label' => esc_html__( 'Typography p', 'nt-big-border' ),
				'desc' => esc_html__( 'The Typography option type is for adding typography styles to your site.', 'nt-big-border' ),
				'type' => 'typography',
				'section' => 'typography',
				'operator' => 'and'
			)
		) // end array
	); // end function

	/* allow settings to be filtered before saving */
	$nt_big_border_custom_settings = apply_filters( ot_settings_id() . '_args', $nt_big_border_custom_settings );

	/* settings are not the same update the DB */
	if ( $nt_big_border_saved_settings !== $nt_big_border_custom_settings ) {
		update_option( ot_settings_id(), $nt_big_border_custom_settings );
	}

	/* Lets OptionTree know the UI Builder is being overridden */
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;

}
