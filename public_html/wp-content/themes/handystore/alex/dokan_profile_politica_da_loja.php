
   
<!-- Termos e Condições da loja -->

<?php if ( isset( $store_info['store_tnc'] ) && !empty( $store_info['store_tnc'] ) ) { ?>
	<div class="politica-da-loja">
	<h2 class="titulo-politica-da-loja">Política da Loja</h2>
			<p>
				<?php echo nl2br($store_info['store_tnc']); ?>
			</p>
	
	</div>
<?php } ?>
<!-- #store-toc -->

					
