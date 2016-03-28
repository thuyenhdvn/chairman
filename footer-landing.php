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
?>
<?php global $chairman_opt; ?>

	<div class="footer landing"> 
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
					</div>
				</div>
			</div>
		</div>
	</div>
	