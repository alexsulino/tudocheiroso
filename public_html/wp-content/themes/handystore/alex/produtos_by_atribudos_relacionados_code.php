<!-- 
alex cria campo laudo meta box
Tutorial https://remicorson.com/woocommerce-list-products-by-attribute-with-multiple-values/
 -->
<?php if ( get_post_meta( get_the_ID(), 'grupo_de_atributo', true ) ) : { ?>
<div class="grupo_de_atributo">
	  <h2 class="product_title entry-title"><?php echo get_post_meta( get_the_ID(), 'titulo_do_grupo_de_atributos', true ); ?></h2>
		<?php //echo get_post_meta( get_the_ID(), 'grupo_de_atributo', true ); ?>
		<?php //echo do_shortcode("[product_attribute attribute='cores' filter='preta' per_page='8' columns='5']"); ?>
		
		
		<?php 
			$attribute = get_post_meta( get_the_ID(), 'grupo_de_atributo', true );		
			$filter = get_post_meta( get_the_ID(), 'atributo_single', true );		
			$columns = "5";		
			$per_page = get_post_meta( get_the_ID(), 'exibir_quantos_itens', true );
		?>
		
		<?php echo do_shortcode( '[products attribute="' . $attribute . '"  filter="' . $filter . '" columns="' . $columns . '" per_page="' . $per_page . '"]' );?>
		
		<a href="https://ibarte.com.br/loja/?orderby=popularity&filter_<?php echo $attribute; ?>=<?php echo $filter; ?>&query_type_<?php echo $attribute; ?>=or" class="ver_todos_atributos button">Ver todos</a>
	
</div>		
<?php } else : ?>
	
<?php endif; ?>



<!-- Alex Grupo de Atributos 2 -->

<?php if ( get_post_meta( get_the_ID(), 'dois_grupo_de_atributo', true ) ) : { ?>
<div class="grupo_de_atributo">
	  <h2 class="product_title entry-title"><?php echo get_post_meta( get_the_ID(), 'dois_titulo_do_grupo_de_atributos', true ); ?></h2>
		<?php //echo get_post_meta( get_the_ID(), 'dois_grupo_de_atributo', true ); ?>
		<?php //echo do_shortcode("[product_attribute attribute='cores' filter='preta' per_page='8' columns='5']"); ?>
		
		
		<?php 
			$attribute_dois = get_post_meta( get_the_ID(), 'dois_grupo_de_atributo', true );		
			$filter_dois = get_post_meta( get_the_ID(), 'dois_atributo_single', true );		
			//$columns = "5";		
			//$per_page = get_post_meta( get_the_ID(), 'exibir_quantos_itens', true );
		?>
		
		<?php echo do_shortcode( '[products attribute="' . $attribute_dois . '"  filter="' . $filter_dois . '" columns="' . $columns . '" per_page="' . $per_page . '"]' );?>
		
	
		<a href="https://ibarte.com.br/loja/?orderby=popularity&filter_<?php echo $attribute_dois; ?>=<?php echo $filter_dois; ?>&query_type_<?php echo $attribute_dois; ?>=or" class="ver_todos_atributos button">Ver todos</a>
	
</div>		
<?php } else : ?>
	
<?php endif; ?>
