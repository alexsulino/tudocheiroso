<?php if( get_field('kit_largura_da_imagem') OR ('kit_background_decorativo') ): ?>
<style>
.alex_noia img.kit_mascara {
    position: absolute;
    top: 0;
	cursor:pointer;
}
.alex_noia img.kit_mascara_variacao {
    position: absolute;
    top: 0;
	cursor:pointer;
}

.alex_noia.woocommerce-product-gallery.images {
    padding: 0px !important;	
}
.alex_noia img.imagem_destaque {
    width: 100%;
    text-align: center;
    margin: auto;
}
.woocommerce.fancy-product .site-main .alex_noia a.woocommerce-product-gallery__image{
		width:100%!important;
		top: 0;
		position: absolute;
		 BORDER: solid 0px #eee;
		 bottom: 0px;
}
div#alex_galeria_full {
    background-image: url('<?php the_field('kit_background_decorativo'); ?>');
    background-repeat: no-repeat;
	background-position: top;
    background-size: 100%;
	border-radius: 10px;
}

.alex_noia a.woocommerce-product-gallery__image .imagem_primaria{
		margin:<?php the_field('kit_imagem_margem_topo'); ?> auto auto <?php the_field('kit_margin_left'); ?> !important;
		height:<?php the_field('kit_altura_da_imagem'); ?>  !important;
		width:<?php the_field('kit_largura_da_imagem'); ?> !important;
		max-width: 90%;
		max-height: 600px;
}
.single-product .site-main .site-content div.product .alex_noia.woocommerce-product-gallery.images{
		width:100% !important;
		background-size: 100%;
		background-position: top center;
		background-repeat: no-repeat;
		overflow: hidden;
}

.woocommerce-product-gallery {
    display:none;
}
.alex_galeria.woocommerce-product-gallery, .alex_noia.woocommerce-product-gallery {
    display: block;
    margin: 0px 0px 0px 0px !important;
    background: none;
    padding: 0px !important;
}

.single-product .site-main .site-content div.product .product_meta {
   
}

.woocommerce-product-gallery a::after {
  content: "" attr(data-src) "";
}

/* Esconde imagem original do produto */
div#alex_galeria_full .wp-post-image { display: none !important;}

<?php if( get_field('kit_background_decorativo')): ?>
	.alex_noia img.imagem_destaque {opacity:0 !important;}
<?php endif; ?>

</style>

<?php //remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 ); ?>


	<div class="alex_noia woocommerce-product-gallery images" style="background-image:url(<?php the_field('kit_background'); ?>) !important;">	
		
		<?php if( get_field('kit_background')){ ?>
			<img  class="imagem_destaque" src="<?php the_field('kit_background'); ?>"/>
		<?php } else{ ?>
			<img  class="imagem_destaque" src="<?php the_post_thumbnail_url('full'); ?>"/>
		<?php } ?>
		
			<?php
			$product = wc_get_product( $post->ID );
			 if( $product->is_type( 'simple')){ ?>
				<!-- si for produto variavel -->
				<?php } elseif( $product->is_type('variable')){?>
			   <!-- si for produto variavel -->
			   <img id="imagem_data-src" class="kit_mascara_variacao" src="" onclick="document.getElementById('fpd-start-customizing-button').click();">
			<?php } ?>
	
		<a class="woocommerce-product-gallery__image"><img  class="imagem_primaria" src="" />
		<?php if( get_field('canvas_frente') ): ?><canvas id="alex_canvas1" style="top:0px; left: 0px; position: absolute;"></canvas><?php endif; ?>
		</a>
		
		<?php if( get_field('kit_mascara')){ ?>
					<img src="<?php the_field('kit_mascara'); ?>" class="kit_mascara" onclick="document.getElementById('fpd-start-customizing-button').click();"/>
					
		<?php } else { ?>
					<img id="imagem_data-src" class="kit_mascara_variacao" src="" onclick="document.getElementById('fpd-start-customizing-button').click();">			
		<?php  } ?>
		
	</div>
				
<?php endif; ?>


