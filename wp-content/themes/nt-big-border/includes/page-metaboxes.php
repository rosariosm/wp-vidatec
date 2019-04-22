<?php

add_filter( 'rwmb_meta_boxes', 'nt_big_border_register_meta_boxes' );
function nt_big_border_register_meta_boxes( $meta_boxes ) {
$prefix = 'nt_big_border_';
$meta_boxes = array();


/* ----------------------------------------------------- */
// Frontpage Settings
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id' => 'pagesettings',
	'title' => 'Page Settings',
	'pages' => array( 'page' ),
	'context' => 'normal',
	'tab_style' => 'box',
	'priority' => 'high',
	'hide' => array( 'template' => 'one-page-template.php' ),
	'tabs' => array(
		'tab1' => 'Page Hero',
		'tab2' => 'Page Title',
		'tab3' => 'Page Subtitle',
		'tab4' => 'Page Content',
		'tab5' => 'Page Sidebar',
	),
	'fields' => array(
		// PAGE HERO TAB
		array(
			'name' => esc_html__('Page Hero Options', 'nt-big-border'),
			'id' => $prefix . 'page_hero_tab',
			'type' => 'heading',
			'tab' => 'tab1',
		),
		array(
			'name' => esc_html__('Disable page hero', 'nt-big-border'),
			'id' => $prefix . 'hero_visibility',
			'type' => 'checkbox',
			'std' => 0,
			'tab' => 'tab1'
		),
		array(
			'type' => 'divider',
			'tab' => 'tab1',
		),
		array(
			'name' => esc_html__( 'Hero background Image', 'nt-big-border' ),
			'id' => $prefix . "page_bg_image",
			'type' => 'image_advanced',
			'max_file_uploads' => 1,
			'tab' => 'tab1',
		),
		array(
			'name' => esc_html__( 'Page background color', 'nt-big-border' ),
			'id' => $prefix . "page_bg_color",
			'type' => 'color',
			'tab' => 'tab1'
		),
		array(
			'type' => 'divider',
			'tab' => 'tab1',
		),
		array(
			'name' => esc_html__('Disable background image overlay color', 'nt-big-border'),
			'id' => $prefix . 'page_hero_overlay_visibility',
			'type' => 'checkbox',
			'std' => 0,
			'tab' => 'tab1'
		),
		array(
			'name' => esc_html__('Custom background image overlay color', 'nt-big-border'),
			'id' => $prefix . 'page_hero_overlay',
			'type' => 'color',
			'alpha_channel' => true,
			'tab' => 'tab1',
		),
		array(
			'type' => 'divider',
			'tab' => 'tab1',
		),
		array(
			'name' => esc_html__( 'Page hero height ( % )', 'nt-big-border' ),
			'id'   => $prefix . "page_hero_height",
			'type' => 'number',
			'min' => 0,
			'step' => 1,
			'tab' => 'tab1',
		),
		array(
			'name' => esc_html__( 'Page hero padding top ( px )', 'nt-big-border' ),
			'id'   => $prefix . "header_p_top",
			'type' => 'number',
			'min' => 0,
			'step' => 1,
			'tab' => 'tab1',
		),
		array(
			'name' => esc_html__( 'Page hero padding bottom ( px )', 'nt-big-border' ),
			'id'   => $prefix . "header_p_bottom",
			'type' => 'number',
			'min' => 0,
			'step' => 1,
			'tab' => 'tab1',
		),
		array(
			'type' => 'divider',
			'tab' => 'tab1',
		),
		array(
			'name' => esc_html__( 'Page hero text alignment', 'nt-big-border' ),
			'id' => $prefix . "page_hero_align",
			'type' => 'select',
			'options' => array(
				'left' => esc_html__( 'left', 'nt-big-border' ),
				'right' => esc_html__( 'right', 'nt-big-border' ),
				'center' => esc_html__( 'center', 'nt-big-border' ),
			),
			'multiple' => false,
			'std' => '',
			'placeholder' => esc_html__( 'Select an Item', 'nt-big-border' ),
			'tab' => 'tab1'
		),
		array(
			'name' => esc_html__( 'Page hero content position', 'nt-big-border' ),
			'id' => $prefix . "page_hero_content_position",
			'type' => 'select',
			'options' => array(
				'top' => esc_html__( 'top', 'nt-big-border' ),
				'bottom' => esc_html__( 'bottom', 'nt-big-border' ),
				'center' => esc_html__( 'center', 'nt-big-border' ),
			),
			'multiple' => false,
			'std' => '',
			'placeholder' => esc_html__( 'Select an Item', 'nt-big-border' ),
			'tab' => 'tab1'
		),
		// PAGE TITLE TAB
		array(
			'name' => esc_html__('Page Title Options', 'nt-big-border'),
			'id' => $prefix . 'page_title_tab',
			'type' => 'heading',
			'tab' => 'tab2',
		),
		array(
			'name' => 'Disable page title',
			'id'   => $prefix . "disable_title",
			'type' => 'checkbox',
			'std' => 0,
			'tab' => 'tab2',
		),
		array(
			'type' => 'divider',
			'tab' => 'tab2',
		),
		array(
			'name' => 'Alternate page title',
			'id' => $prefix . "alt_title",
			'clone' => false,
			'type' => 'text',
			'std' => '',
			'tab' => 'tab2',
		),
		array(
			'type' => 'divider',
			'tab' => 'tab2',
		),
		array(
			'name' => esc_html__( 'Page title color', 'nt-big-border' ),
			'id'   => $prefix . "page_text_color",
			'type' => 'color',
			'tab' => 'tab2',
		),
		array(
			'name' => esc_html__('Page title font size', 'nt-big-border'),
			'id' => $prefix . 'page_hero_title_fs',
			'type' => 'number',
			'min' => 0,
			'step' => 1,
			'tab' => 'tab2',
		),
		array(
			'name' => esc_html__('Page title margin-bottom', 'nt-big-border'),
			'id' => $prefix . 'page_hero_title_mb',
			'type' => 'number',
			'min' => 0,
			'step' => 1,
			'tab' => 'tab2',
		),
		// PAGE SUBTITLE TAB
		array(
			'name' => esc_html__('Page Subtitle Options', 'nt-big-border'),
			'id' => $prefix . 'page_subtitle_tab',
			'type' => 'heading',
			'tab' => 'tab3',
		),
		array(
			'name' => 'Disable Page Subtitle',
			'id'   => $prefix . "disable_subtitle",
			'type' => 'checkbox',
			'std' => 0,
			'tab' => 'tab3',
		),
		array(
			'type' => 'divider',
			'tab' => 'tab3',
		),
		array(
			'name' => esc_html__( 'Page Subtitle / Rich Text Editor', 'nt-big-border' ),
			'id' => $prefix . "subtitle",
			'type' => 'wysiwyg',
			'raw' => false,
			'options' => array(
				'textarea_rows' => 4,
				'teeny' => true,
				'media_buttons' => false,
			),
			'tab' => 'tab3',
		),
		array(
			'type' => 'divider',
			'tab' => 'tab3',
		),
		array(
			'name' => esc_html__('Page subtitle font size', 'nt-big-border'),
			'id' => $prefix . 'page_subtitle_fs',
			'type' => 'number',
			'min' => 0,
			'step' => 1,
			'tab' => 'tab3',
		),
		array(
			'name' => esc_html__( 'Page subtitle color', 'nt-big-border' ),
			'id'   => $prefix . "page_subtitle_color",
			'type' => 'color',
			'tab' => 'tab3',
		),
		// PAGE CONTENT TAB
		array(
			'name' => esc_html__('Page Content Options', 'nt-big-border'),
			'id' => $prefix . 'page_content_tab',
			'type' => 'heading',
			'tab' => 'tab4',
		),
		array(
			'name' => esc_html__( 'Page content background color', 'nt-big-border' ),
			'id'   => $prefix . "page_content_bgclr",
			'type' => 'color',
			'tab' => 'tab4',
		),
		array(
			'name' => esc_html__( 'Page content padding top', 'nt-big-border' ),
			'id'   => $prefix . "page_content_padt",
			'type' => 'number',
			'min' => 0,
			'step' => 1,
			'tab' => 'tab4',
		),
		array(
			'name' => esc_html__( 'Page content padding bottom', 'nt-big-border' ),
			'id'   => $prefix . "page_content_padb",
			'type' => 'number',
			'min' => 0,
			'step' => 1,
			'tab' => 'tab4',
		),
		// PAGE CONTENT TAB
		array(
			'name' => esc_html__('Page Sidebar Options', 'nt-big-border'),
			'id' => $prefix . 'page_content_tab',
			'type' => 'heading',
			'tab' => 'tab5',
		),
		array(
			'name' => esc_html__( 'Page sidebar', 'nt-big-border' ),
			'id' => $prefix . "pagelayout",
			'type' => 'select',
			'options' => array(
				'left-sidebar' => esc_html__( 'left', 'nt-big-border' ),
				'right-sidebar' => esc_html__( 'right', 'nt-big-border' ),
				'full-width' => esc_html__( 'full', 'nt-big-border' ),
			),
			'multiple' => false,
			'std' => 'right-sidebar',
			'placeholder' => esc_html__( 'Select an Item', 'nt-big-border' ),
			'tab' => 'tab5'
		)
	)
);


