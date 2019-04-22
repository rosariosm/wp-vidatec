
	<?php
		get_header();
		get_template_part('index-header');

		$nt_big_border_bread_visibility 		= 	ot_get_option( 'nt_big_border_bread' );
		$nt_big_border_single_disable_heading 	= 	ot_get_option( 'nt_big_border_single_disable_heading' );
		$nt_big_border_postlayout 				= 	ot_get_option( 'nt_big_border_postlayout' );

	?>

	<div class="template-cover template-cover-style-2 js-full-height-off section-class-scroll index-header" data-stellar-background-ratio="0.5" data-next="yes">

		<span class="scroll-btn wow" data-wow-duration="1s" data-wow-delay="1.4s">
			<a href="#">
				<span class="mouse"><span></span></span>
			</a>
		</span>

		<div class="template-overlay"></div>

		<div class="template-cover-text">
			<div class="container">
				<div class="row">
					<div class="col-md-8 center">
						<div class="template-cover-intro">

							<?php if ( ( $nt_big_border_single_disable_heading  ) != 'off') : ?>
								<h2 class="uppercase lead-heading"><?php esc_html_e( 'Totals', 'nt-big-border' ); ?></span> : <span class="theme"><?php WC()->cart->total; ?></h2>
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


	<section id="blog" class="page-internal-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12-off has-margin-bottom-off">

				<?php if( ot_get_option( 'woopage' ) == 'right-sidebar' || ot_get_option( 'woopage' ) == '') { ?>
					<div class="col-lg-9  col-md-9 col-sm-9 index float-right posts">
				<?php } elseif( ot_get_option( 'woopage' ) == 'left-sidebar') { ?>

					<div id="widget-area" class="widget-area col-lg-3 col-md-3 col-sm-3 woo-sidebar">
						<?php dynamic_sidebar( 'shop-page-sidebar' ); ?>
					</div>
					<div class="col-lg-9  col-md-9 col-sm-9 index float-left posts">

				<?php } elseif( ot_get_option( 'woopage' ) == 'full-width') { ?>
					<div class="col-xs-12 full-width-index v">
				<?php } ?>

					<?php woocommerce_content(); ?>

			   </div><!-- #end sidebar+ content -->

				<?php if( ot_get_option( 'woopage' ) == 'right-sidebar' || ot_get_option( 'woopage' ) == '') { ?>
					<div id="widget-area" class="widget-area col-lg-3 col-md-3 col-sm-3 woo-sidebar">
						<?php dynamic_sidebar( 'shop-page-sidebar' ); ?>
					</div>
				<?php } ?>

				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
