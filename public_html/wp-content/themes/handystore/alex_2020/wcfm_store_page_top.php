<style>
form.woocommerce-product-search_alex {
    text-align: center;
    padding: 18px;
    background: #fff;
    display: inline-block;
    clear: both;
    border-radius: 5px;
    margin: 5px;
    width: 100%;
	-webkit-box-shadow: 0 -1px 5px 0 #dddddd;
    box-shadow: 0 -1px 5px 0 #dddddd;
}

.woocommerce-product-search_alex button.botao_pesquisar_store {
    display: block !important;
    float: left;
    position: relative;
    width: 30%;
	margin-left: -10px !important;
	background: #5f9ea0;
	 border-radius: 0px 5px 5px 0px !important;
}

.woocommerce-product-search_alex .field_pesquisar_store {
    float: left;
    width: 55%;
    
}
.woocommerce-product-search_alex .field_pesquisar_store,
.woocommerce-product-search_alex button.botao_pesquisar_store {
    padding: 11px 80px 10px 10px;
	 height: auto !important;
    padding: 13px;
}
</style>

<?php if(wcfm_is_store_page()) {?>
	
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


?>
<form role="search" method="get" class="woocommerce-product-search_alex" action="<?php echo $store_url; ?>">
	<input type="search" id="woocommerce-product-search-field-0" class="field_pesquisar_store" placeholder="Pesquisar na loja…" value="" name="s">
	<button type="submit" value="Pesquisar" class="botao_pesquisar_store">Pesquisar</button>
</form>

<?php dynamic_sidebar('wcfm_store_page_top'); ?>

	<?php if(strstr($_SERVER['REQUEST_URI'], "filter") || strstr($_SERVER['REQUEST_URI'], "category") || strstr($_SERVER['REQUEST_URI'], "?s=")){ ?>
		
		<?php } else {?>	

		<?php //wc_get_template_part( '/alex_2020/temas/delivery/vitrine' );  ?>

	<?php } ?>



<?php } ?>