$meta_boxes[] = array(
	'title' 		=> esc_html__( 'Metabox menu', 'nt-big-border' ),
	'pages'    		=> array( 'page' ),
	'clone-group' 	=> 'onepage-clone-group',
	'id' 			=> 'page_menu',
	'context' 		=> 'side',
	'priority' 		=> 'low',

	'show'   => array(
		'template'    => array( 'one-page-template.php' )
	),
	'fields' 		=> array(
		array(
			'name' 		=> esc_html__('Header menu type', 'nt-big-border'),
			'desc' 		=> esc_html__('Select header menu type', 'nt-big-border'),
			'id'   		=> $prefix . 'menutype',
			'type' 		=> 'select',
			'options'  	=> array(
				'm' 	=> esc_html__( 'Metabox menu', 'nt-big-border' ),
				'p' 	=> esc_html__( 'Default Primary menu', 'nt-big-border' ),
			),
			'std'         => 'm'
		),
		array(
			'name'  		=> esc_html__( 'Menu item name', 'nt-big-border' ),
			'desc'  		=> esc_html__( 'Format: Any text', 'nt-big-border' ),
			'id'    		=> $prefix . 'section_name',
			'type'  		=> 'text',
			'std'   		=> esc_html__( 'Menu item name', 'nt-big-border' ),
			'class' 		=> 'custom-class',
			'clone' 		=> true,
			'sort_clone' 	=> true,
			'clone-group' 	=> 'onepage-clone-group',
		),
		array(
			'name'  		=> esc_html__( 'Menu item Url', 'nt-big-border' ),
			'desc'  		=> esc_html__( 'Format: #sectionname or http://yoururl.com', 'nt-big-border' ),
			'id'    		=> $prefix . 'section_url',
			'type'  		=> 'text',
			'std'   		=> '#sectionname',
			'class' 		=> 'custom-class',
			'clone' 		=> true,
			'sort_clone' 	=> true,
			'clone-group' 	=> 'onepage-clone-group',
		),
	),
);



