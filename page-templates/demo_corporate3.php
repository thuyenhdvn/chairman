<?php
$_SESSION["preset"] = 5;
/**
 * Template Name: Demo Corporate 3
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php $chairman_opt = get_option( 'chairman_opt' ); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php 
if(isset($chairman_opt['opt-favicon']) && $chairman_opt['opt-favicon']!="") { 
	if(is_ssl()){
		$chairman_opt['opt-favicon'] = str_replace('http', 'https', $chairman_opt['opt-favicon']);
	}
?>
	<link rel="icon" type="image/png" href="<?php echo esc_url($chairman_opt['opt-favicon']['url']);?>">
<?php } ?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">
var chairman_brandnumber = <?php if(isset($chairman_opt['brandnumber'])) { echo esc_js($chairman_opt['brandnumber']); } else { echo '6'; } ?>,
	chairman_brandscroll = <?php echo esc_js($chairman_opt['brandscroll'])==1 ? 'true': 'false'; ?>,
	chairman_brandscrollnumber = <?php if(isset($chairman_opt['brandscrollnumber'])) { echo esc_js($chairman_opt['brandscrollnumber']); } else { echo '2';} ?>,
	chairman_brandpause = <?php if(isset($chairman_opt['brandpause'])) { echo esc_js($chairman_opt['brandpause']); } else { echo '3000'; } ?>,
	chairman_brandanimate = <?php if(isset($chairman_opt['brandanimate'])) { echo esc_js($chairman_opt['brandanimate']); } else { echo '700';} ?>;
var chairman_blogscroll = <?php echo esc_js($chairman_opt['blogscroll'])==1 ? 'true': 'false'; ?>,
	chairman_blogpause = <?php if(isset($chairman_opt['blogpause'])) { echo esc_js($chairman_opt['blogpause']); } else { echo '3000'; } ?>,
	chairman_bloganimate = <?php if(isset($chairman_opt['bloganimate'])) { echo esc_js($chairman_opt['bloganimate']); } else { echo '700'; } ?>;
var chairman_testiscroll = <?php echo esc_js($chairman_opt['testiscroll'])==1 ? 'true': 'false'; ?>,
	chairman_testipause = <?php if(isset($chairman_opt['testipause'])) { echo esc_js($chairman_opt['testipause']); } else { echo '3000'; } ?>,
	chairman_testianimate = <?php if(isset($chairman_opt['testianimate'])) { echo esc_js($chairman_opt['testianimate']); } else { echo '700'; } ?>;
var chairman_menu_number = <?php if(isset($chairman_opt['vertical_menu_items'])) { echo esc_js((int)$chairman_opt['vertical_menu_items']+1); } else { echo '9';} ?>;
</script>
<style>
.header-container .header .header-sticky.ontop.show {
    background: rgba(28,55,82,0.9);
}
</style>
<?php wp_head(); ?> 
</head>

<body <?php body_class('home'); ?>>
	<div id="yith-wcwl-popup-message" style="display:none;"><div id="yith-wcwl-message"></div></div>
	<div class="wrapper <?php if($chairman_opt['page_layout']=='box'){echo 'box-layout';}?>">
		<div class="page-wrapper">
			<div class="header-container corporate1"> 
				<div class="top-bar">
					<div class="container">
						<div class="top-bar-inner">
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="box-left">
										<div class="top-message"><?php echo esc_html($chairman_opt['welcome_message']); ?></div>
										<?php if((isset($chairman_opt['blog_header']) && $chairman_opt['blog_header']!=''))
										{ ?>
											<div class="blog-header"> 
												<?php echo wp_kses($chairman_opt['blog_header'], array(
													'a' => array(
														'href' => array(),
														'title' => array()
													),
													'img' => array(
														'src' => array(),
														'alt' => array()
													),
													'ul' => array(),
													'li' => array(
														'class' => array()
													),
													'label' => array(),
													'i' => array(
														'class' => array()
													),
													'br' => array(),
													'em' => array(),
													'strong' => array(),
													'p' => array(),
												)); ?>
											</div>
										<?php } ?>

									</div> 
								</div>	
								<div class="col-xs-12 col-md-6">
									<?php

									if(isset($chairman_opt['social_icons2'])) {
										echo '<ul class="social-icons">';
										foreach($chairman_opt['social_icons2'] as $key=>$value ) {
											if($value!=''){
												if($key=='vimeo'){
													echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
												} else {
													echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										}
										echo '</ul>';
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<div class="header">
					<div class="<?php if(isset($chairman_opt['sticky_header']) && $chairman_opt['sticky_header']) {echo 'header-sticky';} ?> <?php if ( is_admin_bar_showing() ) {echo 'with-admin-bar';} ?>">
						<div class="container header-inner">
							<div class="row">
								<div class="col-xs-12 col-md-2 logo-wrap">
									<div class="global-table">
										<div class="global-row">
											<div class="global-cell">
												<?php if( isset($chairman_opt['logo_main']['url']) ){ ?>
													<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/logo_corporate3.png'; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></div>
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
									</div>
								</div>
								
							</div>	
						</div>
					</div>
				</div><!-- .header -->
				<div class="clearfix"></div>
			</div>
			<div class="main-container">
				<div class="page-content front-page">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php endwhile; ?>
					
				</div>
			</div>
			<div class="footer portfolio1"> 
				<?php if(isset($chairman_opt)) { ?>
				<div class="footer-top">
					<div class="container">
						<div class="row">	
							<?php
							if(isset($chairman_opt['portfolio1_about_us']) && $chairman_opt['portfolio1_about_us']!=''){ ?>
								<div class="col-sm-6  col-md-3 col-lg-3">
									<div class="widget widget_about_us"> 
										<?php if( isset($chairman_opt['logo_footer']['url']) ){ ?>
											<div class="widget-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/portfolio1_logo_footer.png'; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></div>
										<?php } ?>
										<?php echo wp_kses($chairman_opt['portfolio1_about_us'], array(
											'a' => array(
												'href' => array(),
												'title' => array()
											),
											'div' => array(
												'class' => array(),
											),
											'img' => array(
												'src' => array(),
												'alt' => array()
											),
											'h3' => array(
												'class' => array(),
											),
											'ul' => array(),
											'li' => array(),
											'i' => array(
												'class' => array()
											),
											'br' => array(),
											'em' => array(),
											'strong' => array(),
											'p' => array(),
										)); ?> 
									</div> 
								</div>
							<?php } ?> 
							<div class="col-sm-6  col-md-3 col-lg-3">
								<div class="widget-latest-tweets">
									<?php echo do_shortcode('[AIGetTwitterFeeds ai_username="roadthemes"]'); ?>
								</div> 
							</div>
						 
							<div class="col-sm-6  col-md-3 col-lg-3"> 
								<?php the_widget('WC_Widget_Product_Tag_Cloud');?>
							</div> 
							<?php if ( isset($chairman_opt['newsletter_form']) || isset($chairman_opt['social_icons']) ) { ?> 
								<div class="col-sm-6  col-md-3 col-lg-3"> 
									<?php if(class_exists( 'WYSIJA_NL_Widget' )){
										the_widget('WYSIJA_NL_Widget', array(
											'title' => esc_html($chairman_opt['newsletter_title']),
											'form' => (int)$chairman_opt['newsletter_form'],
											'id_form' => 'newsletter1',
											'success' => '',
										));
									}?> 
									
									<?php if(isset($chairman_opt['social_icons']) && $chairman_opt['about_us']!=''){ ?> 
										<div class="widget widget-social"> 
											<?php

											if(isset($chairman_opt['social_icons'])) {
												echo '<ul class="social-icons">';
												foreach($chairman_opt['social_icons'] as $key=>$value ) {
													if($value!=''){
														if($key=='vimeo'){
															echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
														} else {
															echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
														}
													}
												}
												echo '</ul>';
											}
											?>
										</div> 
									<?php } ?> 
								</div> 
							<?php } ?>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="footer-bottom">
					<div class="container">
						<div class="footer-bottom-inner">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="widget-copyright">
										<?php 
										if( isset($chairman_opt['copyright']) && $chairman_opt['copyright']!='' ) {
											echo wp_kses($chairman_opt['copyright'], array(
												'a' => array(
													'href' => array(),
													'title' => array()
												),
												'br' => array(),
												'em' => array(),
												'strong' => array(),
											));
										} else {
											echo 'Copyright <a href="'.esc_url( home_url( '/' ) ).'">'.get_bloginfo('name').'</a> '.date('Y').'. All Rights Reserved';
										}
										?>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="widget-payment">
										<?php if(isset($chairman_opt['payment_icons']) && $chairman_opt['payment_icons']!='' ) {
											echo wp_kses($chairman_opt['payment_icons'], array(
												'a' => array(
													'href' => array(),
													'title' => array()
												),
												'img' => array(
													'src' => array(),
													'alt' => array()
												),
											)); 
										} ?>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .page -->
	</div><!-- .wrapper -->
	<!--<div class="chairman_loading"></div>-->
	<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/ie8.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_footer(); ?>
</body>
</html>
<?php unset($_SESSION["preset"]); ?>