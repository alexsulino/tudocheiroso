<?php $file_start_medidas_sem_proporcao = get_field('medidas_sem_proporcao'); ?>


<?php if ($file_start_medidas_sem_proporcao == 'anexar_medidas'): ?>
         <!-- anexe sua arte medias -->
	<?php 	wp_enqueue_style( 'calculo_proporcao', get_template_directory_uri() . '/alex/calculo_proporcao.css',false,'1.1','all');?>
<?php else: ?>
   
       	
		 <?php $file_start_largura_padrao = get_field('largura_padrao');?>  
		 <?php if (empty ($file_start_largura_padrao)):{?>
			<!-- si  existe campo largura_padrao -->
				
			<?php } else: { ?>
			
			<?php wp_enqueue_style( 'calculo_proporcao', get_template_directory_uri() . '/alex/calculo_proporcao.css',false,'1.1','all');?>

				<?php 
				$file_largura_padrao = get_field('largura_padrao');
				$file_altura_padraoo = get_field('altura_padraoo');
				?>



				<script type="text/javascript">

				function Calc(){
				largura_original = parseFloat(document.getElementById('largura_original').value.replace(".", ","));
				altura_original = parseFloat(document.getElementById('altura_original').value.replace(".", ","));

				length_needed = parseFloat(document.getElementById('length_needed').value.replace(".", ","));
				document.getElementById('resultado').value = (altura_original*length_needed/largura_original).toFixed(2);
				
				$('#length_needed').val($('#length_needed').val().replace(".", ",")) //alex substitue  ponto por virgula do input id="length_needed"
				
				}
				</script>

				<?php if( $file_largura_padrao ): ?>
					<div class="proporcao_padrao">
						<span><b>PROPORÇÃO PADRÃO</b></span>
						<span><b>Largura: </b> <?php the_field('largura_padrao'); ?> Centimetros  </span> 
						<span><b>Alrura: </b> <?php the_field('altura_padraoo'); ?> Centimetros  </span> 
					</div>
				<?php endif; ?>


				<?php
					$file_laudo = get_field('laudo');
					if( $file_laudo ): ?>
					<a href="<?php echo $file_laudo['url']; ?>" target="_blank" class="laudo button "><?php //echo $file_laudo['file_laudoname']; ?><b>Laudo : </b> <span>Faca Download</span></a>
				<?php endif; ?>




				<div style="display:none;">
				Largura Original: <input type="text" id="largura_original" value="<?php the_field('largura_padrao'); ?>" style="width:70px; padding: 5px;"  onload="myFunction_alex_proporcao();"> 
				Altura Original: <input type="text" id="altura_original" value="<?php the_field('altura_padraoo'); ?>" width="20"  style="width:70px;     padding: 5px;"><br><br><br>

				Nova Largura: <input name="nova_largura" type="text" id="nova_largura" class="nova_largura" onkeyup="myFunction_alex_proporcao()" onblur="Calc(); myFunction_alex_proporcao()" value="5"  style="width:70px; padding: 5px;"> 
				Nova Altura: <input name="resultado" type="text" id="resultado" value="4" onkeyup="myFunction_alex_proporcao()"  style="width:70px; padding: 5px;"><br>
				</div>

				<script>
				function myFunction_alex_proporcao() {	
					var resu = document.getElementById("resultado").value.replace(".", ",");
					 document.getElementById("width_needed").value = resu;
					 }
				</script>

				<script>
				function maravilha() {	
					  document.getElementById("length_needed").value.replace(".", ",") = "<?php echo $file_largura_padrao; ?>";
					 }	 
					 window.onload = maravilha;
					 
					 setTimeout(maravilha,1000);
					  setTimeout(Calc,2000);
					 setTimeout(myFunction_alex_proporcao,3000);
				</script>

	<?php } endif; ?>
<?php endif; ?>