$meta_boxes[] = array(
	'id' => 'pricesettings',
	'title' => 'Price table',
	'pages' => array( 'price' ),
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name'		=> esc_html__( 'Select price table type - color', 'nt-big-border' ),
			'id'		=> $prefix . "categories",
			'type'		=> 'select',
			'options'	=> array(
			    'select'					=> esc_html__( 'Select a section', 'nt-big-border' ),
				'pricing-item--featured'	=> esc_html__( 'Best', 'nt-big-border' ),
				'normal'					=> esc_html__( 'Normal', 'nt-big-border' ),
			),
			'multiple'	=> false,
			'std'		=> 'Select a Section'
		),
		array(
			'name'		=> esc_html__( 'Price pack name', 'nt-big-border' ),
			'id'		=> $prefix . "name",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> 'Basic'
		),
	    array(
			'name'		=> esc_html__( 'Pack description', 'nt-big-border' ),
			'id'		=> $prefix . "description",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> esc_html__( 'Lorem Ipsum is simply dummy text of the printing', 'nt-big-border' )
		),
		array(
			'name'		=> esc_html__( 'Price currency', 'nt-big-border' ),
			'id'		=> $prefix . "currency",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '$'
		),
		array(
			'name'		=> esc_html__( 'Price amount', 'nt-big-border' ),
			'id'		=> $prefix . "amount",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '120'
		),
		array(
			'name'		=> esc_html__( 'Price period', 'nt-big-border' ),
			'id'		=> $prefix . "period",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> 'month'
		),
		array(
			'name'  	=> esc_html__( 'Table Features List', 'nt-big-border' ),
			'desc'  	=> esc_html__( 'Format: 140GB or any text', 'nt-big-border' ),
			'id'    	=> $prefix . 'features_list',
			'type'  	=> 'text',
			'std'   	=> esc_html__( 'Enhanced Security', 'nt-big-border' ),
			'class' 	=> 'custom-class',
			'clone' 	=> true,
			'clone-group' => 'my-clone-group','clone-group' => 'my-clone-group',
            ),

		array(
			'name'		=> esc_html__( 'Price button link', 'nt-big-border' ),
			'id'		=> $prefix . "btn_link",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '#'
		),

		array(
			'name'		=> esc_html__( 'Price button link text', 'nt-big-border' ),
			'id'		=> $prefix . "btn_title",
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> esc_html__( 'Select plan', 'nt-big-border' ),
		),

		array(
			'name'		=> esc_html__( 'Select target type', 'nt-big-border' ),
			'id'		=> $prefix . "btn_target",
			'type'		=> 'select',
			'multiple'	=> false,
			'std'		=> '_blank',
			'options'	=> array(
				'_blank'	=> '_blank',
				'_self'		=> '_self',
				'_parent'	=> '_parent',
				'_top'		=> '_top',
			)
		),

	)
);


