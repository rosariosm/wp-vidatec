	
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-bg">
				<?php
					wp_enqueue_style( 'nt-big-border-custom-flexslider');
					wp_enqueue_script( 'nt-big-border-custom-flexslider');
					wp_enqueue_script( 'fitvids');
					wp_enqueue_script( 'nt-big-border-blog-settings');
					$nt_big_border_images = rwmb_meta( 'nt_big_border_gallery_image', 'type=image_advanced' );
					if( $nt_big_border_images != '' ) : 
				?>
					<div class="flexslider">
						<ul class="slides">
							<?php
								foreach ( $nt_big_border_images as $image ) {
									echo "<li><img src='{$image['full_url']}' alt='{$image['alt']}' /></li>";
								}
							?>
						</ul>
					</div>
				<?php endif; ?>
		</div><!-- Ends Post Media -->

		

		<?php nt_big_border_formats_content(); ?>
		
	</article><!-- #post-## -->