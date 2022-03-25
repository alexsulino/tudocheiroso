<?php //if( get_field('controle_de_medidas') == 'sim') {?>

<?php
$controle_de_medidas = get_field('controle_de_medidas');
if( $controle_de_medidas && in_array('sim', $controle_de_medidas) ) {

?>
					
<!-- 
Alex::: Funciona com os plugins:
YITH WooCommerce Name Your Price (respodavel pelo campo preco editavel)
WooCommerce TM Extra Product Options (responsavel pelos campos de dimensoes largura e altura)
-->
<?php 
	$file_largura_padrao = get_field('largura_padrao');
	$file_altura_padraoo = get_field('altura_padraoo');
?>
<style>
.calculando_proporcao {
    background: #fff;
    padding: 10px;
    margin: 4px 0px;
    display: inline-block;
    clear: both;
	width: 100%;
	border-radius:5px;
}
.calculando_proporcao:hover {
    background: #f9f9f9;
	cursor: pointer;
}
.calculando_proporcao p {
    font-size: 95% !important;
    font-weight: bold;
    margin: 5px;
	float: left;
    width: 46%;
	color:#888888;
}
#informacoes_cauculo .box_calculos {
	
	background: #f6f6f6;
    padding: 10px;
    margin: 5px 0px;
    display: block;
    clear: both;
    float: left;
    width: 100%;
    border-radius: 5px;
}
#informacoes_cauculo .box_calculos.box_investimento {
	background: #f4f7df;
}
#informacoes_cauculo {
    background: #eeeeee;
    padding: 10px;
    margin: 10px 0px;
    float: left;
    display: block;
    clear: both;
    border-radius: 5px;
}	
div#informacoes_cauculo.abrir_custo {
    display: block !important;
	
}
.calculando_proporcao p span {
    font-weight: normal;
}
.calculando_proporcao p em {
    font-weight: 100;
    font-size: 80%;
}
.calculando_proporcao h4.title_tab_desconto {
    font-size: 132%;
    display: block;
    clear: both;
    margin: 5px 0px 8px 0px;
    float: left;
    width: 100%;
    text-align: center;
}

.calculando_proporcao p.total_unidade { font-size: 17px !important;}
.calculando_proporcao p.total_final { font-size: 22px !important; color:#111111;}

<?php if (empty($file_largura_padrao)) { ?>
   /** alex controle de proporcao. si existir largura preenchido calcule a proporcao **/
<?php } else { ?>
.meutralizando_input_altura {
	border: solid 1px #f1f1f1 !important;
    background: none;
    cursor: default;	
}
.class_input_altura-div {display:none !important;}
<?php } ?>

table.thwepo-extra-options.thwepo_simple {
    border:solid 1px #eee;
    background: #f1f1f1;
    padding: 10px;
    border-radius: 5px;
}
.thwepo-extra-options td {
    border-width: 0 0px 0px 0;
}

input#input_largura,input#input_altura {
    font-size: 20px;
    width:60%;
}

.proporcao_padrao {
    width: 100%;
    background: #ffffff;
    color: #ccc;
    padding: 1px 10px;
    float: left;
    margin: 30px 0 1px 0;
    font-size: 12px;
}
.proporcao_padrao span{width:32%; float:left;}
.class_unidade_total_final {text-align: right !important; padding: 0px !important; margin: -30px 0 10px 0 !important;}

.calculando_proporcao .tabela_desconto_row * {box-sizing: border-box;}
.calculando_proporcao .tabela_desconto_column {
	float: left;
    width: 19.90%;
    padding: 0px;
    text-align: center;
	    border-bottom: 1px solid #f8f8f8;
	}

.calculando_proporcao .tabela_desconto_column p { font-size: 12px !important; padding: 1px; margin: 1px; font-weight: normal; width: 100%;}
.calculando_proporcao .tabela_desconto_row:after {content: ""; display: table; clear: both;}

.tabela_desconto_column.tabela_desconto_preco_total_old p {
    text-decoration: line-through;
    color: #bdbdbd;
}

span.tabela_desconto_separa {
    display: block;
    clear: both;
    float: left;
    width: 100%;
}
span.tabela_desconto_separa:hover {
    background: #defbe4;
}