$meta_boxes[] = array(
	'id' 		=> 'portfoliosettings',
	'title' 	=> esc_html__( 'Portfolio Custom Options', 'nt-big-border' ),
	'pages' 	=> array( 'portfolio' ),
	'context' 	=> 'normal',
	'priority' 	=> 'high',
	'fields' 	=> array(

		array(
			'name' => esc_html__( 'Images', 'nt-big-border'),
			'desc' => esc_html__( 'Select the images from the media library or upload your new ones.', 'nt-big-border'),
			'id'   => $prefix . 'images',
			'type' => 'image_advanced',
		),
		array(
			'name'  => esc_html__( 'Portfolio services list', 'nt-big-border' ),
			'desc'  => esc_html__( 'Format: Web Design, PSD and more', 'nt-big-border' ),
			'id'    => $prefix . 'services_list',
			'type'  => 'text',
			'std'   => 'Web Design',
			'clone' => true,
			'clone-group' => 'room-clone-group','clone-group' => 'room-clone-group',
        ),
		array(
			'name' => esc_html__('M4V File URL', 'nt-big-border'),
			'desc' => esc_html__('The URL to the .m4v video file.', 'nt-big-border'),
			'id'   => $prefix . 'video_m4v',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('OGV File URL', 'nt-big-border'),
			'desc' => esc_html__('The URL to the .ogv video file.', 'nt-big-border'),
			'id'   => $prefix . 'video_ogv',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('WEBM File URL', 'nt-big-border'),
			'desc' => esc_html__('The URL to the .webm video file.', 'nt-big-border'),
			'id'   => $prefix . 'video_webm',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('Embeded Code', 'nt-big-border'),
			'desc' => esc_html__('Select the preview image for this video.', 'nt-big-border'),
			'id'   => $prefix . 'video_embed',
			'type' => 'textarea',
			'rows' => 8
		),
		array(
			'name' => esc_html__('SoundCloud', 'nt-big-border'),
			'desc' => esc_html__('Enter the url of the soundcloud audio.', 'nt-big-border'),
			'id'   => $prefix . 'audio_sc',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('Color', 'nt-big-border'),
			'desc' => esc_html__('Choose the color.', 'nt-big-border'),
			'id'   => $prefix . 'audio_sc_color',
			'type' => 'color',
			'std'  => '#ff7700'
		)
	)
);


