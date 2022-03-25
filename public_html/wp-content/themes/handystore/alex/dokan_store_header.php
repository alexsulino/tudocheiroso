<?php
	$author = get_user_by( 'id', $post->post_author );
	$store_info = dokan_get_store_info( $author->ID );
?>

<?php if(dokan_is_store_page()) { ?>
<style>
.breadcrumbs-wrapper .container {
    display: none;
}

.logo-wrapper {
    display: ;
}

.header-primary-nav {
  
}

div#mega-menu-wrap-max_mega_menu_1 {
    display: none;
}
</style>
<?php } ?>

<script>
// alex ocultando informacoes e campos, limpando layout	
function mostrar_hearder_loja() {
	document.getElementById("alex_header_store").style.display = "block";
	
	var mostrar_hearder_loja = document.getElementById("mostrar_hearder_loja");
	var att_mostrar_hearder_loja = document.createAttribute("onclick");
	att_mostrar_hearder_loja.value = "esconder_hearder_loja()";
	mostrar_hearder_loja.setAttributeNode(att_mostrar_hearder_loja);
	document.getElementById("mostrar_hearder_loja").innerHTML = "<i class='fa fa-chevron-up' aria-hidden='true'></i>";
}
function esconder_hearder_loja() {
	document.getElementById("alex_header_store").style.display = "none";
	
	var esconder_hearder_loja = document.getElementById("mostrar_hearder_loja");
	var att_esconder_hearder_loja = document.createAttribute("onclick");
	att_esconder_hearder_loja.value = "mostrar_hearder_loja()";
	esconder_hearder_loja.setAttributeNode(att_esconder_hearder_loja);
	document.getElementById("mostrar_hearder_loja").innerHTML = "<i class='fa fa-chevron-down' aria-hidden='true'></i>";
}

</script>

<?php if ( isset( $store_info['banner'] ) && !empty( $store_info['banner'] ) ) { ?>
    <style type="text/css">
        .header_store {
            background-image: url('<?php echo wp_get_attachment_url( $store_info['banner'] ); ?>');
        }
    </style>
 <?php } ?>

	
  <div class="header_store">
  <div class="header_store_sub_bg" id="alex_header_store" style="display:none;">
	<div class="site-main container">
			<div class="row">
			
			<div class="logotipo_store" style="background-image: url(<?php echo get_template_directory_uri(); ?>/alex/images/circulo-header-bg.png);"> 
					<a href="<?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?>">
					<?php if ( isset( $store_info['gravatar'] ) && !empty( $store_info['gravatar'] ) ) { ?>
						<img src="<?php echo wp_get_attachment_url( $store_info['gravatar'] ); ?>" class="logo" itemprop="logo" width="90" height="90" alt="">
					<?php } ?>
				</a>
			</div>
			<div class="header_store_left">
				<div class="titulo_store"> <b><?php echo esc_html($store_info['store_name'] );?></b></div>
				<div class="cidade_store"> <?php  echo $store_info['address']['city']; ?> - <?php  echo $store_info['address']['state']; ?>  </div>
				<div class="telefone_store"><b>Tel: </b><?php echo esc_html($store_info['phone'] );?>  </div>
				<div class="email_store"><b>Email: </b><?php printf( '%s', $author->user_email ); ?> </div>
			</div>
			
			<div class="header_store_center">
				<div class="produtos_titulo_store"> PRODUTOS </div>
				<div class="produtos_store">
				<a href="<?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?>">
					<b><?php echo number_format_i18n( get_the_author_posts() ); ?><?php //echo get_the_author_posts(); ?></b>
				</a>
				</div>
				
			</div>
			
			<div class="header_store_right">
			<?php if(dokan_is_store_page()) { ?>
<a href="#" class="link_store"> Seja Bem-vindo à <b><?php echo esc_html($store_info['store_name'] );?></b> </a>
<?php } else { ?>
<a href="<?php printf('%s', dokan_get_store_url($author->ID), $author->display_name);?>" class="link_store"> Acessar loja do vendedor  </a>
<?php } ?>
				
		
			</div>
			
			</div>
	</div>
	<?php if(dokan_is_store_page()) { ?>
	<!--
		<div class="header_store_banner">
				<img src="<?php //echo wp_get_attachment_url($store_info[banner]); ?>"/>
		</div>
	-->
	<?php } ?>
  </div>
  
  </div>
  <div style="display: block; text-align: center; color: #666; margin:-12px auto 1px auto; clear: both; float: left; width: 100%; cursor: pointer;" id="mostrar_hearder_loja" onclick="mostrar_hearder_loja()"><i class="fa fa-chevron-down" aria-hidden="true"></i> </div>

