<?php
/* Add css no tema filho*/
function alex_enqueue_styles() {
	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri());
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/alex_2020/alex_estilo_multiloja.css?v='.time(), array('parent-theme'));
	/*alex add ?v='.time() - remove cache dessa folha de estilo	*/
	}
add_action('wp_enqueue_scripts', 'alex_enqueue_styles');

// Inicio WCFM
function wpdocs_theme_name_scriptss() {
    wp_enqueue_style( 'style-namee', get_template_directory_uri() . '/alex_2020/alex_estilo_wcfm.css');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scriptss' );
// Fim WCFM

// Inicio
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/alex_2020/alex_estilo_multiloja_celular.css');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
// Fim

/* ALEX ADD ADMIN STYLE */
function my_custom_fonts() {
wp_enqueue_style('admin_styles' , get_stylesheet_directory_uri().'/alex_2020/alex_admin_section.css?v='.time());
}
add_action('admin_head', 'my_custom_fonts');
/* ALEX ADD ADMIN STYLE */

// Alex Plugin Widget Usuario meta 
get_template_part('alex_2020/alex_usuario_widget_meta_logado');

/******************************************************************************  ALEX Register extra widget ******************************************************************************/

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'ALEX - MODAL || Minha Conta',
'id' => 'extra_widgets_modal_minha_conta_cliente',
'description' => 'Modal Minha conta (Cliente)',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'ALEX - MODAL || Busca + Categorias',
'id' => 'extra_widgets_modal_busca_no_site',
'description' => 'Modal busca no site',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'ALEX - MODAL || Filtro Produtos',
'id' => 'extra_widgets_modal_filtro_produtos',
'description' => 'Modal filtro produtos no site',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'ALEX - STORE PAGE || Topo loja',
'id' => 'wcfm_store_page_top',
'description' => 'Todo da pagina da loja',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));
}
/****************************************************************************** Fim ALEX Register extra widget ******************************************************************************/

/* Filtro Atributos listage de produtos */
add_action('woocommerce_before_shop_loop', 'Filtro_Atributo_topo', 10);
function Filtro_Atributo_topo() {
	//get_template_part('alex_2020/wcfm_store_page_top');
}
/* Fim Filtro Atributos listage de produtos */




/****************************************************************************** Alex list product ******************************************************************************/
/*****  Alex add favoritos na lista de produtos */
add_action ('woocommerce_after_shop_loop_item_title','alex_proporcao_price_sugerido_produto_list', 1);
function alex_proporcao_price_sugerido_produto_list() { 
	echo do_shortcode('[yith_wcwl_add_to_wishlist]');
	//get_template_part('alex_2020/alex_proporcao_price_sugerido_produto_list');
}
add_action ('woocommerce_single_product_summary','alex_favoritos_single_product', 5);
function alex_favoritos_single_product() { 
	//echo do_shortcode('[yith_wcwl_add_to_wishlist]');
}
/*****  Fim Alex add favoritos na lista de produtos */
/****************************************************************************** Fim Alex list product ******************************************************************************/

/****************************************************************************** Alex single product page ******************************************************************************/
/* Filtro Atributos listage de produtos */
add_action('woocommerce_single_product_summary', 'single_product_store_info',90);
function single_product_store_info() {
	get_template_part('alex_2020/wfcm_single_product_store_info');
	//echo "oiiii";
}
/* Fim Filtro Atributos listage de produtos */

// Alex Calculo Proporcao
add_action( 'woocommerce_single_product_summary', 'alex_calculo_proporcao', 30);
function alex_calculo_proporcao() {
	//get_template_part('alex_2020/2020_calculo_proporcao');
}
// Fim Alex Calculo Proporcao

// Alex QR Code
add_action( 'woocommerce_single_product_summary', 'alex_qrcode_store_plugin_TM', 31);
function alex_qrcode_store_plugin_TM() {
	//get_template_part('alex_2020/QRcode_store_plugin_TM');
}
// Fim Alex QR Code

// Alex NBDesigner Mocap
add_action( 'woocommerce_single_product_summary', 'alex_NBDesigner_mocap', 31);
function alex_NBDesigner_mocap() {
	//get_template_part('alex_2020/NBDesigner_mockup');
}
add_action( 'woocommerce_single_product_summary', 'alex_NBDesigner_mocap_top', 10);
function alex_NBDesigner_mocap_top() {
	//get_template_part('alex_2020/NBDesigner_mockup_top');
	//echo "topppp";
}

// Fim Alex NBDesigner Mocap

// Alex personalizador de produtos
add_action( 'woocommerce_product_thumbnails', 'alex_personalizador_de_produtos', 1);
function alex_personalizador_de_produtos() {
	//get_template_part('alex_2020/alex_fancy_caixa_magica');
}
// Fim Alex personalizador de produtos

