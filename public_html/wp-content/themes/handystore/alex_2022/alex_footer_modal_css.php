<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/alex_2020/css/w3.css">
<!-- alex tutorial definitvo para todos modal https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_modal -->


<div class="w3-container">
<!--
  <button onclick="document.getElementById('alex_modal_wishlist').style.display='block'" class="w3-button w3-black">Favoritos</button>
  <button onclick="document.getElementById('alex_modal_minha_conta').style.display='block'" class="w3-button w3-black">Minha conta</button>
-->
<!-- Moda Favoritos  -->
  <div id="alex_modal_wishlist" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_wishlist').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		<?php echo do_shortcode('[yith_wcwl_wishlist]');?>
      </div>
    </div>
  </div>
  
  <!-- Moda Minha conta  -->
  <div id="alex_modal_minha_conta" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_minha_conta').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		MINHA CONTA
      </div>
    </div>
  </div>
  
   <!-- Moda Busca  -->
  <div id="alex_modal_busca" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('alex_modal_busca').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		BUSCAR NO SITE
      </div>
    </div>
  </div>
  
  
</div>
