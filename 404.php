<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Huge Shop 1.0
 */

$chairman_opt = get_option( 'chairman_opt' );

get_header();

?>
	<div class="main-container error404">
		<div class="container">
			<div class="search-form-wrapper">
				<h1>404</h1>
				<h2><?php esc_html_e( "Opps! PAGE NOT BE FOUND", 'chairman' ); ?></h2>
				<p class="home-link"><?php esc_html_e( "Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.", 'chairman' ); ?></p>
				<?php get_search_form(); ?>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_html_e( 'Back to home', 'chairman' ); ?>"><?php esc_html_e( 'Back to home page', 'chairman' ); ?></a>
			</div>
		</div>
		<div class="brands-logo other-page">
			<div class="container">
			<?php echo do_shortcode('[ourbrands]'); ?>
			</div>
		</div>
		<div class="home-static3 other-page">
			<div class="container">
				<?php if(isset($chairman_opt['static_block3'])) {
					echo wp_kses($chairman_opt['static_block3'], array(
						'a' => array(
						'class' => array(),
						'href' => array(),
						'title' => array()
						),
						'img' => array(
							'src' => array(),
							'alt' => array()
						),
						'strong' => array(),
						'h2' => array(),
						'p' => array(),
						'i' => array(),
					)); 
				} ?>
			</div>	
		</div>
	</div>
</div>
<?php get_footer(); ?>