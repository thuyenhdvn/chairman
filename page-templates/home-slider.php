<?php
/**
 * Template Name: Home Slider
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

$chairman_opt = get_option( 'chairman_opt' );

get_header();
?>
<div class="main-container front-page">

	<div class="page-content">
		<div class="container-fluid">
				<div class="row">
					<div class="sidebar-home collapse-menu layout6">
						<div class="sidebar-home-inner">
							<?php dynamic_sidebar('sidebar-home6' );?>
						</div>	
					</div>
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php endwhile; ?>
					
				</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>