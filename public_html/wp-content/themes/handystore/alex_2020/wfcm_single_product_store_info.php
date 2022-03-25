<?php 
global $WCFM, $WCFMmp, $product;
	$product_id = $product->get_id();
	
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
					//alex desfraguimenta endereco
					$store_address_city   = $store_user->get_address(); 
					$store_address_state   = $store_user->get_address(); 
					$city = isset( $store_address_city['city'] ) ? $store_address_city['city'] : '';
					$state = isset( $store_address_state['state'] ) ? $store_address_state['state'] : '';
					
					
									
							
							
	

?>
<style>
/* Alex Mobile*/
@media screen and (max-width: 600px) {
	
.coluna_store_um, .coluna_store_dois {width: 100%;}

}	
	
.wfcm_single_product_store_info {
     background: #fff;
    padding: 10px;
    clear: both;
	border-radius:3px;
    display: flow-root;
    width: 100%;
    margin: 25px 0px 15px 0px;
}

.store_info_colunas {
	padding: 1px;
}
.coluna_store_um, .coluna_store_dois {
    min-height: 65px;
	width: 49.9%;
    float: left;
    
}
.store_info_colunas.coluna_store_trez {
    width: 100%;
    display: block;
    clear: both;
}

.footer_store_address {text-align:center;}

.wfcm_single_product_store_info li {
    list-style: none;
}
.logo_store_info {max-height:65px; float:left; margin-right:10px;}

.store_info_name_box {
    float:left;
	
}

.info_store_name {
    font-size: 16px;
	display: block;
    clear: both;
}

.info_store_phone {
    font-size: 14px;
    margin: 3px 0px 6px 0px;
	display: block;
    clear: both;
}
.info_store_email {
    font-size: 13px;
	display: block;
    clear: both;
}
.info_store_phone ::before { font-size: 140%;}
.info_store_email ::before { font-size: 120%;}

.wfcm_single_product_store_info h2 {
    font-size: 15px;
	margin-top:10px;
	margin-right:20px;
    text-transform: uppercase;
	float:left;
	font-weight: bold;
}
ul.info_store_sociais {
    padding: 0px;
    margin: 0;
    display: block;
    clear: both;
    margin-top: 15px;
}
.wfcm_single_product_store_info .info_store_sociais a {
    margin: 0px 20px 0 0;
    clear: none;
    float: left;
    font-size: 25px;
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
<?php //echo $city; ?>
<?php //echo $state; ?>



	<div class="wfcm_single_product_store_info">
		<div class="principal_store_info">
		
			<div class="store_info_colunas coluna_store_um">
				<?php //dynamic_sidebar('extra_widgets_footer_01'); ?>
				<a href="<?php echo $store_url; ?>" rel="home" title="<?php echo $store_name; ?>" itemprop="url">
				<img src="<?php echo $gravatar; ?>" class="logo_store_info" alt="" loading="lazy" sizes="">				
				</a>
				
				<div class="store_info_name_box">
					<a href="<?php echo $store_url; ?>" rel="home" title="<?php echo $store_name; ?>" itemprop="url"><div class="info_store_name"><?php echo $store_name; ?></div></a>
					<div class="info_store_address"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $city; ?> - <?php echo $state; ?></div>
				</div>
				
				
	
			</div>
			
			<div class="store_info_colunas coluna_store_dois">
				<div class="info_store_phone"><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php echo $store_phone; ?></div>
				<div class="info_store_email"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $store_email; ?></div>
				
				<ul class="info_store_sociais">
				
					<?php if( isset( $store_info['social']['instagram'] ) && !empty( $store_info['social']['instagram'] ) ) { ?>
						<!--<h2> Redes Sociais: </h2> -->
						<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['instagram'], 'instagram' ); ?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true" target="_blank"></i></a></li>
					<?php } ?>
					<?php if( isset( $store_info['social']['fb'] ) && !empty( $store_info['social']['fb'] ) ) { ?>
						<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['fb'], 'facebook' ); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
					<?php } ?>
					<?php if( isset( $store_info['social']['twitter'] ) && !empty( $store_info['social']['twitter'] ) ) { ?>
						<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['twitter'], 'twitter' ); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true" target="_blank"></i></a></li>
					<?php } ?>
					<?php if( isset( $store_info['social']['linkedin'] ) && !empty( $store_info['social']['linkedin'] ) ) { ?>
						<li><a href="<?php echo wcfmmp_generate_social_url( $store_info['social']['linkedin'], 'linkedin' ); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true" target="_blank"></i></a></li>
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
				
			</div>
			
			<div class="store_info_colunas coluna_store_trez">
				
			</div>

		</div>
	</div>

