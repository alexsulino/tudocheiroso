<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/alex_2020/css/w3.css">
<!-- alex tutorial definitvo para todos modal https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal -->


<style>
.w3-container, .w3-panel {background: #fdfdfd;}
.w3-modal {
    padding-top: 0px !important;
}	
.w3-container_box_sulino {
    padding: 20px 10px 10px 10px;
    height: 300px;
    color: #fff;
    margin-left: -16px;
    margin-right: -16px;
}
.w3-container_box_sulino_dois {
    display: flex;
    clear: both;
    padding: 30px 20px 20px 20px;
    background: #fdfdfd;
    border-radius: 15px;
    min-height: 400px;
    box-shadow: 0px 0px 17px -11px rgb(0 0 0 / 60%);
    margin-top: -15px;
}
a.Menu_Lateral_Perfil_logo {
    margin: auto;
    display: block;
    clear: both;
}
.w3-container a.bt_aplicar_modal {
    text-align: center;
    width: 50%;
    margin: 20px auto;
    float: none;
    border-radius: 5px;
    font-size: 16px;
    background: #701c79;
    color: #fff;
    display: block;
}

a.Menu_Lateral_Perfil_logo img {
    margin: auto !important;
    float: initial !important;
    max-height: 90px;
}
div#alex_modal_minha_conta_celular {
    padding: 0px !important;
    margin: 0px !important;
}
.w3-modal-content {
    height: auto;
    margin: 0px auto !important;
}
p.w3-mensagem {
    text-align: center;
    font-size: 15px;
    margin: -30px 0px 10px 0px;
    display: block;
    clear: both;
    float: left;
    width: 100%;
}
.container_sulino span.w3-button.w3-display-topright_voltar {
    border-radius: 30px;
    background-color: #00000033 !important;
    color: #fff !important;
    float: left !important;
    left: 5px;
    right: auto !important;
    font-size: 16px;
    top: 5px;
	padding: 10px 30px;
	position: absolute;
}
.container_sulino span.w3-button.w3-display-topright {
    background: #e8e0e06b;
    color: #ffffff;
}
.container_sulino .fpd-grid>.fpd-item {
    width: 24%;
}
.divisor-cat-cel {  padding: 1px !important;  background: #eee;  display: block;  clear: both;}

.Menu_item {
    text-align: center;
}
.Menu_item img {
    border-radius: 50%;
}
.modal_name {
    font-size: 15px;
    padding: 6px;
    font-weight: bold;
    margin-top: 10px;
}
.modal_email {
    font-size: 13px;
}
.Menu_bg_item {
    width: 100%;
}
.Menu_bg_item a {
    float: left;
    width: 100%;
    padding: 10px;
}
.Menu_bg_item a .fa {
     margin-right:10px;
     font-size:120%;
}

.w3-container_box_sulino h4 {
    font-size: 18px;
    margin: 7px 0px 0px 0px;
}
.alex_sociais_share {
    width: 100%;
    text-align: center;
}
.alex_sociais_share a {
    margin: 2px !important;
    background: #00000036 !important;
    clear: none !important;
    text-align: center;
    font-size: 9px !important;
    display: inline-grid;
    border-radius: 5px;
    padding: 5px 5px;
    width: 19%;
    min-height: 67px;
}
.alex_sociais_share a .fa {
    font-size: 21px !important;
    margin: 5px 2px !important;
}
.w3-container .fa, .w3-container .fas {
    font-family: 'FontAwesome';
    font-weight: 900;
    font: normal normal normal 14px/1 FontAwesome;
}

form.woocommerce-product-search_alex_novo {margin: 30px auto 39px auto;width: 65%;}
form.woocommerce-product-search_alex_novo input {width: 80%; margin: 2px;}




.container_sulino .Menu_bg_item ul li.cat-item {
    background: #f1efef;
    margin: 3px 0px 3px 6px;
    padding: 6px;
    border-radius: 6px;
    float: left;
    width: 30.4%;
    min-height: 80px;
    max-height: 80px;
    overflow: hidden;
    -webkit-box-shadow: 0 0px 0px 0 #ecebeb;
    box-shadow: 0 0px 1px 0 #ecebeb;
    text-align: center;
    font-size: 13px;
    line-height: normal;
}

.container_sulino .Menu_bg_item ul li.cat-item a {font-size: 12px;padding: 3px;}

.container_sulino .Menu_bg_item ul li.cat-item img {
    float: none;
    background: #f1efef;
    margin: 0px auto 0px auto;
    padding: 2px;
    border-radius: 5px;
    clear: both;
    display: block;
    color: #3a9ab7;
    max-height: 35px;
    height: 35px;
    width: auto;
}
.container_sulino .Menu_bg_item ul li.cat-item span {
    width: 100%;
    max-width: 100% !important;
    margin: 0px !important;
}
.container_sulino .Menu_bg_item  span.count {
    padding: 0px;
    margin: 0px;
    font-size: 11px;
    opacity: 0.5;
}
.container_sulino .Menu_bg_item div.widget {
    padding: 0px;
    border: none;
    margin: 0px;
}
.container_sulino .Menu_bg_item div.widget h2 {
    FONT-SIZE: 17px;
    text-align: center;
    font-weight: bold;
    margin-top:15px;
    display:block;
    clear:both;
}



</style>
	
<!--
<a style="" href="javascript:void(0)" onclick="document.getElementById('alex_modal_minha_conta_celular').style.display='block'">&nbsp;<i class="fa fa-heart" aria-hidden="true">&nbsp;</i> Minha conta </a> | 
<a style="" href="javascript:void(0)" onclick="document.getElementById('alex_modal_buscar_produto_celular').style.display='block'">&nbsp;<i class="fa fa-heart" aria-hidden="true">&nbsp;</i> Buscar </a> | 
<a style="" href="javascript:void(0)" onclick="document.getElementById('alex_modal_filtrar_produto_celular').style.display='block'">&nbsp;<i class="fa fa-heart" aria-hidden="true">&nbsp;</i> Filtrar </a> | 
<a style="" href="javascript:void(0)" onclick="document.getElementById('alex_modal_favoritos').style.display='block'">&nbsp;<i class="fa fa-heart" aria-hidden="true">&nbsp;</i> Favoritos </a>  
<a style="" href="javascript:void(0)" onclick="document.getElementById('alex_modal_gerenciar_meu_site').style.display='block'">&nbsp;<i class="fa fa-heart" aria-hidden="true">&nbsp;</i> Gerenciar meu site </a>  
-->

<div class="w3-container container_sulino">


  <!-- Moda Minha conta  -->
  <div id="alex_modal_minha_conta_celular" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-top">
    <!-- <div class="w3-modal-content w3-animate-top"> -->
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_minha_conta_celular').style.display='none'" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        <span onclick="document.getElementById('alex_modal_minha_conta_celular').style.display='none'" class="w3-button w3-display-topright_voltar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </span>
		
			 <div class="w3-container_box_sulino" style="background: #673AB7;">
			 
			 <?php $user_info = get_userdata(1);
				  $username = $user_info->user_login;
				  $first_name = $user_info->first_name;
				  $last_name = $user_info->last_name;
				 // echo "$first_name $last_name logs into her WordPress site with the user name of $username.";
			?>
			 
			 
				<div class="Menu_item">
					<a class="Menu_Lateral_Perfil_logo" href="<?php echo esc_url( home_url( '/'  ) ); ?>my-account/">
						<?php global $current_user;
								wp_get_current_user();
								echo get_avatar( $current_user->ID, 90 );
								$current_user = wp_get_current_user();
						?>
					</a>
					
					<?php if ( is_user_logged_in() ) { ?>		
					<div class="modal_name"><?php echo$first_name; ?> <?php echo $last_name; ?></div>
					<div class="modal_email"><?php echo $username; ?></div>
					<?php } else { ?>
					<div class="modal_name"> Você não esta logado!</div>
					<?php } ?>
				
					<h4>COMPARTILHAR</h4>	
					 <div class="alex_sociais_share">
						<a href="http://www.facebook.com/share.php?u=<?php echo get_post_permalink(); ?>" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook </a>
						<a class="whatsapp" href="whatsapp://send?text=<?php $blog_title = get_bloginfo(); echo $blog_title; ?>%20<?php wp_title(); ?>%20<?php echo get_post_permalink(); ?>"> <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp </a>
						<a class="googleplus" href="https://plus.google.com/share?url=<?php echo get_post_permalink(); ?>" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i> Google+ </a>
						<a class="twitter" href="http://twitter.com/intent/tweet?status=<?php echo get_post_permalink(); ?>" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> Twitter </a>
						
					</div>
					
				</div>
			 
			 </div>
			 
			<div class="w3-container_box_sulino_dois">
					 
						<div class="Menu_bg_item">

							<a href="<?php echo esc_url( home_url('/')); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home </a>
							<a href="<?php echo esc_url( home_url('/')); ?>minha-conta/"><i class="fa fa-file-text-o" aria-hidden="true"></i> Minha Conta</a>
							<a href="<?php echo esc_url( home_url('/')); ?>minha-conta/orders/"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Meus Pedidos</a>
							<a href="javascript:void(0)"  onclick="document.getElementById('alex_modal_favoritos').style.display='block'" ><i class="fa fa-heart-o" aria-hidden="true"></i> Favoritos</a>
							<DIV CLASS="divisor-cat-cel"> </DIV>
							<a href="<?php echo esc_url( home_url('/')); ?>loja/"><i class="fa fa-shopping-cart" aria-hidden="true"></i> COMPRAR </a>
							<br>
							<a href="javascript:void(0)" onclick="document.getElementById('alex_modal_buscar_produto_celular').style.display='block'"><i class="fa fa-list-ul" aria-hidden="true"></i> CATEGORIAS DE PRODUTOS </a>
						
				
							
							<?php if ( is_active_sidebar( 'extra_widgets_modal_minha_conta_cliente' ) ) : ?>
							<DIV CLASS="divisor-cat-cel"> </DIV>
								<?php dynamic_sidebar('extra_widgets_modal_minha_conta_cliente'); ?>
							<?php endif; ?>
							
							
							<DIV CLASS="divisor-cat-cel"> </DIV>
								
							<?php if ( is_user_logged_in() ) { ?>
								<a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fa fa-user-times" aria-hidden="true"></i> Sair</a>
								<?php } else { ?>
								<a href="<?php echo esc_url( home_url( '/'  ) ); ?>minha-conta/"> <i class="fa fa-user" aria-hidden="true"></i> Entrar </a>
							<?php } ?>
							
						</div>
			   
			</div>
		
      </div>
    </div>
  </div>
  
  
  
  <!-- Moda Bucar produtos  -->
  <div id="alex_modal_buscar_produto_celular" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-zoom">
    <!-- <div class="w3-modal-content w3-animate-top"> -->
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_buscar_produto_celular').style.display='none'" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        <span onclick="document.getElementById('alex_modal_buscar_produto_celular').style.display='none'" class="w3-button w3-display-topright_voltar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </span>
		
			 <div class="w3-container_box_sulino" style="background: #3a9ab7; background-image: linear-gradient(135deg,#0277bd 0,#8bc34a 100%);">
			 
			 
			 
			 
				<div class="Menu_item">
					
					<form role="search" method="get" id="searchform" class="woocommerce-product-search_alex_novo"  action="<?php echo home_url( '/' ); ?>">
						<label class="screen-reader-text" for="s">Search for:</label>
						<input type="text"  name="s" id="s" placeholder='Buscar na loja…' />
						<input type="submit" id="searchsubmit" value="BUSCAR" class="botao_pesquisar_store" />
						<input type="hidden" name="post_type" value="product">
					</form>
					
					
				
					<h4>ATALHOS</h4>	
					 <div class="alex_sociais_share">
						<a href="<?php echo esc_url( home_url('/')); ?>/loja"><i class="fa fa-list-ul" aria-hidden="true"></i>TODOS PRODUTOS </a>
						<a href="javascript:void(0)" onclick="document.getElementById('alex_modal_filtrar_produto_celular').style.display='block'"> <i class="fa fa-toggle-on" aria-hidden="true"></i> Filtrar Produtos </a>
						
						<a href="javascript:void(0)" onclick="document.getElementById('alex_modal_favoritos').style.display='block'"> <i class="fa fa-heart-o" aria-hidden="true"></i> Meus Favoritos </a>
						<a href="#"> <i class="fa fa-tag" aria-hidden="true"></i> DESTAQUES </a>
						<!--<a href="#"> <i class="fa fa-star-o" aria-hidden="true"></i> Mais vendidos </a>-->
						
						
					</div>
					
				</div>
			 
			 </div>
			 
			<div class="w3-container_box_sulino_dois">
					 
						<div class="Menu_bg_item">
					
					<?php if ( is_active_sidebar( 'extra_widgets_modal_busca_no_site' ) ) : ?>
								<?php dynamic_sidebar('extra_widgets_modal_busca_no_site'); ?>
							<?php endif; ?>
							

						</div>
			   
			</div>
		
      </div>
    </div>
  </div>
  
  
  
  <!-- Moda Bucar produtos  -->
  <div id="alex_modal_filtrar_produto_celular" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-zoom">
    <!-- <div class="w3-modal-content w3-animate-top"> -->
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_filtrar_produto_celular').style.display='none'" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        <span onclick="document.getElementById('alex_modal_filtrar_produto_celular').style.display='none'" class="w3-button w3-display-topright_voltar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </span>
		
			 <div class="w3-container_box_sulino" style="background: #607D8B;">
			 
			 
			 
			 
				<div class="Menu_item">
					
					<h1 style="font-size:20px; margin:45px auto 10px auto;"> FILTRAR PRODUTOS </h1>
					<i class="fa fa-toggle-on" aria-hidden="true" style="font-size:30px;">&nbsp;</i>
					
					
				
					<h4>ATALHOS</h4>	
					 <div class="alex_sociais_share">
						<a onclick="document.getElementById('alex_modal_buscar_produto_celular').style.display='block'; document.getElementById('alex_modal_filtrar_produto_celular').style.display='none'"> <i class="fa fa-list-ul" aria-hidden="true"></i> Categorias </a>
						<a href="javascript:void(0)" onclick="document.getElementById('alex_modal_favoritos').style.display='block'"> <i class="fa fa-heart-o" aria-hidden="true"></i> Meus Favoritos </a>
						<a href="#"> <i class="fa fa-tag" aria-hidden="true"></i> DESTAQUES </a>
						<!--<a href="#"> <i class="fa fa-star-o" aria-hidden="true"></i> Mais vendidos </a>-->
						
						
					</div>
					
				</div>
			 
			 </div>
			 
			<div class="w3-container_box_sulino_dois">
					 
						<div class="Menu_bg_item">
					
							<?php if ( is_active_sidebar( 'extra_widgets_modal_busca_no_site' ) ) : ?>
								<?php dynamic_sidebar('extra_widgets_modal_filtro_produtos'); ?>
							<?php endif; ?>
							

						</div>
			   
			</div>
		
      </div>
    </div>
  </div>
  
  <!-- Moda Meus Favoritos  -->
  <div id="alex_modal_favoritos" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-right">
    <!-- <div class="w3-modal-content w3-animate-top"> -->
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_favoritos').style.display='none'" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        <span onclick="document.getElementById('alex_modal_favoritos').style.display='none'" class="w3-button w3-display-topright_voltar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </span>
		
			 <div class="w3-container_box_sulino" style="background: #3a5bb7;height: 180px;">
			 
				<div class="Menu_item">
					
					<h1 style="font-size:20px; margin:45px auto 10px auto;"> MEUS PRODUTOS FAVORITOS </h1>
					<i class="fa fa-heart" aria-hidden="true" style="font-size:40px;">&nbsp;</i>
		
				</div>
			 </div>
			 
			<div class="w3-container_box_sulino_dois">
					 
						<div class="Menu_bg_item">
					
							<?php echo do_shortcode('[yith_wcwl_wishlist]');?>
							

						</div>
			   
			</div>
		
      </div>
    </div>
  </div>
  
  
  
  
  

<style>
.box_footer_alex_modal_gerenciar_meu_site {
    width: 90%;
    padding: 5px;
    text-align: center;
    display: block;
    clear: both;
    float: left;
    position: absolute;
    left: 0;
    right: 0;
}	

.bt_footer_alex_modal_gerenciar_meu_site {
    background: #673AB7;
    text-align: center;
    padding: 8px 15px 8px 15px;
    border-radius: 10px 10px 0px 0px;
    margin: auto !important;
    color: #fff;
    font-size: 13px;
    -webkit-box-shadow: 0px -1px 1px -1px #00000026;
    box-shadow: 0px 0px 4px 2px #00000010;
    position: fixed;
    bottom: 0px;
    float: none;
    right: auto;
    left: auto;
    z-index: 100;
    width: 190px;
}



a.gerenciador_avancado {
    background: #ffffff;
    margin: auto !important;
    position: relative;
    text-align: left;
    left: 5%;
    top: -52px;
    border-radius: 10px;
    -webkit-box-shadow: 0px -1px 1px -1px #00000026;
    box-shadow: 0px 0px 4px 2px #00000010;
    width: 340px !important;
    padding: 0px !important;
}
a.gerenciador_avancado .bt_gerenciador_avancado {
    background: #673AB7;
    padding: 10px;
    left: -10px;
    position: relative;
    font-size: 20px;
    color: #fff;
    border-radius: 10px 0px 0px 10px;
    background-image: linear-gradient(#621c7f, #c3174f);
}
a.gerenciador_avancado span {
    font-size: 15px;
    padding: 15px 5px 15px 0px;
}
a.gerenciador_avancado span b {
    color: #c3174f !important;
	font-style: italic;
}

ul.w3-lista_grade li {
    background: #fff;
    float: left;
    margin: 0px 2.8% 12px 0px;
    width: 30.4%;
    padding: 5px;
    text-align: center;
    list-style: none;
    border-radius: 5px;
    -webkit-box-shadow: 0px 4px 10px 2px #00000016;
    box-shadow: 0px 0px 9px 1px #00000010;
}
ul.w3-lista_grade li a {
    min-height: 85px;
    font-size: 12px;
}
ul.w3-lista_grade li i.fa {
    display: block;
    clear: both;
    color: #641c7e;
    font-size: 18px;
    margin: 0px auto 5px auto;
}
ul.w3-lista_grade h4 {
    font-size: 18px;
    font-weight: bold;
    margin-top: 14px !important;
    clear: both;
    display: block;
    float: left;
    width: 100%;
}

</style>  
 
<div class="box_footer_alex_modal_gerenciar_meu_site">
	<?php if ( wcfm_is_vendor() ) { ?>
	<a class="bt_footer_alex_modal_gerenciar_meu_site" href="javascript:void(0)" onclick="document.getElementById('alex_modal_gerenciar_meu_site').style.display='block'">&nbsp;<i class="fa fa-cogs" aria-hidden="true" style="font-size:100%;"></i> &nbsp; Gerenciar meu site </a>
	<?php } else { ?>
	<!--<a class="bt_footer_alex_modal_gerenciar_meu_site" href="<?php echo get_site_url(); ?>/vendor-register">&nbsp;<i class="fa fa-cogs" aria-hidden="true" style="font-size:100%;"></i> &nbsp; Participar </a>-->
	<?php  } ?>
</div>




  
  
 <?php 
global $WCFM, $WCFMmp;
$store_id = $WCFM->wcfm_vendor_support->wcfm_get_vendor_id_from_product( $post->ID );
$store_user      = wcfmmp_get_store( $store_id );
					$store_info      = $store_user->get_shop_info();
					$gravatar        = $store_user->get_avatar();
					$banner_type     = $store_user->get_list_banner_type();
					if( $banner_type == 'video' ) {
						$banner_video = $store_user->get_list_banner_video();
					} else {
						$banner          = $store_user->get_list_banner();
						if( !$banner ) {
							$banner = isset( $WCFMmp->wcfmmp_marketplace_options['store_list_default_banner'] ) ? $WCFMmp->wcfmmp_marketplace_options['store_list_default_banner'] : $WCFMmp->plugin_url . 'assets/images/default_banner.jpg';
							$banner = apply_filters( 'wcfmmp_list_store_default_bannar', $banner );
						}
					}
					$store_name      = isset( $store_info['store_name'] ) ? esc_html( $store_info['store_name'] ) : __( 'N/A', 'wc-multivendor-marketplace' );
					$store_name      = apply_filters( 'wcfmmp_store_title', $store_name , $store_id );
					$store_url       = wcfmmp_get_store_url( $store_id );
					$store_email   = $store_user->get_email(); 
					$store_phone  = $store_user->get_phone(); 
					$store_address   = $store_user->get_address_string(); 
					$store_description = $store_user->get_shop_description();

?> 
  
  
  
  <!-- Moda Gerenciar Loja  -->
  <div id="alex_modal_gerenciar_meu_site" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-right">
    <!-- <div class="w3-modal-content w3-animate-top"> -->
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_gerenciar_meu_site').style.display='none'" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        <span onclick="document.getElementById('alex_modal_gerenciar_meu_site').style.display='none'" class="w3-button w3-display-topright_voltar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </span>
		
			 <div class="w3-container_box_sulino" style="background: #673AB7;height: 340px;background-image:  linear-gradient(#621c7f,  #c3174f);">
			 
				<div class="Menu_item">
				
						<a href="<?php echo $store_url; ?>" rel="home" title="<?php echo $store_name; ?>" itemprop="url" class="Menu_Lateral_Perfil_logo">
							<img src="<?php echo $gravatar; ?>" class="logo_store_info" alt="" loading="lazy" sizes="">				
						</a>
					
					<h2 style="font-size:20px;margin:5px auto 5px auto;TEXT-ALIGN: center;" title="<?php echo $store_name; ?>"><?php echo $store_name; ?></h2>
					
					<h1 style="font-size:24px; margin:5px auto 5px auto;"> <i class="fa fa-cog" aria-hidden="true" style="font-size:100%;"></i> &nbsp; GERENCIAR MEU SITE </h1>
					
					
					 <div class="alex_sociais_share">		
						<a href="https://br.qr-code-generator.com/qr-codes-on/" target="_blank"> <i class="fa fa-qrcode" aria-hidden="true"></i> Meu QRCode </a>
						<a href="#"> <i class="fa fa-qrcode" aria-hidden="true"></i> Suprimentos QRCode </a>
						<a href="https://pwa-wc.webkul.com/woocommerce-pos/pos/category/all"target="_blank"> <i class="fa fa-television" aria-hidden="true"></i> Frente de Caixa </a>
					</div>
					
		
				</div>
			 </div>
			 
			<div class="w3-container_box_sulino_dois">
					 
						<div class="Menu_bg_item">
						
						<a href="<?php echo get_site_url(); ?>/store-manager/" rel="home" title="<?php echo $store_name; ?>" itemprop="url" class="gerenciador_avancado">
						<i class="fa fa-cogs bt_gerenciador_avancado" aria-hidden="true"></i>
						<span>Painel completo <b> Clique aqui! </b></span>
						</a>

							<p class="w3-mensagem">Gerenciador básico ajuda configurar seu site de forma rápida, simples e fácil</p>
								
							

							
							<ul class="w3-lista_grade">
								<h4><i class="fa fa-info-circle" aria-hidden="true"></i> Perfil</h4>
								
								<li><a href="<?php echo get_site_url(); ?>/store-manager/settings/"><i class="fa fa-cog" aria-hidden="true"></i> Configurar Site</a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/profile/"><i class="fa fa-user-o" aria-hidden="true"></i> Editar Perfil</a></li>
								<li><a href="<?php echo $store_url; ?>" target="_blank"><i class="fa fa-home" aria-hidden="true"></i> Meu site </a></li>
								
								<h4><i class="fa fa-magic" aria-hidden="true"></i> Gerenciar</h4>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/products/"><i class="fa fa-list-ul" aria-hidden="true"></i> Produtos </a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/products-manage/"><i class="fa fa-th-large" aria-hidden="true"></i> Adicionar Produtos </a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/orderslist/"><i class="fa fa-list-ol" aria-hidden="true"></i> Pedidos </a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/coupons/"><i class="fa fa-percent" aria-hidden="true"></i> Coupons Desconto</a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/customers/"><i class="fa fa-users" aria-hidden="true"></i> Clientes</a></li>
								
								<li><a href="<?php echo get_site_url(); ?>/store-manager/staffs/"><i class="fa fa-user-plus" aria-hidden="true"></i> Colaboradores (Funcionários)</a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/delivery-boys/"><i class="fa fa-motorcycle" aria-hidden="true"></i> Entregadores</a></li>
								
								<h4><i class="fa fa-balance-scale" aria-hidden="true"></i> Financeiro</h4>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/payments/"><i class="fa fa-handshake-o" aria-hidden="true"></i> Meus Pagamentos</a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/ledger/"><i class="fa fa-bar-chart" aria-hidden="true"></i> Resumo </a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/refund-requests/"><i class="fa fa-exchange" aria-hidden="true"></i> Reembolso</a></li>
								
								<h4><i class="fa fa-plus" aria-hidden="true"></i> Resumo</h4>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/reports-sales-by-date/"><i class="fa fa-pie-chart" aria-hidden="true"></i> Relatórios </a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/add-to-my-store-catalog/"><i class="fa fa-arrow-right" aria-hidden="true"></i> Vender no meu site </a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/reviews/"><i class="fa fa-star" aria-hidden="true"></i> Avalizções </a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/followers/"><i class="fa fa-share" aria-hidden="true"></i> Seguidores</a></li>
								<li><a href="<?php echo get_site_url(); ?>/store-manager/support/"><i class="fa fa-comments-o" aria-hidden="true"></i> Suporte ao cliente</a></li>
								
								
							</ul>
							

						</div>
			   
			</div>
		
      </div>
    </div>
  </div>
  
  
  <!-- Moda Fancy ||| Alterar textos  -->
  <div id="alex_modal_fancy_alterar_textos" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-right">
    <!-- <div class="w3-modal-content w3-animate-top"> -->
      <div class="w3-container">
	  <span onclick="document.getElementById('alex_modal_fancy_alterar_textos').style.display='none'" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        <span onclick="document.getElementById('alex_modal_fancy_alterar_textos').style.display='none'" class="w3-button w3-display-topright_voltar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </span>
		
			 <div class="w3-container_box_sulino" style="background: #673AB7;height: 150px;background-image:  linear-gradient(#621c7f,  #c3174f);">
			 
				<div class="Menu_item">
				
					
					<h1 style="font-size:24px; margin:5px auto 5px auto;"> <i class="fa fa-font" aria-hidden="true" style="font-size:100%;"></i> &nbsp; ALTERAR TEXTOS </h1>
						
						<style>
							.fpd-text-layer-meta { display: none;}
							.class_fancy_abrir_texto .fpd-text-layer-meta { display: block;}
							</style>

							<script>
							function myFunction_id_fancy_abrir_texto_compacto() {
							   var element = document.getElementById("id_fancy_abrir_texto");
							   element.classList.add("class_fancy_abrir_texto");
							}
							function myFunction_id_fancy_abrir_texto_expande() {
							   var element = document.getElementById("id_fancy_abrir_texto");
							   element.classList.remove("class_fancy_abrir_texto");
							}
							</script>
<!--						
						<div class="alex_sociais_share">						
							<a href="javascript:void(0)" style="font-size:16px;" onclick="document.getElementsByClassName('fpd-done')[0].click(); document.getElementById('alex_modal_fancy_alterar_textos').style.display='none'"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Aplicar </a>	
						</div>
-->
				</div>
			 </div>
			 
			<div class="w3-container_box_sulino_dois">
					 
						<div class="Menu_bg_item" id="id_fancy_abrir_texto">
						<a href="javascript:void(0)" class="bt_aplicar_modal" onclick="document.getElementsByClassName('fpd-done')[0].click(); document.getElementById('alex_modal_fancy_alterar_textos').style.display='none'"> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Aplicar </a>
							<button onclick="myFunction_id_fancy_abrir_texto_compacto()">Expandir</button>
							<button onclick="myFunction_id_fancy_abrir_texto_expande()">Compacto</button>
							
								<?php echo do_shortcode('[fpd_module type="text-layers"]'); ?>
							<a href="javascript:void(0)" class="bt_aplicar_modal" onclick="document.getElementsByClassName('fpd-done')[0].click(); document.getElementById('alex_modal_fancy_alterar_textos').style.display='none'"> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Aplicar </a>

						</div>
			   
			</div>
		
      </div>
    </div>
  </div>
  
  <!-- Moda Fancy ||| Alterar textos  -->
  <div id="alex_modal_fancy_temas" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-right">
    <!-- <div class="w3-modal-content w3-animate-top"> -->
      <div class="w3-container">
	  <span onclick="document.getElementById('alex_modal_fancy_temas').style.display='none'" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        <span onclick="document.getElementById('alex_modal_fancy_temas').style.display='none'" class="w3-button w3-display-topright_voltar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </span>
		
			 <div class="w3-container_box_sulino" style="background: #673AB7;height: 150px;background-image:  linear-gradient(#621c7f,  #c3174f);">
			 
				<div class="Menu_item">
				
					
					<h1 style="font-size:24px; margin:5px auto 5px auto;"> <i class="fa fa-th-large" aria-hidden="true" style="font-size:100%;"></i> &nbsp; TEMAS PARA ESSE PRODUTO </h1>
						
						
<!--						
						<div class="alex_sociais_share">						
							<a href="javascript:void(0)" style="font-size:16px;" onclick="document.getElementsByClassName('fpd-done')[0].click(); document.getElementById('alex_modal_fancy_alterar_textos').style.display='none'"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Aplicar </a>	
						</div>
-->
				</div>
			 </div>
			 
			<div class="w3-container_box_sulino_dois">
					 
						<div class="Menu_bg_item">						
							<?php echo do_shortcode('[fpd_module type="products"]'); ?> 
							<a href="javascript:void(0)" class="bt_aplicar_modal" onclick="document.getElementById('fpd-start-customizing-button').click(); document.getElementById('alex_modal_fancy_temas').style.display='none'"> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Aplicar Tema </a>
						</div>
			   
			</div>
		
      </div>
    </div>
  </div>
  
  <!-- Moda Fancy ||| Alterar textos  -->
  <div id="alex_modal_fancy_galeria" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-right"  style="width: 100%;">
    <!-- <div class="w3-modal-content w3-animate-top"> -->
      <div class="w3-container">
	  <span onclick="document.getElementById('alex_modal_fancy_galeria').style.display='none'" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        <span onclick="document.getElementById('alex_modal_fancy_galeria').style.display='none'" class="w3-button w3-display-topright_voltar"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar </span>
		
			 <div class="w3-container_box_sulino" style="background: #673AB7;height: 150px;background-image:  linear-gradient(#621c7f,  #c3174f);">
			 
				<div class="Menu_item">
				
					
					<h1 style="font-size:24px; margin:5px auto 5px auto;"> <i class="fa fa-th-large" aria-hidden="true" style="font-size:100%;"></i> &nbsp; GALERIA </h1>
						
						
<!--						
						<div class="alex_sociais_share">						
							<a href="javascript:void(0)" style="font-size:16px;" onclick="document.getElementsByClassName('fpd-done')[0].click(); document.getElementById('alex_modal_fancy_alterar_textos').style.display='none'"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Aplicar </a>	
						</div>
-->
				</div>
			 </div>
			 
			<div class="w3-container_box_sulino_dois">
					 
						<div class="Menu_bg_item">						
							<?php //echo do_shortcode('[fpd_module type="designs"]'); ?> 
							<?php //echo do_shortcode('[fpd_module type="images"]'); ?> 
							<a href="javascript:void(0)" class="bt_aplicar_modal" onclick="document.getElementById('fpd-start-customizing-button').click(); document.getElementById('alex_modal_fancy_galeria').style.display='none'"> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Aplicar </a>
						</div>
			   
			</div>
		
      </div>
    </div>
  </div>
  
  
</div>
