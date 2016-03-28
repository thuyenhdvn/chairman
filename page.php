<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage chairman_Themes
 * @since Huge Shop 1.0
 */
$chairman_opt = get_option( 'chairman_opt' );

get_header();
?>
<div class="main-container default-page">
	<div class="title-breadcrumb">
		<div class="container"> 
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php Chairman::chairman_breadcrumb(); ?> 
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container">
		
		<div class="row">
			<?php if( $chairman_opt['sidebarse_pos']=='left'  || !isset($chairman_opt['sidebarse_pos']) ) :?>
				<?php get_sidebar('page'); ?>
			<?php endif; ?>
			<div class="col-xs-12 <?php if ( is_active_sidebar( 'sidebar-page' ) ) : ?>col-md-9<?php endif; ?>">
				<div class="page-content default-page">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
						<?php comments_template( '', true ); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php if( $chairman_opt['sidebarse_pos']=='right' ) :?>
				<?php get_sidebar('page'); ?>
			<?php endif; ?>
		</div>
	</div> 
</div>
<?php get_footer(); ?>