
<?php

	get_header();
	get_template_part('index-header');

	$nt_big_border_error_heading = ot_get_option( 'nt_big_border_error_heading' );
	$nt_big_border_error_layout = ot_get_option( 'nt_big_border_404layout' );
	$nt_big_border_bread_visibility = ot_get_option( 'nt_big_border_bread' );

?>
	<?php if ( ot_get_option( 'nt_big_border_error_hero_visibility' ) != 'off' ) : ?>
		<div class="template-cover template-cover-style-2 js-full-height-off section-class-scroll index-header" data-stellar-background-ratio="0.5">

			<span class="scroll-btn wow" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#">
					<span class="mouse"><span></span></span>
				</a>
			</span>

			<?php if ( ot_get_option( 'nt_big_border_error_overlay_visibility' ) != 'off' ) : ?>
				<div class="template-overlay"></div>
			<?php endif; ?>

			<div class="template-cover-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<div class="template-cover-intro">

								<?php if ( ot_get_option( 'nt_big_border_error_heading_visibility' ) != 'off' ) : ?>
									<?php if ( ( $nt_big_border_error_heading  ) != '' ) : ?>
										<h2 class="uppercase lead-heading"><?php echo esc_html( $nt_big_border_error_heading ); ?></h2>
									<?php else : ?>
										<h2 class="uppercase lead-heading"><?php echo esc_html_e('404 - Not Found','nt-big-border');?></h2>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ( ot_get_option( 'nt_big_border_error_slogan_visibility' ) != 'off' ) : ?>
									<?php if ( ot_get_option( 'nt_big_border_error_slogan' ) != '' ) : ?>
										<div class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s"><?php echo wp_kses( ot_get_option( 'nt_big_border_error_slogan' ), nt_big_border_allowed_html() ); ?></div>
									<?php else : ?>
										<h2 class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s"><?php echo the_title();?></h2>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ( ( $nt_big_border_bread_visibility  ) != 'off' ) : ?>
									<?php if ( function_exists( 'bcn_display' ) ) : ?>
										<p class="breadcrubms"> <?php bcn_display();  ?></p>
									<?php endif; ?>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<section id="blog" class="nt-error-content">
		<div class="container has-margin-bottom">
			<div class="row">

				<?php if( ( $nt_big_border_error_layout ) == 'right-sidebar' || ( $nt_big_border_error_layout ) == '' ) { ?>
				<div class="col-lg-8 col-md-8 col-sm-12 index float-right posts">
				<?php } elseif( ( $nt_big_border_error_layout ) == 'left-sidebar') { ?>
				<?php get_sidebar(); ?>
				<div class="col-lg-8 col-md-8 col-sm-12 index float-left posts">
				<?php } elseif( ( $nt_big_border_error_layout ) == 'full-width') { ?>
				<div class="col-xs-12 full-width-index v">
				<?php } ?>

					<h3><?php esc_html_e( 'Hmm, we could not find what you are looking for.', 'nt-big-border' ); ?></h3>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'nt-big-border' ); ?></p>

					<?php get_search_form(); ?>


					<div class="clearfix m-bottom-50"></div>
					<div class="recent">
						<div class="col-header">
							<h3><?php esc_html_e( 'Recent Posts', 'nt-big-border' ); ?></h3>
						</div>
						<ol>
							<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10, 'format' => 'custom', 'before' => '<li>', 'after' => '</li>' ) ); ?>
						</ol>
					</div>
				</div>

				<?php if( ( $nt_big_border_error_layout ) == 'right-sidebar' || ( $nt_big_border_error_layout ) == '' ) { ?>
					<?php get_sidebar(); ?>
				<?php } ?>

			</div>
		</div>
	</section>
	<?php get_footer(); ?>
