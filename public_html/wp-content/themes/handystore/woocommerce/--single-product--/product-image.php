<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">


	<figure class="woocommerce-product-gallery__wrapper">
		<?php
		if ( $product->get_image_id() ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}
		// alex cria condicao se for fancy
		global $post;
		 if( is_fancy_product($post->ID) ) {
		// echo "Maria";
		get_template_part('alex_2020/alex_fancy_personaliza');
		} else {
		// echo "João";
			
		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
		
		do_action( 'woocommerce_product_thumbnails' );
		};
		// Fim alex cria condicao se for fancy
		
		?>
	</figure>
	
	

	<?php if( is_fancy_product($post->ID) ) { ?>
	<style>
		.fancy_magico {
			z-index: 200;
			margin: 10px auto 10px 1%;
			position: absolute;
			width: 100%;
		}
		a.fancy_magico_atalhos {
			padding: 0px;
			background: #eee;
			margin: 1px 1px;
			border-radius: 3px;
			width: 32% !important;
			display: inline-block;
			font-size: 13px;
			float: none;
			white-space: nowrap;
			overflow: hidden;
			color: #6d6d6d;
			text-transform: uppercase;
		}
		a.fancy_magico_atalhos .fa {
			font-size: 140%;
			padding: 7px;
			background: #74c1ca;
			margin-right: 3px;
			color: #ffffff;
		}
	</style>
		<div class="fancy_magico">
			<a href="javascript:void(0)" class="fancy_magico_atalhos" onclick="document.getElementById('fpd-start-customizing-button').click();"> <i class="fa fa-pencil-square-o" aria-hidden="true"  style="background: #673AB7;"></i> Personalizar Tudo </a>
			<a href="javascript:void(0)" class="fancy_magico_atalhos" onclick="document.getElementById('alex_modal_fancy_alterar_textos').style.display='block'"> <i class="fa fa-font" aria-hidden="true"></i> Textos </a>
			<a href="javascript:void(0)" class="fancy_magico_atalhos" onclick="document.getElementById('fpd-start-customizing-button').click(); document.getElementsByClassName('tooltipstered')[2].click();"> <i class="fa fa-font" aria-hidden="true"></i> Galeria </a>
			<a href="javascript:void(0)" class="fancy_magico_atalhos" onclick="document.getElementsByClassName('fpd-icon-file-upload')[1].click(); setTimeout(function(){ document.getElementById('fpd-start-customizing-button').click(); }, 2000);"> <i class="fa fa-camera" aria-hidden="true"></i> <b> Logotipo </b>   </a>
			<a href="javascript:void(0)" class="fancy_magico_atalhos" onclick="document.getElementById('fpd-start-customizing-button').click(); document.getElementsByClassName('fpd-icon-save')[0].click(); document.getElementsByClassName('fpd-icon-file-upload')[0].click();"> <i class="fa fa-save" aria-hidden="true"></i>  <b> Salvar </b> Tema </a>
			<a href="javascript:void(0)" class="fancy_magico_atalhos" onclick="document.getElementById('fpd-start-customizing-button').click(); document.getElementsByClassName('fpd-icon-file-upload')[0].click();"> <i class="fa fa-tasks" aria-hidden="true"></i>  <b>Salvos</b></a>
			<?php if( get_field('mostrar_outros_temas')){ ?>
				<a href="javascript:void(0)" class="fancy_magico_atalhos" onclick="document.getElementById('alex_modal_fancy_temas').style.display='block'"> <i class="fa fa-th-large" aria-hidden="true"></i> Temas </a>
			<?php  } ?>
		</div>
		<?php }; ?>
	
	
<?php
	$usar_mockupX = get_field('usar_mockup');
	if( $usar_mockupX && in_array('sim', $usar_mockupX) ) {
?>
	<div id="mockup_box" class="mockup_box">
		<canvas id="canvas1_variavel"></canvas>

		<input type="number" id="Posicao_Mockup" min="1" max="8" value="<?php the_field('scale_factor_normalize'); ?>" step="1">
		<button id="Posicao_Mockup_Down" onclick="Posicao_Mockup_Down()"> << </button>
		<a class="bt_download" download="1_<?php the_title(); ?>.jpg" href="" onclick="download_mockup(this);"><i class="fa fa-download" aria-hidden="true"></i> Baixar Mockup </a>
		<button id="Posicao_Mockup_Up" onclick="Posicao_Mockup_Up()"> >> </button>

		<script>
			function Posicao_Mockup_Down() {
			  document.getElementById("Posicao_Mockup").stepDown();
			  document.getElementById("Posicao_Mockup_Down").addEventListener("click", canvas1_variavel);
			}
			function Posicao_Mockup_Up() {
			  document.getElementById("Posicao_Mockup").stepUp();
			  document.getElementById("Posicao_Mockup_Up").addEventListener("click", canvas1_variavel);
			}
		</script>
		
	</div>	
	
<?php } ?>	

<?php
	$usar_mockupX_2 = get_field('usar_mockup_2');
	if( $usar_mockupX_2 && in_array('sim', $usar_mockupX_2) ) {
?>
	<div id="mockup_box_2" class="mockup_box">
		<canvas id="canvas1_variavel_2"></canvas>
		<a class="bt_download" download="2_<?php the_title(); ?>.jpg" href="" onclick="download_mockup_2(this);"><i class="fa fa-download" aria-hidden="true"></i> Baixar Mockup 2 </a>
	</div>
<?php } ?>	

</div>

<?php 
		//get_template_part('alex_2020/NBDesigner_mocap');
		//echo "NBDesigner_mocap";
	?>
	