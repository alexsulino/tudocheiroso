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
.header-primary-nav {display:;}
div#tab_links_area {
    display: none;
}
</style>

<?php if(is_product()) { ?> <!-- Alex se for pagina de produto unico -->
				
<style>
.breadcrumbs-wrapper {
    display: none;
}

.header_colunas {
    width: 33%;
	text-align: center;
    float: left;
}
.logo_store_header {max-height:50px;}

.voltar_goBack {
    margin: 2px 0px;
    display: inline-table;
	   
		    float: left;
}
</style>

<script>
function voltar_goBack() {
  window.history.back()
}
</script>

<?php //echo $store_name; ?>
<?php //echo $store_url; ?>
<?php //echo $store_email; ?>
<?php //echo $store_phone; ?>
<?php //echo $store_address; ?>
<?php //echo $store_description; ?>
<?php //echo $gravatar; ?>
<?php //echo $banner; ?>



<div class="logo-wrapper" style="background-image:url(<?php echo $banner; ?>); background-repeat:repeat; background-position:top left; background-color:#ffffff; background-size: cover;">
<div class="container" style="background: rgb(0 0 0 / 55%);">
	<div class="row">
	
		<div class="header_colunas coluna_header_um">
		<a onclick="voltar_goBack()" href="javascript:void(0)" class="botao_estilo_um voltar_goBack"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar </a>
			
		</div>
		
		<div class="header_colunas coluna_header_dois">
			<a href="<?php echo $store_url; ?>" rel="home" title="<?php echo $store_name; ?>" itemprop="url">
				<img src="<?php echo $gravatar; ?>" class="logo_store_header" alt="" loading="lazy" sizes="">				
			</a>
		</div>
		
		<div class="header_colunas coluna_header_trez">
		3
		</div>
	
	</div>
</div>
</div>




<?php } ?><!-- Fim Alex se for pagina de produto unico -->