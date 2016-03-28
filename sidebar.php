<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Huge Shop 1.0
 */

$chairman_opt = get_option( 'chairman_opt' );
 
$blogsidebar = 'right';
if(isset($chairman_opt['sidebarblog_pos']) && $chairman_opt['sidebarblog_pos']!=''){
	$blogsidebar = $chairman_opt['sidebarblog_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$blogsidebar = $_GET['sidebar'];
}
?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="col-xs-12 col-md-3">
		<div class="sidebar-border <?php echo esc_attr($blogsidebar);?>">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div><!-- #secondary -->
<?php endif; ?>