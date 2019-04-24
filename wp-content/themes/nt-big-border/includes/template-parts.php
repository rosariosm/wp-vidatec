<?php
/**
 * Custom template parts for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package nt_big_border
*/



// START PRELOADER
if ( ! function_exists( 'nt_big_border_preloader' ) ) :
	function nt_big_border_preloader() {

		if ( ot_get_option('nt_big_border_pre') != 'off' ) { ?>

		<?php if ( ot_get_option('nt_big_border_pre_type') != 'default' ) : ?>
			<!-- PRELOADER -->
			<div id="preloader" class="preloader-container">
				<div class="loader<?php echo ot_get_option('nt_big_border_pre_type'); ?>"></div>
			</div>
			<!-- /PRELOADER -->
		<?php else : ?>
         <!-- PRELOADER -->
			<div class="preloader-container">
				<div class="la-ball-triangle-path la-2x">
					<div></div><div></div><div></div>
				</div>
			</div>
			<!-- /PRELOADER -->
		<?php endif; ?>

<?php
		}
	}
endif;
add_action( 'nt_big_border_preloader_action',  'nt_big_border_preloader', 10 );

// START NT_BIG_BORDER_WIDGETIZE

if ( ! function_exists( 'nt_big_border_widgetize' ) ) :
	function nt_big_border_widgetize() {
		if ( ot_get_option('nt_big_border_widgetize') == 'on') : ?>

		<!-- FOOTER WIDGETIZE -->
		<div class="footer-widget-area footer-top footer-section">
			<div class="container">
				<div class="row">
					<?php
						if ( is_active_sidebar( 'nt-big-border-footer-widgetize' ) ) {
							dynamic_sidebar( 'nt-big-border-footer-widgetize' );
						}
					?>
				</div>
			</div>
		</div>

		<?php
		endif;
	}
endif;

do_action( 'nt_big_border_widgetize_action',  'nt_big_border_widgetize' );

// START NT_BIG_BORDER_footer

if ( ! function_exists( 'nt_big_border_footer' ) ) :
	function nt_big_border_footer() {
		if ( ot_get_option('nt_big_border_footer_default') != 'off') : ?>

		<!-- footer default widget -->
		<div id="contact" class="template-footer-style-3 section-class-scroll footer-section">
			<div class="container">
				<div class="row p-b">
					<?php
						if ( is_active_sidebar( 'nt-big-border-footer' ) ) {
							dynamic_sidebar( 'nt-big-border-footer' );
						}
					?>
				</div>

				

			</div>
		</div>
		<!-- END footer -->

		<?php
		endif;
	}
endif;

do_action( 'nt_big_border_footer_action',  'nt_big_border_footer' );

// Start nt_big_border_formats_content

if ( ! function_exists( 'nt_big_border_formats_content' ) ) :
	function nt_big_border_formats_content() {
	?>

	<div class="post-container">
		<div class="content-container">
			<div class="entry-header">
				<?php
					if ( ! is_single() ) :
						the_title( sprintf( '<h2 class="entry-title all-caps"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
					endif;
				?>
			</div><!-- .entry-header -->

			<ul class="entry-meta">
				<li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_time('F j, Y'); ?></a></li>
				<li><?php esc_html_e('in', 'nt-big-border'); ?>  <?php the_category(', '); ?></li>
				<li><?php the_author(); ?></li>
				<?php the_tags( '<li>', ',', '</li> '); ?>
			</ul>
		</div>

		<div class="entry-content">
			<?php

				if ( is_single() ) :
					the_content();
					else :
					the_excerpt();
				endif ;

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'nt-big-border' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'nt-big-border' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php if ( ! is_single() ) : ?>
			<a class="margin_30 btn" href="<?php echo esc_url( get_permalink() ); ?>" role="button"><?php esc_html_e( 'Read More', 'nt-big-border' ); ?></a>
		<?php endif; // is_single() ?>

		<?php if (  is_single() ) : ?>
			<div id="share-buttons">
				<a href="http://www.facebook.com/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="http://twitter.com/share?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://plus.google.com/share?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
				<a href="http://www.digg.com/submit?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-digg"></i></a>
				<a href="http://reddit.com/submit?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-reddit"></i></a>
				<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest"></i></a>
				<a href="http://www.stumbleupon.com/submit?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank"><i class="fa fa-stumbleupon"></i></a>
			</div>
		<?php endif; // is_single() ?>

	</div>

	<?php
	}
endif;

add_action( 'nt_big_border_formats_content_action',  'nt_big_border_formats_content' );
