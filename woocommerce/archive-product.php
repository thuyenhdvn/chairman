<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>
<?php
global $wp_query, $woocommerce_loop;

$chairman_opt = get_option( 'chairman_opt' );

$shoplayout = 'sidebar';
if(isset($chairman_opt['shop_layout']) && $chairman_opt['shop_layout']!=''){
	$shoplayout = $chairman_opt['shop_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$shoplayout = $_GET['layout'];
}
$shopsidebar = 'left';
if(isset($chairman_opt['sidebarshop_pos']) && $chairman_opt['sidebarshop_pos']!=''){
	$shopsidebar = $chairman_opt['sidebarshop_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$shopsidebar = $_GET['sidebar'];
}
switch($shoplayout) {
	case 'fullwidth':
		Chairman::chairman_shop_class('shop-fullwidth');
		$shopcolclass = 12;
		$shopsidebar = 'none';
		$productcols = 4;
		break;
	default:
		Chairman::chairman_shop_class('shop-sidebar');
		$shopcolclass = 9;
		$productcols = 3;
}

$chairman_viewmode = Chairman::chairman_show_view_mode();
?>
<div class="main-container">
	<div class="page-content"> 
		<div class="shop-desc <?php echo esc_attr($shoplayout);?>">
			<div class="shop_header">
				<div class="container">
					<div class="shop-desc-inner">
						<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
							<header class="entry-header">
								<h1 class="entry-title"><?php woocommerce_page_title(); ?></h1>
							</header>
						<?php endif; ?>
						<?php
							/**
							 * woocommerce_before_main_content hook
							 *
							 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
							 * @hooked woocommerce_breadcrumb - 20
							 */
							do_action( 'woocommerce_before_main_content' );
						?>
					</div>
				</div>
			</div>
		</div>
		 
		<div class="shop_content">
			<div class="container">
				<?php if( is_shop()){ ?>
					<div class="shop_tabs"> 
						<?php
						$cargs = array(
							'taxonomy'     => 'product_cat',
							'child_of'     => 0,
							'parent'       => 0,
							'orderby'      => 'name',
							'show_count'   => 0,
							'pad_counts'   => 0,
							'hierarchical' => 0,
							'title_li'     => '',
							'hide_empty'   => 0
						);
						$pcategories = get_categories( $cargs );
						if($pcategories){ 
							$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
						?>
							<ul>
								<li class="active"><a href="<?php echo esc_attr($shop_page_url);?>"><?php esc_html_e('All', 'chairman');?></a></li>
								<?php
								foreach($pcategories as $pcategoy) { ?>
									<li><a href="<?php echo get_term_link($pcategoy->slug, 'product_cat'); ?>"><?php echo esc_html($pcategoy->name); ?></a></li>
								 <?php } ?>
							</ul>
							<?php
						} ?> 
					</div>
				<?php } ?>
				<div class="row">
					<?php if( $shopsidebar == 'left' ) :?>
						<?php get_sidebar('shop'); ?>
					<?php endif; ?>
					<div id="archive-product" class="col-xs-12 <?php echo 'col-md-'.$shopcolclass; ?>">
						
						<div class="archive-border">
								
							<?php
								/**
								* remove message from 'woocommerce_before_shop_loop' and show here
								*/
								do_action( 'woocommerce_show_message' );
							?>
							
							<?php if ( woocommerce_products_will_display() ) { ?>
								<div class="toolbar">
									<div class="view-mode">
										<label><?php esc_html_e('View on', 'chairman');?></label>
										<a href="#" class="grid <?php if($chairman_viewmode=='grid-view'){ echo ' active';} ?>" title="<?php echo esc_attr__( 'Grid', 'chairman' ); ?>"><i class="fa fa-th"></i></a>
										<a href="#" class="list <?php if($chairman_viewmode=='list-view'){ echo ' active';} ?>" title="<?php echo esc_attr__( 'List', 'chairman' ); ?>"><i class="fa fa-th-list"></i></a>
									</div>
									<?php
										/**
										 * woocommerce_before_shop_loop hook
										 *
										 * @hooked woocommerce_result_count - 20
										 * @hooked woocommerce_catalog_ordering - 30
										 */
										do_action( 'woocommerce_before_shop_loop' );
									?>
									<div class="clearfix"></div>
								</div>
							<?php } ?>
							<?php if ( have_posts() ) : ?>	
							
								<?php //woocommerce_product_loop_start(); ?>
								<div class="shop-products products row <?php echo esc_attr($chairman_viewmode);?> <?php echo esc_attr($shoplayout);?>">
									<?php woocommerce_product_subcategories();
									//reset loop
									//$woocommerce_loop['loop'] = 0; ?>
									<?php $woocommerce_loop['columns'] = $productcols; ?>
									
									<?php while ( have_posts() ) : the_post(); ?>

										<?php wc_get_template_part( 'content', 'product-archive' ); ?>

									<?php endwhile; // end of the loop. ?>
								</div>
								<?php //woocommerce_product_loop_end(); ?>
								
								<?php if ( woocommerce_products_will_display() ) { ?>
								<div class="toolbar tb-bottom">
									<?php
										/**
										 * woocommerce_before_shop_loop hook
										 *
										 * @hooked woocommerce_result_count - 20
										 * @hooked woocommerce_catalog_ordering - 30
										 */
										do_action( 'woocommerce_after_shop_loop' );
										//do_action( 'woocommerce_before_shop_loop' );
									?>
									<div class="clearfix"></div>
								</div>
								<?php } ?>
								
							<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

								<?php wc_get_template( 'loop/no-products-found.php' ); ?>

							<?php endif; ?>

						<?php
							/**
							 * woocommerce_after_main_content hook
							 *
							 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
							 */
							do_action( 'woocommerce_after_main_content' );
						?>

						<?php
							/**
							 * woocommerce_sidebar hook
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							//do_action( 'woocommerce_sidebar' );
						?>
						</div>
					</div>
					<?php if($shopsidebar == 'right') :?>
						<?php get_sidebar('shop'); ?>
					<?php endif; ?>
				</div>
			</div> 
		</div>
	</div>
</div>
<?php get_footer( 'shop' ); ?>