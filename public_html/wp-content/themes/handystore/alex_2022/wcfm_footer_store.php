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
<style>
/* Alex Mobile*/
@media screen and (max-width: 600px) {
	
.coluna_footer_um, .coluna_footer_quatro { width: 100% !important;}
.coluna_footer_dois, .coluna_footer_trez { width: 50% !important;     padding: 10px 13px !important;}
.coluna_footer_um, .coluna_footer_quatro { text-align: center  !important;}
.coluna_footer_um a {float: none  !important;}

}	
	
.site-footer {display:none;}



footer.site-footer.site_footer_store {
    background: #f5f5f5;
	display:block !important;
	-webkit-box-shadow: 0 -1px 5px 0 #dddddd;
    box-shadow: 0 -1px 5px 0 #dddddd;
}

.footer_colunas {
    /* justify-content: center; */
    /* align-items: center; */
    /* display: flex; */
	padding: 20px 1px;
}
.coluna_footer_um, .coluna_footer_dois, .coluna_footer_trez, .coluna_footer_quatro {
    min-height: 185px;
	width: 24.2%;
    float: left;
    
}
.footer_colunas.coluna_footer_quatro {

}
.footer_colunas.coluna_footer_cinco {
    width: 100%;
	padding:22px 15px 22px 15px;
	width: 100%;
    display: block;
    clear: both;
	    background: #ffffff;
    border-radius: 10px;
	    margin-bottom: 14px;
}
.footer_store_address {text-align:center;}

.site_footer_store .site-footer a {
    padding: 3px;
    clear: both;
    float: left;
	font-size: 14px;
}
.site_footer_store li {
    list-style: none;
}
.logo_store_footer {max-height:60px;}

.footer_store_name {
    font-size: 22px;
	display: block;
    clear: both;
}

.footer_store_phone {
    font-size: 16px;
    margin: 3px 0px;
	display: block;
    clear: both;
}
.footer_store_email {
    font-size: 14px;
	display: block;
    clear: both;
}
.footer_store_phone ::before { font-size: 170%;}
.footer_store_email ::before { font-size: 130%;}

.site_footer_store h2 {
    font-size: 19px;
    text-transform: uppercase;
}
ul.footer_sociais {
    justify-content: center;
    display: flex;
}
.site-footer .footer_sociais a {
    padding: 5px;
    margin:5px;
    clear:none;
    float: left;
    font-size: 32px;
}
</style>


<script>

</script>

<?php //echo $store_name; ?>
<?php //echo $store_url; ?>
<?php //echo $store_email; ?>
<?php //echo $store_phone; ?>
<?php //echo $store_address; ?>
<?php //echo $store_description; ?>
<?php //echo $gravatar; ?>
<?php //echo $banner; ?>



