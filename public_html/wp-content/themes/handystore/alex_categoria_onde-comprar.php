<?php
/**
 *
 * Template name: Onde Comprar
 * @package storefront
 */

get_header(); ?>

	<main class="site-content col-xs-12 col-md-9 col-sm-8 grid-layout cols-3 onde-comprar" itemscope="itemscope" itemprop="mainContentOfPage"><!-- Main content -->

		<h1> <?php the_category(',' ); ?></h1>
		<div style="text-align:center;">
		<?php get_template_part('alex/mapa_brasil');?>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>
		<li class="alex_zebra">
			<div class="conteudo-list">
			<h4> <a href="?tag=<?php $posttags = get_the_tags();  if ($posttags) {foreach($posttags as $tag) { echo $tag->slug . ' ';} } ?>" ><?php $posttags = get_the_tags();  if ($posttags) {foreach($posttags as $tag) { echo $tag->name . ' ';} } ?> </a></h4>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt (); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="fa fa-map-marker"> Veja como chegar</a></p>
			</div>
			<div class="imagem-list">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(100,100) );  // Other resolutions?></a>
			</div>
		</li>

			<?php
			//do_action( 'storefront_single_post_before' );
			//get_template_part( 'content', 'events' );
			/**
			 * @hooked storefront_post_nav - 10
			 */
			//do_action( 'storefront_single_post_after' );
			?>

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->
	<div id="sidebar-blog" class="widget-area col-xs-12 col-md-3 col-sm-4 sidebar" role="complementary">
	<?php //dynamic_sidebar('extra-widgets-sidebar-eventos'); ?>
	<?php dynamic_sidebar('extra-widgets-sidebar-dicas-receitas'); ?>
	</div>
<?php get_footer(); ?>