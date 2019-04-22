<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage nt_big_border
 * @since nt_big_border 1.0
 */

if (  is_active_sidebar( 'sidebar-1' )  ) : ?>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="widget-area" class="widget-area col-lg-4 col-md-4 col-sm-12">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
<?php endif; ?>
