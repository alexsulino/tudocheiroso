<?php if( get_field('kit_largura_da_imagem') ): ?>



<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}
.row_sulino {
    display: block;
    clear: both;
    margin: 16px 0px;
}
.row_sulino > .column_alex {
    padding: 0px;
    width: 49%;
    
}


.row_sulino > .column_alex a {
      padding: 10px 0px 10px 0px;
    font-size: 92%;
    background: #eee !important;
    border-radius: 0px;
    float: inherit;
	
}

.row_sulino:after {
  content: "";
  display: table;
  clear: both;
}

.column_alex {
  float: left;
  width: 24.7%;
    background: #fff !important;
    text-align: center;
    margin:2px 4px 2px 0px;
}

.modal_sulino .column_alex {
        margin: 7px 1px 20px 0px;
    border-radius: 5px;
    overflow: hidden;
}

/* The Modal (background) */
.modal_sulino {
  display: none;
  position: fixed;
  z-index: 1000;
  padding-top: 60px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0px;
  width: 96%;
  max-width: 900px;
  border-radius: 10px;
}

/* The Close Button */
.close_sulino {
      color: white;
    position: absolute;
    top: 35px;
    right: 38px;
    font-size: 50px;
    font-weight: bold;
	    z-index: 1000;
}

.close_sulino:hover,
.close_sulino:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

.mySlides .fpd-container {
    padding: 30px;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #777777;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo_alex {
  opacity: 0.8;
    color: #000;
    padding: 12px 3px 8px 0px;
    float: left;
	    font-size: 80%;
}

.active,
.demo_alex:hover {
  opacity: 1;
  background: #ccc;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2), 0 2px 5px 0 rgba(0, 0, 0, 0.2);
}
.bt_alex_modal_zoom {
	    width: 100%;
    cursor: pointer;
    padding: 4px;
    text-align: center;
    margin: 5px 0px 25px 0px;
    background: #eee;
    float: left;
	
}
</style>

<!--<div class="bt_alex_modal_zoom" onclick="openModal();currentSlide(1)" class="hover-shadow cursor "> CLIQUE AQUI PARA VER SEU PRODUTO </div>-->

<div class="row_sulino">
<!--alex se existir campo opcao mostrar_outros_temas -->
<?php if( get_field('mostrar_outros_temas') ): ?> 
  <div class="column_alex">
    <a style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor "> <span class="escolha_tema"> Escolha um tema </span> </a>
  </div>
<?php endif; ?>
<!-- Fim alex se existir campo opcao mostrar_outros_temas --> 
  <div class="column_alex">
    <a style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor "> <span class="alterar_texto"> Alterar texto </span></a>
  </div>
  
  <div class="column_alex">
    <a style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor "> <span class="logotipo_image"> Logotipo </span></a>
  </div>
  
  <div class="column_alex">
    <a style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor "> <span class="visualizar_produto"> Ver Seu Produto </span></a>
  </div>

</div>



						





<div id="myModal_alex" class="modal_sulino">
  <span class="close_sulino cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    
	<div class="mySlides">
      <div class="numbertext">1 / 4</div>
	  <p style="text-align:center; width:100%; padding:10px;"><b>ESCOLHA UM TEMA DIFERENTE PARA ESSE PRODUTO</b><br>Veja as opções de tema para esse produto <br><em>(caso esteja vazio significa que esse produto não tem opção d tema)</em></p>
	<?php echo do_shortcode('[fpd_module hype="products" css="height:100px; width:100%;"]'); ?>
	<button class="aplicar_textos" onclick="document.getElementById('fpd-start-customizing-button').click(); closeModal()" > APLICAR</button><br>
	<button class="aplicar_cancelar" onclick="closeModal()" > Cancelar </button><br>
    </div>
	
	<div class="mySlides">
      <div class="numbertext">2 / 4</div>
	  <p style="text-align:center; width:100%; padding:10px;"><b>EDITE TODOS OS TEXTOS DESSE DESIGN DE UMA SÓ VEZ</b><br> Caso não aparece texto para editar é porque o design selecionado não possui texto. </p>
	<?php echo do_shortcode('[fpd_module type="text-layers"]'); ?>
	<?php //echo do_shortcode('[fpd_module type="text"]'); ?>
	<button class="aplicar_textos" onclick="document.getElementById('fpd-start-customizing-button').click(); setTimeout(myFunction_fechar_modal_fancy, 10);  setTimeout(myFunction_fechar_modal, 20); currentSlide(4);" > APLICAR </button><br><br>
    </div>

	<div class="mySlides">
      <div class="numbertext">3 / 4</div>
	  <p style="text-align:center; width:100%; padding:20px 10px 10px 10px;"><b>Clique no botão abaixo para adicionar seu logotipo </b><br> também pode ser usado para adicionar imagens como em geral</p>
	<?php echo do_shortcode('[fpd_module type="images" css="height:10px; width:100%;"]'); ?>
	<button class="aplicar_textos" onclick="document.getElementById('fpd-start-customizing-button').click(); closeModal()" > Clique aqui para posicionar seu logotipo</button><br><br>
    </div>
	
	<div class="mySlides">
      <div class="numbertext">4 / 4</div>
	  <?php get_template_part('alex/alex_fancy_imagem_lightbox'); ?>
    </div>
	
 
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <!--<p id="caption"></p> -->
    </div>


<!-- alex se existir campo opcao mostrar_outros_temas -->
<?php if( get_field('mostrar_outros_temas') ): ?> 
	<div class="column_alex">
		<a class="demo_alex cursor" style="width:100%" onclick="currentSlide(1)" alt="Frente"><span class="escolha_tema">Escolha um tema</span></a>
	</div>
<?php endif; ?>
<!-- Fim alex se existir campo opcao mostrar_outros_temas -->	
	
    <div class="column_alex">
	  <a class="demo_alex cursor" style="width:100%" onclick="currentSlide(2)" alt="Frente"><span class="alterar_texto">Alterar textos</span></a>
    </div>
	
	 <div class="column_alex">
	  <a class="demo_alex cursor" style="width:100%" onclick="currentSlide(3)" alt="Frente"><span  class="logotipo_image">Logotipo</span></a>
    </div>
	
	<div class="column_alex" >
      <a class="demo_alex cursor" style="width:100%" onclick="currentSlide(4)" alt="Frente"> <span class="visualizar_produto">Seu Produto</span></a>
    </div>
	
	<!--
	<div class="column_alex">
	  <a class="demo_alex cursor" style="width:100%" onclick="closeModal()" alt="Frente"><span class="finalizar_personalizacao">Finalizar</span></a>
    </div>
	-->
  </div>
</div>



<script>
// Alex ao carregar a página abrir e fechar fancy para carregar o design //
function myFunction_fechar_modal_fancyy() {
  $(".fpd-done").filter(function() {
    return $(this).click();
});
}


function myFunction_fechar_modall() {
  $(".close_alex_sulino").filter(function() {
    return $(this).click();
});
}

window.onload = function() {
 document.getElementById('fpd-start-customizing-button').click();
 setTimeout(myFunction_fechar_modal_fancyy, 10);
 setTimeout(myFunction_fechar_modall, 20);
 $(".fpd-done").filter(function() {
    return $(this).click();
});
};
</script>

<script>
function openModal() {
  document.getElementById('myModal_alex').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal_alex').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo_alex");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
 

<?php endif; ?>