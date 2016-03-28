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

	<div class="footer event1">
		<?php if(isset($chairman_opt)) { ?>
		<div class="footer-top">	
			<div class="container">
				<div class="footer-top-inner"> 
					<div class="row">
						<?php if(isset($chairman_opt['social_icons']) && $chairman_opt['social_icons']!=''){ ?>
							<div class="col-md-5 col-xs-12">
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
							</div> 
						<?php }  
						if ( isset($chairman_opt['newsletter_form']) ) { ?>
							<div class="col-md-7 col-xs-12">
								<?php if(class_exists( 'WYSIJA_NL_Widget' )){
									the_widget('WYSIJA_NL_Widget', array(
										'title' => esc_html($chairman_opt['newsletter_title']),
										'form' => (int)$chairman_opt['newsletter_form'],
										'id_form' => 'newsletter1',
										'success' => '',
									));
								}?>
							</div> 
						<?php } ?> 
					</div>
				</div>
			</div>		
		</div>
		<?php } ?>

		<?php if(isset($chairman_opt)) { ?>
		<div class="footer-middle">
			<div class="container">
				<div class="row">	
					<?php
					if(isset($chairman_opt['about_us']) && $chairman_opt['about_us']!=''){ ?>
						<div class="col-xs-12  col-md-4 col-lg-4">
							<div class="widget widget_about_us">
								<h3 class="widget-title"><?php echo esc_html($chairman_opt['about_us_title']);?></h3>
								<?php if( isset($chairman_opt['logo_footer']['url']) ){ ?>
									<div class="widget-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url($chairman_opt['logo_footer']['url']); ?>" alt="" /></a></div>
								<?php } ?>
								<?php echo wp_kses($chairman_opt['about_us'], array(
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
					<?php } 
					if( isset($chairman_opt['footer_menu1']) && $chairman_opt['footer_menu1']!='' ) {
						$menu1_object = wp_get_nav_menu_object( $chairman_opt['footer_menu1'] );
						$menu1_args = array(
							'menu_class'      => 'nav_menu',
							'menu'         => $chairman_opt['footer_menu1'],
						); ?>
						<div class="col-xs-12  col-md-4 col-lg-4">
							<div class="widget widget_menu">
								<h3 class="widget-title"><?php echo esc_html($menu1_object->name); ?></h3>
								<?php wp_nav_menu( $menu1_args ); ?>
							</div>
						</div>
					<?php }
					 
					if( isset($chairman_opt['contact_us']) && $chairman_opt['contact_us']!='' ) { ?>
						<div class="col-xs-12  col-md-4 col-lg-4">
							 <div class="widget widget_contact_us">
								<h3 class="widget-title"><?php echo esc_html($chairman_opt['contact_us_title']);?></h3>
								 
								<?php echo wp_kses($chairman_opt['contact_us'], array(
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
	