	<?php
		$nt_big_border_logo_option = ( ot_get_option('nt_big_border_logo_type') );
		$nt_big_border_img_logo = ( ot_get_option('nt_big_border_logoimg') );
		$nt_big_border_img_logo2 = ( ot_get_option( 'nt_big_border_logoimg2' ) );
		$nt_big_has_sticky_logo = $nt_big_border_img_logo2 != '' && $nt_big_border_img_logo2 != '' ? ' has-sticky-logo' : '';
		$nt_big_border_text_logo = ( ot_get_option('nt_big_border_textlogo') );

		$nt_big_border_nav_container = ( ot_get_option('nt_big_border_nav_container') );
		$nt_big_border_nav_container = $nt_big_border_nav_container == 'container-fluid' ? 'container-fluid' : 'container';

		$nt_big_border_snav_visibility = ( ot_get_option('nt_big_border_snav_visibility') );
		$nt_big_border_snav = $nt_big_border_snav_visibility == 'on' ? 'id="navbar-sticky"' : '';


		$nt_big_border_nav_alignment = ( ot_get_option('nt_big_border_nav_alignment') );
		$nt_big_border_nav_alignment = $nt_big_border_nav_alignment != '' ? ' '.$nt_big_border_nav_alignment : ' text-center';

		$nt_big_border_nav_flex = ( ot_get_option('nt_big_border_nav_content_position') );
		$nt_big_border_nav_flex = $nt_big_border_nav_flex != '' ? ' '.$nt_big_border_nav_flex : ' content-center';

		$nt_big_border_nav_offset = ( ot_get_option('nt_big_border_nav_scroll_offset') );
		$nt_big_border_nav_offset = $nt_big_border_nav_offset != '' ? ' data-scroll-offset="'.$nt_big_border_nav_offset.'"' : ' data-scroll-offset="250"';

		$nt_big_border_nav_speed = ( ot_get_option('nt_big_border_nav_scroll_speed') );
		$nt_big_border_nav_speed = $nt_big_border_nav_speed != '' ? ' data-scroll-speed="'.$nt_big_border_nav_speed.'"' : ' data-scroll-speed="250"';
		$nav_attr = array();
		$nav_attr[] .= $nt_big_border_snav;
		$nav_attr[] .= 'class="nt-navbar template-nav-style-1'.$nt_big_has_sticky_logo.'"';
		$nav_attr[] .= 'data-offcanvass-position="template-offcanvass-left"';
		$nav_attr[] .= $nt_big_border_nav_offset;
		$nav_attr[] .= $nt_big_border_nav_speed;

	?>

	<nav <?php echo implode(' ', array_filter( $nav_attr ) ); ?>>
		<div class="<?php echo esc_attr( $nt_big_border_nav_container ); ?>">
			<div class="row<?php echo esc_attr( $nt_big_border_nav_flex ); ?>">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 template-logo">
					<a href="#" class="js-template-mobile-toggle template-nav-toggle"><i></i></a>

					                    
					<?php if ( ( $nt_big_border_logo_option ) == 'text' || ( $nt_big_border_logo_option ) == '') : ?>
						<?php if ( $nt_big_border_text_logo ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-logo"><?php echo esc_html( $nt_big_border_text_logo ); ?></a> <!-- Your Logo -->
						
						<?php endif; ?>
					<?php endif; ?>	

					<?php if (( $nt_big_border_logo_option ) == 'img' ) : ?>
					<?php if ( $nt_big_border_img_logo ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-logo img-logo"><img class="responsive-img" src="<?php echo esc_url( $nt_big_border_img_logo ); ?>" alt="<?php esc_html_e( 'Logo', 'nt-big-border' ); ?>"></a> <!-- Your Logo -->
						<?php if ( $nt_big_border_img_logo2 ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sticky-logo img-logo"><img class="responsive-img" src="<?php echo esc_url( $nt_big_border_img_logo2 ); ?>" alt="<?php esc_html_e( 'Logo', 'nt-big-border' ); ?>"></a> <!-- Your Logo -->
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>					

				</div>

				<?php if ( ! has_nav_menu( 'primary-menu-2' ) ) : ?>
					<div class="col-lg-9 col-md-9 col-sm-9 template-link-wrap<?php echo esc_attr( $nt_big_border_nav_alignment ); ?>">
				<?php else : ?>
					<div class="col-lg-6 col-md-5 col-sm-5 template-link-wrap<?php echo esc_attr( $nt_big_border_nav_alignment ); ?>">
				<?php endif; ?>
				<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'items_wrap'      	=> '<ul data-offcanvass="yes" id="%1$s" class="%2$s">%3$s</ul>',
						'depth'             => 3,
						'container'         => '',
						'container_class'   => '',
						'menu_class'        => 'primary-menu',
						'menu_id'		    => 'primary-menu',
						'echo' 				=> true,
						'fallback_cb'       => 'Nt_Big_Border_Wp_Bootstrap_Navwalker::fallback',
						'walker'            => new Nt_Big_Border_Wp_Bootstrap_Navwalker()
					));
				?>
				</div>


				<?php if ( has_nav_menu( 'primary-menu-2' ) ) { ?>
					<div class="col-lg-3 col-md-4 col-sm-4 text-right template-link-wrap">
						<?php
							wp_nav_menu( array(
								'menu'              => 'primary-menu-2',
								'theme_location'    => 'primary-menu-2',
								'items_wrap'      	=> '<ul data-offcanvass="yes" id="%1$s" class="%2$s">%3$s</ul>',
								'depth'             => 1,
								'container'         => '',
								'container_class'   => '',
								'menu_class'        => 'template-special',
								'menu_id'		    => 'primary-menu-2',
								'echo' 				=> true,
								'fallback_cb'       => 'Nt_Big_Border_Wp_Bootstrap_Navwalker::fallback',
								'walker'            => new Nt_Big_Border_Wp_Bootstrap_Navwalker()
							));
						?>
					</div>
				<?php } ?>

			</div>
		</div>
	</nav>
