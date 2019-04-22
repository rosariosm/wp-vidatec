
	<?php

		get_header();
		get_template_part('index-header');

		$nt_big_border_border_page_hero_v = rwmb_meta( 'nt_big_border_hero_visibility' );
		$nt_big_border_page_hero_overlay_v = rwmb_meta( 'nt_big_border_page_hero_overlay_visibility' );
		$nt_big_border_page_layout = rwmb_meta( 'nt_big_border_pagelayout' );
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

								<?php  if( ( $nt_big_border_disable_title ) != true ): ?>
									<?php  if( $nt_big_border_page_title  ): ?>
										<h2 class="uppercase lead-heading"><?php echo esc_html( $nt_big_border_page_title ) ; ?></h2>
									<?php else : ?>
										<h2 class="uppercase lead-heading"><?php echo the_title(); ?></h2>
									<?php endif; ?>
								<?php endif; ?>

								<?php  if( ( $nt_big_border_page_disable_sub ) != true ): ?>
									<?php  if( $nt_big_border_page_subtitle  ): ?>
										<div class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s"><?php echo wp_kses( $nt_big_border_page_subtitle, nt_big_border_allowed_html() ) ; ?></div>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ( ( $nt_big_border_bread_visibility  ) != 'off') : ?>
									<?php if( function_exists('bcn_display') ) : ?>
										<p class="breadcrubms"> <?php  bcn_display();  ?></p>
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
		<div class="container has-margin-bottom">
			<div class="row">
				<div class="col-md-12-off has-margin-bottom-off">

					<?php if( ( $nt_big_border_page_layout ) =='right-sidebar' || ($nt_big_border_page_layout ) =='' ){ ?>
					<div class="col-lg-8  col-md-8 col-sm-12 index float-right posts">
					<?php } elseif(( $nt_big_border_page_layout ) == 'left-sidebar') { ?>
					<?php get_sidebar(); ?>
					<div class="col-lg-8  col-md-8 col-sm-12 index float-left posts">
					<?php } elseif(( $nt_big_border_page_layout ) == 'full-width') { ?>
					<div class="col-xs-12 full-width-index v">
					<?php } ?>

						<?php
							// Start the loop.
							while ( have_posts() ) : the_post();

								// Include the page content template.
								get_template_part( 'content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							// End the loop.
							endwhile;
						?>
					</div>

					<?php if( ( $nt_big_border_page_layout ) =='right-sidebar' || ($nt_big_border_page_layout ) =='' ){ ?>
						<?php get_sidebar(); ?>
					<?php } ?>

				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
