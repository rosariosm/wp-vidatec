
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
		$nt_big_border_mp3 		= rwmb_meta( 'nt_big_border_audio_mp3' );
		$nt_big_border_oga 		= rwmb_meta( 'nt_big_border_audio_ogg' );
		$nt_big_border_sc_url 	= rwmb_meta( 'nt_big_border_audio_sc' );
		$nt_big_border_sc_color = rwmb_meta( 'nt_big_border_audio_sc_color' );
		$nt_big_border_wp_audio = '[audio mp3="'.$nt_big_border_mp3.'"  ogg="'.$nt_big_border_oga.'"]';
		$nt_big_border_soundcloud_audio = '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url='.urlencode( $nt_big_border_sc_url ).'&amp;show_comments=true&amp;auto_play=false&amp;color='.$nt_big_border_sc_color.'"></iframe>';
	?>

	<?php if($nt_big_border_sc_url!='') : ?>
		<div class="post-thumb blog-bg"><?php echo wp_kses($nt_big_border_soundcloud_audio,nt_big_border_allowed_html()); ?></div>
	<?php else : ?>
		<div class="post-thumb blog-bg">
			<?php if(has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
			<?php echo do_shortcode ( $nt_big_border_wp_audio ); ?>
		</div>
	<?php endif; ?>

	<?php nt_big_border_formats_content(); ?>

</article><!-- #post-## -->
