<?php
/* Add css no tema filho*/
function alex_enqueue_styles() {
	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri());
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/alex/alex_estilo_multiloja.css?v='.time(), array('parent-theme'));
	/*alex add ?v='.time() - remove cache dessa folha de estilo	*/
	}
add_action('wp_enqueue_scripts', 'alex_enqueue_styles');

// Inicio
function wpdocs_theme_name_scriptss() {
    wp_enqueue_style( 'style-namee', get_template_directory_uri() . '/alex/dokan_alex_style.css');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scriptss' );
// Fim

// Inicio
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/alex/alex_estilo_multiloja_celular.css');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
// Fim

/* ///////////////////////////////////// Alex Add css no tema filho Celular //////////////////////////// */
if ( wp_is_mobile() ) { // Alex e celular
    /* Display and echo mobile specific stuff here */
	//echo "Sou Celular";

// Remove sidebar Categorias e produtos single
	add_action( 'wp', 'bbloomer_remove_sidebar_product_pages' );
	function bbloomer_remove_sidebar_product_pages() {
		if (is_product_category()) {
			remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
		}
		if (is_product()) {
			remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
		}
	}// end

}// end Alex e celular


/* Alex footer */
function alex_your_function() {
	get_template_part('alex/footer_nav_celular');
}
add_action( 'wp_footer', 'alex_your_function', 100 );

/* ///////////////////////////////////// Alex Add css no tema filho Celular //////////////////////////// */


/* alex add style admin */
function my_custom_fonts() {
wp_enqueue_style('admin_styles' , get_stylesheet_directory_uri().'/alex/alex_admin_section.css?v='.time());
}
add_action('admin_head', 'my_custom_fonts');


/* Alex Sequencial pedidos - order sequencial 
function get_order_number( $order_number, $order ) {
  if ( isset($order->order_custom_fields['_order_number'] ) ) {
    return '#'.$order->order_custom_fields['_order_number'][0];
  }
  return $order_number;
}
*/

// Remover dificuldade de senha do WooCommerce, fonte: https://gist.github.com/WPprodigy/91df9848c2deb469cba0
function wc_ninja_remove_password_strength() {
if ( wp_script_is('wc-password-strength-meter', 'enqueued') ) {
wp_dequeue_script('wc-password-strength-meter');
}
}
add_action('wp_print_scripts', 'wc_ninja_remove_password_strength', 100 );



/* WooCommerce * Display cart total weight on the cart page */
add_action('woocommerce_after_cart_table', 'alex_prefix_cart_extra_info', 1);
function alex_prefix_cart_extra_info() {
	global $woocommerce;
	echo '<div class="cart-extra-info">';
	echo '<p class="total-weight" style="color:#cccccc;">' . __('PESO TOTAL DO PEDIDO:', 'woocommerce');
	echo ' ' . $woocommerce->cart->cart_contents_weight . ' ' . get_option('woocommerce_weight_unit');
	echo '</p>';
	echo '</div>';
}

// alex Extra Widgets
if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'Alerta na pagina do Carrinho',
'id' => 'extra-widgets-alert-page-cart',
'description' => 'Escreva um texto que aparecera na coluna esquerda do carrinho',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'CELULAR || Perfil Left',
'id' => 'extra_widgets_celular_perfil_left',
'description' => 'Perfil barra esquerda Celular',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));
}

if (function_exists('register_sidebar')) {
register_sidebar(array(
'name' => 'CELULAR || Busca Produtos',
'id' => 'extra_widgets_celular_busca_produtos',
'description' => 'Buscar produtos no celular',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));
}

// alex include top se for homepage
add_action( 'woocommerce_before_shop_loop', 'alex_filter_cat_celular', 6 );
function alex_filter_cat_celular() {
 //get_template_part('alex/filtro-top');
 echo "<div class='alex_filter_cat_celular'>";
 dynamic_sidebar('extra-widgets-filtro-categorias-celular');
 echo "</div>";
 }
 
/* alex alerta na pagina do checkout */
add_action('woocommerce_after_order_notes', 'alex_aviso_cart_frete', 30);
function alex_aviso_cart_frete() {
	echo '<div class="cart-extra-info-left">';
	dynamic_sidebar('extra-widgets-alert-page-cart');
	echo '</div>';
}

