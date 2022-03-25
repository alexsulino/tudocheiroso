<?php
	$usar_mockup = get_field('usar_mockup');
	$usar_mockup_2 = get_field('usar_mockup_2');
	$esconder_galeria = get_field('esconder_galeria');
	$imagem_mockup = get_field('imagem_mockup');
	$imagem_mockup_2 = get_field('imagem_mockup_2');
	
	if( $usar_mockup && in_array('sim', $usar_mockup) ) {
?>
 
<style> 
	div#alex_modal_minha_conta_celular {
		padding-top: 10px;
	}
	.canvas_mockup {
		float: left;
		width: 100%;
		margin: 5px;
		text-align: center;
	}
	h1.title_mockup {
		text-align: center;
		padding: 10px;
		margin: 10px;
		color: #fff;
	}
	.mockup_box, .mockup_box_2 {
    text-align: center;
	display:none;
	}
	
	.canvas_NBD_image {
		background: #f7f7f7;
		float: left;
		width: 100%;
		text-align: center;
		padding: 20px;
		display:none;
	}
	.canvas_NBD_image img {
		-webkit-box-shadow: 0 -1px 5px 0 #dddddd;
		box-shadow: 0 -1px 5px 0 #dddddd;
	}
	canvas#canvas1_variavel {
		width: 100%;
		height: auto;
		border-radius: 5px;
	}
	#gerar_mockup {opacity:0;}
		.woocommerce-product-gallery__wrapper {}
	
	input#Posicao_Mockup {
		visibility: hidden;
		display: none;
	}
	
	.bt_download {
    padding: 6px;
    margin: 1px auto;
    color: #4a4a4a !important;
    background: #fff;
    border-radius: 5px;
    width: 67% !important;
    display: inline-block;
	}
	
	button#Posicao_Mockup_Down {float: left;}
	button#Posicao_Mockup_Up { float: right;}
	button#Posicao_Mockup_Up, button#Posicao_Mockup_Down { background: #fff; color: #000; font-weight: 400; height: 35px;}
	
</style>




<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/alex_2020/css/w3.css">
<!-- alex tutorial definitvo para todos modal https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal -->

<div class="canvas_NBD_image_">
	<button id="gerar_mockup" class="gerar_mockup"  onload="" onclick="document.getElementById('alex_modal_minha_conta_celular').style.display='none'; NBDESIGNERPRODUCT.show_lightbox( this ); myFunctionx(); canvas1_variavel(); fechar_lightbox();">Gerar Mockup</button>
</div>


<div class="w3-container container_sulino">
  <!-- Moda Minha conta  -->
  <div id="alex_modal_minha_conta_celular" class="w3-modal">
  
    <div class="w3-modal-content w3-card-4 w3-animate-top" style="width: 90%; max-width: 1200px; background: #0000001f;">
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_minha_conta_celular').style.display='none'"  id="fechar_modal" class="w3-button w3-display-topright"> <i class="fa fa-times" aria-hidden="true"></i> </span>
        
			<script data-require="jquery@*" data-semver="2.1.4" src="<?php echo get_template_directory_uri(); ?>/alex_2020/js/jquery-2.1.4.min.js"></script>
			 
			 <h1 class="title_mockup"> MOCKUP </h1>
			 
			 <div class="canvas_mockup">
				<!--<canvas id="canvas1_variavel"></canvas>
				<a class="bt_download" download="1_<?php //the_title(); ?>.jpg" href="" onclick="download_mockup(this);"><i class="fa fa-download" aria-hidden="true"></i> Baixar Mockup </a>-->
			</div>

			<div class="canvas_NBD_image">
				<img id="demo_imagem_full">
				
			</div>
			  
      </div>
    </div>
  </div>
</div>

<img id="imagem_personalizada" />

<?php if( get_field('imagem_mockup')){ ?>
	<img src="<?php the_field('imagem_mockup'); ?>" id="imagem_mockup" style="display:none;"/>
<?php } ?>	

<?php if( get_field('imagem_mockup_2')){ ?>
	<img src="<?php the_field('imagem_mockup_2'); ?>" id="imagem_mockup_2" style="display:none;"/>
<?php } ?>	



