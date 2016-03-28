<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

$chairman_opt = get_option( 'chairman_opt' );

$chairman_viewmode = Chairman::chairman_show_view_mode();

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}

$count   = $product->get_rating_count();

$chairman_shopclass = Chairman::chairman_shop_class('');

if($chairman_shopclass=='shop-fullwidth') {
	if(isset($chairman_opt)){
		$woocommerce_loop['columns'] = $chairman_opt['product_per_row_fw'];
		$colwidth = round(12/$woocommerce_loop['columns']);
	}
	$classes[] = ' item-col col-xs-12 col-sm-4 col-md-'.$colwidth ;
} else {
	if(isset($chairman_opt)){
		$woocommerce_loop['columns'] = $chairman_opt['product_per_row'];
		$colwidth = round(12/$woocommerce_loop['columns']);
	}
	$classes[] = ' item-col col-xs-12 col-sm-'.$colwidth ;
}
?>

<div <?php post_class( $classes ); ?>>
	<div class="product-wrapper">
		<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
		
		<div class="list-col4 <?php if($chairman_viewmode=='list-view'){ echo ' col-xs-12 col-sm-3';} ?>">
			<div class="product-image">
				<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
					<?php 
					echo wp_kses($product->get_image('shop_catalog', array('class'=>'primary_image')), array(
						'a'=>array(
							'href'=>array(),
							'title'=>array(),
							'class'=>array(),
						),
						'img'=>array(
							'src'=>array(),
							'height'=>array(),
							'width'=>array(),
							'class'=>array(),
							'alt'=>array(),
						)
					));
					
					if(isset($chairman_opt['second_image'])){
						if($chairman_opt['second_image']){
							$attachment_ids = $product->get_gallery_attachment_ids();
							if ( $attachment_ids ) {
								echo wp_get_attachment_image( $attachment_ids[0], apply_filters( 'single_product_small_thumbnail_size', 'shop_catalog' ), false, array('class'=>'secondary_image') );
							}
						}
					}
					?>
					<span class="shadow"></span>
				</a>
				<?php if ( $product->is_on_sale() ) : ?>
					<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale"><span class="sale-bg"></span><span class="sale-text">' . esc_html__( 'Sale', 'chairman' ) . '</span></span>', $post, $product ); ?>
				<?php endif; ?>
				<div class="actions clearfix">
					<ul class="add-to-links">
						
						<li class="first"> 
							<?php if ( class_exists( 'YITH_WCWL' ) ) {
								echo preg_replace("/<img[^>]+\>/i", " ", do_shortcode('[yith_wcwl_add_to_wishlist]'));
							} ?>
						</li>
						<li class="second">
							<?php if( class_exists( 'YITH_Woocompare' ) ) {
								echo do_shortcode('[yith_compare_button]');
							} ?>
						</li>
						<li class="last quickviewbtn">
							<a class="detail-link quickview fa fa-external-link" data-quick-id="<?php the_ID();?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php esc_html_e('Quick View', 'chairman');?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="list-col8 <?php if($chairman_viewmode=='list-view'){ echo ' col-xs-12 col-sm-9';} ?>">
			<div class="gridview">
				<h2 class="product-name">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="ratings"><?php echo ''.$product->get_rating_html(); ?></div>
				<div class="price-box"><?php echo ''.$product->get_price_html(); ?></div>
				<div class="add-to-cart">
					<?php echo do_shortcode('[add_to_cart id="'.$product->id.'"]') ?>
				</div> 
			</div>
			<div class="listview">
				<h2 class="product-name">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="ratings"><?php echo ''.$product->get_rating_html(); ?></div>
				<div class="price-box"><?php echo ''.$product->get_price_html(); ?></div>
				<div class="product-desc"><?php the_excerpt(); ?></div>
				
				<div class="actions clearfix">
					<div class="add-to-cart">
						<?php echo do_shortcode('[add_to_cart id="'.$product->id.'"]') ?>
					</div>
					<ul class="add-to-links"> 
						<li class="first"> 
							<?php if ( class_exists( 'YITH_WCWL' ) ) {
								echo preg_replace("/<img[^>]+\>/i", " ", do_shortcode('[yith_wcwl_add_to_wishlist]'));
							} ?>
						</li>
						<li class="second">
							<?php if( class_exists( 'YITH_Woocompare' ) ) {
								echo do_shortcode('[yith_compare_button]');
							} ?>
						</li>
						<li class="last quickviewbtn">
							<a class="detail-link quickview fa fa-external-link" data-quick-id="<?php the_ID();?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php esc_html_e('Quick View', 'chairman');?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<?php //do_action( 'woocommerce_after_shop_loop_item' ); ?>
	</div>
</div>