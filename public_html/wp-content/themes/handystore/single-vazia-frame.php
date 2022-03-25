<?php 
/* The Template for displaying all Pagina Vazia - Frame posts 
 * Template name: Pagina Vazia - Frame
 */
get_header(); ?>

	<main class="site-content<?php if (function_exists('pt_main_content_class')) pt_main_content_class(); ?>" itemscope="itemscope" itemprop="mainContentOfPage"><!-- Main content -->

	
	
	

		<?php // Start the Loop.
		while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

			

		endwhile; ?>

	</main><!-- end of Main content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
