<?php
/**
 * The template for displaying posts in the Video post format.
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
			$nt_big_border_embed = rwmb_meta( 'nt_big_border_video_embed' );
			if( $nt_big_border_embed!='' ) :
		?>
		<div class="post-thumb blog-bg">
			<div class="media-element video-responsive"><?php echo wp_kses($nt_big_border_embed,nt_big_border_allowed_html()); ?></div>
		</div>

		<?php else : ?>

		<?php
			$nt_big_border_m4v 			=	rwmb_meta( 'nt_big_border_video_m4v' );
			$nt_big_border_ogv 			=	rwmb_meta( 'nt_big_border_video_ogv' );
			$nt_big_border_webm 		=	rwmb_meta( 'nt_big_border_video_webm' );
			$nt_big_border_image_id 	=	get_post_thumbnail_id();
			$nt_big_border_image_url	=	wp_get_attachment_image_src($nt_big_border_image_id, true);
			$nt_big_border_wp_video 	=	'[video poster="'.$nt_big_border_image_url[0].'" mp4="'.$nt_big_border_m4v.'"  webm="'.$nt_big_border_webm.'"]';
		?>

	    <div class="post-thumb"><?php echo do_shortcode ($nt_big_border_wp_video); ?></div>
		<?php endif; ?>

		<?php nt_big_border_formats_content(); ?>

	</article><!-- #post-## -->
