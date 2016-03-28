<?php
/**
 * The template for displaying posts in the Video post format
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Huge Shop 1.0
 */

$chairman_opt = get_option( 'chairman_opt' );

$chairman_postthumb = Chairman::chairman_post_thumbnail_size('');

if(Chairman::chairman_post_odd_event() == 1){
	$chairman_postclass='even';
} else {
	$chairman_postclass='odd';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($chairman_postclass); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
			<span class="post-cateogy"> 
				<?php echo get_the_category_list( ', ' ); ?>
			</span>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<span class="post-author">
				<span class="post-by"><?php esc_html_e('Posts by', 'chairman');?> : </span>
				<?php printf( get_the_author() ); ?>
			</span>
			<span class="post-separator">|</span>
			<span class="post-date">
				<?php echo '<span class="month">'.get_the_date('M', $post->ID).'</span><span class="day">'.get_the_date('d', $post->ID).'</span><span class="year">'.get_the_date('Y', $post->ID).'</span>' ;?>
			</span>
		<?php else : ?>
			<span class="post-cateogy"> 
				<?php echo get_the_category_list( ', ' ); ?>
			</span> 
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<span class="post-author">
				<span class="post-by"><?php esc_html_e('Posts by', 'chairman');?> : </span>
				<?php printf( get_the_author() ); ?>
			</span>
			<span class="post-separator">|</span>
			<span class="post-date">
				<?php echo '<span class="month">'.get_the_date('M', $post->ID).'</span><span class="day">'.get_the_date('d', $post->ID).'</span><span class="year">'.get_the_date('Y', $post->ID).'</span>' ;?>
			</span>
		<?php endif; ?>
	</header>
	<?php if ( ! post_password_required() && ! is_attachment() ) : ?>
	<?php 
		if ( is_single() ) { ?>
			<div class="post-thumbnail">
				<?php echo do_shortcode(get_post_meta( $post->ID, '_chairman_meta_value_key', true )); ?>
				
			</div>
		<?php }
	?>
	<?php if ( !is_single() ) { ?>
		<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($chairman_postthumb); ?></a>
			 
		</div>
		<?php } ?>
	<?php } ?>
	<?php endif; ?>
	
	<div class="postinfo-wrapper <?php if ( !has_post_thumbnail() ) { echo 'no-thumbnail';} ?>">
		
		<div class="post-info"> 
			<?php if (is_home()){ ?>
				<header class="entry-header"> 
					<div class="link-top">
						<span class="post-cateogy"> 
							<?php echo get_the_category_list( ', ' ); ?>
						</span>
						<span class="post-author">
							<span class="post-by"><?php esc_html_e('Posts by', 'chairman');?> : </span>
							<?php printf( get_the_author() ); ?>
						</span>
						<span class="post-separator">|</span>
						<span class="post-date"> 
							<?php echo '<span class="month">'.get_the_date('M', $post->ID).'</span><span class="day">'.get_the_date('d', $post->ID).'</span><span class="year">'.get_the_date('Y', $post->ID).'</span>' ;?>
						</span>
					</div> 
					<h1 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h1>
				</header>
			<?php }?>
			<?php if ( is_single() ) : ?>
				<div class="entry-content">
					<?php the_content( wp_kses(__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'chairman' ), array('span'=>array('class'=>array())) )); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'chairman' ), 'after' => '</div>', 'pagelink' => '<span>%</span>' ) ); ?>
				</div>
			<?php else : ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
					<a class="readmore button" href="<?php the_permalink(); ?>"><?php if(isset($chairman_opt['readmore_text']) && $chairman_opt['readmore_text']!=''){ echo esc_html($chairman_opt['readmore_text']); } else { esc_html__('Read more', 'chairman');}  ?></a>
					<?php if( function_exists('chairman_blog_sharing') ) { ?>
						<div class="social-sharing"><?php chairman_blog_sharing(); ?></div>
					<?php } ?>
				</div>
			<?php endif; ?>
			
			<?php if ( is_single() ) : ?>
				<div class="entry-meta">
					<?php Chairman::chairman_entry_meta(); ?>
				</div>
			
				<?php if( function_exists('chairman_blog_sharing') ) { ?>
					<div class="social-sharing"><?php chairman_blog_sharing(); ?></div>
				<?php } ?>
			
				<div class="author-info">
					<div class="author-avatar">
						<?php
						$author_bio_avatar_size = apply_filters( 'chairman_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div>
					<div class="author-description">
						<h2><?php esc_html__( 'About the Author:', 'chairman'); printf( '<a href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" rel="author">%s</a>' , get_the_author()); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
					</div>
				</div>
				<div class="relatedposts">
					<h3><?php esc_html_e('Related posts', 'chairman');?></h3>
					<div class="row">
						<?php
						    $orig_post = $post;
						    global $post;
						    $tags = wp_get_post_tags($post->ID);
						     
						    if ($tags) {
						    $tag_ids = array();
						    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						    $args=array(
						    'tag__in' => $tag_ids,
						    'post__not_in' => array($post->ID),
						    'posts_per_page'=>3, // Number of related posts to display.
						    'caller_get_posts'=>1
						    );
						     
						    $my_query = new wp_query( $args );
						 
						    while( $my_query->have_posts() ) {
						    $my_query->the_post();
						    ?>
					    	<div class="relatedthumb col-md-4">
					    		<div class="image">
					    			<?php the_post_thumbnail('chairman-post-thumb'); ?>
					    		</div> 
						        <h4><a rel="external" href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>
						        <span class="post-date">
									<?php echo '<span class="month">'.get_the_date('M', $post->ID).'</span><span class="day">'.get_the_date('d', $post->ID).'</span><span class="year">'.get_the_date('Y', $post->ID).'</span>' ;?>
								</span>
						    </div>
						     
						    <?php }
						    }
						    $post = $orig_post;
						    wp_reset_postdata();
						?>
					</div> 
				</div>
			<?php endif; ?>
		</div>
	</div>
</article>