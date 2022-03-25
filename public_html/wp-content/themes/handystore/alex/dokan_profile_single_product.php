	<style>
	.vendor_info_geral {
    float: left;
    width: 100%;
}
	ul.alex_dokan_profile_single_product {width:100%; background:#ffffff; clear: both; float: left; margin:25px 0px 75px 0px;}

	ul.alex_dokan_profile_single_product .vendor_info {width:100%; padding:10px;}
	
	.store_vendor_coluna {
          width: 24.5%;
   
    margin: 1px;
    text-align: center;
    display: inline-table;
    min-height: 280px;
	}

	ul.alex_dokan_profile_single_product .vendor_info .store_image {
        width: 100%;
    
    padding: 20px;
    display: inline-table;
	}
	
	ul.alex_dokan_profile_single_product .store_name {
		width: 100%;
	}
	ul.alex_dokan_profile_single_product .vendor_info a {
		display:block;
	}

.store_vendor_coluna .store_title {
    font-size: 18px;
    color: #000;
    font-weight: bold;
    text-transform: uppercase;
}

.store_vendor_coluna span {
    margin: 5px;
    display: block;
    clear: both;
    padding: 10px;
}
.footer_vendor {
    font-size: 15px;
    padding: 10px;
}

 .footer_vendor b{
    font-size: 20px;
}

.titulo_vendor_page {
    font-size: 28px;
    text-align: center;
    margin: 50px 0px 8px 0px;
    float: left;
    width: 100%;
    text-transform: uppercase;
}

.compart_share {clear:both; display: block; padding: 25px 5px; width: 100%; text-align:center;}
	</style>
	
	<div class="compart_share">
	<?php echo do_shortcode('[TheChamp-Sharing style=""]') ?>
		</div>



<!-- Tempo para Envio -->
<?php
	global $post;
	$user_id = get_current_user_id();
	$dps_pt = get_user_meta($user_id, '_dps_pt', true);
?>
<?php //echo $dps_pt; ?>

<div class="vendor_info_geral">

	<div class="tempo-de-envio"> Tempo para envio 
	<?php
	switch ($dps_pt) {
		case "1":
			echo "1 dia útil";
			break;
		case "2":
			echo "1 à 2 dia útil";
			break;
		case "3":
			echo "1 à 3 dia útil";
			break;
		case "4":
			echo "3 à 5 dia útil";
			break;
		case "5":
			echo "1 à 2 semanas";
			break;
		case "6":
			echo "2 à 3 semanas";
			break;
		case "7":
			echo "3 à 4 semanas";
			break;
		case "8":
			echo "4 à 5 semanas";
			break;
		case "9":
			echo "6 à 8 semanas";
			break;
	}
	?>
	</div>
	<!-- Fim Tempo para Envio -->


	<?php 
	/**
	 * Prints seller info in product single page
	 *
	 * @global WC_Product $product
	 * @param type $val
	 */

		global $product;
		$author = get_user_by('id', $product->post->post_author);
		$store_info = dokan_get_store_info($author->ID);
		$store_tabs    = dokan_get_store_tabs( $store_user->ID );
		$social_fields = dokan_get_social_profile_fields();
	?>
	   
	<!--<div><b>CONTATO DO VENDEDOR</b></div>-->
<div class="titulo_vendor_page" >Fornecedor desse produto</div>
	   <ul class="alex_dokan_profile_single_product">
	   
		   <div class="vendor_info">
		   
		        <div class="store_vendor_coluna">
						<div class="store_image">
						  <a href="<?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?>">
							<img src="<?php echo wp_get_attachment_url($store_info[gravatar]); ?>" class="logo" itemprop="logo" width="80" height="80" alt="">
						  </a>	
						</div>
						<div class="store_title">Loja</div>
						<span>Acessar Loja do fornecedor</span>
						<div class="store_name">
						<a href="<?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?>">
							
							<?php  echo $store_info['address']['city']; ?> - <?php  echo $store_info['address']['state']; ?><br>
							<div class="footer_vendor"><?php echo esc_html($store_info['store_name']); ?></div>
						</a>
						
						</div>
						<a href="<?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?>" class="button_store_alex">Acessar Loja >>></a>
			    </div>
				
				
				<div class="store_vendor_coluna">
						<div class="store_image">
						<div class="icon_store icon_store_contato"></div>
						</div>
						<div class="store_title">Contato</div>
						<span>Informações de contato</span>
						<div class="store_name">
							<?php if ( isset( $store_info['show_email'] ) && $store_info['show_email'] == 'yes' ) { ?>
								<div title="<?php printf( '%s', $author->user_email ); ?>"><b>Email: </b><?php printf( '%s', $author->user_email ); ?></div>
							<?php } ?>
							<?php if ( isset( $store_info['phone'] ) && !empty( $store_info['phone'] ) ) { ?>
								<div class="footer_vendor"><b>Fone: </b><?php echo esc_html($store_info['phone'] );?></div>
							<?php } ?>
						</div>
						
			    </div>
				
				
				<div class="store_vendor_coluna">
							<div class="store_image">
							  <div class="icon_store icon_store_produtos"></div>
							</div>
							<div class="store_title">Produtos</div>
							<span>Produtos Cadastrados</span>
						<div class="store_name">
						<a href="<?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?>">
							<div class="footer_vendor"><b><?php echo number_format_i18n( get_the_author_posts() ); ?><?php //echo get_the_author_posts(); ?></b></div>
							
							</a>
						</div>
						
			    </div>
				
				
				<div class="store_vendor_coluna">
							<div class="store_image">
							  <div class="icon_store icon_store_visualizacao"></div>
							</div>
							<div class="store_title">Visualizações</div>
							<span>Visualizações desse produto</span>
						<div class="store_name">
							<div class="footer_vendor"><b><?php $views = get_post_meta(get_the_ID(),'views',true); echo($views); ?></b></div>
							
						</div>
						
			    </div>
			  
			  
			  
			   
		   </div>
		   
		   
		   <div class="produtos_info">
				
				<!--
				<li>
					<span><b><?php  dokan_get_readable_seller_rating($author->ID); ?></b></span>
					<span></span>
				</li>
				<li>
					<span><b><?php $post_views_count = get_post_meta(get_the_ID(),'post_views_count',true); echo($post_views_count); ?></b></span>
					<span>Categorias</span>
				</li>
				-->
				
				
		   </div>
	  
		   
	   </ul>
	 
	<div style="display:none;">
			<?php if (!empty($store_info['store_name'])) {?>        
			  <DIV><B>Loja:</B>  <?php echo esc_html($store_info['store_name']); ?></DIV>
			<?php } ?>
			
			<DIV><B>Nome:</B>  <?php printf('<a href="%s">%s</a>', dokan_get_store_url($author->ID), $author->display_name);?></DIV>
			<DIV><B>Url Loja:</B>  <?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?></DIV>
			
			<?php if ( isset( $store_info['phone'] ) && !empty( $store_info['phone'] ) ) { ?>
				<DIV><B>Telefone:</B>  <?php echo esc_html($store_info['phone'] );?></DIV>
			<?php } ?>
			
			<?php if ( isset( $store_info['show_email'] ) && $store_info['show_email'] == 'yes' ) { ?>
				<DIV><B>Email:</B>  <?php printf( '%s', $author->user_email ); ?></DIV>
			<?php } ?>
			 
			<DIV><B>Rua:</B>  <?php  echo $store_info['address']['street_1']; ?></DIV>
			<DIV><B>Endereço:</B>  <?php  echo $store_info['address']['street_2']; ?></DIV>
			<DIV><B>Cidade:</B>  <?php  echo $store_info['address']['city']; ?></DIV>
			<DIV><B>CEP:</B>  <?php  echo $store_info['address']['zip']; ?></DIV>
			<DIV><B>Estado:</B>  <?php  echo $store_info['address']['state']; ?></DIV>
			
			
			<?php if ( isset( $store_info['banner'] ) && !empty( $store_info['banner'] ) ) { ?>
				<DIV><B>Banner:</B>  <?php echo wp_get_attachment_url($store_info[banner]); ?></DIV>
			 <?php } ?>
			
			<DIV><B>Logo:</B>  <?php echo wp_get_attachment_url($store_info[gravatar]); ?></DIV>
			

			<DIV><B>Avaliação:</B>  <?php  dokan_get_readable_seller_rating($author->ID); ?></DIV>
	 

	 
			<?php if ( $social_fields ) { ?>
					<ul class="store-social">
						<?php foreach( $social_fields as $key => $field ) { ?>
							<?php if ( isset( $store_info['social'][ $key ] ) && !empty( $store_info['social'][ $key ] ) ) { ?>
								<li>
									<a href="<?php echo esc_url($store_info[social][$key]); ?>" target="_blank"><i class="fa fa-<?php echo $field['icon']; ?>"></i></a>
								</li>
							<?php } ?>
						<?php } ?>
					</ul>
			<?php } ?>
	</div>		

</div>
