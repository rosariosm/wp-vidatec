<?php
	/**
	* The default template for displaying content
	*
	* Used for both single and index/archive/search.
	*
	* @package WordPress
	* @subpackage nt_big_border
	* @since nt_big_border 1.0
	*/
	wp_enqueue_style(  'nt-big-border-custom-flexslider');
	wp_enqueue_script( 'nt-big-border-custom-flexslider');
	wp_enqueue_script( 'fitvids');
	wp_enqueue_script( 'nt-big-border-blog-settings');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail() && ! is_single() ) : ?>
		<div class="article-img">
			<?php the_post_thumbnail('full'); ?>
		</div>
	<?php endif; ?>


	<?php nt_big_border_formats_content(); ?>

	
</article><!-- #post-## -->