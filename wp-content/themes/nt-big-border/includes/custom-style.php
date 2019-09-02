<?php

function nt_big_border_css_options() {

    /* CSS to output */
    $theCSS = '';

	// admin bar
	if( is_admin_bar_showing() && ! is_customize_preview() ) {
		$theCSS .= '
                .template-nav-style-1, .template-nav-style-2{
                    margin-top: 0px;
                }
                #navbar-sticky.sticky.template-nav-style-1 {
                    top: 32px;
                }
                @media ( max-width: 768px ) {
                    #navbar-sticky.sticky.template-nav-style-1 {
                        top: 46px;
                    }
                }
                @media ( max-width: 600px ) {
                    #navbar-sticky.sticky.template-nav-style-1 {
                        top: 0px;
                    }
                }

		';
	}

    if (! function_exists('nt_big_border_hex2rgb')) {
        function nt_big_border_hex2rgb($hex)
        {
            $hex = str_replace("#", "", $hex);

            if (strlen($hex) == 3) {
                $r = hexdec(substr($hex, 0, 1).substr($hex, 0, 1));
                $g = hexdec(substr($hex, 1, 1).substr($hex, 1, 1));
                $b = hexdec(substr($hex, 2, 1).substr($hex, 2, 1));
            } else {
                $r = hexdec(substr($hex, 0, 2));
                $g = hexdec(substr($hex, 2, 2));
                $b = hexdec(substr($hex, 4, 2));
            }
            $rgb = array($r, $g, $b);

            return $rgb; // returns an array with the rgb values
        }
    }



    if ( 'off' != ot_get_option( 'nt_big_border_pre' ) ) {
        $pretype = ot_get_option( 'nt_big_border_pre_type' );

        $prebg = ot_get_option('pre_bg');
        $prebg = $prebg != '' ? $prebg : '#fff';
        $spinclr = ot_get_option('pre_spin');

        if ('default' != $pretype) {
            $theCSS .= '#preloader { background-color: '. esc_attr( $prebg ) .';overflow: hidden;background-repeat: no-repeat;background-position: center center;height: 100%;left: 0;position: fixed;top: 0;width: 100%;z-index: 999999999;}';

            $spinrgb = nt_big_border_hex2rgb( $spinclr );
            $spin_rgb = implode(", ", $spinrgb);

            if ('01' == $pretype) {
                $theCSS .= '.loader01 {width: 56px;height: 56px;border: 8px solid '. $spinclr .';border-right-color: transparent;border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }.loader01::after {content: "";width: 8px;height: 8px;background: '. $spinclr .';border-radius: 50%;position: absolute;top: -1px;left: 33px; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
            }

            if ('02' == $pretype) {
                $theCSS .= '.loader02 {width: 56px;height: 56px;border: 8px solid rgba('. $spin_rgb .', 0.25);border-top-color: '. $spinclr .';border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
            }

            if ('03' == $pretype) {
                $theCSS .= '.loader03 {width: 56px;height: 56px;border: 8px solid transparent;border-top-color: '. $spinclr .';border-bottom-color: '. $spinclr .';border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
            }

            if ('04' == $pretype) {
                $theCSS .= '.loader04 {width: 56px;height: 56px;border: 2px solid rgba('. $spin_rgb .', 0.5);border-radius: 50%;position: relative;animation: loader-rotate 1s ease-in-out infinite;top: 50%;margin: -28px auto 0; }.loader04::after {content: "";width: 10px;height: 10px;border-radius: 50%;background: '. $spinclr .';position: absolute;top: -6px;left: 50%;margin-left: -5px; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
            }

            if ('05' == $pretype) {
                $theCSS .= '.loader05 {width: 56px;height: 56px;border: 4px solid '. $spinclr .';border-radius: 50%;position: relative;animation: loader-scale 1s ease-out infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-scale {0% {transform: scale(0);opacity: 0; }50% {opacity: 1; }100% {transform: scale(1);opacity: 0; } }';
            }

            if ('06' == $pretype) {
                $theCSS .= '.loader06 {width: 56px;height: 56px;border: 4px solid transparent;border-radius: 50%;position: relative;top: 50%;margin: -28px auto 0; }.loader06::before {content: "";border: 4px solid rgba('. $spin_rgb .', 0.5);border-radius: 50%;width: 67.2px;height: 67.2px;position: absolute;top: -9.6px;left: -9.6px;animation: loader-scale 1s ease-out infinite;animation-delay: 1s;opacity: 0; }.loader06::after {content: "";border: 4px solid '. $spinclr .';border-radius: 50%;width: 56px;height: 56px;position: absolute;top: -4px;left: -4px;animation: loader-scale 1s ease-out infinite;animation-delay: 0.5s; }@keyframes loader-scale {0% {transform: scale(0);opacity: 0; }50% {opacity: 1; }100% {transform: scale(1);opacity: 0; } }';
            }

            if ('07' == $pretype) {
                $theCSS .= '.loader07 {width: 16px;height: 16px;border-radius: 50%;position: relative;animation: loader-circles 1s linear infinite;top: 50%;margin: -8px auto 0; }@keyframes loader-circles {0% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.05), 19px -19px 0 0 rgba('. $spin_rgb .', 0.1), 27px 0 0 0 rgba('. $spin_rgb .', 0.2), 19px 19px 0 0 rgba('. $spin_rgb .', 0.3), 0 27px 0 0 rgba('. $spin_rgb .', 0.4), -19px 19px 0 0 rgba('. $spin_rgb .', 0.6), -27px 0 0 0 rgba('. $spin_rgb .', 0.8), -19px -19px 0 0 '. $spinclr .'; }12.5% {box-shadow: 0 -27px 0 0 '. $spinclr .', 19px -19px 0 0 rgba('. $spin_rgb .', 0.05), 27px 0 0 0 rgba('. $spin_rgb .', 0.1), 19px 19px 0 0 rgba('. $spin_rgb .', 0.2), 0 27px 0 0 rgba('. $spin_rgb .', 0.3), -19px 19px 0 0 rgba('. $spin_rgb .', 0.4), -27px 0 0 0 rgba('. $spin_rgb .', 0.6), -19px -19px 0 0 rgba('. $spin_rgb .', 0.8); }25% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.8), 19px -19px 0 0 '. $spinclr .', 27px 0 0 0 rgba('. $spin_rgb .', 0.05), 19px 19px 0 0 rgba('. $spin_rgb .', 0.1), 0 27px 0 0 rgba('. $spin_rgb .', 0.2), -19px 19px 0 0 rgba('. $spin_rgb .', 0.3), -27px 0 0 0 rgba('. $spin_rgb .', 0.4), -19px -19px 0 0 rgba('. $spin_rgb .', 0.6); }37.5% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.6), 19px -19px 0 0 rgba('. $spin_rgb .', 0.8), 27px 0 0 0 '. $spinclr .', 19px 19px 0 0 rgba('. $spin_rgb .', 0.05), 0 27px 0 0 rgba('. $spin_rgb .', 0.1), -19px 19px 0 0 rgba('. $spin_rgb .', 0.2), -27px 0 0 0 rgba('. $spin_rgb .', 0.3), -19px -19px 0 0 rgba('. $spin_rgb .', 0.4); }50% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.4), 19px -19px 0 0 rgba('. $spin_rgb .', 0.6), 27px 0 0 0 rgba('. $spin_rgb .', 0.8), 19px 19px 0 0 '. $spinclr .', 0 27px 0 0 rgba('. $spin_rgb .', 0.05), -19px 19px 0 0 rgba('. $spin_rgb .', 0.1), -27px 0 0 0 rgba('. $spin_rgb .', 0.2), -19px -19px 0 0 rgba('. $spin_rgb .', 0.3); }62.5% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.3), 19px -19px 0 0 rgba('. $spin_rgb .', 0.4), 27px 0 0 0 rgba('. $spin_rgb .', 0.6), 19px 19px 0 0 rgba('. $spin_rgb .', 0.8), 0 27px 0 0 '. $spinclr .', -19px 19px 0 0 rgba('. $spin_rgb .', 0.05), -27px 0 0 0 rgba('. $spin_rgb .', 0.1), -19px -19px 0 0 rgba('. $spin_rgb .', 0.2); }75% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.2), 19px -19px 0 0 rgba('. $spin_rgb .', 0.3), 27px 0 0 0 rgba('. $spin_rgb .', 0.4), 19px 19px 0 0 rgba('. $spin_rgb .', 0.6), 0 27px 0 0 rgba('. $spin_rgb .', 0.8), -19px 19px 0 0 '. $spinclr .', -27px 0 0 0 rgba('. $spin_rgb .', 0.05), -19px -19px 0 0 rgba('. $spin_rgb .', 0.1); }87.5% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.1), 19px -19px 0 0 rgba('. $spin_rgb .', 0.2), 27px 0 0 0 rgba('. $spin_rgb .', 0.3), 19px 19px 0 0 rgba('. $spin_rgb .', 0.4), 0 27px 0 0 rgba('. $spin_rgb .', 0.6), -19px 19px 0 0 rgba('. $spin_rgb .', 0.8), -27px 0 0 0 '. $spinclr .', -19px -19px 0 0 rgba('. $spin_rgb .', 0.05); }100% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.05), 19px -19px 0 0 rgba('. $spin_rgb .', 0.1), 27px 0 0 0 rgba('. $spin_rgb .', 0.2), 19px 19px 0 0 rgba('. $spin_rgb .', 0.3), 0 27px 0 0 rgba('. $spin_rgb .', 0.4), -19px 19px 0 0 rgba('. $spin_rgb .', 0.6), -27px 0 0 0 rgba('. $spin_rgb .', 0.8), -19px -19px 0 0 '. $spinclr .'; } }';
            }

            if ('08' == $pretype) {
                $theCSS .= '.loader08 {width: 20px;height: 20px;position: relative;animation: loader08 1s ease infinite;top: 50%;margin: -46px auto 0; }@keyframes loader08 {0%, 100% {box-shadow: -13px 20px 0 '. $spinclr .', 13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 46px 0 rgba('. $spin_rgb .', 0.2), -13px 46px 0 rgba('. $spin_rgb .', 0.2); }25% {box-shadow: -13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 20px 0 '. $spinclr .', 13px 46px 0 rgba('. $spin_rgb .', 0.2), -13px 46px 0 rgba('. $spin_rgb .', 0.2); }50% {box-shadow: -13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 46px 0 '. $spinclr .', -13px 46px 0 rgba('. $spin_rgb .', 0.2); }75% {box-shadow: -13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 46px 0 rgba('. $spin_rgb .', 0.2), -13px 46px 0 '. $spinclr .'; } }';
            }

            if ('09' == $pretype) {
                $theCSS .= '.loader09 {width: 10px;height: 48px;background: '. $spinclr .';position: relative;animation: loader09 1s ease-in-out infinite;animation-delay: 0.4s;top: 50%;margin: -28px auto 0; }.loader09::after, .loader09::before {content:  "";position: absolute;width: 10px;height: 48px;background: '. $spinclr .';animation: loader09 1s ease-in-out infinite; }.loader09::before {right: 18px;animation-delay: 0.2s; }.loader09::after {left: 18px;animation-delay: 0.6s; }@keyframes loader09 {0%, 100% {box-shadow: 0 0 0 '. $spinclr .', 0 0 0 '. $spinclr .'; }50% {box-shadow: 0 -8px 0 '. $spinclr .', 0 8px 0 '. $spinclr .'; } }';
            }

            if ('10' == $pretype) {
                $theCSS .= '.loader10 {width: 28px;height: 28px;border-radius: 50%;position: relative;animation: loader10 0.9s ease alternate infinite;animation-delay: 0.36s;top: 50%;margin: -42px auto 0; }.loader10::after, .loader10::before {content: "";position: absolute;width: 28px;height: 28px;border-radius: 50%;animation: loader10 0.9s ease alternate infinite; }.loader10::before {left: -40px;animation-delay: 0.18s; }.loader10::after {right: -40px;animation-delay: 0.54s; }@keyframes loader10 {0% {box-shadow: 0 28px 0 -28px '. $spinclr .'; }100% {box-shadow: 0 28px 0 '. $spinclr .'; } }';
            }

            if ('11' == $pretype) {
                $theCSS .= '.loader11 {width: 20px;height: 20px;border-radius: 50%;box-shadow: 0 40px 0 '. $spinclr .';position: relative;animation: loader11 0.8s ease-in-out alternate infinite;animation-delay: 0.32s;top: 50%;margin: -50px auto 0; }.loader11::after, .loader11::before {content:  "";position: absolute;width: 20px;height: 20px;border-radius: 50%;box-shadow: 0 40px 0 '. $spinclr .';animation: loader11 0.8s ease-in-out alternate infinite; }.loader11::before {left: -30px;animation-delay: 0.48s;}.loader11::after {right: -30px;animation-delay: 0.16s; }@keyframes loader11 {0% {box-shadow: 0 40px 0 '. $spinclr .'; }100% {box-shadow: 0 20px 0 '. $spinclr .'; } }';
            }

            if ('12' == $pretype) {
                $theCSS .= '.loader12 {width: 20px;height: 20px;border-radius: 50%;position: relative;animation: loader12 1s linear alternate infinite;top: 50%;margin: -50px auto 0; }@keyframes loader12 {0% {box-shadow: -60px 40px 0 2px '. $spinclr .', -30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 0 40px 0 0 rgba('. $spin_rgb .', 0.2), 30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 60px 40px 0 0 rgba('. $spin_rgb .', 0.2); }25% {box-shadow: -60px 40px 0 0 rgba('. $spin_rgb .', 0.2), -30px 40px 0 2px '. $spinclr .', 0 40px 0 0 rgba('. $spin_rgb .', 0.2), 30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 60px 40px 0 0 rgba('. $spin_rgb .', 0.2); }50% {box-shadow: -60px 40px 0 0 rgba('. $spin_rgb .', 0.2), -30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 0 40px 0 2px '. $spinclr .', 30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 60px 40px 0 0 rgba('. $spin_rgb .', 0.2); }75% {box-shadow: -60px 40px 0 0 rgba('. $spin_rgb .', 0.2), -30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 0 40px 0 0 rgba('. $spin_rgb .', 0.2), 30px 40px 0 2px '. $spinclr .', 60px 40px 0 0 rgba('. $spin_rgb .', 0.2); }100% {box-shadow: -60px 40px 0 0 rgba('. $spin_rgb .', 0.2), -30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 0 40px 0 0 rgba('. $spin_rgb .', 0.2), 30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 60px 40px 0 2px '. $spinclr .'; } }';
            }
        }
    }


    // color options
    $one_color = esc_attr( ot_get_option( 'nt_big_border_theme_color_one' ) );
    $two_color = esc_attr( ot_get_option( 'nt_big_border_theme_color_two' ) );

    if ( ot_get_option( 'nt_big_border_theme_color_one' ) !='' ) {
        $theCSS .= '.woocommerce span.onsale, .onsale, .pager li > a, .pager li > span, .brand .circle,.post-button, .error404 .index .searchform input[type="submit"], .pager li > span, .pager li > a, .section-title:after, .widget-title:after, #widget-area #searchform #searchsubmit, #share-buttons i:hover, #questions .panel-default .panel-heading, .btn_stroke_white:hover, .pricing .package.active .top, .pricing .package.active, .btn_primary, .btn_black::after, .clear_heading {background-color:' . $one_color . ';}';
        $theCSS .= 'a, a:hover, a:focus, .breadcrumb-current, .widget ul li a, .widget a, .entry-title a:hover, .entry-meta a:hover, .btn_white:visited, .btn_white, #features .feature:hover i, #features .feature:hover h6, .bullets span.cycle-pager-active, .bullets span:hover, #testimonials .testimonial p, .btn_stroke_white:hover, #main_footer .social_icons ul li a:hover, .btn_stroke_white:hover {color:' . $one_color . ';}';
        $theCSS .= '.pager li > a, .pager li > span, #testimonials .testimonial img { border-color:  ' . $one_color . '; }';
        $theCSS .= '.pricing .package.active, .btn_black:hover { -webkit-box-shadow: inset 0 0 0 1px ' . $one_color . '; box-shadow: inset 0 0 0 1px ' . $one_color . '; }';
    }

    if ( ot_get_option( 'nt_big_border_theme_color_two' ) !='' ) {
        $theCSS .= '.btn:hover, .btn:focus, .btn.focus { color: '. $two_color .'; opacity:0.9; }';
        $theCSS .= '.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .owl-pagination .owl-page.active { background-color: '. $two_color . '; }';
        $theCSS .= '#share-buttons i { color: ' . $two_color . '; }';
        $theCSS .= '.widget ul li a:hover, .flex-direction-nav a { color: '. $two_color .' !important; }';
    }

    //Back to top color options
    $top_color = esc_attr( ot_get_option( 'nt_big_border_top_color' ) );
    $top_bgcolor = esc_attr( ot_get_option( 'nt_big_border_top_bgcolor' ) );
    if ( $top_color !='' ) { $theCSS .= '.topcontrol .fa { color: '. $top_color .' !important; }'; }
    if ( $top_bgcolor !='' ) { $theCSS .= '.topcontrol { background-color: '. $top_bgcolor .' !important; }'; }


	// NAVIGATION
    $nav_bg = esc_attr( ot_get_option( 'nt_big_border_nav_bg' ) );
    $nav_padt = esc_attr( ot_get_option( 'nt_big_border_nav_padt' ) );
    $nav_padb = esc_attr( ot_get_option( 'nt_big_border_nav_padb' ) );
    $nav_menu_ifs = esc_attr( ot_get_option( 'nt_big_border_nav_menu_ifs' ) );
    $navitem = esc_attr( ot_get_option( 'nt_big_border_navitem' ) );
    $navitemhover = esc_attr( ot_get_option( 'nt_big_border_navitemhover' ) );

	if ( $nav_bg !='' ) { $theCSS .= '.template-nav-style-1 { background-color: '. $nav_bg .' !important; }'; }
    if ( $nav_padt !='' ) { $theCSS .= '.template-nav-style-1 { padding-top: '. $nav_padt .'px;}'; }
    if ( $nav_padb !='' ) { $theCSS .= '.template-nav-style-1 { padding-bottom: '. $nav_padb .'px;}'; }
	if ( $nav_menu_ifs != 0 ) { $theCSS .= '.template-nav-style-1 .template-link-wrap ul li a { font-size: '. $nav_menu_ifs .'px !important; }'; }
	if ( $navitem !='' ) { $theCSS .= '.template-nav-style-1 .template-link-wrap ul li a { color: '. $navitem .' !important; }'; }
	if ( $navitemhover !='' ) { $theCSS .= '.template-nav-style-1 .template-link-wrap ul li a:hover { color: '. $navitemhover .' !important; }'; }

    // sticky menu css
    $snav_v = esc_attr( ot_get_option( 'nt_big_border_snav_visibility' ) );
    $snav_bg = esc_attr( ot_get_option( 'nt_big_border_snav_bg' ) );
    $snav_padt = esc_attr( ot_get_option( 'nt_big_border_snav_padt' ) );
    $snav_padb = esc_attr( ot_get_option( 'nt_big_border_snav_padb' ) );
    $snav_item = esc_attr( ot_get_option( 'nt_big_border_snavitem' ) );
    $snav_item_hvr = esc_attr( ot_get_option( 'nt_big_border_snavitemhover' ) );

    if ( $snav_v == 'on' ) {
        $theCSS .= '#navbar-sticky.sticky { position: -webkit-sticky !important; position: sticky !important; top: 0; z-index: 999999;}';
        if ( $snav_bg !='' ) { $theCSS .= '#navbar-sticky.sticky { background-color: '. $snav_bg .' !important;}'; }
        if ( $snav_padt !='' ) { $theCSS .= '#navbar-sticky.sticky { padding-top: '. $snav_padt .'px !important;}'; }
        if ( $snav_padb !='' ) { $theCSS .= '#navbar-sticky.sticky { padding-bottom: '. $snav_padb .'px !important;}'; }
        if ( $snav_item !='' ) { $theCSS .= '#navbar-sticky.sticky .template-link-wrap ul li a { color: '. $snav_item .' !important;}'; }
        if ( $snav_item_hvr !='' ) { $theCSS .= '#navbar-sticky.sticky .template-link-wrap ul li a:hover { color: '. $snav_item_hvr .' !important;}'; }
    }

    // dropdown menu css
    $dropdown_bg = esc_attr( ot_get_option( 'nt_big_border_dropdown_bg' ) );
    $dropdown_item = esc_attr( ot_get_option( 'nt_big_border_dropdown_item' ) );
    $dropdown_i_h = esc_attr( ot_get_option( 'nt_big_border_dropdown_itemhover' ) );


	if ( $dropdown_bg !='' ) { $theCSS .= '.template-nav-style-1 .template-link-wrap ul li .dropdown-menu { background-color: '. $dropdown_bg .' !important; }'; }
	if ( $dropdown_item !='' ) { $theCSS .= '.template-nav-style-1 .template-link-wrap ul li .dropdown-menu > li > a { color: '. $dropdown_item .' !important; }'; }
	if ( $dropdown_i_h !='' ) { $theCSS .= '.template-nav-style-1 .template-link-wrap ul li .dropdown-menu> li > a:hover { color: '. $dropdown_i_h .'!important;}'; }
    // mobile menu bg
    $mob_nav_bg = esc_attr( ot_get_option( 'nt_big_border_mobile_menu_bg' ) );
	if ( $mob_nav_bg !='' ) { $theCSS .= '#template-offcanvass { background-color: '. $mob_nav_bg .'!important;}'; }


	// LOGO
	$logo = ( ot_get_option( 'nt_big_border_logo_dimension', array() ) );
	$logo2 = ( ot_get_option( 'nt_big_border_logo2_dimension', array() ) );
	$logo_m = ( ot_get_option( 'nt_big_border_margin_logo', array() ) );
	$logo_p = ( ot_get_option( 'nt_big_border_padding_logo', array() ) );
	$logo_f = ( ot_get_option( 'nt_big_bordert_logo_text_font_s' ) );
	$logo_c = ( ot_get_option( 'nt_big_border_logo_clr' ) );
	$slogo_f = ( ot_get_option( 'nt_big_border_slogo_text_font_s' ) );
	$slogo_c = ( ot_get_option( 'nt_big_border_slogo_clr' ) );

	// logo dimension
	$logounit = isset($logo['unit']) ? isset($logo['unit']) : 'px';
	if(isset($logo['width']))   { $theCSS .= '.img-logo img { width: '. $logo['width'] .''. $logounit .' !important; }'; }
	if(isset($logo['height']))  { $theCSS .= '.img-logo img { height: '. $logo['height'] .''. $logounit .' !important; }'; }
    // sticky logo dimension
	$logounit2 = isset($logo2['unit']) ? isset($logo2['unit']) : 'px';
	if(isset($logo2['width']))   { $theCSS .= '.img-logo.sticky-logo img { width: '. $logo2['width'] .''. $logounit2 .' !important; }'; }
	if(isset($logo2['height']))  { $theCSS .= '.img-logo.sticky-logo img { height: '. $logo2['height'] .''. $logounit2 .' !important; }'; }
    // logo margin spacing
    $logo_m_unit = isset($logo_m['unit']) ? isset($logo_m['unit']) : 'px';
	if(isset($logo_m['top']))    { $theCSS .= '.img-logo img { margin-top: '. $logo_m['top'] .''. $logo_m_unit .' !important; }'; }
	if(isset($logo_m['bottom'])) { $theCSS .= '.img-logo img { margin-bottom: '. $logo_m['bottom'] .''. $logo_m_unit .' !important; }'; }
	if(isset($logo_m['right']))  { $theCSS .= '.img-logo img { margin-right: '. $logo_m['right'] .''. $logo_m_unit .' !important; }'; }
	if(isset($logo_m['left']))   { $theCSS .= '.img-logo img { margin-left: '. $logo_m['left'] .''. $logo_m_unit .' !important; }'; }
    // logo padding spacing
    $logo_p_unit = isset($logo_p['unit']) ? isset($logo_p['unit']) : 'px';
	if(isset($logo_p['top']))    { $theCSS .= '.img-logo img { padding-top: '. $logo_p['top'] .''. $logo_p_unit .' !important; }'; }
	if(isset($logo_p['bottom'])) { $theCSS .= '.img-logo img { padding-bottom: '. $logo_p['bottom'] .''. $logo_p_unit .' !important; }'; }
	if(isset($logo_p['right']))  { $theCSS .= '.img-logo img { padding-right: '. $logo_p['right'] .''. $logo_p_unit .' !important; }'; }
	if(isset($logo_p['left']))   { $theCSS .= '.img-logo img { padding-left: '. $logo_p['left'] .''. $logo_p_unit .' !important; }'; }
    // default text logo
	if ( $logo_f !='' ) { $theCSS .= '.text-logo { font-size:'. $logo_f .'px !important; }'; }
	if ( $logo_c !='' ) { $theCSS .= '.text-logo { color: '. $logo_c .' !important; }'; }
    // sticky menu text logo
	if ( $slogo_f !='' ) { $theCSS .= '#navbar-sticky.sticky .text-logo { font-size: '. $slogo_f .'px !important; }'; }
	if ( $slogo_c !='' ) { $theCSS .= '#navbar-sticky.sticky .text-logo { color: '. $slogo_c .' !important; }'; }


    // BLOG PAGES HERO

    if ( ! is_page() ) {

        if ( is_404() ) {
            $name  = 'error';
            $id  = 'error404';
        } elseif ( is_archive() ) {
            $name  = 'archive';
            $id  = 'archive';
        } elseif ( is_search() ) {
            $name  = 'search';
            $id  = 'search';
        } elseif ( is_home() or is_front_page() ) {
            $name  = 'blog';
            $id  = 'blog';
        } elseif ( is_single() ) {
            $name  = 'single';
            $id  = 'single';
        }

        // single post
        if ( ot_get_option( 'nt_big_border_'.$name.'_hero_visibility' ) !='off' ) {

            if ( ot_get_option( 'nt_big_border_'.$name.'_hero_overlay' ) !='' ) {
                $theCSS .= '.'.$id.' .index-header .template-overlay { background-color: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'_hero_overlay' ) ) .';}';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'pageheadbg' ) !='' ) {
                $theCSS .= '.'.$id.' .index-header { background: transparent url( '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'pageheadbg' ) ) .') no-repeat fixed center top / cover !important; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'headerbgcolor' ) !='' ){
                $theCSS .= '.'.$id.' .index-header { background-color: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'headerbgcolor' ) ) .'; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'headingcolor' ) !='' ) {
                $theCSS .= '.'.$id.' .index-header .uppercase { color: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'headingcolor' ) ) .'; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'_heading_fontsize' ) !='' ){
                $theCSS .= '.'.$id.' .index-header .uppercase { font-size: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'_heading_fontsize' ) ) .'px; }';
            }
            if  ( ot_get_option( 'nt_big_border_'.$name.'headerparagraphcolor' ) !='' ){
                $theCSS .= '.'.$id.' .index-header .cover-text-sublead { color: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'headerparagraphcolor' ) ) .'; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'headerbgheight' ) !='' ){
                $theCSS .= '.'.$id.' .index-header { height: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'headerbgheight' ) ) .'vh; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'_hero_visibility' ) == 'off' ){
                $theCSS .= '#blog.nt-'.$name.'-content{ padding-top: 150px !important; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'_content_padt' ) !='' ){
                $theCSS .= '#blog.nt-'.$name.'-content { padding-top: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'_content_padt' ) ) .'px !important; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'_content_padb' ) !='' ){
                $theCSS .= '#blog.nt-'.$name.'-content { padding-top: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'_content_padb' ) ) .'px !important; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'_content_bgclr' ) !='' ){
                $theCSS .= '#blog.nt-'.$name.'-content { background-color: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'_content_bgclr' ) ) .' !important; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'headerpaddingtop' ) !='' || ot_get_option( 'nt_big_border_'.$name.'headerpaddingbottom' ) !='' ) {
                $theCSS .= ' @media ( min-width: 768px ) { ';
                    if ( ot_get_option( 'nt_big_border_'.$name.'headerpaddingtop' ) !='' ) {
                        $theCSS .= '.'.$id.' .index-header { padding-top: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'headerpaddingtop' ) ) .'px !important; }';
                    }
                    if ( ot_get_option( 'nt_big_border_'.$name.'headerpaddingtop' ) !='' ) {
                        $theCSS .= '.'.$id.' .index-header { padding-bottom: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'headerpaddingbottom' ) ) .'px !important; }';
                    }
                $theCSS .= '}';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'_hero_alignment' ) !='' ){
                $theCSS .= '.'.$id.' .index-header { text-align: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'_hero_alignment' ) ) .' !important; }';
            }
            if ( ot_get_option( 'nt_big_border_'.$name.'_hero_content_position' ) == 'top' ){
                $theCSS .= '.'.$id.' .index-header { display: flex; justify-content: center; align-items: flex-start;}';
                $theCSS .= '.'.$id.' .index-header .template-cover-intro {margin-top: 150px;}';
            } elseif ( ot_get_option( 'nt_big_border_'.$name.'_hero_content_position' ) == 'bottom' ){
                $theCSS .= '.'.$id.' .index-header { display: flex; justify-content: center; align-items: flex-end;}';
                $theCSS .= '.'.$id.' .index-header .template-cover-intro { margin-bottom: 100px;}';
            } else {
                $theCSS .= '.'.$id.' .index-header { display: flex; justify-content: center; align-items: center;}';
            }

            if ( ot_get_option( 'nt_big_border_'.$name.'_content_alignment' ) !='' ){
                $theCSS .= '.'.$id.' .nt-'.$name.'-content .posts, .'.$id.' .nt-'.$name.'-content .v {
                    text-align: '. esc_attr( ot_get_option( 'nt_big_border_'.$name.'_content_alignment' ) ) .' !important;
                }';
            }

        } // end if hero visibility
    } // end if is_page




    // PAGE.PHP AND FULLWIDTH-PAGE.PHP HEADER - CUSTOM PAGE METABOX OPTIONS

    // page page background image
    $nt_big_border_page_hero_visibility = get_post_meta( get_the_ID(), 'nt_big_border_hero_visibility', true );
    if ( $nt_big_border_page_hero_visibility == true ){
        $theCSS .= '#blog.nt-page-content { padding-top: 150px !important; }';
    }

    $nt_big_border_page_bg_image = get_post_meta( get_the_ID(), 'nt_big_border_page_bg_image', true );
    if ( $nt_big_border_page_bg_image != '' ){
        $nt_big_border_image_src = wp_get_attachment_url( $nt_big_border_page_bg_image, 'full' );
    } else {
        $nt_big_border_image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'span5' );
        $nt_big_border_image_src = $nt_big_border_image_src[0];
    }

    if ( $nt_big_border_image_src != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header {
            background: transparent url(' . esc_url( $nt_big_border_image_src ) .') no-repeat fixed center top / cover !important;
        }';
    }
    // page page background color
    $nt_big_border_page_bg_color = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_bg_color', true ) );
    if ( $nt_big_border_page_bg_color != '' && $nt_big_border_image_src == '' ) {
        $theCSS .= '.page-id-' . get_the_ID() .' .index-header {
            background-image: none !important;
        }';
    }
    if ( $nt_big_border_page_bg_color != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header {
            background-color: '. $nt_big_border_page_bg_color .' !important;
        }';
    }
    $nt_big_border_page_hero_overlay = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_hero_overlay', true ) );
    if ( $nt_big_border_page_hero_overlay != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header .template-overlay{
            background-color: '. $nt_big_border_page_hero_overlay .' !important;
        }';
    }
    $nt_big_border_page_hero_height = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_hero_height', true ) );
    if ( $nt_big_border_page_hero_height != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header {
            height: '. $nt_big_border_page_hero_height .'vh;
        }';
    }
    // page page hero page title color
    $nt_big_border_page_text_color = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_text_color', true ) );
    if ( $nt_big_border_page_text_color != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header h2, .page-id-'. get_the_ID() .' .index-header p {
            color: '. $nt_big_border_page_text_color .' !important;
        }';
    }
    $nt_big_border_page_hero_title_fs = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_hero_title_fs', true ) );
    if ( $nt_big_border_page_hero_title_fs != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header .lead-heading {
            font-size: '. $nt_big_border_page_hero_title_fs .'px !important;
        }';
    }
    $nt_big_border_page_hero_title_mb = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_hero_title_mb', true ) );
    if ( $nt_big_border_page_hero_title_mb != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header .lead-heading {
            margin-bottom: '. $nt_big_border_page_hero_title_mb .'px !important;
        }';
    }
    $nt_big_border_page_subtitle_fs = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_subtitle_fs', true ) );
    if ( $nt_big_border_page_subtitle_fs != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header .cover-text-sublead {
            font-size: '. $nt_big_border_page_subtitle_fs .'px !important;
        }';
    }
    $nt_big_border_page_subtitle_color = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_subtitle_color', true ) );
    if ( $nt_big_border_page_subtitle_color != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header .cover-text-sublead {
            color: '. $nt_big_border_page_subtitle_color .'px !important;
        }';
    }

    // page page hero padding top
    $nt_big_border_header_p_top = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_header_p_top', true ) );
    if ( $nt_big_border_header_p_top != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header {
            padding-top: '. $nt_big_border_header_p_top .'px !important;
        }';
    }
    // page page hero padding bottom
    $nt_big_border_header_p_bottom = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_header_p_bottom', true ) );
    if ( $nt_big_border_header_p_bottom != '' ) {
        $theCSS .= '.page-id-'. get_the_ID().' .index-header {
            padding-bottom: '. $nt_big_border_header_p_bottom .'px !important;
        }';
    }
    // page page hero padding bottom
    $nt_big_border_page_hero_align = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_hero_align', true ) );
    if ( $nt_big_border_page_hero_align != '' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header {
            text-align: '. $nt_big_border_page_hero_align .' !important;
        }';
    }
    $nt_big_border_page_hero_content_position = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_hero_content_position', true ) );
    if ( $nt_big_border_page_hero_content_position == 'top' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header { display: flex; justify-content: center; align-items: flex-start; }';
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header .template-cover-text {margin-top: 150px;}';
    } elseif ( $nt_big_border_page_hero_content_position == 'bottom' ) {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header { display: flex; justify-content: center; align-items: flex-end; }';
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header .template-cover-text { margin-bottom: 100px;}';
    } else {
        $theCSS .= '.page-id-'. get_the_ID() .' .index-header { display: flex; justify-content: center; align-items: center; }';
    }

    // page page content
    $nt_big_border_page_content_bgclr = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_content_bgclr', true ) );
    if ( $nt_big_border_page_content_bgclr != '' ) {
        $theCSS .= '.page-id-'. get_the_ID().' .nt-page-content {
            background-color: '. $nt_big_border_page_content_bgclr .' !important;
        }';
    }
    $nt_big_border_page_content_padt = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_content_padt', true ) );
    if ( $nt_big_border_page_content_padt != '' ) {
        $theCSS .= '.page-id-'. get_the_ID().' .nt-page-content {
            padding-top: '. $nt_big_border_page_content_padt .'px !important;
        }';
    }
    $nt_big_border_page_content_padb = esc_attr( get_post_meta(get_the_ID(), 'nt_big_border_page_content_padb', true ) );
    if ( $nt_big_border_page_content_padb != '' ) {
        $theCSS .= '.page-id-'. get_the_ID().' .nt-page-content {
            padding-bottom: '. $nt_big_border_page_content_padb .'px !important;
        }';
    }


    // SIDEBAR
    $sb_bg = esc_attr( ot_get_option( 'nt_big_border_sb_bg' ) );
    $sb_t_c = esc_attr( ot_get_option( 'nt_big_border_sb_t_c' ) );
    $sb_c = esc_attr( ot_get_option( 'nt_big_border_sb_c' ) );
    $sb_l_c = esc_attr( ot_get_option( 'nt_big_border_sb_l_c' ) );
    $sb_l_c_h = esc_attr( ot_get_option( 'nt_big_border_sb_l_c_h' ) );
    $sb_s_t = esc_attr( ot_get_option( 'nt_big_border_sb_s_t' ) );
    $sb_s_bg = esc_attr( ot_get_option( 'nt_big_border_sb_s_bg' ) );

	if ( $sb_bg !='' ) {
        $theCSS .= '#widget-area { background-color:' . $sb_bg . '!important;}';
    }
	if ( $sb_t_c !='' ) {
        $theCSS .= '.widget-title { color:' . $sb_t_c . '!important;}';
    }
	if ( $sb_c !='' ) {
        $theCSS .= '.widget ul { color:' . $sb_c . '!important;}';
    }
	if ( $sb_l_c !='' ) {
        $theCSS .= '.widget ul li a { color:' . $sb_l_c . '!important;}';
    }
	if ( $sb_l_c_h !='' ) {
        $theCSS .= '.widget ul li a:hover { color:' . $sb_l_c_h . '!important;}';
    }
	if ( $sb_s_t !='' ) {
        $theCSS .= '#widget-area #searchform input#searchsubmit { color:' . $sb_s_t . '!important;}';
    }
	if ( $sb_s_bg !='' ) {
        $theCSS .= '#widget-area #searchform input#searchsubmit { background-color:' . $sb_s_bg . '!important;}';
    }


    // BREADCRUBMS
    if  ( ot_get_option( 'nt_big_border_blogbreadcrubmscolor' ) !='' ){
        $theCSS .= 'a.breadcrumb-item { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogbreadcrubmscolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogbreadcrubmshovercolor' ) !='' ){
        $theCSS .= 'a.breadcrumb-item:hover { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogbreadcrubmshovercolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogbreadcrubmscurrentcolor' ) !='' ){
        $theCSS .= '.breadcrumb-current { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogbreadcrubmscurrentcolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_bread_f_s' ) !='' ){
        $theCSS .= '.breadcrubms { font-size: '.  esc_attr( ot_get_option( 'nt_big_border_bread_f_s' ) ) .'px; }';
    }


	// POSTS
    if ( ot_get_option( 'nt_big_border_blogposttitlecolor' ) !='' ) {
        $theCSS .= '.entry-title a { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogposttitlecolor' ) ) .'; }';
    }
    if ( ot_get_option( 'nt_big_border_blogposttitlhoverecolor' ) !='' ) {
        $theCSS .= '.entry-title a:hover { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogposttitlhoverecolor' ) ) .'; }';
    }
    if ( ot_get_option( 'nt_big_border_blogmetacolor' ) !='' ) {
        $theCSS .= '.entry-meta li { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetacolor' ) ) .'; }';
    }
    if ( ot_get_option( 'nt_big_border_blogmetalinktextcolor' ) !='' ) {
        $theCSS .= '.entry-meta li a { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextcolor' ) ) .'; }';
    }
    if ( ot_get_option( 'nt_big_border_blogmetalinkhovercolor' ) !='' ) {
        $theCSS .= '.entry-meta li a:hover { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinkhovercolor' ) ) .'; }';
    }
    if ( ot_get_option( 'nt_big_border_blogmetalinktextbgcolor' ) !='' ) {
        $theCSS .= '.entry-meta li a { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextbgcolor' ) ) .'; }';
    }
    if( ot_get_option( 'nt_big_border_blogmetalinktextbghovercolor' ) !='' ) {
        $theCSS .= '.entry-meta li a:hover { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextbghovercolor' ) ) .'; }';
    }
	if ( ot_get_option( 'nt_big_border_blogpostparagraphcolor' ) !='' ) {
        $theCSS .= '.entry-content p { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogpostparagraphcolor' ) ) .'; }';
	       $theCSS .= '.entry-content p { color:#000;}';
	}
    if ( ot_get_option( 'nt_big_border_blogpostbuttonbgcolor' ) !='' ) {
        $theCSS .= 'a.margin_30 { background-color:'.  esc_attr( ot_get_option( 'nt_big_border_blogpostbuttonbgcolor' ) ) .';}';
    }
    if ( ot_get_option( 'nt_big_border_blogpostbuttonbghovercolor' ) !='' ) {
        $theCSS .= 'a.margin_30:hover { background-color:'.  esc_attr( ot_get_option( 'nt_big_border_blogpostbuttonbghovercolor' ) ) .';}';
    }
    if ( ot_get_option( 'nt_big_border_blogpostbuttontitlecolor' ) !='' ) {
        $theCSS .= 'a.margin_30 { color:'.  esc_attr( ot_get_option( 'nt_big_border_blogpostbuttontitlecolor' ) ) .';}';
    }
    if ( ot_get_option( 'nt_big_border_blogpostbuttontitlehovercolor' ) !='' ) {
        $theCSS .= 'a.margin_30:hover { color:'.  esc_attr( ot_get_option( 'nt_big_border_blogpostbuttontitlehovercolor' ) ) .';}';
    }


    // SHARE BUTTONS
    if ( ot_get_option( 'nt_big_border_blogsharebgcolor' ) !='' ) {
        $theCSS .= '#share-buttons i { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogsharebgcolor' ) ) .'; }';
    }
    if ( ot_get_option( 'nt_big_border_blogsharebghovercolor' ) !='' ) {
        $theCSS .= ' #share-buttons i:hover { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogsharebghovercolor' ) ) .'; }';
    }
    if ( ot_get_option( 'nt_big_border_blogsharecolor' ) !='' ) {
        $theCSS .= '#share-buttons i { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogsharecolor' ) ) .'; }';
    }
    if ( ot_get_option( 'nt_big_border_blogsharehovercolor' ) !='' ) {
        $theCSS .= '#share-buttons i:hover { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogsharehovercolor' ) ) .'; }';
    }


    // COMMENTS
    if  ( ot_get_option( 'nt_big_border_blogmetalinktextcolor' ) !='' ){
        $theCSS .= 'p.logged-in-as a { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextcolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogmetalinkhovercolor' ) !='' ){
        $theCSS .= 'p.logged-in-as a:hover { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinkhovercolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogmetalinktextbgcolor' ) !='' ){
        $theCSS .= 'p.logged-in-as a { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextbgcolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogmetalinktextbghovercolor' ) !='' ){
        $theCSS .= 'p.logged-in-as a:hover { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextbghovercolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogmetalinktextcolor' ) !='' ){
        $theCSS .= 'a.comment-edit-link,a.comment-reply-link { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextcolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogmetalinkhovercolor' ) !='' ){
        $theCSS .= 'a.comment-edit-link:hover,a.comment-reply-link:hover { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinkhovercolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogmetalinktextbgcolor' ) !='' ){
        $theCSS .= 'a.comment-edit-link,a.comment-reply-link { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextbgcolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogmetalinktextbghovercolor' ) !='' ){
        $theCSS .= 'a.comment-edit-link:hover,a.comment-reply-link:hover { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogmetalinktextbghovercolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogcommentformsubmitcolor' ) !='' ){
        $theCSS .= '.comment-form .submit { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogcommentformsubmitcolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogcommentformsubmithovercolor' ) !='' ){
        $theCSS .= '.comment-form .submit:hover { color: '.  esc_attr( ot_get_option( 'nt_big_border_blogcommentformsubmithovercolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogcommentformsubmitbgcolor' ) !='' ){
        $theCSS .= '.comment-form .submit { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogcommentformsubmitbgcolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_blogcommentformsubmitbghovercolor' ) !='' ){
        $theCSS .= '.comment-form .submit:hover { background-color: '.  esc_attr( ot_get_option( 'nt_big_border_blogcommentformsubmitbghovercolor' ) ) .'; }';
    }


    // PAGER
    if  ( ot_get_option( 'nt_big_border_pagertitlecolor' ) !='' ){
        $theCSS .= '.pager li a{color: '.  esc_attr( ot_get_option( 'nt_big_border_pagertitlecolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_pagertitlehovercolor' ) !='' ){
        $theCSS .= '.pager li a:hover{color: '.  esc_attr( ot_get_option( 'nt_big_border_pagertitlehovercolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_pagerbgcolor' ) !='' ){
        $theCSS .= '.pager li a{background-color: '.  esc_attr( ot_get_option( 'nt_big_border_pagerbgcolor' ) ) .'; }';
    }
    if  ( ot_get_option( 'nt_big_border_pagerbghovercolor' ) !='' ){
        $theCSS .= '.pager li a:hover{background-color: '.  esc_attr( ot_get_option( 'nt_big_border_pagerbghovercolor' ) ) .'; }';
    }


    // FOOTER OPTIONS
	$nt_big_border_f_bg = esc_attr( ot_get_option( 'nt_big_border_footerbgcolor' ) );
	$nt_big_border_f_h_c = esc_attr( ot_get_option( 'nt_big_border_footer_h_c' ) );
	$nt_big_border_f_t_c = esc_attr( ot_get_option( 'nt_big_border_footer_t_c' ) );
	$nt_big_border_f_a_c = esc_attr( ot_get_option( 'nt_big_border_footer_a_c' ) );
	$nt_big_border_f_p_c = esc_attr( ot_get_option( 'nt_big_border_footer_p_c' ) );

	if ( $nt_big_border_f_bg !='' ) { $theCSS .= '.footer-section { background-color: '. $nt_big_border_f_bg .'; }'; }
	if ( $nt_big_border_f_h_c !='' ) { $theCSS .= '.footer-section h3 { color: '. $nt_big_border_f_h_c .'; }'; }
	if ( $nt_big_border_f_t_c !='' ) { $theCSS .= '.footer-section p { color: '. $nt_big_border_f_t_c .'; }'; }
	if ( $nt_big_border_f_a_c !='' ) { $theCSS .= '.footer-section a { color: '. $nt_big_border_f_a_c .'; }'; }
	if ( $nt_big_border_f_p_c !='' ) { $theCSS .= '.footer-section .template-made, .footer-section .template-made p { color: '. $nt_big_border_f_p_c .'; }'; }


    // FOOTER WIDGET AREA
    $nt_big_border_fw_bg = esc_attr( ot_get_option( 'nt_big_border_fw_bg' ) );
    $nt_big_border_fw_pt = esc_attr( ot_get_option( 'nt_big_border_fw_pt' ) );
    $nt_big_border_fw_pb = esc_attr( ot_get_option( 'nt_big_border_fw_pb' ) );
    $nt_big_border_fw_h = esc_attr( ot_get_option( 'nt_big_border_fw_h' ) );
    $nt_big_border_fw_a = esc_attr( ot_get_option( 'nt_big_border_fw_a' ) );
    $nt_big_border_fw_ahvr = esc_attr( ot_get_option( 'nt_big_border_fw_ahvr' ) );
    if ( $nt_big_border_fw_bg !='' ) { $theCSS .= '.footer-widget-area.footer-section { background-color: '. $nt_big_border_fw_bg .'; }'; }
    if ( $nt_big_border_fw_pt !='' ) { $theCSS .= '.footer-widget-area.footer-section { padding-top: '. $nt_big_border_fw_pt .'px; }'; }
    if ( $nt_big_border_fw_pb !='' ) { $theCSS .= '.footer-widget-area.footer-section { padding-bottom: '. $nt_big_border_fw_pb .'px; }'; }
    if ( $nt_big_border_fw_h !='' ) { $theCSS .= '.footer-widget-area.footer-section .widget-head { color: '. $nt_big_border_fw_h .'; }'; }
    if ( $nt_big_border_fw_a !='' ) { $theCSS .= '.footer-widget-area.footer-section .widget a { color: '. $nt_big_border_fw_a .'; }'; }
    if ( $nt_big_border_fw_ahvr !='' ) { $theCSS .= '.footer-widget-area.footer-section .widget a:hover { color: '. $nt_big_border_fw_ahvr .'; }'; }


	// TYPOGRAPHY
	$nt_big_border_typgrph = ot_get_option( 'nt_big_border_typgrph', array() );
	if ( !empty($nt_big_border_typgrph) ) :
	$theCSS .= 'body{';
	if ( !empty($nt_big_border_typgrph['font-color']) ) {$theCSS .= 'color:'.esc_attr( $nt_big_border_typgrph['font-color'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph['font-family']) ) {$theCSS .= 'font-family:"'.esc_attr( $nt_big_border_typgrph['font-family'] ).'"!important;'; }
	if ( !empty($nt_big_border_typgrph['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $nt_big_border_typgrph['font-size'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $nt_big_border_typgrph['font-style'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $nt_big_border_typgrph['font-variant'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $nt_big_border_typgrph['font-weight'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $nt_big_border_typgrph['letter-spacing'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $nt_big_border_typgrph['line-height'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($nt_big_border_typgrph['text-decoration']).'!important;'; }
	if ( !empty($nt_big_border_typgrph['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($nt_big_border_typgrph['text-transform']).'!important;'; }
	$theCSS .= '}';
	endif;
	//
	$nt_big_border_typgrph1 = ot_get_option( 'nt_big_border_typgrph1', array() );
	if ( !empty($nt_big_border_typgrph1) ) :
	$theCSS .= 'body h1{';
	if ( !empty($nt_big_border_typgrph1['font-color']) ) {$theCSS .= 'color:'.esc_attr( $nt_big_border_typgrph1['font-color'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph1['font-family']) ) {$theCSS .= 'font-family:"'.esc_attr( $nt_big_border_typgrph1['font-family'] ).'"!important;'; }
	if ( !empty($nt_big_border_typgrph1['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $nt_big_border_typgrph1['font-size'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph1['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $nt_big_border_typgrph1['font-style'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph1['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $nt_big_border_typgrph1['font-variant'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph1['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $nt_big_border_typgrph1['font-weight'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph1['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $nt_big_border_typgrph1['letter-spacing'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph1['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $nt_big_border_typgrph1['line-height'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph1['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($nt_big_border_typgrph1['text-decoration']).'!important;'; }
	if ( !empty($nt_big_border_typgrph1['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($nt_big_border_typgrph1['text-transform']).'!important;'; }
	$theCSS .= '}';
	endif;
	//
	$nt_big_border_typgrph2 = ot_get_option( 'nt_big_border_typgrph2', array() );
	if ( !empty($nt_big_border_typgrph2) ) :
	$theCSS .= 'body h2{';
	if ( !empty($nt_big_border_typgrph2['font-color']) ) {$theCSS .= 'color:'.esc_attr( $nt_big_border_typgrph2['font-color'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $nt_big_border_typgrph2['font-family'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $nt_big_border_typgrph2['font-size'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $nt_big_border_typgrph2['font-style'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $nt_big_border_typgrph2['font-variant'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $nt_big_border_typgrph2['font-weight'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $nt_big_border_typgrph2['letter-spacing'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $nt_big_border_typgrph2['line-height'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($nt_big_border_typgrph2['text-decoration']).'!important;'; }
	if ( !empty($nt_big_border_typgrph2['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($nt_big_border_typgrph2['text-transform']).'!important;'; }
	$theCSS .= '}';
	endif;
	//
	$nt_big_border_typgrph3 = ot_get_option( 'nt_big_border_typgrph3', array() );
	if ( !empty($nt_big_border_typgrph3) ) :
	$theCSS .= 'body h3{';
	if ( !empty($nt_big_border_typgrph3['font-color']) ) {$theCSS .= 'color:'.esc_attr( $nt_big_border_typgrph3['font-color'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $nt_big_border_typgrph3['font-family'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $nt_big_border_typgrph3['font-size'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $nt_big_border_typgrph3['font-style'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $nt_big_border_typgrph3['font-variant'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $nt_big_border_typgrph3['font-weight'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $nt_big_border_typgrph3['letter-spacing'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $nt_big_border_typgrph3['line-height'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($nt_big_border_typgrph3['text-decoration']).'!important;'; }
	if ( !empty($nt_big_border_typgrph3['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($nt_big_border_typgrph3['text-transform']).'!important;'; }
	$theCSS .= '}';
	endif;
	//
	$nt_big_border_typgrph4 = ot_get_option( 'nt_big_border_typgrph4', array() );
	if ( !empty($nt_big_border_typgrph4) ) :
	$theCSS .= 'body h4{';
	if ( !empty($nt_big_border_typgrph4['font-color']) ) {$theCSS .= 'color:'.esc_attr( $nt_big_border_typgrph4['font-color'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $nt_big_border_typgrph4['font-family'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $nt_big_border_typgrph4['font-size'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $nt_big_border_typgrph4['font-style'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $nt_big_border_typgrph4['font-variant'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $nt_big_border_typgrph4['font-weight'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $nt_big_border_typgrph4['letter-spacing'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $nt_big_border_typgrph4['line-height'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($nt_big_border_typgrph4['text-decoration']).'!important;'; }
	if ( !empty($nt_big_border_typgrph4['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($nt_big_border_typgrph4['text-transform']).'!important;'; }
	$theCSS .= '}';
	endif;
	//
	$nt_big_border_typgrph5 = ot_get_option( 'nt_big_border_typgrph5', array() );
	if ( !empty($nt_big_border_typgrph5) ) :
	$theCSS .= 'body h5{';
	if ( !empty($nt_big_border_typgrph5['font-color']) ) {$theCSS .= 'color:'.esc_attr( $nt_big_border_typgrph5['font-color'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $nt_big_border_typgrph5['font-family'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $nt_big_border_typgrph5['font-size'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $nt_big_border_typgrph5['font-style'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $nt_big_border_typgrph5['font-variant'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $nt_big_border_typgrph5['font-weight'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $nt_big_border_typgrph5['letter-spacing'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $nt_big_border_typgrph5['line-height'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($nt_big_border_typgrph5['text-decoration']).'!important;'; }
	if ( !empty($nt_big_border_typgrph5['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($nt_big_border_typgrph5['text-transform']).'!important;'; }
	$theCSS .= '}';
	endif;
	//
	$nt_big_border_typgrph6 = ot_get_option( 'nt_big_border_typgrph6', array() );
	if ( !empty($nt_big_border_typgrph6) ) :
	$theCSS .= 'body h6{';
	if ( !empty($nt_big_border_typgrph6['font-color']) ) {$theCSS .= 'color:'.esc_attr( $nt_big_border_typgrph6['font-color'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $nt_big_border_typgrph6['font-family'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $nt_big_border_typgrph6['font-size'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $nt_big_border_typgrph6['font-style'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $nt_big_border_typgrph6['font-variant'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $nt_big_border_typgrph6['font-weight'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $nt_big_border_typgrph6['letter-spacing'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $nt_big_border_typgrph6['line-height'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($nt_big_border_typgrph6['text-decoration']).'!important;'; }
	if ( !empty($nt_big_border_typgrph6['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($nt_big_border_typgrph6['text-transform']).'!important;'; }
	$theCSS .= '}';
	endif;
	$nt_big_border_typgrph7 = ot_get_option( 'nt_big_border_typgrph7', array() );
	if ( !empty($nt_big_border_typgrph7) ) :
	$theCSS .= 'body p{';
	if ( !empty($nt_big_border_typgrph7['font-color']) ) {$theCSS .= 'color:'.esc_attr( $nt_big_border_typgrph7['font-color'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['font-family']) ) {$theCSS .= 'font-family:'.esc_attr( $nt_big_border_typgrph7['font-family'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['font-size']) ) {$theCSS .= 'font-size:'.esc_attr( $nt_big_border_typgrph7['font-size'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['font-style']) ) {$theCSS .= 'font-style:'.esc_attr( $nt_big_border_typgrph7['font-style'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['font-variant']) ) {$theCSS .= 'font-variant:'.esc_attr( $nt_big_border_typgrph7['font-variant'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['font-weight']) ) {$theCSS .= 'font-weight:'.esc_attr( $nt_big_border_typgrph7['font-weight'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['letter-spacing']) ) {$theCSS .= 'letter-spacing:'.esc_attr( $nt_big_border_typgrph7['letter-spacing'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['line-height'])) {$theCSS .= 'line-height:'.esc_attr( $nt_big_border_typgrph7['line-height'] ).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['text-decoration'])){$theCSS .= 'text-decoration:'.esc_attr($nt_big_border_typgrph7['text-decoration']).'!important;'; }
	if ( !empty($nt_big_border_typgrph7['text-transform'])){$theCSS .= 'text-transform:'.esc_attr($nt_big_border_typgrph7['text-transform']).'!important;'; }
	$theCSS .= '}';
	endif;



    /* Add CSS to style.css */
    wp_add_inline_style( 'nt-big-border-custom-style', $theCSS );
	}

add_action( 'wp_enqueue_scripts', 'nt_big_border_css_options' );
