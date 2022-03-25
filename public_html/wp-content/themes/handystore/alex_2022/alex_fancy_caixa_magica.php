<?php 
//global $post;
if( is_fancy_product($post->ID) ) { ?>


	<?php 
	//wp_enqueue_style( 'alex_fancy_caixa_magica', get_template_directory_uri() . '/alex/alex_fancy_caixa_magica.css',false,'1.1','all');
	wp_enqueue_style('alex_fancy_caixa_magica', get_template_directory_uri() .'/alex/alex_fancy_caixa_magica.css?v='.time(), array('parent-theme'));
	?>



<div class="header_alex_prograsso">
  <div class="progress-container">
    <div class="progress-bar" id="myBar_alex_prograsso"></div>
  </div>  
</div>

<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};
function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar_alex_prograsso").style.width = scrolled + "%";
}
</script>
<!-- Fim alex barra progresso -->







<!--<h2>GALERIA DE FOTOS</h2> -->

	
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );?>
		
		  <div class="woocommerce-product-gallery__image">
		  <img src="<?php  echo $image[0]; ?>" class="wp-post-image">
		  </div>
		
	
		





<div class="alex_fancy_caixa_magica left">
	<div class="tabs column small-spacing" data-tabgroup="tab-group">
	
	<a class="caixa_magica_container" style="background-color:#9535dd; color:#ffffff;" onclick="document.getElementById('fpd-start-customizing-button').click();">
			<i class="caixa_magica_icone fa fa-pencil-square-o" aria-hidden="true"></i>	
			<div class="caixa_magica_Texto"> <b> Personalizar </b> avançado </div>
		</a>
	
		<a class="caixa_magica_container" id="myBtn_abrir_texto" onclick="document.getElementById('fpd-start-customizing-button').click(); setTimeout(myFunction_fechar_modal_fancy, 10);">
			<i class="caixa_magica_icone fa fa-font" aria-hidden="true"></i>		
			<div class="caixa_magica_Texto"> <b> Altere </b>  todos os textos </div>
		</a>
		
		<a class="caixa_magica_container"  onclick="document.getElementsByClassName('fpd-icon-file-upload')[0].click(); setTimeout(function(){ document.getElementById('fpd-start-customizing-button').click(); }, 2000);">
			<i class="caixa_magica_icone fa fa-camera" aria-hidden="true"></i>		
			<div class="caixa_magica_Texto"> <b> Adicionar </b> Seu Logotipo </div>
		</a>
		
		<a class="caixa_magica_container"  onclick="document.getElementsByClassName('fpd-icon-save')[0].click();">
			<i class="caixa_magica_icone fa fa-save" aria-hidden="true"></i>	
			<div class="caixa_magica_Texto"> <b> Salvar </b>  tema </div>
		</a>
		
		<a class="caixa_magica_container"  onclick="document.getElementsByClassName('fpd-icon-file-upload')[2].click(); document.getElementById('fpd-start-customizing-button').click();">
			<i class="caixa_magica_icone fa fa-tasks" aria-hidden="true"></i>		
			<div class="caixa_magica_Texto"> <b> Carregar </b>  tema </div>
		</a>
		
	</div>
</div>



<div class="alex_fancy_caixa_magica right">
	<div class="tabs column small-spacing" data-tabgroup="tab-group">
		
		<?php if( get_field('mostrar_outros_temas') ): ?> 
		<a class="caixa_magica_container" href="#alex_fancy_categoria_products">
			<i class="caixa_magica_icone fa fa-th-large" aria-hidden="true"></i>		
			<div class="caixa_magica_Texto"> <b> Escolha </b>  um tema </div>
		</a>
		<?php endif; ?>
		
		<a class="caixa_magica_container zoom" onclick="myFunction_zoom();" id="alex_zoom_bt">
			<i class="caixa_magica_icone fa fa-search-plus" aria-hidden="true"></i>	
			<div class="caixa_magica_Texto"> Zoom </div>
		</a>
		<!--
		<a class="caixa_magica_container" href="#rolar_compartilhar">
			<i class="caixa_magica_icone fa fa-share-square" aria-hidden="true"></i>		
			<div class="caixa_magica_Texto"> Compartilhar Imagem </div>
		</a>
		
		<a class="caixa_magica_container download" id="alex_zoom_download" onclick="myFunction_alex_zoom_download()">
			<i class="caixa_magica_icone fa fa-download" aria-hidden="true"></i>	
			<div class="caixa_magica_Texto"> <b> Fazer </b>  download </div>
		</a>
		-->
		
		<?php echo do_shortcode('[fpd_share]'); ?>
	</div>
</div>

