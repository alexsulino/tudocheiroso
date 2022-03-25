<!-- alex cria campo laudo meta box -->
<?php if ( get_post_meta( get_the_ID(), 'video_produto', true ) ) : { ?>
<div class="video_produto">
	  <h1 class="product_title entry-title">Video</h1>
	  <div class="video_produto_conteudo">
		<?php echo get_post_meta( get_the_ID(), 'video_produto', true ); ?>
	</div>	
</div>		
<?php } else : ?>
	<?php 
			$file_laudo = get_field('video_produto');
			if( $file_laudo ): ?>
<div class="video_produto">
	  <h1 class="product_title entry-title">Video</h1>
		<?php echo get_post_meta( get_the_ID(), 'video_produto', true ); ?>
</div>	
	<?php endif; ?>
<?php endif; ?>