<footer class="site-footer site_footer_store" itemscope="itemscope" itemtype="http://schema.org/WPFooter"><!-- Site's Footer -->
	<div class="container">
		<div class="row">
		
			<div class="footer_colunas coluna_footer_um">
				<?php //dynamic_sidebar('extra_widgets_footer_01'); ?>
				<a href="<?php echo $store_url; ?>" rel="home" title="<?php echo $store_name; ?>" itemprop="url">
				<img src="<?php echo $gravatar; ?>" class="logo_store_footer" alt="" loading="lazy" sizes="">				
				</a>
				<a href="<?php echo $store_url; ?>" rel="home" title="<?php echo $store_name; ?>" itemprop="url"><div class="footer_store_name"><?php echo $store_name; ?></div></a>
				<div class="footer_store_phone"><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo $store_phone; ?></div>
				<div class="footer_store_email"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $store_email; ?></div>
				
	
			</div>
			
			<div class="footer_colunas coluna_footer_dois">
				<?php //dynamic_sidebar('extra_widgets_footer_02'); ?>
				<h2> Informações </h2>
				<li><a href="<?php echo $store_url; ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> Produtos </a></li>
				<li><a href="<?php echo $store_url; ?>/about/#tab_links_area"><i class="fa fa-chevron-right" aria-hidden="true"></i> Quem somos </a></li>
				<li><a href="<?php echo $store_url; ?>/policies/#tab_links_area"><i class="fa fa-chevron-right" aria-hidden="true"></i> Politicas </a></li>
				<li><a href="<?php echo $store_url; ?>/reviews/#tab_links_area"><i class="fa fa-chevron-right" aria-hidden="true"></i> Comentários </a></li>
				<li><a href="<?php echo $store_url; ?>/followers/#tab_links_area"><i class="fa fa-chevron-right" aria-hidden="true"></i> Seguidores </a></li>
		
			</div>
			
			<div class="footer_colunas coluna_footer_trez">
				<?php //dynamic_sidebar('extra_widgets_footer_03'); ?>
				<h2> Conta </h2>
				<li><a href="<?php echo $store_url; ?>/about/#tab_links_area"><i class="fa fa-chevron-right" aria-hidden="true"></i> Minha conta</a></li>
				<li><a href="<?php echo $store_url; ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meus pedidos </a></li>
				<li><a href="javascript:void(0)" onclick="document.getElementById('alex_modal_wishlist').style.display='block'"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meus favoritos </a></li>
				<li><a href="<?php echo $store_url; ?>/reviews/#tab_links_area"><i class="fa fa-chevron-right" aria-hidden="true"></i> Comentários </a></li>
				<!-- alex -> if vendedor estiver logado -->
				<?php if ( wcfm_is_vendor() ) {?>
				<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Sou Vendedor (menu admin) </a></li>
				<?php } else {?>
				<li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i> Não sou Vendedor</a></li>	
				<?php } ?>
				<!-- Fim alex -> if vendedor estiver logado -->
			</div>
			
			<div class="footer_colunas coluna_footer_quatro">
			<h2> Redes Sociais </h2>
			
			<ul class="footer_sociais">
				
				
				<?php if( isset( $store_info['social']['fb'] ) && !empty( $store_info['social']['fb'] ) ) { ?>
					<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['fb'], 'facebook' ); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
				<?php } ?>
				<?php if( isset( $store_info['social']['twitter'] ) && !empty( $store_info['social']['twitter'] ) ) { ?>
					<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['twitter'], 'twitter' ); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true" target="_blank"></i></a></li>
				<?php } ?>
				<?php if( isset( $store_info['social']['linkedin'] ) && !empty( $store_info['social']['linkedin'] ) ) { ?>
					<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['linkedin'], 'linkedin' ); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true" target="_blank"></i></a></li>
				<?php } ?>
				<?php if( isset( $store_info['social']['instagram'] ) && !empty( $store_info['social']['instagram'] ) ) { ?>
					<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['instagram'], 'instagram' ); ?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true" target="_blank"></i></a></li>
				<?php } ?>
				<?php if( isset( $store_info['social']['pinterest'] ) && !empty( $store_info['social']['pinterest'] ) ) { ?>
					<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['pinterest'], 'pinterest' ); ?>" target="_blank"><i class="fab fa-pinterest" aria-hidden="true" target="_blank"></i></a></li>
				<?php } ?>
				<?php if( isset( $store_info['social']['youtube'] ) && !empty( $store_info['social']['youtube'] ) ) { ?>
					<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['youtube'], 'youtube' ); ?>" target="_blank"><i class="fab fa-youtube" aria-hidden="true" target="_blank"></i></a></li>
				<?php } ?>
				<?php if( isset( $store_info['social']['snapchat'] ) && !empty( $store_info['social']['snapchat'] ) ) { ?>
					<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['snapchat'], 'snapchat' ); ?>" target="_blank"><i class="fab fa-snapchat" aria-hidden="true" target="_blank"></i></a></li>
				<?php } ?>

			  
			</ul>		
				
				<?php //dynamic_sidebar('extra_widgets_footer_04'); ?>
			</div>
			
			<div class="footer_colunas coluna_footer_cinco">
			<div class="footer_store_address"><?php echo $store_address; ?></div>
			</div>

		</div>
	</div>
</footer><!-- end of Site's Footer -->

<style>
.store_menu_flutuante_tooter { display:none;}
/* Alex Mobile*/
@media screen and (max-width: 600px) {
	
	.store_menu_flutuante_tooter {
		display:block !important;
		background: #fff;
		text-align: center;
		position: fixed;
		bottom: 0px;
		left: 0;
		right: 0;
		z-index: 999;
		-webkit-box-shadow: 0 -1px 5px 0 #dddddd;
		box-shadow: 0 -1px 5px 0 #dddddd;
	}
	.store_menu_flutuante_tooter a {
		color: #999;
		padding: 8px 0px;
		display: inline-block;
		width: 18%;
		font-size: 11px;
	}
	.store_menu_flutuante_tooter a .fa {
		font-size: 20px;
		color: #555;
	}
	
}
</style>

<div class="store_menu_flutuante_tooter">
	<div class="store_menu_flutuante">
	
		<a href="<?php echo $store_url; ?>"> <i class="fa fa-home" aria-hidden="true"></i><BR>Home</a>
		<a href="javascript:void(0)" onclick="document.getElementById('alex_modal_busca').style.display='block'"><i class="fa fa-search" aria-hidden="true"></i><BR>Buscar</a>
		<!--<a href="javascript:void(0)"><i class="fa fa-comments-o" aria-hidden="true"></i></a>-->
		<a href="javascript:void(0)"><i class="fa fa-share" aria-hidden="true"></i><BR>Compartilhar</a>
		<a href="javascript:void(0)" onclick="document.getElementById('alex_modal_wishlist').style.display='block'"><i class="fa fa-heart-o" aria-hidden="true"></i><BR>Favoritos</a>
		<a href="javascript:void(0)" onclick="document.getElementById('alex_modal_minha_conta').style.display='block'"><i class="fa fa-user-o" aria-hidden="true"></i><BR>Perfil</a>
	
	</div>
</div>