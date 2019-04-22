
<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage nt_big_border
 * @since nt_big_border 1.0
 */
?>


<!-- ARTICLE -->
<article>

	<h3 class="page-title"><?php esc_html_e( 'Nothing Found', 'nt-big-border' ); ?></h3>
	
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'nt-big-border' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'nt-big-border' ); ?></p>
		<?php get_search_form(); ?>

	<?php else : ?>

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'nt-big-border' ); ?></p>
		<?php get_search_form(); ?>
		
		

	<?php endif; ?>
	
	<div class="clearfix m-bottom-50"></div>		
	<div class="recent">			
		<div class="col-header">			
			<h3><?php esc_html_e( 'Recent Posts', 'nt-big-border' ); ?></h3>
		</div>
		<ol>
			<?php wp_get_archives( 
				array( 
					'type' => 'postbypost', 
					'limit' => 10, 
					'format' => 'custom', 
					'before' => '<li>', 
					'after' => '</li>' 
				) 
			); ?>
		</ol>
	</div>
	
</article> <!-- End ARTICLE -->

