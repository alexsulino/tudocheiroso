<?php if( get_field('kit_background')) { ?>
	
<style>
.box_imagem_personalizada {
    width: 100%;
    background-size: 100%;
    background-position: top center;
    border: 1px solid #999;
    background-repeat: no-repeat;
}
.woocommerce-product-gallery__image {
    position: absolute;
    border: 1px solid #eee;
    right: 0;
    left: 0;
    bottom: 0;
    top: 0;
}
img.wp-post-image {
    width:<?php the_field('kit_largura_da_imagem'); ?> !important;
    height:<?php the_field('kit_altura_da_imagem'); ?>  !important;
    margin:<?php the_field('layout_margem'); ?> !important;
    z-index: 50;
    position: relative;
}
img.kit_mascara {
    position: absolute;
    z-index: 100;
    width: 100% !important;
    left: 0;
    top: 0;
}
img.kit_background {
    position: relative;
    top: 0;
    z-index: 1;
}


div.product div.images img.qr_code_tamanho_altura {
    position: absolute;
    height: <?php the_field('qr_code_tamanho_altura'); ?>  !important;
    width: auto  !important;
    margin:<?php the_field('qr_code_margem'); ?>  !important;
    z-index: 90;
    top: 0;
}

</style>


<script>
	setTimeout(function(){
		document.getElementsByClassName('fpd-done')[0].click();
	}, 2000);
	setTimeout(function(){
		document.getElementsByClassName('fpd-done')[0].click();
	}, 5000);
	
</script>

<?php } else { ?>

<style>
div.product div.images img {
    max-height: 500px;
	max-width: 600px;
    margin: auto;
	width:auto;
}
</style>

<?php } ?>			


<!-- alex Rola para o topo -->
<script>
	setTimeout(function(){
	  //document.getElementsByClassName("fpd-done")[0].setAttribute("onclick", "document.getElementById('rolar_topo').click()");
	  document.getElementsByClassName("fpd-done")[0].setAttribute("onclick", "scrollWin(0, -2000)");
	}, 3000);
	
	function scrollWin(x, y) {
	window.scrollBy(x, y);
}
</script>


<a id="rolar_topo" style="display:none;" href="#rolar_topo_top"></a>
<!-- Fim alex Rola para o topo -->


<?php //$image_produto = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
<?php $image_produto = get_the_post_thumbnail_url($post->ID, 'full'); ?>




	<div class="box_imagem_personalizada" style="background-image:url(<?php the_field('kit_background_decorativo'); ?>) !important;" >
		<div class="woocommerce-product-gallery__image">
			<!--<a href="<?php //echo $image_produto[0];?>"> </a>-->
			<?php if( get_field('kit_background')) { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/alex_2020/images/space.png" class="wp-post-image lazy-loaded">
					<!--<img src="<?php echo get_template_directory_uri(); ?>/alex_2020/images/space.png" class="wp-post-image lazy-loaded" onclick="document.getElementById('fpd-start-customizing-button').click();">-->
				<?php } else { ?>
					<img src="<?php echo $image_produto;?>" class="wp-post-image lazy-loaded">
			<?php } ?>	
			
		</div>
		<?php if( get_field('kit_mascara')){ ?>	<img src="<?php the_field('kit_mascara'); ?>" class="kit_mascara"/>	<?php  } ?>
		<?php if( get_field('kit_background')){ ?>	<img src="<?php the_field('kit_background'); ?>" class="kit_background"/>	<?php  } ?>
		<?php if( get_field('qr_code_tamanho_altura')){ ?>	<img src="https://wellup.com.br/wp-content/uploads/2020/11/qr-code-demo.png" id="qr_code_tamanho_altura" class="qr_code_tamanho_altura"/>	<?php  } ?>
	</div>
	

		