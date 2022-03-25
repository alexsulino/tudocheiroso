<?php 
//global $post;
if( is_fancy_product($post->ID) ) { ?>

<style>

	/* The Modal (background) */
	.modal_alex_sulino_canvas {
	  display: none; /* Hidden by default */
	  position: fixed; /* Stay in place */
	  z-index: 1000; /* Sit on top */
	  padding-top: 50px; /* Location of the box */
	  left: 0;
	  top: 0;
	  width: 100%; /* Full width */
	  height: 100%; /* Full height */
	  overflow: auto; /* Enable scroll if needed */
	  background-color: rgb(0,0,0); /* Fallback color */
	  background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content_alex_sulino {
		background-color: #fefefe;
		margin: auto;
		padding: 35px;
		border: 1px solid #888;
		width: 96%;
		max-width: 900px;
	}

	/* The Close Button */
	.close_alex_sulino_canvas {
	  color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
		margin-top: -20px;
		margin-bottom: 15px;
	}

	.close_alex_sulino_canvas:hover,
	.close_alex_sulino_canvas:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	}
	.aplicar_textos {
		margin: 18px auto auto !important;
		padding: 10px 30px;
		font-size: 16px;
		border-radius: 3px;
		display: block;
			background: #2ea3f2 !important;
		color: #fff;
	}
	.bt_alex_modal_canvas {
		width: 100%;
		cursor: pointer;
		padding: 8px;
		text-align: center;
		margin:2px 0px 15px 0px;
		background: #ffffff;
		float: left;
		color:#000000;
		font-size: 14px;
		text-transform: uppercase;
		font-weight: bold;
		transition: 0.6s ease;
	}

	.bt_alex_modal_canvas:hover {
		background: #eee;
		transition: 0.6s ease;
	}


	div#canvas_content_alex{text-align:center;}

</style>

<!-- alex Gera canvas de uma div (id="alex_noia") -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/handystore/alex/js/html2canvas.js"></script>

<script>
	setTimeout(function(){ 
	// adiciona funcao direto na class  "alex_noia" (class="alex_noia") e cria o id alex_noia (id="alex_noia") //
	var anchor = document.getElementsByClassName("alex_noia")[0]; // posicao da class
	var att = document.createAttribute("id");
	att.value = "alex_noia";
	anchor.setAttributeNode(att);
	}, 3000);
</script>
        <!-- Script -->
        <script type='text/javascript'>
            function screenshot(){
                html2canvas(document.getElementById("alex_noia")).then(function(canvas) {
					var alex_existe_id_alex_canvas = document.getElementById("alex_canvas"); // alex se existe <canvas  id="alex_canvas"></canvas> ela sera removido 
						if (alex_existe_id_alex_canvas.parentNode) {
						  alex_existe_id_alex_canvas.parentNode.removeChild(alex_existe_id_alex_canvas);
						}
                    document.getElementById('canvas_content_alex').appendChild(canvas); // alex cria novo <canvas  id="alex_canvas"></canvas>
					canvas.setAttribute("id", "alex_canvas"); // alex cria id  <canvas>
                });
            }
</script>
<script>
	<!-- alex : criar botao de download para canvas -->
	var c=document.getElementById("alex_canvas");
	var ctx=c.getContext("2d");
	ctx.beginPath();
	ctx.arc(100,75,50,0,2*Math.PI);
	ctx.stroke();

	function download_image(){
	  var canvas = document.getElementById("alex_canvas");
	  image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
	  var link = document.createElement('a');
	  link.download = "my-image.png";
	  link.href = image;
	  link.click();
	}
</script>

<!-- Fim alex Gera canvas de uma div (id="alex_noia") -->


<!-- Trigger/Open The Modal -->

<div id="myBtn_alex" style="overflow:hidden;"> Compartilhe essa personalização </div>
<div class="bt_alex_modal_canvas" id='but_screenshot' onclick="screenshot(); document.getElementById('myBtn_alex').click();">Baixe essa imagem</div>
<!-- The Modal -->
<div id="myModalAlex" class="modal_alex_sulino_canvas">

  <!-- Modal content -->
  <div class="modal-content_alex_sulino">
    <span class="close_alex_sulino_canvas" id="close_alex_sulino_canvas">&times;</span>
	
			<div id="canvas_content_alex">
				
			</div>
			<canvas  id="alex_canvas"></canvas>

			
	
	<button class="aplicar_textos" onclick="download_image()" > Clique aqui para baixar </button>
  </div>
</div>

<script>
	// Get the modal
	var modal_alex_sulino_canvas = document.getElementById('myModalAlex');

	// Get the button that opens the modal
	var btn_alex_sulino_canvas = document.getElementById("myBtn_alex");


	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close_alex_sulino_canvas")[0];

	// When the user clicks the button, open the modal 
	btn_alex_sulino_canvas.onclick = function() {
	  modal_alex_sulino_canvas.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal_alex_sulino_canvas.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal_alex_sulino_canvas) {
		modal_alex_sulino_canvas.style.display = "none";
	  }
	}
</script>

<?php } ?>