$meta_boxes[] = array(
	'title' 		=> esc_html__( 'Member Social Box', 'nt-big-border' ),
	'pages'    		=> array( 'team' ),
	'clone-group' 	=> 'my-clone-group','clone-group' => 'my-clone-group',
	'id' 			=> 'mm_review',
	'context'     	=> 'normal',
	'priority'    	=> 'high',
	'fields' 		=> array(

			array(
				'name'		=> esc_html__( 'Team Job', 'nt-big-border' ),
				'id'		=> $prefix . "team_job",
				'clone'		=> false,
				'type'		=> 'text',
				'std'		=>  esc_html__( 'Developer', 'nt-big-border' ),
			),
			array(
				'name'		=> esc_html__( 'Select social icon font family', 'nt-big-border' ),
				'id'		=> $prefix . "font_family",
				'type'		=> 'select',
				'multiple'	=> false,
				'std'		=>  esc_html__( 'etline', 'nt-big-border' ),
				'options'	=> array(
					'select'		=> esc_html__( 'Select font-family', 'nt-big-border' ),
					'fontawesome'	=> esc_html__( 'Fontawesome', 'nt-big-border' ),
					'socicon'		=> esc_html__( 'Socicon', 'nt-big-border' ),
					'etline'		=> esc_html__( 'Et-line', 'nt-big-border' ),
				)
			),
			array(
				'name'		=> esc_html__( 'Select target type', 'nt-big-border' ),
				'id'		=> $prefix . "social_target",
				'type'		=> 'select',
				'multiple'	=> false,
				'std'		=> '_blank',
				'options'	=> array(
					'_blank'		=> '_blank',
					'_self'			=> '_self',
					'_parent'		=> '_parent',
					'_top'			=> '_top',
				)
			),

			array(
				'name'  => esc_html__( 'Social Icon Name', 'nt-big-border' ),
				'desc'  => esc_html__( 'Format: facebook. Enter social icon name here', 'nt-big-border' ),
				'id'    => $prefix . 'social_icon',
				'type'  => 'text',
				'std'   => 'facebook',
				'class' => 'custom-class',
				'clone' => true,
				'clone-group' => 'my-clone-group','clone-group' => 'my-clone-group',
			),

			array(
				'name'  => esc_html__( 'Social Url', 'nt-big-border' ),
				'desc'  => esc_html__( 'Format: http://facebook.com', 'nt-big-border' ),
				'id'    => $prefix . 'social_url',
				'type'  => 'text',
				'std'   => '#',
				'class' => 'custom-class',
				'clone' => true,
				'clone-group' => 'my-clone-group',
			),
		),
	);

/*-----------------------------------------------------------------------------------*/
/*  Metaboxes for blog posts
/*-----------------------------------------------------------------------------------*/

    /* Gallery Post Format ------------*/

$meta_boxes[] = array(
	'title'    => esc_html__('Gallery Settings', 'nt-big-border'),
	'pages'    => array('post'),
	'fields' => array(
		array(
			'name' => esc_html__('Select Images', 'nt-big-border'),
			'desc' => esc_html__('Select the images from the media library or upload your new ones.', 'nt-big-border'),
			'id'   => $prefix . 'gallery_image',
			'type' => 'image_advanced',
		)
	)
);

    /* Quote Post Format ------------*/