<script>
	<?php if( $esconder_galeria && in_array('sim', $esconder_galeria) ) { ?>	
		document.getElementById("startDesign").addEventListener("click", esconde_galeria); // ao clicar no id, libera funcao
	<?php } ?>	
		function esconde_galeria() {
			// esconde div imagem vitrine do produtowoocommerce-product-gallery__wrapper
			document.getElementsByClassName("woocommerce-product-gallery__wrapper")[0].style.display = "none";
			// esconde div imagem vitrine do produto
			document.getElementsByClassName("flex-control-thumbs")[0].style.display = "none";
		};
	
	//colocando funcao no select de cores (atributos)
	//document.getElementById("cores").addEventListener("click", canvas1_variavel);
	document.getElementById("startDesign").addEventListener("click", criar_onclick_no_select); // ao clicar no id, libera funcao
		function criar_onclick_no_select() {
			var add_ao_selectx = document.getElementById("cores");
			var attc_selectx = document.createAttribute("onclick");
			attc_selectx.value = "canvas1_variavel();";
			add_ao_selectx.setAttributeNode(attc_selectx);
		};
	
	
</script>


<script>
	// Alex Download Mockup 1
	var canvas_um = document.getElementById("canvas1_variavel");
	download_mockup = function(el_download) {
	  var image_canvas = canvas_um.toDataURL("image/jpg");
	  el_download.href = image_canvas;
	};
	  
	// Alex Download Mockup _2  
	var canvas_um_2 = document.getElementById("canvas1_variavel_2");
	download_mockup_2 = function(el_download_2) {
	  var image_canvas_2 = canvas_um_2.toDataURL("image/jpg");
	  el_download_2.href = image_canvas_2;	
	};
</script> 

