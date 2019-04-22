
	<?php
		get_header();
		get_template_part('index-header');

		$nt_big_border_bread_visibility 		= 	ot_get_option( 'nt_big_border_bread' );
		$nt_big_border_single_disable_heading 	= 	ot_get_option( 'nt_big_border_single_disable_heading' );
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
								<h2 class="uppercase lead-heading"><?php echo the_title();?></h2>
							<?php endif; ?>

							<?php if ( ( $nt_big_border_bread_visibility  ) != 'off') : ?>
								<?php if( function_exists('bcn_display') ) : ?>
									<p class="breadcrubms"><?php  bcn_display();  ?></p>
								<?php endif; ?>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="blog">
		<div class="container has-margin-bottom">
			<div class="row">
				<div class="fh5co-project-style-4">

					<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'post-format/portfolio/content', get_post_format() );
						endwhile; // end of the loop.
					?>

					<!--
						<div class="row fh5co-navigation">
						   <div class="col-md-4 col-sm-4 col-xs-4 text-left fh5co-prev">
							  <a href="#"><i class="visible-xs fh5co-icon icon-arrow-left22"></i><span class=" hidden-xs">Previous project</span></a>
						   </div>
						   <div class="col-md-4 col-sm-4 col-xs-4 text-center fh5co-all">
							  <a href="#"><i class="fh5co-icon icon-grid2"></i></a>
						   </div>
						   <div class="col-md-4 col-sm-4 col-xs-4 text-right fh5co-next">
							  <a href="#"><i class="visible-xs fh5co-icon icon-arrow-right22"></i><span class=" hidden-xs">Next project</span></a>
						   </div>
						</div>
					-->

				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
