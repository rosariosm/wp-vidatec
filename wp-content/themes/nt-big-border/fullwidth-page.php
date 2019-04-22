	<?php
		/*
		Template name: Fullwidth Template
		*/
		get_header();
		get_template_part('index-header');

		$nt_big_border_border_page_hero_v = rwmb_meta( 'nt_big_border_hero_visibility' );
		$nt_big_border_page_hero_overlay_v = rwmb_meta( 'nt_big_border_page_hero_overlay_visibility' );
		$nt_big_border_disable_title = rwmb_meta( 'nt_big_border_disable_title' );
		$nt_big_border_page_title = rwmb_meta( 'nt_big_border_alt_title' );
		$nt_big_border_page_disable_sub = rwmb_meta( 'nt_big_border_page_disable_subtitle' );
		$nt_big_border_page_subtitle = rwmb_meta( 'nt_big_border_page_subtitle' );
		$nt_big_border_bread_visibility = ot_get_option( 'nt_big_border_bread', 'on' );

	?>
	<?php if ( $nt_big_border_border_page_hero_v != true ) : ?>
		<div class="template-cover template-cover-style-2 js-full-height-off section-class-scroll index-header" data-stellar-background-ratio="0.5" data-next="yes">

			<span class="scroll-btn wow" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#">
					<span class="mouse"><span></span></span>
				</a>
			</span>
			<?php if ( $nt_big_border_page_hero_overlay_v != true ) : ?>
				<div class="template-overlay"></div>
			<?php endif; ?>
			<div class="template-cover-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<div class="template-cover-intro">

								<?php if ( ( $nt_big_border_disable_title ) != true ): ?>
									<?php if( $nt_big_border_page_title ): ?>
										<h2 class="uppercase lead-heading"><?php echo esc_html( $nt_big_border_page_title ) ; ?></h2>
									<?php else : ?>
										<h2 class="uppercase lead-heading"><?php echo the_title(); ?></h2>
									<?php endif; ?>
								<?php endif; ?>

								<?php if( ( $nt_big_border_page_disable_sub ) != true ): ?>
									<?php if( $nt_big_border_page_subtitle ): ?>
										<div class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s"><?php echo wp_kses( $nt_big_border_page_subtitle, nt_big_border_allowed_html() ) ; ?></div>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ( ( $nt_big_border_bread_visibility ) != 'off' ) : ?>
									<?php if( function_exists('bcn_display') ) : ?>
										<p class="breadcrubms"> <?php bcn_display(); ?></p>
									<?php endif; ?>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<section id="blog" class="nt-page-content">
		<div class="container-off has-margin-bottom">
			<div class="row-off">
				<div class="col-md-12-off has-margin-bottom">
					<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post();
								the_content();
							endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