/* alex alerta na pagina do checkout e na pagina de pagar novamente */
add_action('woocommerce_review_order_before_submit', 'alex_aviso_cart_frete_boleto', 30);
function alex_aviso_cart_frete_boleto() {
	get_template_part('alex/display_boleto');
}

/* alex adiciona produtos detalhes */
add_action( 'woocommerce_single_product_summary', 'codigo_de_barras_link', 35 );
function codigo_de_barras_link() {
	//get_template_part('alex/codigo_de_barras_link');
	//get_template_part('alex/single_page_fancy_variacao');
}

/* alex adiciona campo personalizado Laudo alex_multiloja_laudo_meta_box  e video */
function wp_alex_video_produtos() {      
  get_template_part('alex/video_produto');
   }
add_action( 'woocommerce_after_single_product_summary', 'wp_alex_video_produtos', 9 );


/* alex mudando posicao do calculo de frete */
add_action( 'woocommerce_after_cart_table', 'add_another_custom_flat_rate', 2 );
function add_another_custom_flat_rate() {
	echo '<div class="calcular_frete_cart">';
		woocommerce_shipping_calculator();
	echo '</div>';
get_template_part('alex/alex-faixa-de-cep');
}

/* alex mudando posicao do calculo de frete */
add_action( 'woocommerce_after_cart_table', 'add_another_custom_flat_rate_x', 1 );
function add_another_custom_flat_rate_x() {

get_template_part('alex/carrinho_calcular_frete');

}

// Alex data e hora do pedido *Backend
add_filter( 'post_date_column_time', 'custom_post_date_column_time', 10, 2 );
function custom_post_date_column_time( $h_time, $post ) {
    //return get_the_time( __( 'Y/m/d g:i:s A', 'woocommerce' ), $post );
	return get_the_time( __( 'Y/m/d H:i:s A', 'woocommerce' ), $post );
}

/* alex Class body */
add_filter( 'body_class','alex_body_classes' );
function alex_body_classes( $classes ) {
	if ( get_post_meta( get_the_ID(), 'alex_display_none_sidebar', true ) ) : {
		$classes[] = get_post_meta( get_the_ID(), 'alex_display_none_sidebar', true );
	} endif; 
    return $classes;
}
add_action( 'woocommerce_after_shop_loop', 'woocommerce_taxonomy_archive_description',  100);

/* Minha Conta */

/*///////////////////////////////PAINEL DO CLIENTE///////////////////////////////*/
/* alex adiciona Status style Minha conta (PAINEL DO CLIENTE)*/
add_action( 'woocommerce_after_account_orders', 'alex_woocommerce_color_order_css', 100 );
add_action( 'woocommerce_view_order', 'alex_woocommerce_color_order_css', 100 );
function alex_woocommerce_color_order_css() {
	get_template_part('alex/alex_order_style');
}
/* alex adiciona Status style Minha conta (PAINEL DO CLIENTE)*/
add_action( 'woocommerce_purchase_note_order_statuses', 'alex_order_style_view', 100 );
function alex_order_style_view() {
	//echo "Gilo";
	//get_template_part('alex/alex_order_style_view');
}
/*///////////////////////////////PAINEL DO CLIENTE///////////////////////////////*/


/* Alex Fancy Products :: add posicao single product */
function wpse116660_wc_add_2nd_title() {
  do_action( 'fpd_product_designer' ); 
  //echo'...';
   }
add_action( 'woocommerce_before_single_product_summary', 'wpse116660_wc_add_2nd_title', 1 );

// alex include my address
get_template_part('alex_functions_myaddress');

// Alex Widget Usuario meta 
get_template_part('alex/alex_usuario_widget_meta_logado');


add_filter( 'woocommerce_variation_is_active', 'grey_out_variations_when_out_of_stock', 10, 2 );
function grey_out_variations_when_out_of_stock( $grey_out, $variation ) {
    if ( ! $variation->is_in_stock() )
        return false;
    return true;
}


 /* 2018 */