.calculando_proporcao .desconto_ativo{ background: #defbe4;}
.calculando_proporcao .desconto_ativo p{ background: #defbe4; font-weight: bold  !important;} 
.calculando_proporcao .label_desconto{text-align:center; font-weight: normal  !important;} 
.total_final_old p{text-decoration: line-through; opacity: 0.3;}



</style>



<?php if (empty($file_largura_padrao)) { ?>
	<?php } else { ?>
	<div class="proporcao_padrao">
		<span><b>PROPORÇÃO PADRÃO</b></span>
		<span><b>Largura: </b> <?php echo $file_largura_padrao ?> Centimetros  </span> 
		<span><b>Alrura: </b> <?php echo $file_altura_padraoo ?> Centimetros  </span> 
	</div>
<?php } ?>
<div class="calculando_proporcao" onmouseover="myFunction_calcular_proporcao()" onclick="myFunction_calcular_proporcao()">

		<div onclick="mostrar_informacoes_cauculo()" style="display:block; clear:both; width: 5%;    margin: auto; float: right; text-align:right;   color: #ccc; background: #ffffff; opacity: 0.5;"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
		<script>
			function mostrar_informacoes_cauculo() {
			   var element_abrir = document.getElementById("informacoes_cauculo");
			   element_abrir.classList.toggle("abrir_custo");
			   //document.getElementById("mostrar_ocultar_filtro_atributo_categoria").classList.toggle("abrir_filtro_bg");
			}
		</script>
		<br/>
		<p>Largura: <i class="fa fa-arrows-h" aria-hidden="true"></i>  <span id="input_largura_clone"maxlength="4"></span> <em> Centimetros</em></p>
		<p>Altura: <i class="fa fa-arrows-v" aria-hidden="true"></i>  <span id="input_altura_clone" maxlength="4"></span> <em>  Centimetros</em></p>
		
		
		<div id="informacoes_cauculo" style="display:none;">
		
			<div class="box_calculos">
				<p>Largura:<br/><input type="number" id="input_largura" onmouseout="myFunction_calcular_proporcao()"  onmouseover="myFunction_calcular_proporcao()" onkeyup="myFunction_calcular_proporcao()" value="<?php echo $file_largura_padrao ?>"></p>
				<p>Altura:<br/>	<input type="number" id="input_altura" onmouseout="myFunction_calcular_proporcao()" onmouseover="myFunction_calcular_proporcao()" onkeyup="myFunction_calcular_proporcao()" value="<?php echo $file_altura_padraoo ?>"></p>
				<br/>
				<p>Largura: <span id="largura"></span></p>
				<p>Altura: <span id="altura"></span></p>
				<br/>
			</div>	
			
			<div class="box_calculos box_investimento">
				<h4><i class="fa fa-money" aria-hidden="true"></i> INVESTIMENTO </h4>
				<p>Preço Bobina:<br/><input type="number" id="input_preco_bobina" onmouseout="myFunction_calcular_proporcao()"  onmouseover="myFunction_calcular_proporcao()" onkeyup="myFunction_calcular_proporcao()" value="400"></p>
				<p>Preço tinta:<br/>	<input type="number" id="input_preco_tinta" onmouseout="myFunction_calcular_proporcao()" onmouseover="myFunction_calcular_proporcao()" onkeyup="myFunction_calcular_proporcao()" value="615"></p>
			</div>	
			
			<div class="box_calculos">
				<h4><i class="fa fa-th-large" aria-hidden="true"></i> Midia</h4>
				<p><i class="fa fa-exchange" aria-hidden="true"></i> Valor Bobina 1 m2: R$<span id="bobina_valor_m2"></span></p>
				<p><i class="fa fa-object-group" aria-hidden="true"></i> Area: <span id="area_total"></span></p>
				<p style="color:#808e27"><i class="fa fa-money" aria-hidden="true"></i>Valor unidade: R$<span id="valor_unidade_midia"></span></p>
			</div>
			

			<div class="box_calculos">
				<h4><i class="fa fa-tint" aria-hidden="true"></i> Tinta</h4>
				<p><i class="fa fa-exchange" aria-hidden="true"></i> Valor de 1 ml: R$<span id="tinta_valor_ml"></span></p>
				<p><i class="fa fa-object-group" aria-hidden="true"></i> Area: <span id="area_tinta"></span></p>
				<p style="color:#808e27"><i class="fa fa-money" aria-hidden="true"></i> Valor ml area: R$<span id="tinta_valor_ml_area"></span></p>
			</div>
			
			
			
			

			<div class="box_calculos">
				<h4><i class="fa fa-gavel" aria-hidden="true"></i> Custos Bruto</h4>
				<p><i class="fa fa-th" aria-hidden="true"></i> Item por m2: <span id="quantidade_folha_por_m2"></span></p>
				<p><i class="fa fa-tint" aria-hidden="true"></i> Tinta por m2: <span id="quantidade_tinta_por_m2"></span></p>
				<p style="color:green; font-size:120% !important;"><i class="fa fa-money" aria-hidden="true"></i> Custo Final: <span id="custo_final"></span></p>
			</div>

			<p><span id="medida_nao_suportada"></span></p>
			
			<div class="box_calculos">
				<h4><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Total</h4>
				<p class="total_unidade">Unidade: R$ <span id="total_venda"></span></p>
				<p class="total_final">Total: R$ <span id="Resultado_quantidade_x_valor_unidade_novo" onmouseover="myFunction_calcular_proporcao()"  onload="javascript:myFunction_calcular_proporcao()"></span></p>
				<p class="total_unidade">Acréscimo: <span id="select_valor_media"> </span>% </p>
				<p class="total_unidade">Acréscimo: R$ <span id="total_venda_porcentagem_acrecimo"> </span> </p>
			</div>
			
		</div>
		
		
	
		<span id="total_final_old">
			<p><span class="total_unidade">Unidade:</span> R$ <span id="total_venda_porcentagem"></span> </p>
			<p class="total_final" id="total_final_old">Total: R$ <span id="Resultado_quantidade_x_valor_unidade_novo_porcentagem" onmouseover="myFunction_calcular_proporcao()"  onload="javascript:myFunction_calcular_proporcao()"></span></p>
		</span>
		
		<span id="total_final_desconto">
			<p><span class="total_unidade">Desconto:</span> <span id="quantidade_desconto_aplicado_de_id"></span> </p>
			<!--<p><span class="total_unidade">Desconto Aplicado!!!</span> <span id=""></span> </p>
			<p><span class="total_unidade">Unidade:</span> R$ <span id="quantidade_desconto_aplicado_unidade"></span> </p>-->
			<p class="total_final">Total: R$ <span id="quantidade_desconto_aplicado" onmouseover="myFunction_calcular_proporcao()"  onload="javascript:myFunction_calcular_proporcao()"></span></p>
		</span>
		
</div>


<!-- tabela de desconto -->
<div class="calculando_proporcao" onmouseover="myFunction_calcular_proporcao()" onclick="myFunction_calcular_proporcao()">
	<H4 class="title_tab_desconto"><i class="fa fa-scissors" aria-hidden="true"></i> Tabela de desconto:</H4>
	
	<div class="tabela_desconto_row">

	  <div class="tabela_desconto_column tabela_desconto_quantidade"><p><b>QUANT</b></p></div>
	  <div class="tabela_desconto_column tabela_desconto_desconto"><p><b>DESCONTO</b></p></div>
	  <div class="tabela_desconto_column tabela_desconto_preco"><p><b>PREÇO</b></p></div> 
	  <div class="tabela_desconto_column "><p><b> </b></p></div> 
	  <div class="tabela_desconto_column "><p><b>TOTAL</b></p></div> 
	  
	<span class="tabela_desconto_separa" id="item_desconto_01">
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>100</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>5%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_01">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_01_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_01">...</p></div>
	</span>	
	
	<span class="tabela_desconto_separa" id="item_desconto_02">
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>250</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>10%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_02">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_02_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_02">...</p></div>
	</span>
	
	<span class="tabela_desconto_separa" id="item_desconto_03">	
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>500</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>15%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_03">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_03_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_03">...</p></div>
	</span>
	
	<span class="tabela_desconto_separa" id="item_desconto_04">	
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>750</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>17%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_04">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_04_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_04">...</p></div>
	</span>
	
	<span class="tabela_desconto_separa" id="item_desconto_05">	
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>1000</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>20%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_05">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_05_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_05">...</p></div>
	</span>
	
	<span class="tabela_desconto_separa" id="item_desconto_06">	
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>1500</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>25%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_06">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_06_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_06">...</p></div>
	</span>
	
	<span class="tabela_desconto_separa" id="item_desconto_07">	
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>2000</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>30%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_07">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_07_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_07">...</p></div>
	</span>
	
	<span class="tabela_desconto_separa" id="item_desconto_08">	
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>3000</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>35%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_08">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_08_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_08">...</p></div>
	</span>
	
	<span class="tabela_desconto_separa" id="item_desconto_09">	
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>5000</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>45%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_09">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_09_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_09">...</p></div>
	</span>
	
	<span class="tabela_desconto_separa" id="item_desconto_10">	
		<div class="tabela_desconto_column tabela_desconto_quantidade"><p>+ 20000</p></div>
		<div class="tabela_desconto_column tabela_desconto_desconto"><p>50%</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco"><p id="desconto_10">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total_old"><p id="desconto_total_10_old">...</p></div>
		<div class="tabela_desconto_column tabela_desconto_preco_total"><p id="desconto_total_10">...</p></div>
	</span>

	</div>
<div class="label_desconto">Desconto será aplicado no carrinho de compras</div>	
</div>		
<!-- Fim tabela de desconto -->

<script>
function myFunction_calcular_proporcao() {
  // media
	$bobina = document.getElementById("input_preco_bobina").value; //preço da bobina
	//$bobina = 400,00; //preço da bobina

  	$largura = document.getElementById("input_largura").value / 100;
  	$altura = document.getElementById("input_altura").value / 100;
	
	var largura = $largura;
	var altura = $altura;
	
	document.getElementById("largura").innerHTML = largura;
	document.getElementById("altura").innerHTML = altura;
	
  $bobina_valor_m2 = ($bobina / 76);
  $area_total = $largura * $altura;
  $valor_unidade_midia = ($bobina_valor_m2 * $area_total);
  
  
  // tinta
  $tinta = document.getElementById("input_preco_tinta").value; // preço 1000 litro  da tinta
  //$tinta = 615,00; // preço 1000 litro  da tinta
  
 
  $tinta_consumo = 0.050; // Area Ripada
  $tinta_valor_ml = ($tinta / 1000);
  $tinta_valor_ml_area = ($tinta / 1000) * $tinta_consumo;
  
  $area_tinta = ($tinta_valor_ml_area * $valor_unidade_midia) *1000  ;
  
  // Total
  $quantidade_folha_por_m2 = 1/$area_total;
  $quantidade_tinta_por_m2 = $tinta_valor_ml * $area_total;
  $custo_final = ($area_total * $quantidade_tinta_por_m2) * ($quantidade_folha_por_m2 / $tinta_consumo);
 // $total_venda = $custo_final * 160; // total de custo x
 
	  var total_vendax;
	  var area_variavel = $area_total; // tamanho da area de impressão
	 
	  // regra de preço por medida (area)
	  
	  if (area_variavel <= 0.0001) { // area_variavel menor que 
		$total_venda = 0.16; //preço
	  } else 
	  if (area_variavel <= 0.0003) {
		$total_venda = 0.17;
	  } else
	  if (area_variavel <= 0.0005) {
		$total_venda = 0.18;
	  } else
	  if (area_variavel <= 0.0007) {
		$total_venda = 0.20;
	  } else 
	  if (area_variavel <= 0.0009) {
		$total_venda = 0.23;
	  } else 
	  if (area_variavel <= 0.0011) {
		$total_venda = 0.24;
	  } else 
	  if (area_variavel <= 0.0013) {
		$total_venda = 0.26;
	  } else 
	  if (area_variavel <= 0.0016) {
		$total_venda = 0.30;
	  } else 
	  if (area_variavel <= 0.0019) {
		$total_venda = 0.31;
	  } else  
	  if (area_variavel <= 0.0022) {
		$total_venda = 0.32;
	  } else  
	  if (area_variavel <= 0.0025) {
		$total_venda = 0.33;
	  } else  
	  if (area_variavel <= 0.0030) {
		$total_venda = 0.34;
	  } else  
	  if (area_variavel <= 0.0035) {
		$total_venda = 0.35;
	  } else   
	  if (area_variavel <= 0.0040) {
		$total_venda = 0.36;
	  } else   
	  if (area_variavel <= 0.0045) {
		$total_venda = 0.37;
	  } else   
	  if (area_variavel <= 0.0050) {
		$total_venda = 0.38;
	  } else   
	  if (area_variavel <= 0.0055) {
		$total_venda = 0.39;
	  } else   
	  if (area_variavel <= 0.0060) {
		$total_venda = 0.40;
	  } else   
	  if (area_variavel <= 0.0065) {
		$total_venda = 0.41;
	  } else   
	  if (area_variavel <= 0.0070) {
		$total_venda = 0.42;
	  } else   
	  if (area_variavel <= 0.0075) {
		$total_venda = 0.43;
	  } else   
	  if (area_variavel <= 0.0080) {
		$total_venda = 0.44;
	  } else   
	  if (area_variavel <= 0.0085) {
		$total_venda = 0.45;
	  } else   
	  if (area_variavel <= 0.0090) {
		$total_venda = 0.50;
	  } else 
	  if (area_variavel <= 99999) {
		$total_venda = $custo_final * 7; // regra de preço muda para multiplos de area x 
	  } else  {
	  
		total_vendax = "<p><span style='color:#ff0000'>Medida não suportada! <br/> Escolha uma medida menor!</span></p>";
		//$total_venda = $custo_final * 160; // total de custo x
	  }
	  
	  document.getElementById("medida_nao_suportada").innerHTML = total_vendax;
  
  
  // media
  var bobina_valor_m2 = $bobina_valor_m2;
  var area_total = $area_total;
  var valor_unidade_midia = $valor_unidade_midia;
  
  // tinta
  var tinta_valor_ml = $tinta_valor_ml;
  var tinta_valor_ml_area = $tinta_valor_ml_area;
  var area_tinta = $area_tinta;
  
  // Total
  var quantidade_folha_por_m2  = $quantidade_folha_por_m2;
  var quantidade_tinta_por_m2  = $quantidade_tinta_por_m2;
  var custo_final  = $custo_final;
  var total_venda  = $total_venda;
  
  
  // media
  document.getElementById("bobina_valor_m2").innerHTML = bobina_valor_m2.toFixed(2);
  document.getElementById("area_total").innerHTML = area_total.toFixed(4);
  document.getElementById("valor_unidade_midia").innerHTML = valor_unidade_midia.toFixed(4);
  
  // tinta
  document.getElementById("tinta_valor_ml").innerHTML = tinta_valor_ml.toFixed(4);
  document.getElementById("tinta_valor_ml_area").innerHTML = tinta_valor_ml_area.toFixed(4);
  document.getElementById("area_tinta").innerHTML = area_tinta.toFixed(4);
  
  
  // Total
  document.getElementById("quantidade_folha_por_m2").innerHTML = quantidade_folha_por_m2.toFixed(2);
  document.getElementById("quantidade_tinta_por_m2").innerHTML = quantidade_tinta_por_m2.toFixed(4);
  document.getElementById("custo_final").innerHTML = custo_final.toFixed(2);
  document.getElementById("total_venda").innerHTML = total_venda.toFixed(2);

  // interecao com plugin: WooCommerce TM Extra Product Options
	
	var class_input_largura = document.getElementsByClassName("class_input_largura")[0];
	var att_class_input_largura = document.createAttribute("onchange");
	att_class_input_largura.value = "myFunction_calcular_proporcao()";
	class_input_largura.setAttributeNode(att_class_input_largura);
	
	var class_input_altura = document.getElementsByClassName("class_input_altura")[0];
	var att_class_input_altura = document.createAttribute("onchange");
	att_class_input_altura.value = "myFunction_calcular_proporcao()";
	class_input_altura.setAttributeNode(att_class_input_altura);
	
	var largura_teste = document.getElementsByClassName("class_input_largura")[0].value;
	document.getElementById("input_largura").value = largura_teste;
	
	var altura_teste = document.getElementsByClassName("class_input_altura")[0].value;
	document.getElementById("input_altura").value = altura_teste;
	
	
	// Select tipo de media 
	var select_valor_mediax = document.getElementById("tipo_de_impressao");
	var att_select_valor_mediax = document.createAttribute("onchange");
	att_select_valor_mediax.value = "myFunction_calcular_proporcao()";
	select_valor_mediax.setAttributeNode(att_select_valor_mediax);
	
	//var select_valor_media = document.getElementsByClassName("tc-active")[0].getElementsByClassName("amount")[0].innerHTML; 
	var select_valor_media = document.getElementsByClassName("tc-active")[0].getElementsByTagName("input")[0].getAttribute("data-rules").replace('["','').replace('"]',''); 
	document.getElementById("select_valor_media").innerHTML = select_valor_media.replace("R$", "").replace(",00", "");
	//media_porcentagem = select_valor_media.replace("R$", "").replace(",00", "");
	media_porcentagem = select_valor_media.replace(/R$|00/gi, "");
	
	var media_porcentagem_resultado = (media_porcentagem * total_venda) / 100;
    media_porcentagem_resultado_final = media_porcentagem_resultado + total_venda;
    document.getElementById("total_venda_porcentagem").innerHTML = media_porcentagem_resultado_final.toFixed(2);
	
	document.getElementById("total_venda_porcentagem_acrecimo").innerHTML = media_porcentagem_resultado.toFixed(2);
  
  // Total preço Unidade
  //var ywcnp_suggest_price_single = $total_venda;
	//document.getElementById("ywcnp_suggest_price_single").value = total_venda.toFixed(2).replace('.',',');
	
	
	document.getElementById("ywcnp_suggest_price_single").value = media_porcentagem_resultado_final.toFixed(2).replace('.',',');
	
		
	
	// Total preço Quantidade
	var somar = document.getElementById("ADD_ID_SOMAR").value;
	document.getElementById('Resultado_quantidade_x_valor_unidade_novo').innerHTML = ''+(total_venda*somar).toFixed(2).replace('.',',');
	document.getElementById("ADD_ID_SOMAR").addEventListener("click", myFunction_calcular_proporcao);
	
	
	
	var media_porcentagem_resultado_final_ajusteMoeda = media_porcentagem_resultado_final*somar;
	document.getElementById('Resultado_quantidade_x_valor_unidade_novo_porcentagem').innerHTML = (media_porcentagem_resultado_final_ajusteMoeda).toLocaleString('pt-BR');
	//document.getElementById('Resultado_quantidade_x_valor_unidade_novo_porcentagem').innerHTML = ''+(media_porcentagem_resultado_final*somar).toFixed(2).replace('.',',');
	
	
	
<?php if (empty($file_largura_padrao)) { ?>
  
    // alex controle de proporcao. si existir largura preenchido calcule a proporcao
	<?php } else { ?>
	// deixa input id=input_altura  invalido com a ação readonly
	var anchor = document.getElementById("input_altura");
	var att = document.createAttribute("readonly");
	anchor.setAttributeNode(att);
							
	// Calculando Proporção
	var largura = document.getElementById("input_largura").value;
	var altura = <?php echo $file_largura_padrao ?>; // Largura fixa
	var altura_proporcao = <?php echo $file_altura_padraoo ?>; // Altura fixa
	document.getElementById("input_altura").value = largura*altura_proporcao/altura; // largura padrao x altura proporcao / altura
	
	// comando automatico de ALTURA (centímetros)
	var input_altura_controle = document.getElementById("input_altura_clone").innerHTML;
	document.getElementsByClassName("class_input_altura")[0].value = input_altura_controle;
	
	var input_altura_controlex = document.getElementById("input_altura").value;
	var arredonda_altura = parseFloat(input_altura_controlex);
	document.getElementsByClassName("class_altura_automatica")[0].innerHTML = "<br/><b style='color:#000000'>ALTURA Proporcional: </b><br>" + "<b style='font-size:24px;'>" + arredonda_altura.toFixed(2) + " </b><em>(centímetros)</em>";
	
	
	
	

	
<?php } ?>
		
	// Alex clona input largura e alura para visualização e conferencia do cliente
	var input_largura_clone = document.getElementById("input_largura").value;
	document.getElementById("input_largura_clone").innerHTML = input_largura_clone;
	
	var input_altura_clone = document.getElementById("input_altura").value;
	//document.getElementById("input_altura_clone").innerHTML = input_altura_clone;
	var arredonda_altura_clone = parseFloat(input_altura_clone);
	document.getElementById("input_altura_clone").innerHTML = arredonda_altura_clone.toFixed(2);

	
	// preco unidade na caixa de delecao de medidas
	var input_altura_controlexcc = document.getElementById("total_venda_porcentagem").innerHTML;
	document.getElementsByClassName("class_unidade_total_final")[0].innerHTML = "<br/><b style='color:#999999'>Preço Unidade: </b>" + "<b style='font-size:18px;'>R$ " + input_altura_controlexcc + " </b>";
	
	
	//////////////////////////////////////////////////// TABELA DE DESCONTO //////////////////////////////////////////////////////////////
	
	//Desconto de 5%
	var porcentagem_1 = (95 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_01").innerHTML = "<b>R$ " + porcentagem_1.toFixed(2) + " </b>";
	var somar_total_desconto_1 =  100 * porcentagem_1;
    document.getElementById('desconto_total_01').innerHTML = "<b>R$ " + (somar_total_desconto_1).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_1_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_1_old =  100 * porcentagem_1_old;
    document.getElementById('desconto_total_01_old').innerHTML = "<b>R$ " + (somar_total_desconto_1_old).toLocaleString('pt-BR')+ " </b>";	
	
	//Desconto de 10%
	var porcentagem_2 = (90 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_02").innerHTML = "<b>R$ " + porcentagem_2.toFixed(2) + " </b>";
    var somar_total_desconto_2 =  250 * porcentagem_2;
    document.getElementById('desconto_total_02').innerHTML = "<b>R$ " + (somar_total_desconto_2).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_2_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_2_old =  250 * porcentagem_2_old;
    document.getElementById('desconto_total_02_old').innerHTML = "<b>R$ " + (somar_total_desconto_2_old).toLocaleString('pt-BR')+ " </b>";
	
	//Desconto de 15%
	var porcentagem_3 = (85 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_03").innerHTML = "<b>R$ " + porcentagem_3.toFixed(2) + " </b>";
    var somar_total_desconto_3 =  500 * porcentagem_3;
    document.getElementById('desconto_total_03').innerHTML = "<b>R$ " + (somar_total_desconto_3).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_3_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_3_old =  500 * porcentagem_3_old;
    document.getElementById('desconto_total_03_old').innerHTML = "<b>R$ " + (somar_total_desconto_3_old).toLocaleString('pt-BR')+ " </b>";
	
	//Desconto de 20%
	var porcentagem_4 = (80 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_04").innerHTML = "<b>R$ " + porcentagem_4.toFixed(2) + " </b>";
    var somar_total_desconto_4 =  750 * porcentagem_4;
    document.getElementById('desconto_total_04').innerHTML = "<b>R$ " + (somar_total_desconto_4).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_4_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_4_old =  750 * porcentagem_4_old;
    document.getElementById('desconto_total_04_old').innerHTML = "<b>R$ " + (somar_total_desconto_4_old).toLocaleString('pt-BR')+ " </b>";
	
	//Desconto de 25%
	var porcentagem_5 = (75 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_05").innerHTML = "<b>R$ " + porcentagem_5.toFixed(2) + " </b>";
    var somar_total_desconto_5 =  1000 * porcentagem_5;
    document.getElementById('desconto_total_05').innerHTML = "<b>R$ " + (somar_total_desconto_5).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_5_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_5_old =  1000 * porcentagem_5_old;
    document.getElementById('desconto_total_05_old').innerHTML = "<b>R$ " + (somar_total_desconto_5_old).toLocaleString('pt-BR')+ " </b>";
	
	//Desconto de 30%
	var porcentagem_6 = (70 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_06").innerHTML = "<b>R$ " + porcentagem_6.toFixed(2) + " </b>";
    var somar_total_desconto_6 =  1500 * porcentagem_6;
    document.getElementById('desconto_total_06').innerHTML = "<b>R$ " + (somar_total_desconto_6).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_6_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_6_old =  1500 * porcentagem_6_old;
    document.getElementById('desconto_total_06_old').innerHTML = "<b>R$ " + (somar_total_desconto_6_old).toLocaleString('pt-BR')+ " </b>";
	
	//Desconto de 35%
	var porcentagem_7 = (65 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_07").innerHTML = "<b>R$ " + porcentagem_7.toFixed(2) + " </b>";
    var somar_total_desconto_7 =  2000 * porcentagem_7;
    document.getElementById('desconto_total_07').innerHTML = "<b>R$ " + (somar_total_desconto_7).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_7_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_7_old =  2000 * porcentagem_7_old;
    document.getElementById('desconto_total_07_old').innerHTML = "<b>R$ " + (somar_total_desconto_7_old).toLocaleString('pt-BR')+ " </b>";
	
	//Desconto de 40%
	var porcentagem_8 = (60 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_08").innerHTML = "<b>R$ " + porcentagem_8.toFixed(2) + " </b>";
    var somar_total_desconto_8 =  3000 * porcentagem_8;
    document.getElementById('desconto_total_08').innerHTML = "<b>R$ " + (somar_total_desconto_8).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_8_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_8_old =  3000 * porcentagem_8_old;
    document.getElementById('desconto_total_08_old').innerHTML = "<b>R$ " + (somar_total_desconto_8_old).toLocaleString('pt-BR')+ " </b>";
	
	//Desconto de 45%
	var porcentagem_9 = (55 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_09").innerHTML = "<b>R$ " + porcentagem_9.toFixed(2) + " </b>";
    var somar_total_desconto_9 =  5000 * porcentagem_9;
    document.getElementById('desconto_total_09').innerHTML = "<b>R$ " + (somar_total_desconto_9).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_9_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_9_old =  5000 * porcentagem_9_old;
    document.getElementById('desconto_total_09_old').innerHTML = "<b>R$ " + (somar_total_desconto_9_old).toLocaleString('pt-BR')+ " </b>";
	
	//Desconto de 50%
	var porcentagem_10 = (50 * input_altura_controlexcc) / 100;
    document.getElementById("desconto_10").innerHTML = "<b>R$ " + porcentagem_10.toFixed(2) + " </b>";
    var somar_total_desconto_10 =  20000 * porcentagem_10;
	document.getElementById('desconto_total_10').innerHTML = "<b>R$ " + (somar_total_desconto_10).toLocaleString('pt-BR')+ " </b>";
	
	var porcentagem_10_old = (100 * input_altura_controlexcc) / 100;
	var somar_total_desconto_10_old =  20000 * porcentagem_10_old;
    document.getElementById('desconto_total_10_old').innerHTML = "<b>R$ " + (somar_total_desconto_10_old).toLocaleString('pt-BR')+ " </b>";
    
		
    
	/// desconto select - add class
	
	var quantidade_desconto = document.getElementById("ADD_ID_SOMAR").value;
	
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 100 || quantidade_desconto > 249) {
			var element = document.getElementById("item_desconto_01");
			element.classList.remove("desconto_ativo");
	   } else {
		   var element = document.getElementById("item_desconto_01");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 250 || quantidade_desconto > 499) {
			var element = document.getElementById("item_desconto_02");
			element.classList.remove("desconto_ativo");
	   } else {
		   var element = document.getElementById("item_desconto_02");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 500 || quantidade_desconto > 749) {
			var element = document.getElementById("item_desconto_03");
			element.classList.remove("desconto_ativo");

	   } else {
		   var element = document.getElementById("item_desconto_03");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 750 || quantidade_desconto > 999) {
			var element = document.getElementById("item_desconto_04");
			element.classList.remove("desconto_ativo");
	   } else {
		   var element = document.getElementById("item_desconto_04");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 1000 || quantidade_desconto > 1499) {
			var element = document.getElementById("item_desconto_05");
			element.classList.remove("desconto_ativo");

	   } else {
		   var element = document.getElementById("item_desconto_05");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 1500 || quantidade_desconto > 1999) {
			var element = document.getElementById("item_desconto_06");
			element.classList.remove("desconto_ativo");
	   } else {
		   var element = document.getElementById("item_desconto_06");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 2000 || quantidade_desconto > 2999) {
			var element = document.getElementById("item_desconto_07");
			element.classList.remove("desconto_ativo");
	   } else {
		   var element = document.getElementById("item_desconto_07");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 3000 || quantidade_desconto > 4999) {
			var element = document.getElementById("item_desconto_08");
			element.classList.remove("desconto_ativo");
	   } else {
		   var element = document.getElementById("item_desconto_08");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 5000 || quantidade_desconto > 19999) {
			var element = document.getElementById("item_desconto_09");
			element.classList.remove("desconto_ativo");
	   } else {
		   var element = document.getElementById("item_desconto_09");
			element.classList.add("desconto_ativo");  
	   }
	   
	   if (isNaN(quantidade_desconto) || quantidade_desconto < 20000 || quantidade_desconto > 100000) {
			var element = document.getElementById("item_desconto_10");
			element.classList.remove("desconto_ativo");
	   } else {
		   var element = document.getElementById("item_desconto_10");
			element.classList.add("desconto_ativo");
			
	   }
	   
	   
	   
  var greeting_quantidade_desconto_aplicado;
  //var quantidade_desconto = 16399;
  
  if (quantidade_desconto > 0 && quantidade_desconto < 99)  {
    var quantidade_desconto_aplicado_de = "0";
	var porcentagem_add = (100 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var remove_class_total_final_old = document.getElementById("total_final_old");
	remove_class_total_final_old.classList.remove("total_final_old");
	
	document.getElementById("total_final_desconto").style.display = "none";
  } 
  
	  if (quantidade_desconto > 99 && quantidade_desconto < 249)  {
    var quantidade_desconto_aplicado_de = "5%";
	var porcentagem_add = (95 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (95 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
	
  } 

	  if (quantidade_desconto > 249 && quantidade_desconto < 499)  {
	var quantidade_desconto_aplicado_de = "10%";
	var porcentagem_add = (90 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (90 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
  } 

	  if (quantidade_desconto > 499 && quantidade_desconto < 749)  {
    var quantidade_desconto_aplicado_de = "15%";
	var porcentagem_add = (85 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (85 * media_porcentagem_resultado_final) / 10000;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
  }  
  
  if (quantidade_desconto > 749 && quantidade_desconto < 999)  {
    var quantidade_desconto_aplicado_de = "20%";
	var porcentagem_add = (80 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (80 * media_porcentagem_resultado_final) / 10000;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
  }
  
 
	  if (quantidade_desconto > 999 && quantidade_desconto < 1499)  {
    var quantidade_desconto_aplicado_de = "25%";
	var porcentagem_add = (75 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (75 * media_porcentagem_resultado_final) / 10000;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
  } 

	  if (quantidade_desconto > 1499 && quantidade_desconto < 1999)  {
    var quantidade_desconto_aplicado_de = "30%";
	var porcentagem_add = (70 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (70 * media_porcentagem_resultado_final) / 10000;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
  } 

	  if (quantidade_desconto > 1999 && quantidade_desconto < 2999)  {
    var quantidade_desconto_aplicado_de = "35%";
	var porcentagem_add = (65 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (65 * media_porcentagem_resultado_final) / 10000;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;

	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";	
  } 

	  if (quantidade_desconto > 2999 && quantidade_desconto < 4999)  {
    var quantidade_desconto_aplicado_de = "40%";
	var porcentagem_add = (60 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (60 * media_porcentagem_resultado_final) / 10000;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
  } 

	  if (quantidade_desconto > 4999 && quantidade_desconto < 19999)  {
    var quantidade_desconto_aplicado_de = "45%";
	var porcentagem_add = (55 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (55 * media_porcentagem_resultado_final) / 10000;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
  } 

	 if (quantidade_desconto > 19999 && quantidade_desconto < 100000)  {
    var quantidade_desconto_aplicado_de = "50%";
	var porcentagem_add = (50 * media_porcentagem_resultado_final) / 100;
    var somar_total_desconto_add =  somar * porcentagem_add;
	greeting_quantidade_desconto_aplicado = somar_total_desconto_add;
	
	var porcentagem_add_unidade = (50 * media_porcentagem_resultado_final) / 10000;
    var somar_total_desconto_add_unidade =  somar * porcentagem_add_unidade;
	greeting_quantidade_desconto_aplicado_unidade = somar_total_desconto_add_unidade;
	
	var element = document.getElementById("total_final_old");
	element.classList.add("total_final_old");
	document.getElementById("total_final_desconto").style.display = "block";
 } 
  
  document.getElementById("quantidade_desconto_aplicado_de_id").innerHTML = quantidade_desconto_aplicado_de; 
  document.getElementById("quantidade_desconto_aplicado").innerHTML = (greeting_quantidade_desconto_aplicado).toFixed(2); 
  //document.getElementById("quantidade_desconto_aplicado_unidade").innerHTML = (greeting_quantidade_desconto_aplicado_unidade).toFixed(2); 
  
  
//////////////////////////////////////////////////// TABELA DE DESCONTO //////////////////////////////////////////////////////////////   
	
	
}

// add id no campo quantidade para fazer a soma total
document.getElementsByClassName("qty")[0].setAttribute("id", "ADD_ID_SOMAR");


document.getElementById("input_largura").addEventListener("click", myFunction_calcular_proporcao);
document.getElementById("input_altura").addEventListener("click", myFunction_calcular_proporcao);	

document.getElementById("input_largura").addEventListener("keypress", myFunction_calcular_proporcao);
document.getElementById("input_altura").addEventListener("keypress", myFunction_calcular_proporcao);
	
document.getElementById("input_largura").addEventListener("reset", myFunction_calcular_proporcao);
document.getElementById("input_altura").addEventListener("reset", myFunction_calcular_proporcao);	

document.getElementById("input_largura").addEventListener("input", myFunction_calcular_proporcao);
document.getElementById("input_altura").addEventListener("input", myFunction_calcular_proporcao);



// carregando a função
window.onload = myFunction_calcular_proporcao; 

</script>



<script>
// alex jogando campo obrigatorio no input largura
	//var input_largura_required = document.getElementById("input_largura");
	//var att = document.createAttribute("required");
	//input_largura_required.setAttributeNode(att);


// alex jogando acao no botao comprar
  setTimeout(function(){ 
	var anchorr = document.getElementsByClassName("single_add_to_cart_button")[0];
	var att = document.createAttribute("onclick");
	att.value = "myFunction_calcular_proporcao()";
	anchorr.setAttributeNode(att);
	}, 3000);
	
	
	// alex jogando acao no botao comprar

	var anchorrc = document.getElementById("tipo_material");
	var attc = document.createAttribute("onclick");
	attc.value = "myFunction_calcular_proporcao()";
	anchorrc.setAttributeNode(attc);

	
// alex cria placeholder no botao largura para orientar o cliente
	var anchorrx = document.getElementById("input_largura");
	var attx = document.createAttribute("placeholder");
	attx.value = "<?php echo $file_largura_padrao ?>";
	anchorrx.setAttributeNode(attx);
	
	var anchorrxx = document.getElementById("input_altura");
	var attxx = document.createAttribute("placeholder");
	attxx.value = "<?php echo $file_altura_padraoo ?>";
	anchorrxx.setAttributeNode(attxx);


// alex add class no id input_altura	
var element = document.getElementById("input_altura");
   element.classList.add("meutralizando_input_altura");	
	
</script>



<script>
// alex ocultando informacoes e campos, limpando layout
	document.getElementById("ywcnp_form_name_your_price").style.display = "none";
	document.getElementById("informacoes_cauculo").style.display = "none";	

</script>

<script>
	// so para garantir
	setTimeout(function(){
    	document.getElementsByClassName("calculando_proporcao")[0].click();
		setTimeout(myFunction_calcular_proporcao(), 5000);
       },5000);
	   
	setTimeout(function(){
    	document.getElementsByClassName("calculando_proporcao")[0].click();
       },10000);
	   
</script>

<?php }?>