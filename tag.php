<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Huge Shop 1.0
 */

$chairman_opt = get_option( 'chairman_opt' );

get_header();

$bloglayout = 'nosidebar';
if(isset($chairman_opt['blog_layout']) && $chairman_opt['blog_layout']!=''){
	$bloglayout = $chairman_opt['blog_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$bloglayout = $_GET['layout'];
}
$blogsidebar = 'right';
if(isset($chairman_opt['sidebarblog_pos']) && $chairman_opt['sidebarblog_pos']!=''){
	$blogsidebar = $chairman_opt['sidebarblog_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$blogsidebar = $_GET['sidebar'];
}
switch($bloglayout) {
	case 'sidebar':
		$blogclass = 'blog-sidebar';
		$blogcolclass = 9;
		Chairman::chairman_post_thumbnail_size('chairman-category-thumb');
		break;
	case 'largeimage':
		$blogclass = 'blog-large';
		$blogcolclass = 9;
		$chairman_postthumb = '';
		break;
	default:
		$blogclass = 'blog-nosidebar';
		$blogcolclass = 12;
		$blogsidebar = 'none';
		Chairman::chairman_post_thumbnail_size('chairman-post-thumb');
}
?>
<div class="main-container page-wrapper">
	<div class="title-breadcrumb">
		<div class="container">
			<div class="title-breadcrumb-inner">
				<header class="entry-header">
					<h1 class="entry-title"><?php if(isset($chairman_opt)) { echo esc_html($chairman_opt['blog_header_text']); } else { esc_html_e('Blog', 'chairman');}  ?></h1>
				</header>
				<?php Chairman::chairman_breadcrumb(); ?>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			
			<?php if($blogsidebar=='left') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			
			<div class="col-xs-12 <?php echo 'col-md-'.$blogcolclass; ?>">
			
				<div class="page-content blog-page <?php echo esc_attr($blogclass); if($blogsidebar=='left') {echo ' left-sidebar'; } if($blogsidebar=='right') {echo ' right-sidebar'; } ?>">
					<?php if ( have_posts() ) : ?>
						<header class="archive-header">
							<h1 class="archive-title"><?php printf( wp_kses(__( 'Tag Archives: %s', 'chairman' ), array('span'=>array())), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>

						<?php if ( tag_description() ) : // Show an optional tag description ?>
							<div class="archive-meta"><?php echo tag_description(); ?></div>
						<?php endif; ?>
						</header><!-- .archive-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * this in a child theme then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;
						?>
						
						<div class="pagination">
							<?php Chairman::chairman_pagination(); ?>
						</div>
						
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php if( $blogsidebar=='right') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
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
<?php get_footer(); ?>