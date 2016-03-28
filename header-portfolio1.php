<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Chairman 1.0
 */
?>
<?php $chairman_opt = get_option( 'chairman_opt' );
if(is_ssl()){
	$chairman_opt['logo_main']['url'] = str_replace('http:', 'https:', $chairman_opt['logo_main']['url']);
}
?>
	<div class="header-container portfolio1">  
		<div class="header">
			<div class="<?php if(isset($chairman_opt['sticky_header']) && $chairman_opt['sticky_header']) {echo 'header-sticky';} ?> <?php if ( is_admin_bar_showing() ) {echo 'with-admin-bar';} ?>">
				<div class="container header-inner">
					<div class="row">
						<div class="col-xs-12 col-md-2 logo-wrap">
							<div class="global-table">
								<div class="global-row">
									<div class="global-cell">
										<?php if( isset($chairman_opt['logo_main']['url']) ){ ?>
											<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($chairman_opt['logo_main']['url']); ?>" alt="" /></a></div>
										<?php
										} else { ?>
											<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
											<?php
										} ?>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-8 menu-wrap">	
							<div class="horizontal-menu">
								<div class="visible-large">
									<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'primary-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
								</div>
								<div class="visible-small mobile-menu">
									<div class="nav-container">
										<div class="mbmenu-toggler"><?php echo esc_html($chairman_opt['mobile_menu_label']);?><span class="mbmenu-icon"><i class="fa fa-bars"></i></span></div>
										<?php wp_nav_menu( array( 'theme_location' => 'mobilemenu', 'container_class' => 'mobile-menu-container', 'menu_class' => 'nav-menu' ) ); ?>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-2">
							<div class="content-header">
								<?php if(class_exists('WC_Widget_Product_Search') ) { ?>
									<div class="header-search">
										<div class="search-icon">
											<?php the_widget('WC_Widget_Product_Search', array('title' => 'Search')); ?>
										</div>
									</div>
								<?php } ?>
								<?php if ( class_exists( 'WC_Widget_Cart' ) ) {
									the_widget('Custom_WC_Widget_Cart'); 
								} ?>
								<div class="vmenu-toggler">
									<div class="vmenu-toggler-button">
										<i class="fa fa-bars"></i>
									</div>
									<div class="vmenu-content">
										<?php wp_nav_menu( array( 'theme_location' => 'topmenu', 'container_class' => 'top-menu-container', 'menu_class' => 'nav-menu' ) ); ?> 
										<?php if (class_exists('SitePress')) { ?>
										<div class="switcher">
											<?php do_action('icl_language_selector'); ?>
											<div class="currency"><?php do_action('currency_switcher'); ?></div>
											
										</div> 
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						
					</div>	
				</div>
			</div>
		</div><!-- .header -->
		<div class="clearfix"></div>
	</div>