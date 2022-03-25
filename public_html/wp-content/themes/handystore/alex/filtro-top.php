<div class="busca_categorias_celular celular_form_busca" style="display:none;">
	<div class="busca_form_celular">
		<?php wc_get_product_search_form() ?>
	</div>
</div>
<div class="busca_categorias_celular" style="display:none;">
<!--Busca Celular por categorica-->
<?php dynamic_sidebar('extra-widgets-busca-categorias-celular'); ?>
</div>
<?php if ( is_front_page() ) { ?>
<!-- Home -->
<div class="col-full alex_desktop">
<?php dynamic_sidebar('extra-widgets-top-homepage'); ?>
<div class="mini-banners-home"><?php dynamic_sidebar('extra-widgets-top-homepage-mini-banners'); ?></div>
</div>

<div class="col-full alex_celular" style="display:none; height:60px; margin:0px; clear: both;">

<div class="celular_duas_colunas">
<a href="<?php echo get_site_url(); ?>/shop/novidades/"> Produtos </a>
<a href="<?php echo get_site_url(); ?>/categoria/receitas/">  Receitas </a>
<a href="<?php echo get_site_url(); ?>/categoria/dicas/">  Dicas </a>
<a href="<?php echo get_site_url(); ?>/events/">  Eventos </a>
</div>

</div>

<?php } else { ?>
	<!-- Nao home -->
<?php } ?>
