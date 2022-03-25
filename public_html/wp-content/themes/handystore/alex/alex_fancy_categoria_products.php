<?php if( is_fancy_product($post->ID) ) { ?>

	<!--alex se existir campo opcao mostrar_outros_temas -->
	<?php if( get_field('mostrar_outros_temas') ): ?> 
	
		<script>
			setTimeout(function(){ 
			// adiciona funcao direto na class  "fpd-grid-contain" da categoria de designers para abrir o modelo clicado = onclick="document.getElementById('fpd-start-customizing-button').click();" //
			var anchor = document.getElementsByClassName("fpd-scroll-area")[0]; // posicao da class
			var att = document.createAttribute("onclick");
			att.value = "document.getElementById('fpd-start-customizing-button').click();";
			anchor.setAttributeNode(att);
			//alert('caregou ');
			}, 6000);
			
			setTimeout(function(){ 
			// so para garantir
			var anchorr = document.getElementsByClassName("fpd-scroll-area")[1]; // posicao da class
			var attt = document.createAttribute("onclick");
			attt.value = "document.getElementById('fpd-start-customizing-button').click();";	
			anchorr.setAttributeNode(attt);
			//alert('caregou 2 ');
			}, 9000);

			
			//  function myFunction_adicionar_clique() {
			//   document.getElementById('fpd-start-customizing-button').click();   
			//   var alex_scroll = document.getElementById("alex_galeria_full");
			//  alex_scroll.scrollIntoView();
			//}
			
			
		</script>

		
		<style>
			.alex_fancy_categoria_products .fpd-grid>.fpd-item {
				width: 20%;
				height: 140px;
				max-height: 140px;
			}
			.alex_fancy_categoria_products .fpd-grid>.fpd-item:hover {
				background: #efecec;
			}
			.alex_fancy_categoria_products h1 {
				    text-align: center;
					font-size: 202%;
					padding: 50px 0px 19px 0px;
			}
			.alex_fancy_categoria_products .fpd-product-categories.fpd-dropdown.fpd-search {
				height:40px !important;
			}

			.alex_fancy_categoria_products input.fpd-dropdown-current {
				font-size: 100% !important;
			}
			.mystyle_add {background: #000000;}
		</style>

		<div class="alex_fancy_categoria_products" id="alex_fancy_categoria_products">
			<h1>Escolha um tema</h1>
			<?php echo do_shortcode('[fpd_module type="products" css="width:95%; margin:auto;"]'); ?>
		</div>
		


<script>					
setTimeout(function() {
  var anchor = document.getElementById("alex_fancy_categoria_products").getElementsByClassName('mCS_no_scrollbar')[1];
  var att = document.createAttribute("onclick");
  att.value = "document.getElementById('fpd-start-customizing-button').click()";
  anchor.setAttributeNode(att);
  
  var alex_scroll = document.getElementById("alex_galeria_full");
  alex_scroll.scrollIntoView();
			
}, 4000);
setTimeout(function() {
  var anchor = document.getElementById("alex_fancy_categoria_products").getElementsByClassName('mCS_no_scrollbar')[1];
  var att = document.createAttribute("onclick");
  att.value = "document.getElementById('fpd-start-customizing-button').click()";
  anchor.setAttributeNode(att);
  
  var alex_scroll = document.getElementById("alex_galeria_full");
  alex_scroll.scrollIntoView();
			
}, 9000);
			
function myFunction_adicionar_clique() {
			   document.getElementById('fpd-start-customizing-button').click();   
			   var alex_scroll = document.getElementById("alex_galeria_full");
			   alex_scroll.scrollIntoView();
			}
</script>

		
	<?php endif; ?>
	<!-- Fim alex se existir campo opcao mostrar_outros_temas -->
	
<?php } ?>

