
	<?php

		get_header();
		get_template_part('index-header');

		$nt_big_border_archive_layout = ot_get_option( 'nt_big_border_archivelayout' );

	?>

	<?php if ( ot_get_option( 'nt_big_border_archive_hero_visibility' ) != 'off' ) : ?>
		<div class="template-cover template-cover-style-2 js-full-height-off section-class-scroll index-header" data-stellar-background-ratio="0.5" data-next="yes">

			<span class="scroll-btn wow" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#">
					<span class="mouse"><span></span></span>
				</a>
			</span>

			<?php if ( ot_get_option( 'nt_big_border_archive_overlay_visibility' ) != 'off' ) : ?>
				<div class="template-overlay"></div>
			<?php endif; ?>

			<div class="template-cover-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<div class="template-cover-intro">

								<?php if ( ot_get_option( 'nt_big_border_archive_heading_visibility' )!= 'off') : ?>
									<?php if ( ot_get_option( 'nt_big_border_archive_heading' )!= '') : ?>
										<h2 class="uppercase lead-heading"><?php echo ( ot_get_option( 'nt_big_border_archive_heading' )); ?></h2>
									<?php else : ?>
										<h2 class="uppercase lead-heading"><?php echo esc_html_e('Our Archive','nt-big-border');?></h2>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ( ot_get_option( 'nt_big_border_archive_slogan_visibility' )!= 'off') : ?>
									<?php if ( ot_get_option( 'nt_big_border_archive_slogan' )!= '') : ?>
										<div class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s"><?php echo wp_kses( ot_get_option( 'nt_big_border_archive_slogan' ), nt_big_border_allowed_html() ); ?></div>
									<?php else : ?>
										<h2 class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s"><?php the_archive_title(); ?></h2>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ( ot_get_option( 'nt_big_border_bread' ) != 'off') : ?>
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

	<section id="blog" class="nt-archive-content">
		<div class="container has-margin-bottom">
			<div class="row">

				<?php if( ( $nt_big_border_archive_layout ) == 'right-sidebar' || ( $nt_big_border_archive_layout ) == '' ) { ?>
				<div class="col-lg-8  col-md-8 col-sm-12 index float-right posts">
				<?php } elseif( ( $nt_big_border_archive_layout ) == 'left-sidebar') { ?>
				<?php get_sidebar(); ?>
				<div class="col-lg-8  col-md-8 col-sm-12 index float-left posts">
				<?php } elseif( ( $nt_big_border_archive_layout ) == 'full-width') { ?>
				<div class="col-xs-12 full-width-index v">
				<?php } ?>

				 <?php
					if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'post-format/content', get_post_format() );
					endwhile;
					the_posts_pagination( array(
						'prev_text' => esc_html__( 'Previous page', 'nt-big-border' ),
						'next_text' => esc_html__( 'Next page', 'nt-big-border' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'nt-big-border' ) . ' </span>',
					) );
					else :
						get_template_part( 'content', 'none' );
					endif;
				?>

				</div><!-- #end sidebar+ content -->

				<?php if( ( $nt_big_border_archive_layout ) == 'right-sidebar' || ( $nt_big_border_archive_layout ) == '' ) { ?>
					<?php get_sidebar(); ?>
				<?php } ?>

				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