$meta_boxes[] = array(
	'title'    => esc_html__('Quote Settings', 'nt-big-border'),
	'pages'    => array('post'),
	'fields' => array(
		array(
			'name' => esc_html__('The Quote', 'nt-big-border'),
			'desc' => esc_html__('Write your quote in this field.', 'nt-big-border'),
			'id'   => $prefix . 'quote_text',
			'type' => 'textarea',
			'rows' => 5
		),
		array(
			'name' => esc_html__('The Author', 'nt-big-border'),
			'desc' => esc_html__('Enter the name of the author of this quote.', 'nt-big-border'),
			'id'   => $prefix . 'quote_author',
			'type' => 'text'
		),
		array(
			'name' => esc_html__('Background Color', 'nt-big-border'),
			'desc' => esc_html__('Choose the background color for this quote.', 'nt-big-border'),
			'id'   => $prefix . 'quote_bg',
			'type' => 'color'
		),
		array(
			'name' => esc_html__('Background Opacity', 'nt-big-border'),
			'desc' => esc_html__('Choose the opacity of the background color.', 'nt-big-border'),
			'id'   => $prefix . 'quote_bg_opacity',
			'type' => 'text',
			'std' => 80
		)
	)
);



    /* Audio Post Format ------------*/

$meta_boxes[] = array(
	'title'    => esc_html__('Audio Settings', 'nt-big-border'),
	'pages'    => array('post'),
	'fields' => array(
		array(
		'type' => 'heading',
		'name' => esc_html__( 'These settings enable you to embed audio in your posts. Note that for audio, you must supply both MP3 and OGG files to satisfy all browsers. For poster you can select a featured image.', 'nt-big-border' ),
		'id'   => 'audio_head'
		),
		array(
			'name' => esc_html__('MP3 File URL', 'nt-big-border'),
			'desc' => esc_html__('The URL to the .mp3 audio file.', 'nt-big-border'),
			'id'   => $prefix . 'audio_mp3',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('OGA File URL', 'nt-big-border'),
			'desc' => esc_html__('The URL to the .oga, .ogg audio file.', 'nt-big-border'),
			'id'   => $prefix . 'audio_ogg',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('Divider', 'nt-big-border'),
			'desc' => esc_html__('divider.', 'nt-big-border'),
			'id'   => $prefix . 'audio_divider',
			'type' => 'divider'
		),
		array(
			'name' => esc_html__('SoundCloud', 'nt-big-border'),
			'desc' => esc_html__('Enter the url of the soundcloud audio.', 'nt-big-border'),
			'id'   => $prefix . 'audio_sc',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('Color', 'nt-big-border'),
			'desc' => esc_html__('Choose the color.', 'nt-big-border'),
			'id'   => $prefix . 'audio_sc_color',
			'type' => 'color',
			'std'  => '#ff7700'
		)
	)
);

	/* Video Post Format ------------*/

	$meta_boxes[] = array(
	'title'    => esc_html__('Video Settings', 'nt-big-border'),
	'pages'    => array('post'),
	'fields' => array(
		array(
		'type' => 'heading',
		'name' => esc_html__( 'These settings enable you to embed videos into your posts. Note that for video, you must supply an M4V file to satisfy both HTML5 and Flash solutions. The optional OGV format is used to increase x-browser support for HTML5 browsers such as Firefox and Opera. For the poster, you can select a featured image.', 'nt-big-border' ),
		'id'   => 'video_head'
		),
		array(
			'name' => esc_html__('M4V File URL', 'nt-big-border'),
			'desc' => esc_html__('The URL to the .m4v video file.', 'nt-big-border'),
			'id'   => $prefix . 'video_m4v',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('OGV File URL', 'nt-big-border'),
			'desc' => esc_html__('The URL to the .ogv video file.', 'nt-big-border'),
			'id'   => $prefix . 'video_ogv',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('WEBM File URL', 'nt-big-border'),
			'desc' => esc_html__('The URL to the .webm video file.', 'nt-big-border'),
			'id'   => $prefix . 'video_webm',
			'type' => 'text',
		),
		array(
			'name' => esc_html__('Embeded Code', 'nt-big-border'),
			'desc' => esc_html__('Select the preview image for this video.', 'nt-big-border'),
			'id'   => $prefix . 'video_embed',
			'type' => 'textarea',
			'rows' => 8
		)
	)
	);


	//end
	return $meta_boxes;
}

?>
