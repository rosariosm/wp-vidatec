
<?php

	get_header();
	get_template_part('index-header');

	$nt_big_border_search_layout = ot_get_option( 'nt_big_border_searchlayout' );
	$nt_big_border_search_heading_visibility = ot_get_option( 'nt_big_border_search_heading_visibility' );
	$nt_big_border_search_heading = ot_get_option( 'nt_big_border_search_heading' );
	$nt_big_border_search_slogan_visibility = ot_get_option( 'nt_big_border_search_slogan_visibility' );
	$nt_big_border_search_slogan = ot_get_option( 'nt_big_border_search_slogan' );
	$nt_big_border_bread_visibility = ot_get_option( 'nt_big_border_bread');
?>

	<?php if ( ot_get_option( 'nt_big_border_search_hero_visibility' ) != 'off' ) : ?>
		<div class="template-cover template-cover-style-2 js-full-height-off section-class-scroll index-header" data-stellar-background-ratio="0.5" data-next="yes">

			<span class="scroll-btn wow" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#"><span class="mouse"><span></span></span></a>
			</span>

			<?php if ( ot_get_option( 'nt_big_border_search_overlay_visibility' ) != 'off' ) : ?>
				<div class="template-overlay"></div>
			<?php endif; ?>

			<div class="template-cover-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<div class="template-cover-intro">

								<?php if ( $nt_big_border_search_heading_visibility != 'off' ) : ?>

									<?php if ( $nt_big_border_search_heading != '' ) : ?>
										<h2 class="uppercase lead-heading"><?php echo esc_html( $nt_big_border_search_heading ); ?></h2>
									<?php else : ?>
										<h2 class="uppercase lead-heading"><?php echo esc_html( $wp_query->found_posts ); ?> <?php esc_html_e( 'Search Results Found For', 'nt-big-border' ); ?>: "<?php the_search_query(); ?>"</h2>
									<?php endif; ?>

								<?php endif; ?>

								<?php if ( $nt_big_border_search_slogan_visibility != 'off' ) : ?>

									<?php if ( $nt_big_border_search_slogan != '' ) : ?>
										<div class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s"><?php echo wp_kses( $nt_big_border_search_slogan, nt_big_border_allowed_html() ); ?></div>
									<?php else : ?>
										<h2 class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s"><?php echo the_title();?></h2>
									<?php endif; ?>

								<?php endif; ?>

								<?php
									if ( ( $nt_big_border_bread_visibility  ) != 'off' && function_exists('bcn_display') ) :
								 ?>
									<p class="breadcrubms"> <?php bcn_display(); ?></p>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<section id="blog" class="nt-search-content">
		<div class="container has-margin-bottom">
			<div class="row">
				<div class="col-md-12-off has-margin-bottom-off">

				<?php if( ( $nt_big_border_search_layout ) == 'right-sidebar' || ( $nt_big_border_search_layout ) == '' ) { ?>
				<div class="col-lg-8  col-md-8 col-sm-12 index float-right posts">

				<?php } elseif( ( $nt_big_border_search_layout ) == 'left-sidebar') { ?>
				<?php get_sidebar(); ?>
				<div class="col-lg-8  col-md-8 col-sm-12 index float-left posts">

				<?php } elseif( ( $nt_big_border_search_layout ) == 'full-width') { ?>
				<div class="col-xs-12 full-width-index v">
				<?php } ?>

					<?php
						if ( have_posts() ) :

							while ( have_posts() ) : the_post();
								get_template_part( 'content', 'search' );
							endwhile;
							the_posts_pagination( array(
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'nt-big-border' ) . ' </span>',
							) );
							else :
							get_template_part( 'content', 'none' );

						endif;

						wp_link_pages();
					 ?>

				</div><!-- #end sidebar+ content -->

				<?php
					if( ( $nt_big_border_search_layout ) == 'right-sidebar' || ( $nt_big_border_search_layout ) == '') {
						get_sidebar();
					}
				?>

				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
