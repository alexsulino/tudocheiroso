<?php 
$preco_sugerido = get_field('preco_sugerido');
if (empty($preco_sugerido)) { ?>

	<?php } else { ?>
<span class="price">
    <div class="alex_proporcao_price_sugerido_produto_list woocommerce-Price-amount amount"><span>Preço Sugerido </span> <?php the_field('preco_sugerido'); ?> </div>
</span>
	
<?php } ?>