<?php
/**
 * The template for displaying posts in the Quote post format.
 *
 * @package WordPress
 * @subpackage nt_big_border_
 * @since nt_big_border_ 1.0
 */
?>

<!-- Start .hentry -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="hentry-box">

		<?php

		$nt_big_border_quote_text 		=	rwmb_meta( 'nt_big_border_quote_text' );
		$nt_big_border_quote_author 	=	rwmb_meta( 'nt_big_border_quote_author' );
		$nt_big_border_image_id 		=	get_post_thumbnail_id();
		$nt_big_border_image_url 		=	wp_get_attachment_image_src($nt_big_border_image_id, true);
		$nt_big_border_color 			=	rwmb_meta( 'nt_big_border_quote_bg' );
		$nt_big_border_opacity 			=	rwmb_meta( 'nt_big_border_quote_bg_opacity' );
		$nt_big_border_opacity 			=	$nt_big_border_opacity / 100;

		?>

		<div class="post-thumb">
			<div class="content-quote-format-wrapper">
				<?php if(has_post_thumbnail()) : ?>
				<div class="entry-media" style="background-image: url(<?php echo esc_url( $nt_big_border_image_url[0] ); ?>); ">
				<?php else : ?>
				<div class="entry-media">
				<?php endif; ?>
					<div class="content-quote-format-overlay" style="background-color: <?php echo esc_attr( $nt_big_border_color ); ?>; opacity: <?php echo esc_attr( $nt_big_border_opacity ); ?>;"></div>
					<div class="content-quote-format-textwrap">
						<h3><a href="<?php esc_url( the_permalink() ); ?>"><?php echo esc_attr( $nt_big_border_quote_text ); ?></a></h3>
						<p><a href="#0" target="_blank" style="color: #ffffff;"><?php echo esc_attr( $nt_big_border_quote_author ); ?></a></p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		
		

		<?php nt_big_border_formats_content(); ?>
		
	</article><!-- #post-## -->