<?php if ( wcfm_is_vendor() ) { ?>
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

<?php //echo do_shortcode('[wcfm_store_info data="store_name"]');?>
							
<style>
.qrcode_sulino_store_bt_atualizar_informacoes-div .tc-cell.tm-epo-element-label.tm-tooltip {
	padding: 6px;
	text-align: center;
	background: #673AB7;
	width: 50%;
	float: left;
	display: block;
	clear: both;
	flex: none;
	margin: auto;
	border-radius: 5px;
	cursor: pointer;
	color: #fff;
}
.qrcode_sulino_store_bt_atualizar_informacoes-div .tc-cell.tm-epo-element-label.tm-tooltip:hover {
	background: #412375;
}

</style>


<div id="qrcode_sulino_store_url_URL" style="display:none;"><?php echo $store_url; ?></div>


<!--<button onclick="myFunction_inserir_dados_QRCODE()">Inserir dados</button>-->
<script>
function myFunction_inserir_dados_QRCODE() {  
  var qrcode_sulino_store_url = document.getElementsByClassName("Class_qrcode_sulino_store_url");
  var qrcode_sulino_store_url_URL = document.getElementById("qrcode_sulino_store_url_URL").innerHTML; 
  qrcode_sulino_store_url[0].value = qrcode_sulino_store_url_URL;
 
}

setTimeout(function(){
	document.getElementsByClassName("qrcode_sulino_store_bt_atualizar_informacoes-div")[0].setAttribute("onclick", "myFunction_inserir_dados_QRCODE()");	
	document.getElementsByClassName("baixar_imagem_da_div")[0].setAttribute("onclick", "baixar_imagem_da_div(this)");
}, 2000);
</script>


<?php  } else { ?>
<style>
.qrcode_sulino_store_bt_atualizar_informacoes-div {
    display: none !important;
}
</style>
<?php  } ?>





<style>
	div#baixar_imagem_da_div {
		text-align: center;
	}
	div#baixar_imagem_da_div img {
		max-height: 60px; width:auto;
		float:left;
		margin:10px;
	}
	div#baixar_imagem_da_div img:hover {
	 -ms-transform: scale(2.5); /* IE 9 */
  -webkit-transform: scale(2.5); /* Safari 3-8 */
  transform: scale(2.5); 
  z-index:1000;
  position:relative;

}
	a.baixar_imagem_da_div  {
		float:right;
		margin:10px;
		cursor:pointer;
	}
</style>



<script type="text/javascript">
setTimeout(function(){
	document.getElementsByClassName("baixar_imagem_da_div")[0].setAttribute("onclick", "baixar_imagem_da_div(this)");
}, 2000);

function baixar_imagem_da_div(linkElement) {
    var myDiv = document.getElementById('baixar_imagem_da_div');
    var myImage = myDiv.children[0];
    linkElement.href = myImage.src;
}
</script>

<!-- <div id="baixar_imagem_da_div"><img id="qrious_alex" alt='MyImage'> </div>
<a href="javascript:void(0)" class="baixar_imagem_da_div" onclick="baixar_imagem_da_div(this)" download> <i class="fa fa-download" aria-hidden="true"></i> Baixar QRCode </a>
-->



<!--
<img id="qrious_alex" alt="MyImage"  width="250" src="https://wellup.com.br/wp-content/uploads/2020/11/sampaprint.png">
<img id="qr_code_tamanho_altura"  width="250" src="">
-->



<script>
function myFunction() {
  var alex_replace_qrcode_image = document.getElementById("qrious_alex");
  document.getElementById("qr_code_tamanho_altura").src = alex_replace_qrcode_image.src;
}
</script>



<main>
  <section>
    <img id="qrious">
   

    <form autocomplete="off"  style="display:none;">
      <label>
        value
        <input type="text" name="value" id="valuendo" value="QRious" spellcheck="false">
      </label>

      <label>
        size
        <input type="number" name="size" placeholder="100" min="100" max="1000" value="250">
      </label>

      <label>
        padding
        <input type="number" name="padding" placeholder="Auto" min="0">
      </label>

      <label>
        level
        <select name="level">
          <option value="L">L - 7% damage</option>
          <option value="M">M - 15% damage</option>
          <option value="Q">Q - 25% damage</option>
          <option value="H">H - 30% damage</option>
        </select>
      </label>

      <label>
        background color
        <input type="color" name="background" value="#ffffff">
      </label>

      <label>
        background alpha
        <input type="number" name="backgroundAlpha" placeholder="1" min="0" max="1" step="0.1" value="1">
      </label>

      <label>
        foreground color
        <input type="color" name="foreground" value="#000000">
      </label>

      <label>
        foreground alpha
        <input type="number" name="foregroundAlpha" placeholder="1" min="0" max="1" step="0.1" value="1">
      </label>
    </form>
  </section>
</main>


<script src="<?php echo get_template_directory_uri(); ?>/alex_2020/QRcode_qrious-master/dist/qrious.js"></script>
<script>
  (function() {
      
	var $background = document.querySelector('main form [name="background"]');
    var $backgroundAlpha = document.querySelector('main form [name="backgroundAlpha"]');
    var $foreground = document.querySelector('main form [name="foreground"]');
    var $foregroundAlpha = document.querySelector('main form [name="foregroundAlpha"]');
    var $level = document.querySelector('main form [name="level"]');
    var $section = document.querySelector('main section');
    var $padding = document.querySelector('main form [name="padding"]');
    var $size = document.querySelector('main form [name="size"]');
	//var $value = document.querySelector('main form [name="value"]');
	var $tempero = document.querySelector('main form [id="tempero"]');
	
    var $value = document.getElementsByClassName("Class_qrcode_sulino_store_url")[0];

    var qr = window.qr = new QRious({
      element: document.getElementById('qrious_alex'),
      size: 250,
      value: 'Gerar Link'
    });

    $background.addEventListener('change', function() {
      qr.background = $background.value || null;
    });

    $backgroundAlpha.addEventListener('change', function() {
      qr.backgroundAlpha = $backgroundAlpha.value || null;
    });

    $foreground.addEventListener('change', function() {
      qr.foreground = $foreground.value || null;
    });

    $foregroundAlpha.addEventListener('change', function() {
      qr.foregroundAlpha = $foregroundAlpha.value || null;
    });

    $level.addEventListener('change', function() {
      qr.level = $level.value;
    });

    $padding.addEventListener('change', function() {
      if ($padding.validity.valid) {
        qr.padding = $padding.value !== '' ? $padding.value : null;
      }
    });

    $size.addEventListener('change', function() {
      if (!$size.validity.valid) {
        return;
      }

      qr.size = $size.value || null;

      $section.style.minWidth = qr.size + 'px';
    });

    $value.value = '';
    ///$value.value = 'Gerar Link';
    $value.addEventListener('input', function() {
      qr.value = $value.value;
    });
	//alex interage cria funcao de clique no input
	document.getElementsByClassName("Class_qrcode_sulino_store_url")[0].addEventListener("keyup", function() {
	  var alex_replace_qrcode_image = document.getElementById("qrious_alex");
	  document.getElementById("qr_code_tamanho_altura").src = alex_replace_qrcode_image.src;
	  qr.value = $value.value;
	});

  })();
   
</script>

