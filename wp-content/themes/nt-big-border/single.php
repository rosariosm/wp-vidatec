
	<?php

		get_header();
		get_template_part('index-header');

		$nt_big_border_bread_visibility = ot_get_option( 'nt_big_border_bread' );
		$nt_big_border_single_disable_heading = ot_get_option( 'nt_big_border_single_disable_heading' );
		$nt_big_border_post_layout = ot_get_option( 'nt_big_border_postlayout' );

		$nt_big_border_single_hero = array();
		if( ot_get_option( 'nt_big_border_single_hero_bg' ) == 'featured' ) {
			$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$nt_big_border_single_hero[] .= 'style="background: url('. esc_url( $image_src[0] ) .') no-repeat fixed center top / cover !important ;"';
		}

		$nt_big_border_single_hero[] .= 'class="template-cover template-cover-style-2 js-full-height-off section-class-scroll index-header"';
		$nt_big_border_single_hero[] .= 'data-stellar-background-ratio="0.5"';
		$nt_big_border_single_hero[] .= 'data-next="yes"';
	?>

	<?php if ( ot_get_option( 'nt_big_border_blog_hero_visibility' ) != 'off' ) : ?>
		<div <?php echo implode(' ', array_filter( $nt_big_border_single_hero ) ); ?>>

			<span class="scroll-btn wow" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#">
					<span class="mouse"><span></span></span>
				</a>
			</span>

			<?php if ( ot_get_option( 'nt_big_border_single_overlay_visibility' ) != 'off' ) : ?>
				<div class="template-overlay"></div>
			<?php endif; ?>

			<div class="template-cover-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<div class="template-cover-intro">

								<?php if ( ( $nt_big_border_single_disable_heading  ) != 'off') : ?>
									<h2 class="uppercase lead-heading"><?php echo the_title();?></h2>
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

	<section id="blog">
		<div class="container has-margin-bottom">
			<div class="row">
				<div class="col-md-12-off has-margin-bottom-off">

				<!-- right sidebar -->
				<?php if( ( $nt_big_border_post_layout ) == 'right-sidebar' || ( $nt_big_border_post_layout ) == '') { ?>
				<div class="col-lg-8 col-md-8 col-sm-12 index float-right posts">

				<!-- left sidebar -->
				<?php } elseif( ( $nt_big_border_post_layout ) == 'left-sidebar') { ?>
				<?php get_sidebar(); ?>
				<div class="col-lg-8 col-md-8 col-sm-12 index float-left posts">

				<!-- no sidebar -->
				<?php } elseif( ( $nt_big_border_post_layout ) == 'full-width') { ?>
				<div class="col-xs-12 full-width-index v">
				<?php } ?>

					<?php

						while ( have_posts() ) : the_post();
							get_template_part( 'post-format/content', get_post_format() );
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						endwhile;

						// post navigation
						nt_big_border_post_nav();

					?>

				</div><!-- #end sidebar+ content -->

				<!-- right sidebar -->
				<?php if( ( $nt_big_border_post_layout ) == 'right-sidebar' || ( $nt_big_border_post_layout ) == '') { ?>
					<?php get_sidebar(); ?>
				<?php } ?>

				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