<script>
	///////////////////////// CANVAS 
	function canvas1_variavel() {
	//alert('button clicked');
	
	 var Posicao_Mockup = document.getElementById("Posicao_Mockup").value;
	
	
	  var canvas = document.getElementById("canvas1_variavel");
	  var ctx = canvas.getContext("2d");

	  var productImg = new Image();
	  productImg.onload = function() {
		var iw = productImg.width;
		var ih = productImg.height;
		//console.log("height");

		canvas.width = iw;
		canvas.height = ih;

		ctx.drawImage(productImg, 0, 0, productImg.width, productImg.height, 0, 0, iw, ih);
		//ctx.globalAlpha = 0.9; // opacidade
		ctx.globalAlpha = <?php the_field('mockup_transparencia'); ?>; // opacidade
		
		loadUpperIMage()
	  };
	  
		<?php if( get_field('imagem_mockup')){ ?>
			var pega_imagem_principal =  document.getElementById("imagem_mockup").src;
		<?php } else { ?>
			var pega_imagem_principal = document.getElementsByClassName("wp-post-image")[0].src;
		<?php } ?>		
		
		productImg.src = pega_imagem_principal;

	  function loadUpperIMage() {
		var img = new Image();
		
		var xxc_imagem_personalizada = document.getElementsByClassName("pswp__img")[1].src;
		document.getElementById("demo_imagem_full").src = xxc_imagem_personalizada;
		img.src = xxc_imagem_personalizada;

		img.onload = function() {

		  var iw = img.width;
		  var ih = img.height;

		  var xOffset = <?php the_field('left_padding'); ?>, //left padding
			yOffset = <?php the_field('top_padding'); ?>; //top padding

		  //alert(ih)
		  var a = <?php the_field('canvas_largura'); ?>; //image width
		  var b = <?php the_field('round_ness'); ?>; //round ness

		  var scaleFactor = iw / (<?php the_field('scale_factor'); ?> * a);

		  // draw vertical slices
		  for (var X = 0; X < iw; X += 1) {
			var y = b / a * Math.sqrt(a * a - (X - a) * (X - a)); // ellipsis equation
			ctx.drawImage(img, X * scaleFactor, 0, iw / <?php the_field('scale_factor_dois'); ?>, ih, X + xOffset, y + yOffset, Posicao_Mockup<?php //the_field('scale_factor_normalize'); ?>, <?php the_field('canvas_altura'); ?>);
		  }
		};
		
	  };
	  
	  
<?php // if( get_field('imagem_mockup_2')){ ?>	
<?php if( $usar_mockup_2 && in_array('sim', $usar_mockup_2) ) { ?>	
	  var canvas_2 = document.getElementById("canvas1_variavel_2");
	  var ctx_2 = canvas_2.getContext("2d");

	  var productImg_2 = new Image();
	  productImg_2.onload = function() {
		var iw_2 = productImg_2.width;
		var ih_2 = productImg_2.height;
		//console.log("height");

		canvas_2.width = iw_2;
		canvas_2.height = ih_2;

		ctx_2.drawImage(productImg_2, 0, 0, productImg_2.width, productImg_2.height, 0, 0, iw_2, ih_2);
		//ctx_2.globalAlpha = 0.9; // opacidade
		ctx_2.globalAlpha = <?php the_field('mockup_transparencia_2'); ?>; // opacidade
		
		loadUpperIMage_2()
	  };
	  
		<?php if( get_field('imagem_mockup_2')){ ?>
			var pega_imagem_principal_2 =  document.getElementById("imagem_mockup_2").src;
		<?php } else { ?>
			var pega_imagem_principal_2 = document.getElementsByClassName("wp-post-image")[0].src;
		<?php } ?>		
		productImg_2.src = pega_imagem_principal_2;

	  function loadUpperIMage_2() {
		var img_2 = new Image();
		
		var xxc_imagem_personalizada_2 = document.getElementsByClassName("pswp__img")[1].src;
		document.getElementById("demo_imagem_full").src = xxc_imagem_personalizada_2;
		img_2.src = xxc_imagem_personalizada_2;

		img_2.onload = function() {

		  var iw_2 = img_2.width;
		  var ih_2 = img_2.height;

		  var xOffset = <?php the_field('left_padding_2'); ?>, //left padding
			yOffset = <?php the_field('top_padding_2'); ?>; //top padding

		  //alert(ih_2)
		  var a_2 = <?php the_field('canvas_largura_2'); ?>; //image width
		  var b_2 = <?php the_field('round_ness_2'); ?>; //round ness

		  var scaleFactor = iw_2 / (<?php the_field('scale_factor_2'); ?> * a_2);

		  // draw vertical slices
		  for (var X_2 = 0; X_2 < iw_2; X_2 += 1) {
			var y_2 = b_2 / a_2 * Math.sqrt(a_2 * a_2 - (X_2 - a_2) * (X_2 - a_2)); // ellipsis equation
			ctx_2.drawImage(img_2, X_2 * scaleFactor, 0, iw_2 / <?php the_field('scale_factor_dois_2'); ?>, ih_2, X_2 + xOffset, y_2 + yOffset, <?php the_field('scale_factor_normalize_2'); ?>, <?php the_field('canvas_altura_2'); ?>);
		  }
		};
	  };
<?php } ?>		  

		document.getElementById("fechar_modal").click(); // funcao fechar_modal
		document.getElementById("mockup_box").style.display = "block"; // mostrar div id mockup
		document.getElementById("mockup_box_2").style.display = "block"; // mostrar div id mockup		
		document.getElementById("gerar_mockup").click(); // funcao auto click no id gerar_mockup
		
		<?php if( $esconder_galeria && in_array('sim', $esconder_galeria) ) { ?>
			// esconde div imagem vitrine do produtowoocommerce-product-gallery__wrapper
			document.getElementsByClassName("woocommerce-product-gallery__wrapper")[0].style.display = "none";
			// esconde div imagem vitrine do produto
			document.getElementsByClassName("flex-control-thumbs")[0].style.display = "none";
		<?php } ?>
		
		//var clonando_id = document.getElementById('canvas1_variavel');
		//document.getElementById('canvas1_variavel_no_lightbox').innerHTML = clonando_id.innerHTML;
	};
	
</script>



<!--
<button onclick="myFunctionaaaa()">Try it</button>

<img id="demov" src=""/>

<script>
function myFunctionaaaa() {

var canvasb = document.getElementById("canvas1_variavel");
var imageb = canvasb.toDataURL("image/png");

document.getElementById("demov").src = imageb;
document.getElementsByClassName("wp-post-image")[0].src = imageb;
document.getElementsByClassName("wp-post-image")[0].srcset = imageb; // replace imagem destaque 01

document.getElementsByClassName("flex-active")[0].src = imageb; // replace imagem thumbnail  01

//var gerar_class_na_imagem_zoom =  document.getElementsByClassName("flex-active-slide")[0].childNodes;

 var gerar_class_na_imagem_zoom =  document.getElementsByClassName("wp-post-image")[0]; 
  var att_gerar_class_na_imagem_zoom_href = document.createAttribute("data-large_image");// replace imagem destaque 01 zoom
  att_gerar_class_na_imagem_zoom_href.value = imageb;
  document.getElementsByClassName("wp-post-image")[0].setAttributeNode(att_gerar_class_na_imagem_zoom_href);

}



var imagem_personalizada =  document.getElementsByClassName("img-con")[0].childNodes;
	var att_gerar_class_na_imagem_zoom_href = document.createAttribute("id");
	  att_gerar_class_na_imagem_zoom_href.value = "maria";
	  gerar_class_na_imagem_zoom[0].setAttributeNode(att_gerar_class_na_imagem_zoom_href);

</script>
-->

<script>
	function myFunctionx() {
	  var mostrar_imagem = document.getElementsByClassName("pswp__img")[0].src;
	  document.getElementById("demo_imagem_full").src = mostrar_imagem;
	}

	// alex fechar lightbox
	function fechar_lightbox() {
	  document.getElementsByClassName("pswp__button--close")[0].click();
	}
</script>
 


<?php } else { ?>


<?php } ?>	