<style>
	div.alex_zoom_imagem {width: 55% !important;  z-index:1000; position:absolute; margin:auto !important; -webkit-box-shadow: 0 0 10px 2000px #000000; box-shadow: 0 0 10px 2000px #000000;}
	a.alex_zoom_bt {z-index: 1000;  position: relative;}
	
</style>

<script>
function myFunction_zoom() {
   var element = document.getElementById("alex_galeria_full");
   element.classList.toggle("alex_zoom_imagem");
   
   var elementtx = document.getElementById("alex_zoom_bt");
   elementtx.classList.toggle("alex_zoom_bt");
   
   var elementt = document.getElementById("alex_zoom_download");
   elementt.classList.toggle("alex_zoom_bt");
}
</script>




<!-- alex Rola para o topo -->
<script>
	setTimeout(function(){
	  document.getElementsByClassName("fpd-done")[0].setAttribute("onclick", "document.getElementById('rolar_topo').click()"); 
	}, 3000);
	
	setTimeout(function(){
	  document.getElementsByClassName("social-links")[0].setAttribute("id", "rolar_compartilhar"); 
	}, 3000);
	
</script>
<a id="rolar_topo" style="display:none;" href="#mostrar_hearder_loja">rolar topo</a>
<!-- Fim alex Rola para o topo -->





<!-- Fim alex IMAGEM CANVAS -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/handystore/alex/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/handystore/alex/js/html2canvas.js"></script>
	
	
	
    <div id="previewImage" style="display:none;"> </div>

    <script>

        function myFunction_alex_zoom_download() {
            var element = $("#alex_galeria_full"); // global variable
            var getCanvas; // global variable

            html2canvas(element, {
                onrendered: function (canvas) {
                    $("#previewImage").append(canvas);
                    getCanvas = canvas;
                }
            });

            $("#alex_zoom_download").on('click', function () {
                var imgageData = getCanvas.toDataURL("image/png");
                // Now browser starts downloading it instead of just showing it
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
				$("#alex_zoom_download").attr("download", "imagem_site.png").attr("href", newData);
				
            });
        };
		
    </script>
<!-- Fim alex IMAGEM CANVAS -->	
	


<?php //echo get_the_title(); ?>




<script>
// alex alto click no botao fechar personalizador do fancy //
setTimeout(function(){
  $(".fpd-done").filter(function() {
    return $(this).click();
});
},2000);

// so para garantir //
setTimeout(function(){
  $(".fpd-done").filter(function() {
    return $(this).click();
});
},4000);	   
</script>

<script>
function myFunction_fechar_modal_fancy() {
  $(".fpd-done").filter(function() {
    return $(this).click();
});
}
function myFunction_fechar_modal() {
  $(".close_alex_sulino").filter(function() {
    return $(this).click();
});
}
</script>


<style>
/* The Modal (background) */
.modal_alex_sulino {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100000; /* Sit on top */
  padding-top: 25px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
  
  
}

/* Modal Content */
.modal-content_alex_sulino {
    
    margin: auto;
    padding: 10px 25px 25px 25px;
    border: 0px solid #888;
    width: 95%;
    max-width: 1100px;
	border-radius: 5px;
	
	-webkit-transition: all 0.9s ease-in-out;
	-moz-transition: all 0.9s ease-in-out;
	-o-transition: all 0.9s ease-in-out;
	transition: all 0.9s ease-in-out;
}

/* The Close Button */
.close_alex_sulino {
  color: #fff;
    float: right;
    font-size: 28px;
    font-weight: bold;
    margin-top: -20px;
    margin-bottom: 15px;
    background: #000;
    padding: 10px 13px;
    position: fixed;
    right: 10%;
    border-radius: 50%;
	

}

.close_alex_sulino:hover,
.close_alex_sulino:focus {
  color: #dd3559;
  background: #f5f5f5;
  text-decoration: none;
  cursor: pointer;
}
.aplicar_textos {
    margin: 18px auto auto auto !important;
    padding: 10px 50px;
    font-size: 17px;
    border-radius: 3px;
    display: inline-block;
    background: #2ea3f2 !important;
    color: #fff;
    position: fixed;
    bottom: 0;
    left: 46%;
    text-transform: uppercase;
}
.aplicar_cancelar {
    margin: 18px auto auto !important;
    padding: 10px 30px;
    font-size: 16px;
    border-radius: 3px;
    display: block;
	 background: #fff !important;
    color: #999;
}

</style>


<!-- The Modal -->
<div id="myModal_abrir_texto" class="modal_alex_sulino">

  <!-- Modal content -->
  <div class="modal-content_alex_sulino">
    <span class="close_alex_sulino" id="close_alex_sulino">&times;</span>
	<?php echo do_shortcode('[fpd_module type="text-layers"]'); ?>
	
	<button class="aplicar_textos"   onclick="document.getElementById('fpd-start-customizing-button').click(); setTimeout(myFunction_fechar_modal_fancy, 10);  setTimeout(myFunction_fechar_modal, 20);" onmousedown="document.getElementById('close_alex_sulino').click(); setTimeout(myFunction_fechar_modal_fancy, 10);  setTimeout(myFunction_fechar_modal, 20);" > Aplicar </button>
  </div>
</div>

<script>
// Get the modal
var modal_alex_sulino = document.getElementById('myModal_abrir_texto');
// Get the button that opens the modal
var btn_alex_sulino = document.getElementById("myBtn_abrir_texto");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close_alex_sulino")[0];
// When the user clicks the button, open the modal 
btn_alex_sulino.onclick = function() {
  modal_alex_sulino.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_alex_sulino.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_alex_sulino) {
    modal_alex_sulino.style.display = "none";
  }
}
</script>


<?php //echo do_shortcode('[fpd_action type="preview-lightbox" layout="icon-text"]'); ?>
<?php //echo do_shortcode('[fpd_module type="layouts"]'); ?>
<?php //echo do_shortcode('[fpd_module type="designs"]'); ?> 
<?php //echo do_shortcode('[fpd_module type="text-layers"]'); ?>

<?php //echo do_shortcode('[fpd_action type="save" layout="icon-text"]'); ?>
<?php //echo do_shortcode('[fpd_action type="load" layout="icon-text"]'); ?>
<?php //echo do_shortcode('[fpd_action type="manage-layers" layout="icon-text"]'); ?>

<?php //echo do_shortcode('[fpd_module type="images"]'); ?>
<?php //echo do_shortcode('[fpd_saved_products]'); ?>
<?php //do_shortcode('[fpd_saved_products]'); ?>


<?php } ?>