/****************************************************************************** Fim Alex single product page ******************************************************************************/
/****************************************************************************** Alex Carrinho ******************************************************************************/
/* WooCommerce * Display cart total weight on the cart page */
add_action('woocommerce_after_cart_table', 'alex_prefix_cart_extra_info', 1);
function alex_prefix_cart_extra_info() {
	global $woocommerce;
	echo '<div class="cart-extra-info"><p class="total-weight" style="color:#cccccc;">' . __('PESO TOTAL DO PEDIDO:', 'woocommerce');
	echo ' ' . $woocommerce->cart->cart_contents_weight . ' ' . get_option('woocommerce_weight_unit');
	echo '</p></div>';
}

/* alex mudando posicao do calculo de frete */
add_action( 'woocommerce_after_cart_table', 'add_another_custom_flat_rate', 2 );
function add_another_custom_flat_rate() {
	echo '<div class="calcular_frete_cart">';
		woocommerce_shipping_calculator();
	echo '</div>';

}

/*/////////////////////// Alex Clear Cart for WooCommerce ////////////////////////*/
add_action( 'woocommerce_cart_coupon', 'custom_woocommerce_empty_cart_button' );
function custom_woocommerce_empty_cart_button() {
	echo '<a href="' . esc_url( add_query_arg( 'empty_cart', 'yes' ) ) . '" class="button limpar_carrinho" title="' . esc_attr( 'Empty Cart', 'woocommerce' ) . '">' . esc_html( 'Limpar Carrinho', 'woocommerce' ) . '</a>';
}

add_action( 'wp_loaded', 'custom_woocommerce_empty_cart_action', 20 );
function custom_woocommerce_empty_cart_action() {
	if ( isset( $_GET['empty_cart'] ) && 'yes' === esc_html( $_GET['empty_cart'] ) ) {
		WC()->cart->empty_cart();

		$referer  = wp_get_referer() ? esc_url( remove_query_arg( 'empty_cart' ) ) : wc_get_cart_url();
		wp_safe_redirect( $referer );
	}
}



/*/////////////////////// Fim Alex Clear Cart for WooCommerce ////////////////////////*/

/****************************************************************************** Fim Alex Carrinho ******************************************************************************/
/****************************************************************************** Alex Checkout ******************************************************************************/

/* Alex checkout altera prioridade dos campos  */
add_filter("woocommerce_checkout_fields", "custom_override_checkout_fields");
function custom_override_checkout_fields($fields) {
    $fields['billing']['billing_first_name']['priority'] = 1;
    $fields['billing']['billing_last_name']['priority'] = 1;
	
	$fields['billing']['billing_persontype']['priority'] = 2;
    $fields['billing']['billing_cnpj']['priority'] = 3;
    $fields['billing']['billing_cpf']['priority'] = 3;
    $fields['billing']['billing_company']['priority'] = 3;
	
    $fields['billing']['billing_address_1']['priority'] = 6;
    $fields['billing']['billing_number']['priority'] = 7;
    $fields['billing']['billing_neighborhood']['priority'] = 8;
	$fields['billing']['billing_city']['priority'] = 9;
	
    $fields['billing']['billing_address_2']['priority'] = 12;
    
    $fields['billing']['billing_postcode']['priority'] = 13;
    $fields['billing']['billing_state']['priority'] = 16;
	$fields['billing']['billing_country']['priority'] = 15;
	
	
    return $fields;
}
/* Fim Alex checkout altera prioridade dos campos  */

/* Alex Funcoes UPLOADS */
get_template_part('alex_2020/UPLOADS_dir');
/* Fim Alex Funcoes UPLOADS */

//****************************************************************************** PLUGIN wcfm desativando sidebar da loja ******************************************************************************/
/* wcfm desativando sidebar da loja */
//add_filter('wcfmmp_is_store_sidebar','__return_false');

//****************************************************************************** FIM PLUGIN wcfm desativando sidebar da loja ******************************************************************************/
 
/*****************  alex esconde campos da pagina do carrinho - cidade - estado */
// 1 Disable State
add_filter( 'woocommerce_shipping_calculator_enable_state', '__return_false' );
// 2 Disable City
add_filter( 'woocommerce_shipping_calculator_enable_city', '__return_false' );
// 3 Disable Postcode
add_filter( 'woocommerce_shipping_calculator_enable_postcode', '__return_true' );
/*****************  Fim alex esconde campos da pagina do carrinho - cidade - estado */


remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );

add_action( 'woocommerce_before_main_content', 'woocommerce_taxonomy_archive_description', 4 );
add_action( 'woocommerce_before_main_content', 'woocommerce_product_archive_description', 4 );

add_filter('wcfmmp_get_store_url', function($vendor_url, $user_id) {
	//modify the vendor_url 
	return $vendor_url;
}, 10,2 );

function getuserstoreurlfunction() {
  return wcfmmp_get_store_url( $vendor_id );
  return $vendor_url;
}
add_shortcode('getuserstoreurl', 'getuserstoreurlfunction');