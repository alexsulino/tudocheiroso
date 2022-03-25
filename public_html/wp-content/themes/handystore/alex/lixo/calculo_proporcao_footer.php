<?php //$file_startt__medidas_sem_proporcao = get_field('medidas_sem_proporcao');?>

<?php if ($file_start_medidas_sem_proporcao == 'anexar_medidas'): ?>
       <!-- anexe sua arte medias -->
	   
<?php else: ?>

		<?php $file_startt__largura_padrao = get_field('largura_padrao'); ?>
		<?php if (empty ($file_startt__largura_padrao)):{?>
		<!-- si  existe campo largura_padrao -->


			<style>
				#price_calculator input.amount_needed#width_needed {background:#ffffff !important; cursor:unset !important;}
			</style>
					
				<script>
				document.getElementsByClassName("woocommerce-error")[0].setAttribute("id", "ADD_TONHO_ID");

				var stree = document.getElementById("ADD_TONHO_ID").innerHTML;
					var ress = stree.replace(/Length missing/g, "Preencha o campo Largura");
					document.getElementById("ADD_TONHO_ID").innerHTML = ress;
					
				var stree = document.getElementById("ADD_TONHO_ID").innerHTML;
					var ress = stree.replace(/Width missing/g, "É preciso definir a altura");
					document.getElementById("ADD_TONHO_ID").innerHTML = ress;
				</script>

				<div class="calculo_total_js">

				<p style="display:none;" id="quantidade" onclick="myFunction_alex_soma()">quantidade </p>
				<p style="display:none;" id="valor_unidade" onclick="myFunction_alex_soma()">valor_unidade </p>

				<p style="display:none;" id="valor_unidade_remove_caracter">valor_unidade_remove_caracter</p>
				<p style="display:none;" id="valor_unidade_substitue_virgula_por_ponto">valor_unidade_substitue_virgula_por_ponto </p>

				<span id="Resultado_quantidade_x_valor_unidade" onmouseover="myFunction_alex_soma()" onload="javascript:myFunction_alex_soma()"><b><!--Valor Total:--> </b><!--Insira a largura--> </span>

				<script type="text/javascript">
				document.getElementsByClassName("qty")[0].setAttribute("id", "ADD_ID_SOMAR");
				document.getElementsByClassName("product_price")[0].setAttribute("id", "alex_myDIV");

				function myFunction_alex_soma() {	
					var somar = document.getElementById("ADD_ID_SOMAR").value;
						document.getElementById("quantidade").innerHTML = somar;
					 
					var somarr = document.getElementById("alex_myDIV").getElementsByClassName("amount")[0].innerHTML;
						document.getElementById("valor_unidade").innerHTML = somarr; 
					 
					var str = document.getElementById("valor_unidade").innerHTML; 
					var resx = str.replace(/[$]|R/gi, "");
						document.getElementById("valor_unidade_remove_caracter").innerHTML = resx;
					
					var str = document.getElementById("valor_unidade_remove_caracter").innerHTML; 
					var resxx = str.replace(/,/gi, ".");
						document.getElementById("valor_unidade_substitue_virgula_por_ponto").innerHTML = resxx;
					
						largura_originalll = parseFloat(document.getElementById('quantidade').innerHTML);
						altura_originalll = parseFloat(document.getElementById('valor_unidade_substitue_virgula_por_ponto').innerHTML);
					
					document.getElementById('Resultado_quantidade_x_valor_unidade').innerHTML = '<b>Valor Total: </b> R$ '+(largura_originalll*altura_originalll).toFixed(2);
					
					 }
					 window.onload = myFunction_alex_soma;
					  
				</script>

				</div>

				<script>
					var anchor = document.getElementById("length_needed");
					var attt = document.createAttribute("onkeyup");
					attt.value = "alex_substitue_ponto_por_virgula()";
					anchor.setAttributeNode(attt);
					
					var anchor = document.getElementById("width_needed");
					var atttt = document.createAttribute("onkeyup");
					atttt.value = "alex_substitue_ponto_por_virgula()";
					anchor.setAttributeNode(atttt);
					
					function alex_substitue_ponto_por_virgula() {
						$('#length_needed').val($('#length_needed').val().replace(".", ",")) //alex substitue  ponto por virgula do input id="length_needed"
						$('#width_needed').val($('#width_needed').val().replace(".", ",")) //alex substitue  ponto por virgula do input id="width_needed"
					}
				</script>

				<script>
					var anchor = document.getElementById("ADD_ID_SOMAR");
					var att = document.createAttribute("onclick");
					att.value = "myFunction_alex_soma()";
					anchor.setAttributeNode(att);
					
					setTimeout(Calc,3000);
					setTimeout(myFunction_alex_soma,5000);
				</script>

			<?php } else: { ?>

				<!-- Eiiiiiiiiii calculo_proporcao_footer.php -->
				<script>
					var anchor = document.getElementById("length_needed");
					var att = document.createAttribute("onkeyup");
					att.value = "Calc(); myFunction_alex_proporcao(); myFunction_alex_soma()";
					anchor.setAttributeNode(att);
				</script>

				<script>
					var anchor = document.getElementById("width_needed");
					var att = document.createAttribute("readonly");
					anchor.setAttributeNode(att);
				</script>

				<script>
					var anchor = document.getElementById("length_needed");
					var att = document.createAttribute("onmouseover");
					att.value = "myFunction_alex_soma()";
					anchor.setAttributeNode(att);
				</script>
				<script>
					var anchor = document.getElementById("length_needed");
					var att = document.createAttribute("onmouseout");
					att.value = "myFunction_alex_soma()";
					anchor.setAttributeNode(att);
				</script>



				<!-- Alex Altera text content div stre.replace -->
				<script>

				var str = document.getElementById("price_calculator").innerHTML;
					var res = str.replace(/Length/g, "<span>LARGURA</span> <br><span class='size_instrucao'>Digite Abaixo</span> ");
					document.getElementById("price_calculator").innerHTML = res;
					
				var stre = document.getElementById("price_calculator").innerHTML;
					var res = stre.replace(/Width/g, "<span>ALTURA </span>  <br><span class='size_instrucao'> Proporcional </span>");
					document.getElementById("price_calculator").innerHTML = res;
						
				</script>
				<!-- FIM Alex Altera text content div stre.replace -->

				<script>
				document.getElementsByClassName("woocommerce-error")[0].setAttribute("id", "ADD_TONHO_ID");

				var stree = document.getElementById("ADD_TONHO_ID").innerHTML;
					var ress = stree.replace(/Length missing/g, "Preencha o campo Largura");
					document.getElementById("ADD_TONHO_ID").innerHTML = ress;
					
				var stree = document.getElementById("ADD_TONHO_ID").innerHTML;
					var ress = stree.replace(/Width missing/g, "É preciso definir a altura");
					document.getElementById("ADD_TONHO_ID").innerHTML = ress;
					
				</script>


				<div class="calculo_total_js">

				<p style="display:none;" id="quantidade" onclick="myFunction_alex_soma()">quantidade </p>
				<p style="display:none;" id="valor_unidade" onclick="myFunction_alex_soma()">valor_unidade </p>

				<p style="display:none;" id="valor_unidade_remove_caracter">valor_unidade_remove_caracter</p>
				<p style="display:none;" id="valor_unidade_substitue_virgula_por_ponto">valor_unidade_substitue_virgula_por_ponto </p>

				<span id="Resultado_quantidade_x_valor_unidade" onmouseover="myFunction_alex_soma()" onload="javascript:myFunction_alex_soma()"><b>Valor Total: </b>Insira a largura </span>

				<script type="text/javascript">
				document.getElementsByClassName("qty")[0].setAttribute("id", "ADD_ID_SOMAR");
				document.getElementsByClassName("product_price")[0].setAttribute("id", "alex_myDIV");

				function myFunction_alex_soma() {	
					var somar = document.getElementById("ADD_ID_SOMAR").value;
						document.getElementById("quantidade").innerHTML = somar;
					 
					var somarr = document.getElementById("alex_myDIV").getElementsByClassName("amount")[0].innerHTML;
						document.getElementById("valor_unidade").innerHTML = somarr; 
					 
					var str = document.getElementById("valor_unidade").innerHTML; 
					var resx = str.replace(/[$]|R/gi, "");
						document.getElementById("valor_unidade_remove_caracter").innerHTML = resx;
					
					var str = document.getElementById("valor_unidade_remove_caracter").innerHTML; 
					var resxx = str.replace(/,/gi, ".");
						document.getElementById("valor_unidade_substitue_virgula_por_ponto").innerHTML = resxx;
					
						largura_originalll = parseFloat(document.getElementById('quantidade').innerHTML);
						altura_originalll = parseFloat(document.getElementById('valor_unidade_substitue_virgula_por_ponto').innerHTML);
					
					document.getElementById('Resultado_quantidade_x_valor_unidade').innerHTML = '<b>Valor Total: </b> R$ '+(largura_originalll*altura_originalll).toFixed(2);
					 }
					 window.onload = myFunction_alex_soma;
					  
				</script>


				</div>


				<script>
					var anchor = document.getElementById("ADD_ID_SOMAR");
					var att = document.createAttribute("onclick");
					att.value = "myFunction_alex_soma()";
					anchor.setAttributeNode(att);
					
	
					setTimeout(Calc,3000);
					setTimeout(myFunction_alex_soma,5000);
				</script>

		<?php } endif; ?>
		
<?php endif; ?>