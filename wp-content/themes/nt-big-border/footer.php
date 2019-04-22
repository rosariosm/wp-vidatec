	<?php
		/**
		* The template for displaying the footer
		*
		*
		* @package WordPress
		* @subpackage nt_big_border
		* @since nt_big_border 1.0
		*/
	?>

	<?php nt_big_border_widgetize(); ?>

	<?php nt_big_border_footer(); ?>


	</div> <!-- END CONTAINER -->
	<?php if (function_exists('nt_big_border_wow_init')) {
   function nt_big_border_wow_init() { ?>
		<script type="text/javascript">
			new WOW().init();
		</script>
	<?php } } ?>

<?php
$nt_big_border_btopdisplay 	=  ot_get_option( 'nt_big_border_top_display' );
$nt_big_border_btop =  ot_get_option( 'nt_big_border_top_class' );
$nt_big_border_topbutton = ($nt_big_border_btop !=='') ? $nt_big_border_btop :'fa fa-angle-up';
?>
<?php if($nt_big_border_btopdisplay !='off'){ ?>
<div class="topcontrol">
	<i class="<?php echo esc_attr($nt_big_border_topbutton) ?>"></i>
</div>
<?php }?>

	<?php wp_footer(); ?>
	</body>
</html>