/* alex new Tab
add_filter( 'woocommerce_product_tabs', 'alex_woo_new_product_tab' );
function alex_woo_new_product_tab( $tabs ) {
	// Adds the new tab
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Política da Loja', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);
	return $tabs;
}
function woo_new_product_tab_content() {
	// The new tab content
	get_template_part('alex/dokan_profile_politica_da_loja');
}
 Fim alex new Tab */
 

/* alex Dokan profile single product*/
add_action( 'woocommerce_after_single_product_summary', 'alex_dokan_profile_single_product', 10 );
function alex_dokan_profile_single_product() {
	//get_template_part('alex/dokan_profile_single_product');
}

/* alex Dokan single product produtos relacionados*/
add_action( 'woocommerce_after_single_product', 'dokan_single_product_relacionados_by_author', 10);
function dokan_single_product_relacionados_by_author() {
	//get_template_part('alex/dokan_single_product_relacionados_by_author');
}

/* Alex remover check entregar em endereco diferente */
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );
/* Fim Alex remover check entregar em endereco diferente */




/* ALTERE TODOS OS TEXTOS ::::: alex fancy products zoom texto edite 
function alex_fancy_alterar_texto() {      
 get_template_part('alex/alex_fancy_alterar_texto');
   }
add_action( 'woocommerce_before_single_product_summary', 'alex_fancy_alterar_texto', 2 );
*/

/* alex galeria extra*/
add_action( 'woocommerce_before_single_product_summary', 'alex_galeria_single_product', 20 );
function alex_galeria_single_product() {
	//get_template_part('alex/alex_galeria_produto_extra');
	
}

/* LATERAL COM VARIAS OPÇÃOES ::: alex galeria extra remove primeira imagem */
function alex_fancy_imagem_lightbox_zoom() {      
 //get_template_part('alex/alex_fancy_imagem_lightbox_zoom');
   }
add_action( 'woocommerce_single_product_summary', 'alex_fancy_imagem_lightbox_zoom', 29 );



/* ESCOLHA UM TEMA ::::: alex fancy products Categorias de temas (produtos) */
function alex_fancy_categoria_products() {      
 get_template_part('alex/alex_fancy_categoria_products');
   }
add_action( 'woocommerce_after_single_product_summary', 'alex_fancy_categoria_products', 60 );





/*********************  2020  *********************/

/*** Alex 2020 Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);
// Disable oEmbed Discovery Links
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
***/


/* Filtro Atributos listage de produtos */
add_action('woocommerce_before_shop_loop', 'Filtro_Atributo_topo', 39);
function Filtro_Atributo_topo() {
	get_template_part('alex/filtro_atriburos_categoria');
}
/* Fim Filtro Atributos listage de produtos */

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

// Alex Calculo Proporcao
add_action( 'woocommerce_single_product_summary', 'alex_calculo_proporcao', 30);
function alex_calculo_proporcao() {
	get_template_part('alex/2020_calculo_proporcao');
}

/*****  Alex cart remove link da url item */
add_action ('woocommerce_after_shop_loop_item_title','alex_proporcao_price_sugerido_produto_list');
function alex_proporcao_price_sugerido_produto_list() { 
    //echo "maria";
	get_template_part('alex/alex_proporcao_price_sugerido_produto_list');
}
/***** Fim Alex cart remove link da url item */


/* Alex Produto variavel  menor Preco  */
add_filter( 'woocommerce_variable_price_html', 'bbloomer_variation_price_format_min', 9999, 2 );
  
function bbloomer_variation_price_format_min( $price, $product ) {
   $prices = $product->get_variation_prices( true );
   $min_price = current( $prices['price'] );
   $price = sprintf( __( '<span class="a-partir-de">Menor Preço: </span> %1$s', 'woocommerce' ), wc_price( $min_price ) );
   return $price;
}
/* Fim Alex Produto variavel  menor Preco  */


/* Alex checkout altera prioridade dos campos  */
add_filter("woocommerce_checkout_fields", "custom_override_checkout_fields", 1);
function custom_override_checkout_fields($fields) {
    $fields['billing']['billing_first_name']['priority'] = 1;
    $fields['billing']['billing_last_name']['priority'] = 2;
    
    return $fields;
}
/* Fim Alex checkout altera prioridade dos campos  */


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


