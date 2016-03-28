<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Huge Shop 1.0
 */
 
$chairman_opt = get_option( 'chairman_opt' );
?>
			<?php
			if ( !isset($chairman_opt['footer_layout']) || $chairman_opt['footer_layout']=='default' ) {
				get_footer('first');
			} else {
				get_footer($chairman_opt['footer_layout']);
			}
			?>
		</div><!-- .page -->
	</div><!-- .wrapper -->
	<!--<div class="chairman_loading"></div>-->
	<?php if ( isset($chairman_opt['back_to_top']) && $chairman_opt['back_to_top'] ) { ?>
	<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
	<?php } ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie8.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>